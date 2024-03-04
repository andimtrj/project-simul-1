@extends('layout.master')

@section('title')
    Login
@endsection

@section('content')
<div class="container-fluid d-flex justify-content-center align-items-center vh-100">
    <div class="box text-center">
      <img class="mx-auto" src="assets/Logo.png" alt="cimbLogo" style="height: 11rem; width: auto;">
      <div class="poppins-semibold login-title text-danger h1 mb-5 display-3" style="font-weight: 500;">Log In</div>
  
      <input type="username" class="div-2 form-control mb-4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
      <input type="password" class="div-2 form-control mb-4" autocomplete="current-password" id="exampleInputPassword1" placeholder="Password">
  
      <button type="submit" class="div-4 btn btn-danger btn-block mb-4">LOGIN</button>
      <button type="submit" class="div-5 btn btn-dark btn-block">REGISTER</button>
    </div>
</div>
  

<style>
    .poppins-semibold {
        font-family: "Poppins", sans-serif;
        font-weight: 600;
        font-style: normal;
    }

    input::placeholder{
        font-size: x-large;
    }

    .box {
      justify-content: center;
      align-items: center;
      background-color: #fff;
      display: flex;
      flex-direction: column;
      font-size: 25px;
      color: rgba(0, 0, 0, 0.5);
      font-weight: 700;
      white-space: nowrap;
      padding: 50px 80px;
    }
    @media (max-width: 991px) {
      .box {
        white-space: initial;
        padding: 0 20px;
      }
    }
    .div-2 {
      font-family: Rubik, sans-serif;
      align-items: start;
      border-radius: 15.625px;
      border: 2.344px solid #afb1b6;
      box-shadow: 0px 0px 7.813px 0px rgba(8, 217, 214, 0.25);
      background-color: #fff;
      width: 500px;
      max-width: 100%;
      justify-content: center;
      font-weight: 400;
      line-height: 137.5%;
      padding: 26px 60px 26px 28px;
    }
    @media (max-width: 991px) {
      .div-2 {
        white-space: initial;
        margin-top: 40px;
        padding: 0 20px;
      }
    }
    .div-4 {
      justify-content: center;
      align-items: center;
      border-radius: 14.063px;
      background-color: #9c0404;
      width: 500px;
      max-width: 100%;
      margin-top: 30px;
      color: var(--White, #fff);
      letter-spacing: -0.56px;
      padding: 23px 60px;
      font: 28px Poppins, sans-serif;
    }
    @media (max-width: 991px) {
      .div-4 {
        white-space: initial;
        padding: 0 20px;
      }
    }
    .div-5 {
      justify-content: center;
      align-items: center;
      border-radius: 14.063px;
      background-color: #505050;
      width: 500px;
      max-width: 100%;
      color: var(--White, #fff);
      letter-spacing: -0.56px;
      padding: 23px 60px;
      font: 28px Poppins, sans-serif;
    }
    @media (max-width: 991px) {
      .div-5 {
        white-space: initial;
        padding: 0 20px;
      }
    }
</style>
    
    
@endsection