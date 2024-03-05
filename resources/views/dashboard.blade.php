@extends('layout.master')
@section('title')
    Dashboard
@endsection

@extends('layout.navbar')

@section('content')

<div class="div">
  <div class="div-2">
    
  <img class="mx-auto" src="assets/Logo.png" alt="cimbLogo" style="height: 12rem; width: auto;">
    <div class="div-8">SOP Document Management System</div>
    <div class="div-9">
      <div class="div-10">
        <div class="column">
          <div class="div-11">
            <div class="div-12">
              <img
                loading="lazy"
                srcset="assets/Octo1.png"
                class="img-3"
              />
              <div class="div-13">.pdf Files</div>
            </div>
          </div>
        </div>
        <div class="column-2">
          <div class="div-14">
            <div class="div-15">
              <img
                loading="lazy"
                srcset="assets/Octo2.png"
                class="img-4"
              />
              <div class="div-16">max. 3mb</div>
            </div>
          </div>
        </div>
        <div class="column-3">
          <div class="div-17">
            <div class="div-18">
              <img
                loading="lazy"
                srcset="assets/Octo3.png"
                class="img-5"
              />
              <div class="div-19">
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
  </div>
  <div class="div-20">
    <div class="div-21">
      <div class="div-22">Start Managing your SOP Documents</div>
      <a href="{{ route("login") }}" class="div-23"><button>Log in</button></a>
    </div>
  </div>
</div>
<style>
  .div {
    background-color: #fff;
    display: flex;
    flex-direction: column;
    padding: 50px 0;
  }
  .div-2 {
    align-self: center;
    display: flex;
    margin-top: 6px;
    width: 100%;
    max-width: 1164px;
    flex-direction: column;
    padding: 0 20px;
  }
  @media (max-width: 991px) {
    .div-2 {
      max-width: 100%;
    }
  }
  .div-8 {
    color: #790008;
    align-self: center;
    margin-top: 20px;
    font: 600 45px/113% Poppins, sans-serif;
  }
  @media (max-width: 991px) {
    .div-8 {
      max-width: 100%;
      font-size: 40px;
    }
  }
  .div-9 {
    margin-top: 118px;
  }
  @media (max-width: 991px) {
    .div-9 {
      max-width: 100%;
      padding-right: 20px;
      margin-top: 40px;
    }
  }
  .div-10 {
    gap: 20px;
    display: flex;
  }
  @media (max-width: 991px) {
    .div-10 {
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
  .div-11 {
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
    .div-11 {
      margin-top: 32px;
      white-space: initial;
    }
  }
  .div-12 {
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
    .div-12 {
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
  .div-13 {
    font-family: Poppins, sans-serif;
    flex-grow: 1;
    margin: auto 0;
  }
  @media (max-width: 991px) {
    .div-13 {
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
  .div-14 {
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
    .div-14 {
      margin-top: 32px;
      white-space: initial;
    }
  }
  .div-15 {
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
    .div-15 {
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
  .div-16 {
    font-family: Poppins, sans-serif;
    flex-grow: 1;
    margin: auto 0;
  }
  @media (max-width: 991px) {
    .div-16 {
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
  .div-17 {
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
    .div-17 {
      margin-top: 32px;
    }
  }
  .div-18 {
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
    .div-18 {
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
  .div-19 {
    font-family: Poppins, sans-serif;
    margin: auto 0;
  }
  .div-20 {
    border-radius: 23.471px;
    box-shadow: 4.694px 9.389px 9.295px -2.817px rgba(121, 0, 8, 0.35);
    background-color: #790008;
    display: flex;
    margin-top: 116px;
    width: 100%;
    justify-content: center;
    align-items: center;
    color: #fff;
    padding: 48px 60px;
  }
  @media (max-width: 991px) {
    .div-20 {
      max-width: 100%;
      margin-top: 40px;
      padding: 0 20px;
    }
  }
  .div-21 {
    display: flex;
    width: 842px;
    max-width: 100%;
    flex-direction: column;
  }
  .div-22 {
    font: 600 45px/113% Poppins, sans-serif;
  }
  @media (max-width: 991px) {
    .div-22 {
      max-width: 100%;
      font-size: 40px;
    }
  }
  .div-23 {
    justify-content: center;
    border-radius: 10px;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;
    background-color: #ff0606;
    align-self: center;
    margin-top: 46px;
    white-space: nowrap;
    padding: 10px 60px;
    font: 700 35px Poppins, sans-serif;
  }
  @media (max-width: 991px) {
    .div-23 {
      white-space: initial;
      margin-top: 40px;
      padding: 0 23px;
    }
  }
</style>

@endsection