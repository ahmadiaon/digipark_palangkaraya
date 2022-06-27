<?php

namespace App\Http\Controllers\Api\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;

class UserController extends Controller
{
    // Show User Profile By Id
    public function showProfile($id)
    {
        $user = User::where('uuid', '=', $id)->firstOrFail();
        $meta = [
            'message' => "Show user profile",
            'code'  => 200,
            'status'  => "success"
        ];
        $response = [
            'meta'  => $meta,
            'data'  => $user
        ];
        return response()->json($response, 200);
    }

    // Update User Profile By Id
    public function updateProfile(Request $request, $id)
    {
        $request->validate([
            'name'          => 'required',
            'phone_number'  => 'required',
            'email'         => 'required|email',
            // 'avatar'    => 'required',
        ]);

        try {
            $user = User::where('uuid', '=', $id)->firstOrFail();
            if ($request->file('avatar') == "") {
                $user->update([
                    'name'          => $request->name,
                    'phone_number'  => $request->phone_number,
                    'email'         => $request->email,
                    // 'photo_path'    => $request->avatar,
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
                    'name'          => $request->name,
                    'phone_number'  => $request->phone_number,
                    'email'         => $request->email,
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
    
}
