@extends('layout.master')
@section('title')
  Home
@endsection

@extends('layout.navbar')

@section('content')
  <div class="div">
    @include('layout.under-navbar')

    <div class="div-22">
      <div class="sub-title">Start Managing your SOP Documents</div>
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
      box-shadow: 4.694px 9.389px 9.295px -2.817px rgba(121, 0, 8, 0.35);
      background-color: #790008;
      display: flex;
      margin-top: 69px;
      width: 100%;
      max-width: 1239px;
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
  </style>
@endsection
