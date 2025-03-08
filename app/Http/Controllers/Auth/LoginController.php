<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Show the application's login form.
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Handle a login request to the application.
     */
    public function login(Request $request)
    {
        try {
            $this->validateLogin($request);

            if ($this->hasTooManyLoginAttempts($request)) {
                $this->fireLockoutEvent($request);
                return $this->sendLockoutResponse($request);
            }

            if ($this->attemptLogin($request)) {
                return $this->sendLoginResponse($request);
            }

            $this->incrementLoginAttempts($request);

            throw ValidationException::withMessages([
                'Email_address' => ['The provided credentials are incorrect.'],
            ]);

        } catch (ValidationException $e) {
            return back()
                ->withErrors($e->errors())
                ->withInput($request->except('password'))
                ->with('error', 'Login failed. Please check your credentials.');
        } catch (\Exception $e) {
            return back()
                ->withInput($request->except('password'))
                ->with('error', 'An error occurred during login. Please try again.');
        }
    }

    /**
     * Validate the user login request.
     */
    protected function validateLogin(Request $request)
    {
        $messages = [
            'Email_address.required' => 'Email address is required',
            'Email_address.email' => 'Please enter a valid email address',
            'password.required' => 'Password is required',
        ];

        $request->validate([
            'Email_address' => 'required|email',
            'password' => 'required',
        ], $messages);
    }

    /**
     * Get the login username to be used by the controller.
     */
    public function username()
    {
        return 'Email_address';
    }

    /**
     * Log the user out of the application.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')
            ->with('success', 'You have been successfully logged out.');
    }

    /**
     * Send the response after the user was authenticated.
     */
    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        return redirect()->intended($this->redirectPath())
            ->with('success', 'Welcome back! You have been successfully logged in.');
    }
}
