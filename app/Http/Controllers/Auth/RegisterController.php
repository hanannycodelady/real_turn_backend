<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
        return Validator::make($data, [
            'First_name' => ['required', 'min:2', 'max:255', 'alpha'],
            'Last_name' => ['required', 'min:2', 'max:255', 'alpha'],
            'Email_address' => ['required', 'email', 'max:255', 'unique:users,Email_address'],
            'Password' => ['required', 'min:8'],
            'Contact' => ['required', 'phone:AUTO', 'unique:users,Contact'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'First_name' => $data['First_name'],
            'Last_name' => $data['Last_name'],
            'Email_address' => $data['Email_address'],
            'password' => Hash::make($data['Password']),
            'Contact' => $data['Contact']
        ]);
    }
}
