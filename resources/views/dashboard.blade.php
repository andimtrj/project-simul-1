@extends('layout.master')
@section('title')
  Home
@endsection

@extends('layout.navbar')

@section('content')
  <div class="div">
    @include('layout.under-navbar')


<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#790008" fill-opacity="1" d="M0,96L26.7,101.3C53.3,107,107,117,160,133.3C213.3,149,267,171,320,154.7C373.3,139,427,85,480,85.3C533.3,85,587,139,640,138.7C693.3,139,747,85,800,74.7C853.3,64,907,96,960,96C1013.3,96,1067,64,1120,48C1173.3,32,1227,32,1280,37.3C1333.3,43,1387,53,1413,58.7L1440,64L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
</svg>
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
  box-shadow: 4.694px 9.389px 9.295px -2.817px rgba(121, 0, 8, 0.35);
  background-color: #790008;
  display: flex;
  margin: 0 0 0 0; /* Updated margin to make it full-width */
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
