@extends('layout.master')
@section('title')
    Home
@endsection

@section('content')


<nav class="navbar navbar-expand-lg" style="background-color: #790008; margin-bottom: 10px;">
    <div class="container">
        <div class="navbar-brand mx-auto">
            <a href="#" style="font-size: xx-large; font-weight: bold; color: white;">Home</a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="assets/Profile2.png" alt="Prof" class="rounded-circle" style="width: auto; height: 80px; object-fit: cover;">
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" style="font-size: 25px" href="Super.html">Profile</a></li>
                        <li><a class="dropdown-item" style="font-size: 25px" href="{{ route('logout') }}">Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>




<div class="div">
    <img class="mx-auto" src="assets/Logo.png" alt="cimbLogo" style="height: 12rem; width: auto;">
    <div class="div-10">SOP Document Management System</div>
    <div class="div-11">
      <div class="div-12">
        <div class="column">
          <div class="div-13">
            <div class="div-14">
              <img
                loading="lazy"
                srcset="assets/Octo1.png"
                class="img-3"
              />
              <div class="div-15">
                <span style="font-weight: 700">.pdf</span>
                Files
              </div>
            </div>
          </div>
        </div>
        <div class="column-2">
          <div class="div-16">
            <div class="div-17">
              <img
                loading="lazy"
                srcset="assets/Octo2.png"
                class="img-4"
              />
              <div class="div-18">max. 3mb</div>
            </div>
          </div>
        </div>
        <div class="column-3">
          <div class="div-19">
            <div class="div-20">
              <img
                loading="lazy"
                srcset="assets/Octo3.png"
                class="img-5"
              />
              <div class="div-21">
                Upload
                <br />
                Update
                <br />
                Version Track
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="div-22">
      <div class="div-23">Start Managing your SOP Documents</div>



    <div class="div-24">
    <form class="div-24" role="search">
      <input class="form-control me-2" style="height: 50px"  type="search" placeholder="Search" aria-label="Search">
    </form>
    <table class="table table-hover transparent-table text-center">
      <thead class="table table-danger">
           <tr>
              <th scope="col">Doc. Title</th>
              <th scope="col">Description</th>
              <th scope="col">Timestamp</th>
              <th scope="col">Action</th>
           </tr>
      </thead>
      <tbody>
        <?php foreach ($docs as $doc): ?>
          <tr class="">
              <td>{{$doc->title}}</td>
              <td>{{$doc->description}}</td>
              <td>{{$doc->created_at}}</td>
              <td>
                <a href="{{ route('versionpage', $doc->file_id) }}"><img src="assets/View.png" alt="Logo" style="width: auto; height: 20px; object-fit: cover;"></a>
                <a href='{{route('updatepage', $doc->file_id)}}'>update</a>
                <form action="{{route('delete', $doc->file_id)}}" method="POST" id="myForm">
                  @csrf
                  @method('delete')
                  <a href="#"><img src="assets/Delete.png" alt="Logo" style="width: auto; height: 20px; object-fit: cover;" id="submitButton"></a>
                </form>
                
              </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
  </table>
        <a href ="{{ route('uploadpage') }}" class="img-8"><img
          loading="lazy"
          src="/assets/Button.png" style="height:90px; width:auto;"
        /></a>
      </div>
    </div>
  </div>

  <script>
  document.getElementById("submitButton").addEventListener("click", function(event) {
    event.preventDefault(); // Prevent the default behavior of the link
    document.getElementById("myForm").submit(); // Submit the form
  });
