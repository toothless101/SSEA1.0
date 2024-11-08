@extends('layout.layout')
@section('title', 'SSEA | Register')
@section('content')

<link rel="stylesheet" href="{{ asset('css/register.css')}}">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/CSS/admin.css">
    <title>SSEA | Sign Up</title>
</head>
<body>
    <div class="container signup-container">
        <div class="left">
            <h1>Sign Up</h1>
            <div class="underline"></div>
            <div class="createmsg">
                <h2>Create an Admin user</h2>
            </div>
            <form action="#">
                <div class="form-group mb-4 position-relative">
                    <input type="text" id="fullname" required>
                    <label for="fullname">Full Name</label>
                    <i class="fas fa-user icon"></i>
                </div>
                
                <div class="form-group mb-4 position-relative">
                    <input type="text" id="username" required>
                    <label for="fullname">Username</label>
                    <i class="fas fa-user icon"></i>
                </div>

                <div class="form-group mb-4 position-relative">
                    <input type="text" id="password" required>
                    <label for="fullname">Password</label>
                    <i class="fas fa-lock icon"></i>
                </div>

              <!--  <button type="submit" class="btn btn-dark w-100">Sign Up</button> -->
            </form>
            <div class="signup_button">
                <button class="s-btn">
                    Sign Up
                </button>
            </div>

            <div class="login_button">
                Already have an account? 
                <a href="#">
                    Login
                </a>
            </div>
        </div>
        <div class="right">
                <h1>TAGUM CITY COLLEGE OF SCIENCE AND TECHNOLOGY <br> FOUNDATION, INC.</h1>
            <div class="school_logos">
                <div class="school_logo">
                    <img src="/img/418786725_1079231866656453_7752077010997336838_n (1).png" alt="tccstfi_logo">
                </div>
                <div class="ssc_logo">
                    <img src="/img/418786725_1079231866656453_7752077010997336838_n (1).png" alt="ssc_logo">
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
    </div>
</body>
</html>
@endsection