@extends('app.layout')
@section('title','Sign up')
@section('content')

    <!-- Register start -->
    <div class="register-area pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <div class="login">
                        <div class="login-form-container">
                            <div class="login-text">
                                <h2>sign up</h2>
                                <span>Please login using account detail bellow.</span>
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
                                <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('post')
                                        <label for="name">Enter your name </label>
                                        <input type="text" name="full_name">

                                        <label for="email">Enter your email</label>
                                        <input type="email" name="email" >

                                        <label for="city">enter your city</label>
                                        <input type="text" name="city">

                                        <label for="phone">Enter your phone</label>
                                        <input type="text" name="phone" >

                                        <label for="password">Choose your Password</label>
                                        <input type="password" name="password" >

                                        <label for="course_id">Choose your course</label>
                                        <select name="course_id" id="course_id" style="border: 1px solid darkred">
                                            <option>choose your course</option>
                                        @foreach($courses as $c)
                                            <option value="{{$c->id}}">{{$c->course_name}}</option>
                                        @endforeach
                                        </select>
                                    <div class="button-box">
                                        <input type="submit" class="default-btn">
                                    </div>
                                </div>
                           </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register end -->
@endsection
