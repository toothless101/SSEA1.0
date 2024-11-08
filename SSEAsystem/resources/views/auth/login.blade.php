@extends('layout.layout')
@section('title', 'SSEA | Log in')
@section('content')

<link rel="stylesheet" href="{{ asset('css/log-in.css')}}">
<div class="container">
    <div class="left">
     <h1>TAGUM CITY COLLEGE OF SCIENCE AND TECHNOLOGY <br> FOUNDATION, INC.</h1>
 <div class="school_logos">
     <div class="school_logo">
        <img src="{{ asset('img/418786725_1079231866656453_7752077010997336838_n (1).png') }}" alt="tccstfi_logo">
    </div>
     <div class="ssc_logo">
        <img src="{{ asset('img/418786725_1079231866656453_7752077010997336838_n (1).png') }}" alt="ssc_logo">
    </div>
 </div>
 <!--<div class="welcomemsg">
     <h1>WELCOME</h1>
     <p class="welcomemsg_1">
         Create an account using your <br>
         personal details to access all the<br>
         system features
     </p>
 </div>-->
</div>
<div class="right">
 <h1>Login</h1>
 <div class="underline"></div>
 <div class="createmsg">
     <h2>Login as Admin user</h2>
 </div>
 <form action="#">
     <div class="form-group mb-4 position-relative">
         <input type="text" id="username" required>
         <label for="fullname">Username</label>
         <i class="fas fa-user icon"></i>
     </div>

     <div class="form-group mb-4 position-relative">
         <input type="password" id="password" required>
         <label for="password">Password</label>
         <i class="fas fa-lock icon"></i>
     </div>

     <div class="forgot_password" id="forgot_pas">
         <a href="">Forgot Password?</a>
     </div>

   <!--  <button type="submit" class="btn btn-dark w-100">Sign Up</button> -->
 </form>
 <div class="log_btn">
     <button class="login_btn" id="login_btn">
         Login
     </button>
 </div>

 <div class="signup_btn">
    Don't have an account? 
     <a href="#">
         Sign Up
     </a>
 </div>
</div>

</div>
@endsection