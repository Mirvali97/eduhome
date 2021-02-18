@extends('app.layout')
@section('title','Login')
@section('content')
    <!-- Login start -->
    <div class="login-area pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <div class="login">
                        <div class="login-form-container">
                            <div class="login-text">
                                <h2>login</h2>
                                @if(Session::has('Success'))
                                    <p class="alert alert-success">{{ Session::get('Success') }}</p>
                                @endif
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                            <div class="login-form">
                                <form action="{{ route('login_process') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email">

                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password">

                                    <div class="button-box">
                                        <div class="login-toggle-btn">
                                            <a href="#">Forgot Password?</a>
                                        </div>
                                    <div class="button-box">
                                       <button type="submit" class="default-btn">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login end -->
@endsection
