<?php

namespace App\Http\Controllers\Api\Auth;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;


class AuthController extends Controller
{

    //* Role User
    public function registerUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'         => 'required',
            'email'        => 'required|email|unique:users',
            'phone_number' => 'required|unique:users',
            'password'     => 'required',
        ]);
        if ($validator->fails()) {
            $errorss = $validator->errors();
            $meta = [
                'message' => "Register Failed",
                'code'  => 201,
                'status'  => "errors"
            ];
            $response = [
                'meta'  => $meta,
                'errors'  => $errorss,
               
            ];
            return response()->json($response, 201);
        }
        DB::beginTransaction();
        try {
            $uuid = Str::uuid()->toString();
            $user = User::create([
                'name'              => $request->name,
                'uuid'              => $uuid,
                'email'             => $request->email,
                'password'          => Hash::make($request->password),
                'phone_number'      => $request->phone_number,
            ]);

            $token = JWTAuth::fromUser($user);

            $meta = [
                'message' => "Register has been success",
                'code'  => 201,
                'status'  => "success"
            ];

            $data = [
                'user'     => $user,
            ];

            $response = [
                'meta'  => $meta,
                'data'  => $data,
                'role'  => 'user',
                'token' => $token
            ];
            DB::commit();
            return response()->json($response, 201);
        } catch (QueryException $e) {
            DB::rollback();
            return response()->json([
                'message' => 'Failed' . $e->errorInfo
            ]);
        }
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'phone_number'      => 'required',
            // 'email'             => 'required',
            'password'          => 'required',
        ]);
        $admin = User::join('financial_services', 'users.role', '=', 'financial_services.uuid')->where('phone_number', $request->phone_number)->get(['users.*', 'users.role as financial_service_uuid', 'financial_services.name as admin_of'])->first();
        $user = User::where('phone_number', $request->phone_number)->first();
        if (!$admin || !Hash::check($request->password, $admin->password)) {
           if(!$user || !Hash::check($request->password, $user->password)) {
                return response()->json([
                    'message'   => "Credentials doesn't match",
                    'code'      => 401,
                    'status'    => "error"
                ], 401);
            }else{
                $role = "user";
                $user->role = "user";
                // $admins = Admin::where('phone', $request->phone_number)->first();
                $token = JWTAuth::fromUser($user);
                $data = [
                    'user'     => $user,
                ];
            }
        }else{
            $token = JWTAuth::fromUser($admin);
            $role = "admin";
            $data = [
                'user'     => $admin,
            ];
        }

        

        $meta = [
            'message' => "Login user success",
            'code'  => 200,
            'status'  => "success"
        ];

       

        $response = [
            'meta'  => $meta,
            'data'  => $data,
            'role'  => $role,
            'token' => $token,
        ];
        return response()->json($response, 200);
    }

    public function logoutUser()
    {
        auth()->logout();
        return response()->json([
            'message'   => "Logout success",
            'code'      => 200,
            'status'    => "success"
        ], 200);
    }

    //* Role Admin
    public function registerAdmin(Request $request)
    {

        $request->validate([
            // 'name'         => 'required',
            // 'email'        => 'required',
            // 'password'     => 'required',
        ]);

        DB::beginTransaction();
        try {
            $uuid = Str::uuid()->toString();
            $admin = Admin::create([
                'uuid'              => $uuid,
                'name'              => $request->name,
                'email'             => $request->email,
                'password'          => Hash::make($request->password),
                'phone_number'      => $request->phone_number,
            ]);

            $token = JWTAuth::fromUser($admin);

            $meta = [
                'message' => "Register has been success",
                'code'  => 201,
                'status'  => "success"
            ];

            $data = [
                'admin'     => $admin,
            ];

            $response = [
                'meta'  => $meta,
                'data'  => $data,
                'role'  => 'admin',
                'token' => $token
            ];
            DB::commit();
            return response()->json($response, 201);
        } catch (QueryException $e) {
            DB::rollback();
            return response()->json([
                'message' => 'Failed' . $e->errorInfo
            ]);
        }
    }

    public function checkEmail(Request $request)
    {
        $dataAdmin = User::where('email', $request->data)->first();
        $dataAdminUser = User::where('phone_number', $request->data)->first();
        $currentDateTime = Carbon::now();
        $newDateTime = Carbon::now()->addMinutes(5);
 
        // return $request->email;
        if($dataAdmin){
            $otp = random_int(1000, 9999);
            $data["email"] = $dataAdmin->email ;
            $data["title"] = "From Digital Creative Hub";
            $data["body"] = "Reset Password ".$otp;
            $data["otp"] = $otp;
            $data["content"] = env('APP_URL').'reset/'.$dataAdmin->uuid;


            Mail::send('contenMailUser', $data, function($message)use($data) {
                $message->to($data["email"], $data["email"])
                        ->subject($data["title"]);
            });
            
            $meta = [
                'message' => "OTP sent success",
                'code'  => 200,
                'status'  => "success"
            ]; 

            $response = [
                'meta'  => $meta,
                'email'   => $dataAdmin->email,
                'data'  => $dataAdmin,
                'OTP'   => $otp,
                'expired' => $newDateTime
            ];
            return response()->json($response, 200);
        }else if($dataAdminUser){
            $otp = random_int(1000, 9999);
            $data["email"] = $dataAdminUser->email ;
            $data["title"] = "From Digital Creative Hub";
            $data["body"] = "Reset Password ".$otp;
            $data["otp"] = $otp;
            $data["content"] = env('APP_URL').'reset/'.$dataAdminUser->uuid;


            Mail::send('contenMailUser', $data, function($message)use($data) {
                $message->to($data["email"], $data["email"])
                        ->subject($data["title"]);
            });
            
            $meta = [
                'message' => "OTP sent success",
                'code'  => 200,
                'status'  => "success"
            ]; 

            $response = [
                'meta'  => $meta,
                'email'   => $dataAdminUser->email,
                'data'  => $dataAdminUser,
                'OTP'   => $otp,
                'expired' => $newDateTime
            ];
            return response()->json($response, 200);
        }else{
            $meta = [
                'message' => "Email or Phone number doesn't match",
                'code'  => 401,
                'status'  => "error"
            ]; 
            return response()->json([
                'meta'   => $meta
            ], 401);
        }
        
    }
    public function updatePassword(Request $request, $id)
    {
       

        $validator = Validator::make($request->all(), [
            'password'      => 'required|min:6',
        ]);
        if ($validator->fails()) {
            $errorss = $validator->errors();
            $meta = [
                'message' => "Update Failed",
                'code'  => 201,
                'status'  => "errors"
            ];
            $response = [
                'meta'  => $meta,
                'errors'  => $errorss,
               
            ];
            return response()->json($response, 201);
        }
        
        $user = User::where('phone_number', '=', $id)->first();
        $user_email = User::where('email', '=', $id)->first();
        
        $validatedData["password"] = Hash::make($request->password);

        if($user_email){
            $user = $user_email;
        }
       


        DB::beginTransaction();
        try {
            if($user){
                $data = User::where('uuid', $user->uuid)->update($validatedData);
            }

            $meta = [
                'message' => "Update has been success",
                'code'  => 201,
                'status'  => "success"
            ];

            $data = [
                'user'     => $user,
            ];

            $response = [
                'meta'  => $meta,
                'data'  => $data,
                'role'  => 'user',
            ];
            DB::commit();
            return response()->json($response, 201);
        } catch (QueryException $e) {
            DB::rollback();
            return response()->json([
                'message' => 'Failed' . $e->errorInfo
            ]);
        }






        try {
            $user = User::where('uuid', '=', $id)->firstOrFail();
            if ($request->file('avatar') == "") {
                $user->update([
                    'password'          => $request->password,
                ]);
            } else {
                if ($avatar = $request->file('avatar')) {
                    $uploadAvatar = 'images/profile/';
                    $profileImage = date('YmdHis') . "." . $avatar->getClientOriginalExtension();
                    $avatar->move($uploadAvatar, $profileImage);
                    $request->avatar = '/' . $uploadAvatar . $profileImage;
                } else {
                    return response()->json(422);
                }
                $user->update([
                    'password'          => $request->password,
                    'photo_path'    => $request->avatar,
                ]);
            }

            $meta = [
                'message'   => "User has been updated",
                'code'      => 200,
                'status'    => "success"
            ];

            $data = [
                'user' => $user,
            ];

            $response = [
                'meta'  => $meta,
                'data'  => $data,
            ];
            return response()->json($response, 201);
        } catch (QueryException $e) {
            return response()->json([
                'message' => 'Failed' . $e->errorInfo
            ]);
        }
    }

    public function loginAdmin(Request $request)
    {
        $request->validate([
            'email'             => 'required',
            'password'          => 'required',
        ]);

        $admin = Admin::where('email', $request->email)->first();
        if (!$admin || !Hash::check($request->password, $admin->password)) {
            return response()->json([
                'message'   => "Credentials doesn't match",
                'code'      => 401,
                'status'    => "error"
            ], 401);
        }

        $token = JWTAuth::fromUser($admin);

        $meta = [
            'message' => "Login admin success",
            'code'  => 200,
            'status'  => "success"
        ];

        $data = [
            'admin'     => $admin,
        ];

        $response = [
            'meta'  => $meta,
            'data'  => $data,
            'role'  => 'admin',
            'token' => $token
        ];
        return response()->json($response, 200);
    }

    public function logoutAdmin()
    {
        auth()->logout();
        return response()->json([
            'message'   => "Logout success",
            'code'      => 200,
            'status'    => "success"
        ], 200);
    }
}
