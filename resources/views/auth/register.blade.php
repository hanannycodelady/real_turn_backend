@extends('layouts.auth_app')

@section('title')
    Register
@endsection

@section('content')
    <div class="card card-primary">
        <div class="card-header"><h4>Register</h4></div>
        <div class="card-body pt-1">
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="First_name">First Name:</label><span class="text-danger"></span>
                            <input id="First_name" type="text"
                                   class="form-control{{ $errors->has('First_name') ? ' is-invalid' : '' }}"
                                   name="First_name" value="{{ old('First_name') }}" required>
                            <div class="invalid-feedback">
                                {{ $errors->first('First_name') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Last_name">Last Name:</label><span class="text-danger"></span>
                            <input id="Last_name" type="text"
                                   class="form-control{{ $errors->has('Last_name') ? ' is-invalid' : '' }}"
                                   name="Last_name" value="{{ old('Last_name') }}" required>
                            <div class="invalid-feedback">
                                {{ $errors->first('Last_name') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Email_address">Email address :</label><span class="text-danger"></span>
                            <input id="Email_address" type="email"
                                   class="form-control{{ $errors->has('Email_address') ? ' is-invalid' : '' }}"
                                   name="Email_address" value="{{ old('Email_address') }}" required>
                            <div class="invalid-feedback">
                                {{ $errors->first('Email_address') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Contact">Contact:</label><span class="text-danger"></span>
                            <input id="Contact" type="tel"
                                   class="form-control{{ $errors->has('Contact') ? ' is-invalid' : '' }}"
                                   name="Contact" value="{{ old('Contact') }}" required>
                            <div class="invalid-feedback">
                                {{ $errors->first('Contact') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Password">Password:</label><span class="text-danger"></span>
                            <input id="Password" type="password"
                                   class="form-control{{ $errors->has('Password') ? ' is-invalid': '' }}"
                                   name="Password" required>
                            <div class="invalid-feedback">
                                {{ $errors->first('Password') }}
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12 mt-4">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="mt-5 text-muted text-center">
        Don't have account? <a href="{{ route('login') }}">Sign In</a>
    </div>
@endsection
