@extends('layout.master')
@section('title')
  Dashboard
@endsection

@section('content')
  <div class="div">
    @include('layout.under-navbar')

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#790008" fill-opacity="1" d="M0,224L34.3,240C68.6,256,137,288,206,272C274.3,256,343,192,411,176C480,160,549,192,617,218.7C685.7,245,754,267,823,245.3C891.4,224,960,160,1029,149.3C1097.1,139,1166,181,1234,192C1302.9,203,1371,181,1406,170.7L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
    <div class="div-22">
      <div class="sub-title">Start Managing your SOP Documents</div>
      <a href ="{{ route('login') }}"><button type="submit" class="div-4 btn btn-danger btn-block mb-4">LOGIN</button></a>
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
      box-shadow: 4.694px 9.389px 9.295px -2.817px rgba(121, 0, 8, 0.35);
      background-color: #790008;
      display: flex;
      margin: 0 0 0 0; /* Updated margin to make it full-width */
      align-items: center;
      width: 100%;
      flex-direction: column;
      padding: 0 20px;
      position:sticky;
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
      font: 600 35px/113% Poppins, sans-serif;
      margin-top: 20px;
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
