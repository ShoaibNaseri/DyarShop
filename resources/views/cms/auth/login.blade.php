@extends('cms.app')
@section('title')
Admin|login
@endsection
@section('content')
<div class="app app-auth-sign-in align-content-stretch d-flex flex-wrap justify-content-end">


    <div class="app-auth-background" style="background: url('cms/assets/images/backgrounds/sign-in.svg') not-repeate; background-position:center; background-size:60%">

    </div>


    <div class="app-auth-container">
        <div class="logo">
            <a href="index-2.html">DyarShop</a>
        </div>
        <p class="auth-description">Please sign-in to your account and continue to the dashboard.<br>Don't have an account? <a href="{{route('adminRegisterPage')}}">Create Account</a></p>
        <form action="{{route('adminLogin.submit')}}" method="post">
            {{method_field('post')}}
            @csrf
            <div class="auth-credentials m-b-xxl">
                <label for="signInEmail" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control m-b-md" id="signInEmail" aria-describedby="signInEmail" placeholder="example@neptune.com">

                <label for="signInPassword" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="signInPassword" aria-describedby="signInPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
            </div>

            <div class="auth-submit">
                <button class="btn btn-primary" type="submit">Sign In</button>
                <a href="#" class="auth-forgot-password float-end">Forgot password?</a>
            </div>
            <div class="divider"></div>
            <div class="auth-alts">
                <a href="#" class="auth-alts-google"></a>
                <a href="#" class="auth-alts-facebook"></a>
                <a href="#" class="auth-alts-twitter"></a>
            </div>

        </form>

    </div>


</div>
@endsection