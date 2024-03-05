@extends('layout.master')
@section('title')
  Home
@endsection

@section('content')
  <div class="div">
    @include('layout.under-navbar')

    <div class="div-22">
      <div class="sub-title">Start Managing your SOP Documents</div>
      <button type="submit" class="div-4 btn btn-danger btn-block mb-4">LOGIN</button>
    </div>
  </div>

  <script>
    document.getElementById("submitButton").addEventListener("click", function(event) {
      event.preventDefault(); // Prevent the default behavior of the link
      document.getElementById("myForm").submit(); // Submit the form
    });
  </script>

  <style>
    .div {
      background-color: #fff;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .div-22 {
      border-radius: 23.471px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
      box-shadow: 4.694px 9.389px 9.295px -2.817px rgba(121, 0, 8, 0.35);
      background-color: #790008;
      display: flex;
      margin: 69px 0 0 0;
      /* Updated margin to make it full-width */
      align-items: center;
      width: 100%;
      flex-direction: column;
      padding: 50px 20px;
    }

    @media (max-width: 991px) {
      .div-22 {
        max-width: 100%;
        margin-top: 40px;
      }
    }

    .sub-title {
      color: #fff;
      text-align: center;
      align-self: center;
      margin-top: 6px;
      font: 600 35px/113% Poppins, sans-serif;
    }

    @media (max-width: 991px) {
      .sub-title {
        max-width: 100%;
      }
    }

    .div-4 {
      justify-content: center;
      align-items: center;
      border-radius: 14.063px;
      background-color: #9c0404;
      width: 500px;
      max-width: 100%;
      margin-top: 60px;
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
  </style>
@endsection
