@extends('layout.master')
@section('title')
    View
@endsection

@section('content')


<nav class="navbar navbar-expand-lg" style="background-color: white; margin-bottom: 10px;">
    <div class="container">
        <div class="navbar-brand">
        <a href="{{ route("home") }}"><img class="mx-auto" src="assets/Logo.png" alt="cimbLogo" style="height: 5rem; width: auto;"></a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div>
        <div style="color: #9C0404;">Welcome, Admin!</div>  
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="assets/Profile.png" alt="Prof" class="rounded-circle" style="width: auto; height: 80px; object-fit: cover;">
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" style="font-size: 25px" href="Super.html">Profile</a></li>
                        <li><a class="dropdown-item" style="font-size: 25px" href="{{ route('logout') }}">Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
  </div>
</nav>

<div class="div0">
<div class="div">
  <div class="div-2" style="text-align: left;">SOP Duduk</div>
  <div class="div-3">
    Description of file SOP DUDUk 1 ... Lorem ipsum dolor sit amet, consectetur
    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
    nisi ut aliquip ex ea commodo consequat
  </div>

  <table class="table table-hover transparent-table">
        <thead class="table-danger">
            <tr>
                <th scope="col">Timestamp</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
            <tbody>
                <tr>
                    <td>2023-02-29</td>
                    <td>Update description...</td>
                    <td>
                        <a href="#"><img src="assets/Download.png" alt="Logo" style="width: 30px; height: auto; margin-left: 10px; object-fit: cover;"></a>
                    </td>
                </tr>
                    <tr>
                        <td>2023-04-02</td>
                        <td>Update description...</td>
                        <td>
                            <a href="#"><img src="assets/Download.png" alt="Logo" style="width: 30px; height: auto; margin-left: 10px; object-fit: cover;"></a>
                        </td>
                    </tr>
                </tbody>
            </table>

            <button type="submit" class="div-4 btn btn-danger btn-block mb-4 mx-auto">Update Document</button>

</div>
</div>

<div>
<img loading="lazy" srcset="assets/Octo1.png"/>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#790008" fill-opacity="1" d="M0,96L26.7,101.3C53.3,107,107,117,160,133.3C213.3,149,267,171,320,154.7C373.3,139,427,85,480,85.3C533.3,85,587,139,640,138.7C693.3,139,747,85,800,74.7C853.3,64,907,96,960,96C1013.3,96,1067,64,1120,48C1173.3,32,1227,32,1280,37.3C1333.3,43,1387,53,1413,58.7L1440,64L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
</svg>
</div>

<style>
   .div-4 {
      justify-content: center;
      align-items: center;
      border-radius: 14.063px;
      background-color: #FF0606;
      width: 298px;
      max-width: 100%;
      margin-top: 30px;
      color: var(--White, #fff);
      letter-spacing: -0.56px;
      padding: 23px 60px;
      font: 20px Poppins, sans-serif;
    }
    @media (max-width: 991px) {
      .div-4 {
        white-space: initial;
        padding: 0 20px;
      }
    }
   
   .transparent-table {
      margin-top: 50px;
      width: 100%;
      border-collapse: collapse;
      background-color: transparent;
      
    }

    .transparent-table td {

      padding: 10px;
      background-color: transparent;
      border-bottom: 1px solid #ffff;
      border-collapse: separate;
      border: none;
      border-bottom: 2px solid #790008;
      font: 700 20px Poppins, sans-serif;
      color: #9c0404;
    }

    .transparent-table th {
      padding: 10px;
      border-bottom: 1px solid #ffff;
      border-collapse: separate;
      border: none;
      background-color: #9C0404;
      font: 700 20px Poppins, sans-serif;
      color: #D9D9D9;
    }
   
   .navbar {
    border-bottom: 3px solid #9C0404;
  }
    .div0 {
      background-color: #fff;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .div {
    display: flex;
    flex-direction: column;
    padding: 0 80px;
  }

  .div0 {
      background-color: #fff;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    
  .div-2 {
    color: #9c0404;
    text-decoration-line: underline;
    align-self: center;
    white-space: nowrap;
    font: 700 45px Poppins, sans-serif;
    margin-top: 60px;
  }
  @media (max-width: 991px) {
    .div-2 {
      font-size: 40px;
      white-space: initial;
    }
  }
  .div-3 {
    color: #9c0404;
    text-align: justify;
    margin-top: 30px;
    width: 100%;
    font: 700 25px Poppins, sans-serif;
  }
  @media (max-width: 991px) {
    .div-3 {
      max-width: 100%;
      margin-top: 40px;
    }
  }
  
</style>

    


@endsection