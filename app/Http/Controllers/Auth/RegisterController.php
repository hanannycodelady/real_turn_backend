<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        $messages = [
            'First_name.required' => 'First name is required',
            'First_name.min' => 'First name must be at least 2 characters',
            'First_name.regex' => 'First name can only contain letters, spaces, or hyphens',
            'Last_name.required' => 'Last name is required',
            'Last_name.min' => 'Last name must be at least 2 characters',
            'Last_name.regex' => 'Last name can only contain letters, spaces, or hyphens',
            'Email_address.required' => 'Email address is required',
            'Email_address.email' => 'Please enter a valid email address (example@domain.com)',
            'Email_address.unique' => 'This email is already registered. Please use a different email or login',
            'Password.required' => 'Password is required',
            'Password.min' => 'Password must be at least 6 characters',
            'Contact.required' => 'Contact number is required',
            'Contact.unique' => 'This contact number is already registered. Please use a different number',
        ];

        return Validator::make($data, [
            'First_name' => ['required', 'min:2', 'max:255', 'regex:/^[\pL\s\-]+$/u'],
            'Last_name' => ['required', 'min:2', 'max:255', 'regex:/^[\pL\s\-]+$/u'],
            'Email_address' => ['required', 'email', 'max:255', 'unique:users,Email_address'],
            'Password' => ['required', 'min:6'],
            'Contact' => ['required', 'unique:users,Contact'],
        ], $messages);
    }

    protected function create(array $data)
    {
        return User::create([
            'First_name' => $data['First_name'],
            'Last_name' => $data['Last_name'],
            'Email_address' => $data['Email_address'],
            'password' => bcrypt($data['Password']),
            'Contact' => $this->formatPhoneNumber($data['Contact']),
        ]);
    }

    public function register(Request $request)
    {
        try {
            $validator = $this->validator($request->all());

            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput()->with('error', 'Please fix the following errors:');
            }

            $user = $this->create($request->all());

            event(new Registered($user));

            Auth::login($user);

            return redirect()->route('home')->with('success', 'Registration successful! Welcome to Real Turn.');
        } catch (\Exception $e) {
            \Log::error('Registration error: ' . $e->getMessage() . ' ' . $e->getTraceAsString());
            return back()->withInput()->with('error', 'An error occurred during registration. Please try again.');
        }
    }

    protected function formatPhoneNumber($phone)
    {
        $phone = preg_replace('/[^0-9+]/', '', $phone);

        if (substr($phone, 0, 2) === '00') {
            $phone = '+' . substr($phone, 2);
        } elseif (substr($phone, 0, 1) === '0') {
            $phone = '+254' . substr($phone, 1);
        } elseif (substr($phone, 0, 1) !== '+') {
            $phone = '+' . $phone;
        }

        return $phone;
    }

    public function showRegistrationForm()
    {
        return view('auth.register')->with([
            'passwordRequirements' => ['Minimum 6 characters'],
            'contactFormat' => 'Valid formats:
                - Local number (e.g., 0712345678)
                - International with + (e.g., +254712345678, +1234567890)
                - International with 00 (e.g., 00254712345678)
                - Direct numbers (e.g., 712345678)
                Length: 7-15 digits',
        ]);
    }
}
