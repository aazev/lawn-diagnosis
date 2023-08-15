<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class ApiTokenController extends Controller
{
    public function create(Request $request): string
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'device_name' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return $user->createToken($request->device_name)->plainTextToken;
    }

    public function deleteAll(Request $request): string
    {
        // We're assuming user is authenticated here
        $request->user()->tokens->each(function ($token) {
            $token->delete();
        });

        return response()->json([
            'message' => 'Tokens deleted'
        ], 200);
    }

    public function deleteToken(Int $tokenId, Request $request): JsonResponse
    {
        // We're assuming user is authenticated here
        $token = $request->user()->tokens->find($tokenId);

        if (!$token) {
            return response()->json([
                'message' => 'Token not found'
            ], 404);
        }
        $token->delete();

        return response()->json([
            'message' => 'Token deleted'
        ], 200);
    }
}
