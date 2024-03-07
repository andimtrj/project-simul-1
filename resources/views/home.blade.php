@extends('layout.master')
@section('title')
  Home
@endsection

@extends('layout.navbar')

@section('content')
  <div class="container-content">
    @include('layout.under-navbar')

    <div class="div-22">
      <div class="container-title-search">
        <div class="div-23">Start Managing your SOP Documents</div>
        <form action = "{{ route('searchProcessAdmin') }}" class="form-inline my-2 my-lg-0" style="width: 100%;"
          role="search" method="GET">

          <div class ="searchbar">
            <div class="search-container">
              <div style = "display: flex; width:100%">
                <input name = "search" class="form-control mr-sm-2" type="search" placeholder="Search"
                  aria-label="Search" style="width:90%">
        </form>
        <div class="dropdown d-flex justify-content-end align-self-end" style="width: 10%; height: 100%;">
          <button class="btn btn-light dropdown-toggle w-aut" style="width: 80%" type="button" id="dropdownMenuButton"
            data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-sort fa-2xl"></i>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="{{ route("sortAdmin") }}">Sort by Title</a></li>
              <li><a class="dropdown-item" href="{{ route("home") }}">Sort by Timestamp</a></li>
          </ul>
      </div>
      </div>
    </div>
  </div>

  @include('layout.table')

  <script>
    document.getElementById("submitButton").addEventListener("click", function(event) {
      event.preventDefault(); // Prevent the default behavior of the link
      document.getElementById("myForm").submit(); // Submit the form
    });
  </script>

  <style>
    .max-desc {
      max-width: 300px;
      /* Adjust the max width as needed */
      overflow: hidden;
      text-overflow: ellipsis;
      /* white-space: nowrap; */
    }

    .max-title {
      max-width: 200px;
      /* Adjust the max width as needed */
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }

    .action-button {
      cursor: pointer;
      
    }

    .popup-delete {
      width: auto;
      height: auto;
      align-items: center;
      align-content: center;
      justify-content: center;
    }

    .container-title-search {
      width: 100%
    }

    .searchbar {
      display: flex;
      justify-content: left;
      align-items: left;
    }

    .search-container {
      height: 5vh;
      display: flex;
      align-items: left;
      width: 100%;
    }

    .button-action {
      width: auto;
      height: 20px;
    }

    .transparent-table {
      table-layout: fixed;
      width: 100%;
      border-collapse: collapse;
      background-color: transparent;
      max-height: 300px;
      overflow-y: scroll;
      display: block;
    }

    .transparent-table td {
      color: white;
      padding: 10px;
      background-color: transparent;
      border-bottom: 1px solid #ffff;
      border-collapse: separate;
      border: none;
      display: table-cell;
      font: 20px Poppins, sans-serif;
      border-bottom: 2px solid #ffff;
      word-wrap: break-word;
      width: 100%;
    }

    .transparent-table th {
      border-collapse: separate;
      border: none;
      background-color: #9C0404;
      color: white;
      font: 700 20px Poppins, sans-serif;
      min-width: 41vh;
    }


    .container-content {
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

    .div-22 {
      border-radius: 23.471px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
      box-shadow: 4.694px 9.389px 9.295px -2.817px rgba(121, 0, 8, 0.35);
      background-color: #790008;
      display: flex;
      margin: 69px 0 0 0;
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

    .div-23 {
      color: #fff;
      text-align: center;
      align-self: center;
      margin-top: 6px;
      margin-bottom: 30px;
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
      margin: 15px 0 49px;
      width: 100%;
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
      transition: transform 0.3s ease;
      aspect-ratio: 0.99;
      object-fit: auto;
      object-position: center;
      width: 128px;
      align-self: end;
      margin-top: 42px;
      max-width: 100%;
    }

    .img-8:hover {
      transform: scale(1.1);
    }

    @media (max-width: 991px) {
      .img-8 {
        margin-top: 40px;
      }
    }
  </style>
@endsection