</script>

  <style>
    .transparent-table {
      width: 100%;
      border-collapse: collapse;
      background-color: transparent;
      
    }

    .transparent-table td {
      color: White;
      padding: 10px;
      background-color: transparent;
      border-bottom: 1px solid #ffff;
      border-collapse: separate;
      border: none;
      border-bottom: 2px solid #ffff;
    }

    .transparent-table th {
      padding: 10px;
      border-bottom: 1px solid #ffff;
      border-collapse: separate;
      border: none;
      background-color: #9C0404;
      color: #D9D9D9;
    }

    .div {
      background-color: #fff;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .div-2 {
      align-self: stretch;
      display: flex;
      width: 100%;
      align-items: flex-start;
      justify-content: space-between;
      gap: 0px;
      padding: 0 20px;
    }
    @media (max-width: 991px) {
      .div-2 {
        max-width: 100%;
        flex-wrap: wrap;
      }
    }
    .div-3 {
      background-color: #d9d9d9;
      align-self: end;
      margin-top: 10px;
      width: 85px;
      height: 85px;
    }
    @media (max-width: 991px) {
      .div-3 {
        margin-top: 40px;
      }
    }
    .div-4 {
      background-color: #d9d9d9;
      align-self: start;
      width: 85px;
      height: 85px;
    }
    .div-5 {
      display: flex;
      justify-content: space-between;
      gap: 20px;
      font-size: 25px;
      color: #790008;
      font-weight: 600;
      line-height: 113%;
      margin: auto 0;
    }
    .div-6 {
      font-family: Poppins, sans-serif;
      margin: auto 0;
    }
    .div-7 {
      font-family: Poppins, sans-serif;
      flex-grow: 1;
      flex-basis: auto;
    }
    .div-8 {
      align-self: end;
      display: flex;
      margin-top: 56px;
      align-items: flex-start;
      gap: 20px;
    }
    @media (max-width: 991px) {
      .div-8 {
        margin-top: 40px;
      }
    }
    .img {
      aspect-ratio: 1.06;
      object-fit: auto;
      object-position: center;
      width: 62px;
      align-self: start;
    }
    .div-9 {
      background-color: #d9d9d9;
      align-self: end;
      margin-top: 29px;
      width: 85px;
      height: 85px;
    }
    .img-2 {
      aspect-ratio: 6.67;
      object-fit: auto;
      object-position: center;
      width: 526px;
      box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;
      margin-top: 44px;
      max-width: 100%;
    }
    @media (max-width: 991px) {
      .img-2 {
        margin-top: 40px;
      }
    }
    .div-10 {
      color: #790008;
      margin-top: 20px;
      font: 600 45px/113% Poppins, sans-serif;
    }
    @media (max-width: 991px) {
      .div-10 {
        max-width: 100%;
        font-size: 40px;
      }
    }
    .div-11 {
      margin-top: 48px;
      width: 100%;
      max-width: 1098px;
      padding: 0 20px;
    }
    @media (max-width: 991px) {
      .div-11 {
        max-width: 100%;
        margin-top: 40px;
      }
    }
    .div-12 {
      gap: 20px;
      display: flex;
    }
    @media (max-width: 991px) {
      .div-12 {
        flex-direction: column;
        align-items: stretch;
        gap: 0px;
      }
    }
    .column {
      display: flex;
      flex-direction: column;
      line-height: normal;
      width: 33%;
      margin-left: 0px;
    }
    @media (max-width: 991px) {
      .column {
        width: 100%;
      }
    }
    .div-13 {
      display: flex;
      flex-grow: 1;
      flex-direction: column;
      justify-content: center;
      font-size: 30px;
      color: #790008;
      font-weight: 600;
      white-space: nowrap;
      line-height: 113%;
    }
    @media (max-width: 991px) {
      .div-13 {
        margin-top: 32px;
        white-space: initial;
      }
    }
    .div-14 {
      border-radius: 23.471px;
      border: 3.755px solid #790008;
      box-shadow: 4.694px 9.389px 9.295px -2.817px rgba(121, 0, 8, 0.35);
      background-color: #fff;
      display: flex;
      justify-content: space-between;
      gap: 17px;
      padding: 7px 14px;
    }
    @media (max-width: 991px) {
      .div-14 {
        white-space: initial;
      }
    }
    .img-3 {
      aspect-ratio: 0.96;
      object-fit: auto;
      object-position: center;
      width: 116px;
      max-width: 100%;
    }
    .div-15 {
      font-family: Poppins, sans-serif;
      flex-grow: 1;
      margin: auto 0;
    }
    @media (max-width: 991px) {
      .div-15 {
        white-space: initial;
      }
    }
    .column-2 {
      display: flex;
      flex-direction: column;
      line-height: normal;
      width: 33%;
      margin-left: 20px;
    }
    @media (max-width: 991px) {
      .column-2 {
        width: 100%;
      }
    }
    .div-16 {
      display: flex;
      flex-grow: 1;
      flex-direction: column;
      justify-content: center;
      font-size: 30px;
      color: #790008;
      font-weight: 600;
      white-space: nowrap;
      line-height: 113%;
    }
    @media (max-width: 991px) {
      .div-16 {
        margin-top: 32px;
        white-space: initial;
      }
    }
    .div-17 {
      border-radius: 23.471px;
      border: 3.755px solid #790008;
      box-shadow: 4.694px 9.389px 9.295px -2.817px rgba(121, 0, 8, 0.35);
      background-color: #fff;
      display: flex;
      justify-content: space-between;
      gap: 10px;
      padding: 7px 17px;
    }
    @media (max-width: 991px) {
      .div-17 {
        white-space: initial;
      }
    }
    .img-4 {
      aspect-ratio: 0.96;
      object-fit: auto;
      object-position: center;
      width: 116px;
      max-width: 100%;
    }
    .div-18 {
      font-family: Poppins, sans-serif;
      flex-grow: 1;
      margin: auto 0;
    }
    @media (max-width: 991px) {
      .div-18 {
        white-space: initial;
      }
    }
    .column-3 {
      display: flex;
      flex-direction: column;
      line-height: normal;
      width: 33%;
      margin-left: 20px;
    }
    @media (max-width: 991px) {
      .column-3 {
        width: 100%;
      }
    }
    .div-19 {
      display: flex;
      flex-grow: 1;
      flex-direction: column;
      justify-content: center;
      font-size: 30px;
      color: #790008;
      font-weight: 600;
      line-height: 34px;
    }
    @media (max-width: 991px) {
      .div-19 {
        margin-top: 32px;
      }
    }
    .div-20 {
      border-radius: 23.471px;
      border: 3.755px solid #790008;
      box-shadow: 4.694px 9.389px 9.295px -2.817px rgba(121, 0, 8, 0.35);
      background-color: #fff;
      display: flex;
      justify-content: space-between;
      gap: 10px;
      padding: 7px 25px;
    }
    @media (max-width: 991px) {
      .div-20 {
        padding: 0 20px;
      }
    }
    .img-5 {
      aspect-ratio: 0.95;
      object-fit: auto;
      object-position: center;
      width: 115px;
      max-width: 100%;
    }
    .div-21 {
      font-family: Poppins, sans-serif;
      margin: auto 0;
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
    .div-23 {
      color: #fff;
      text-align: center;
      align-self: center;
      margin-top: 6px;
      font: 600 35px/113% Poppins, sans-serif;
    }
    @media (max-width: 991px) {
      .div-23 {
        max-width: 100%;
      }
    }
    .div-24 {
      display: flex;
      flex-direction: column;
      font-size: 20px;
      font-weight: 700;
      white-space: nowrap;
      margin: 31px 0 49px;
      padding: 0 10px;
    }
    @media (max-width: 991px) {
      .div-24 {
        max-width: 100%;
        margin-bottom: 40px;
        white-space: initial;
        padding: 0 20px;
      }
    }
    .img-6 {
      aspect-ratio: 20;
      object-fit: auto;
      object-position: center;
      width: 1138px;
      align-self: center;
      margin-right: 13px;
    }
    @media (max-width: 991px) {
      .img-6 {
        max-width: 100%;
      }
    }
    .div-25 {
      border-radius: 5px;
      border: 1px solid #fff;
      background-color: #9c0404;
      display: flex;
      flex-direction: column;
      justify-content: center;
      color: #d9d9d9;
      margin: 29px 13px 0 0;
      padding: 9px 60px 9px 16px;
    }
    @media (max-width: 991px) {
      .div-25 {
        max-width: 100%;
        margin-right: 10px;
        padding-right: 20px;
        white-space: initial;
      }
    }
    .div-26 {
      display: flex;
      margin-right: 22px;
      justify-content: space-between;
      gap: 20px;
    }
    @media (max-width: 991px) {
      .div-26 {
        max-width: 100%;
        margin-right: 10px;
        flex-wrap: wrap;
        white-space: initial;
      }
    }
    .div-27 {
      font-family: Poppins, sans-serif;
    }
    .div-28 {
      font-family: Poppins, sans-serif;
      flex-grow: 1;
      flex-basis: auto;
    }
    .div-29 {
      font-family: Poppins, sans-serif;
      flex-grow: 1;
      flex-basis: auto;
    }
    .div-30 {
      font-family: Poppins, sans-serif;
    }
    .div-31 {
      align-self: center;
      display: flex;
      margin-top: 17px;
      width: 100%;
      max-width: 1070px;
      justify-content: space-between;
      gap: 20px;
      color: #fff;
    }
    @media (max-width: 991px) {
      .div-31 {
        max-width: 100%;
        flex-wrap: wrap;
        white-space: initial;
      }
    }
    .div-32 {
      display: flex;
      justify-content: space-between;
      gap: 20px;
      margin: auto 0;
    }
    @media (max-width: 991px) {
      .div-32 {
        max-width: 100%;
        flex-wrap: wrap;
        white-space: initial;
      }
    }
    .div-33 {
      font-family: Poppins, sans-serif;
      align-self: start;
      margin-top: 6px;
    }
    .div-34 {
      font-family: Poppins, sans-serif;
      flex-grow: 1;
      flex-basis: auto;
    }
    .div-35 {
      display: flex;
      justify-content: space-between;
      gap: 0px;
    }
    @media (max-width: 991px) {
      .div-35 {
        max-width: 100%;
        flex-wrap: wrap;
        white-space: initial;
      }
    }
    .div-36 {
      font-family: Poppins, sans-serif;
      flex-grow: 1;
      margin: auto 0;
    }
    .img-7 {
      aspect-ratio: 10;
      object-fit: auto;
      object-position: center;
      width: 327px;
    }
    .div-37 {
      background-color: #fff;
      width: 1138px;
      max-width: 100%;
      height: 10px;
      margin: 13px 13px 0 0;
    }
    @media (max-width: 991px) {
      .div-37 {
        margin-right: 10px;
      }
    }
    .div-38 {
      background-color: #fff;
      width: 1138px;
      max-width: 100%;
      height: 10px;
      margin: 47px 13px 0 0;
    }
    @media (max-width: 991px) {
      .div-38 {
        margin: 40px 10px 0 0;
      }
    }
    .div-39 {
      background-color: #fff;
      width: 1138px;
      max-width: 100%;
      height: 10px;
      margin: 47px 13px 0 0;
    }
    @media (max-width: 991px) {
      .div-39 {
        margin: 40px 10px 0 0;
      }
    }
    .div-40 {
      background-color: #fff;
      width: 1138px;
      max-width: 100%;
      height: 10px;
      margin: 47px 13px 0 0;
    }
    @media (max-width: 991px) {
      .div-40 {
        margin: 40px 10px 0 0;
      }
    }
    .div-41 {
      background-color: #fff;
      width: 1138px;
      max-width: 100%;
      height: 10px;
      margin: 47px 13px 0 0;
    }
    @media (max-width: 991px) {
      .div-41 {
        margin: 40px 10px 0 0;
      }
    }
    .div-42 {
      background-color: #fff;
      width: 1138px;
      max-width: 100%;
      height: 10px;
      margin: 46px 13px 0 0;
    }
    @media (max-width: 991px) {
      .div-42 {
        margin: 40px 10px 0 0;
      }
    }
    .div-43 {
      background-color: #fff;
      width: 1138px;
      max-width: 100%;
      height: 10px;
      margin: 47px 13px 0 0;
    }
    @media (max-width: 991px) {
      .div-43 {
        margin: 40px 10px 0 0;
      }
    }
    .div-44 {
      background-color: #fff;
      width: 1138px;
      max-width: 100%;
      height: 10px;
      margin: 44px 13px 0 0;
    }
    @media (max-width: 991px) {
      .div-44 {
        margin: 40px 10px 0 0;
      }
    }
    .div-45 {
      background-color: #fff;
      width: 1138px;
      max-width: 100%;
      height: 10px;
      margin: 47px 13px 0 0;
    }
    @media (max-width: 991px) {
      .div-45 {
        margin: 40px 10px 0 0;
      }
    }
    .div-46 {
      background-color: #fff;
      width: 1138px;
      max-width: 100%;
      height: 10px;
      margin: 47px 13px 0 0;
    }
    @media (max-width: 991px) {
      .div-46 {
        margin: 40px 10px 0 0;
      }
    }
    .div-47 {
      background-color: #fff;
      width: 1138px;
      max-width: 100%;
      height: 10px;
      margin: 47px 13px 0 0;
    }
    @media (max-width: 991px) {
      .div-47 {
        margin: 40px 10px 0 0;
      }
    }
    .div-48 {
      background-color: #fff;
      width: 1138px;
      max-width: 100%;
      height: 10px;
      margin: 47px 13px 0 0;
    }
    @media (max-width: 991px) {
      .div-48 {
        margin: 40px 10px 0 0;
      }
    }
    .div-49 {
      background-color: #fff;
      width: 1138px;
      max-width: 100%;
      height: 10px;
      margin: 46px 13px 0 0;
    }
    @media (max-width: 991px) {
      .div-49 {
        margin: 40px 10px 0 0;
      }
    }
    .div-50 {
      background-color: #fff;
      width: 1138px;
      max-width: 100%;
      height: 10px;
      margin: 47px 13px 0 0;
    }
    @media (max-width: 991px) {
      .div-50 {
        margin: 40px 10px 0 0;
      }
    }
    .img-8 {
      aspect-ratio: 0.99;
      object-fit: auto;
      object-position: center;
      width: 128px;
      align-self: end;
      margin-top: 42px;
      max-width: 100%;
    }
    @media (max-width: 991px) {
      .img-8 {
        margin-top: 40px;
      }
    }
  </style>
  
@endsection