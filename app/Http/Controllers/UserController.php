<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Laravolt\Avatar\Facade as Avatar;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class UserController extends Controller
{
    public function register(Request $request): JsonResponse
    {
        // validate the request
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|confirmed',
        ]);

        // create a new user
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password, // password is hashed in the User model
        ]);
        $user->save();

        // return a JSON response
        return response()->json([
            'message' => 'Successfully created user!',
            'user' => $user,
        ], 201);
    }


    public function avatar(Request $request): BinaryFileResponse
    {
        // return a 404 error if user is not authenticated
        if (!$request->user()) {
            abort(404);
        }

        // return the contents of the user's avatar stored in our avatar's storage folder or an automatically generated one if the user doesn't have an avatar
        if ($request->user()->avatar) {
            return response()->file(Storage::disk('avatars')->path($request->user()->avatar));
        } else {
            $avatar = Avatar::create($request->user()->name)->toBase64();
            [, $base64] = explode(';', $avatar);
            [, $base64] = explode(',', $base64);

            $tempFile = tempnam(sys_get_temp_dir(), 'avatar');
            file_put_contents($tempFile, base64_decode($base64));

            return new BinaryFileResponse($tempFile, 200, [
                'Content-Type' => 'image/png',
            ]);
        }
    }
}
