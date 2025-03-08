<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ApiLoginController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Email_address' => ['required', 'email'],
            'Password' => ['required', 'string'],
        ], [
            'Email_address.required' => 'Email address is required',
            'Email_address.email' => 'Invalid email format',
            'Password.required' => 'Password is required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        $credentials = [
            'Email_address' => $request->Email_address,
            'password' => $request->Password,
        ];

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('auth_token')->plainTextToken; // Add token

            return response()->json([
                'success' => true,
                'message' => 'Login successful',
                'user' => $user,
                'token' => $token,
                'next_step' => '/api/user/dashboard', // For user management
            ], 200);
        }

        return response()->json([
            'success' => false,
            'message' => 'Invalid credentials',
            'errors' => ['Email_address' => ['The provided credentials are incorrect']],
        ], 422);
    }
}
