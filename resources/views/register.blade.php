@extends('layout.master')

@section('title')
  Login
@endsection

@section('content')
  <div class="p-5">
    <form action="{{ route('registerProcess') }}" method="POST">
      @csrf
      <div class="container-fluid d-flex justify-content-center align-items-center vh-100">
        <div class ="box text-center">
          <img class="mx-auto" src="assets/Logo.png" alt="cimbLogo" style="height: 9rem; width: auto;">
          <div class="div-10">SOP Document Management System</div>
          <div class="poppins-semibold login-title text-danger h1 mb-5 display-3" style="font-weight: 500;  margin-top: 35px">Register</div>

          @error('name')
            <div class="poppins-reguler error-message" role="alert">
              {{ $message }}
            </div>
          @enderror
          <input name ="name" type="text" class="div-2 form-control mb-4" placeholder="Name" id="name"
            aria-describedby="emailHelp" value="{{ old('name') }}">

          @error('email')
            <div class="poppins-reguler error-message" role="alert">
              {{ $message }}
            </div>
          @enderror
          <input name ="email" type="email" class="div-2 form-control mb-4" placeholder="Email" id="exampleInputEmail1"
            aria-describedby="emailHelp">

          @error('password')
            <div class="poppins-reguler error-message" role="alert">
              {{ $message }}
            </div>
          @enderror
          <input name ="password" type="password" class="div-2 form-control mb-4" placeholder="Password"
            id="exampleInputPassword1">

          @error('confirmation_password')
            <div class="poppins-reguler error-message" role="alert">
              {{ $message }}
            </div>
          @enderror
          <input name ="confirmation_password" type="password" class="div-2 form-control mb-4"
            placeholder="Confirm Password" id="exampleInputPassword2">

          <button type="submit" class="div-4 btn btn-danger btn-block mb-4">REGISTER</button>
    </form>
    <a href="{{ route('login') }}" class="poppins-reguler"
   style="font-size: larger; color: blue; text-decoration: none;"
   onmouseover="this.style.color='#9c0404'"
   onmouseout="this.style.color='blue'">
   Already have an account?
</a>
  </div>
  </div>
  </div>

  <style>
    .div-10 {
      color: #790008;
      font: 600 35px/113% Poppins, sans-serif;
    }
    @media (max-width: 991px) {
      .div-10 {
        max-width: 100%;
        font-size: 40px;
      }
    }
    .error-message {
      vertical-align: left;
      color: red;
    }

    .poppins-semibold {
      font-family: "Poppins", sans-serif;
      font-weight: 600;
      font-style: normal;
      font-size: 55px;
    }

    .poppins-reguler {
      font-family: "Poppins", sans-serif;
      font-weight: 300;
      font-style: normal;
    }

    input::placeholder {
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
