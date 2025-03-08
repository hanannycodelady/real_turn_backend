<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiRegisterController extends Controller
{
    public function register(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        try {
            $user = $this->create($request->all());
            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'success' => true,
                'message' => 'Registration successful',
                'user' => $user,
                'token' => $token,
                'next_step' => '/api/user/dashboard',
            ], 201);
        } catch (\Exception $e) {
            \Log::error('API Registration error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'An error occurred during registration',
            ], 500);
        }
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'First_name' => ['required', 'string', 'min:2', 'max:255', 'regex:/^[\pL\s\-]+$/u'],
            'Last_name' => ['required', 'string', 'min:2', 'max:255', 'regex:/^[\pL\s\-]+$/u'],
            'Email_address' => ['required', 'email', 'max:255', 'unique:users,Email_address'],
            'Password' => ['required', 'string', 'min:6'],
            'Contact' => ['required', 'string', 'max:15', 'unique:users,Contact'],
        ], [
            'First_name.required' => 'First name is required',
            'Last_name.required' => 'Last name is required',
            'Email_address.required' => 'Email address is required',
            'Email_address.email' => 'Invalid email format',
            'Email_address.unique' => 'This email is already registered',
            'Password.required' => 'Password is required',
            'Password.min' => 'Password must be at least 6 characters',
            'Contact.required' => 'Contact number is required',
            'Contact.unique' => 'This contact number is already registered',
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'First_name' => $data['First_name'],
            'Last_name' => $data['Last_name'],
            'Email_address' => $data['Email_address'],
            'password' => $data['Password'], // Raw password, let model hash
            'Contact' => $this->formatPhoneNumber($data['Contact']),
        ]);
    }

    protected function formatPhoneNumber($phone)
    {
        $phone = preg_replace('/[^0-9+]/', '', $phone);
        if (substr($phone, 0, 2) === '00') {
            return '+' . substr($phone, 2);
        } elseif (substr($phone, 0, 1) === '0') {
            return '+254' . substr($phone, 1);
        } elseif (substr($phone, 0, 1) !== '+') {
            return '+' . $phone;
        }
        return $phone;
    }
}
