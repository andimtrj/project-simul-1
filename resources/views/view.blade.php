@extends('layout.master')
@section('title')
  View
@endsection

@extends('layout.navbar')


@section('content')
  <div class="div0">
    <div class="div">
      <div class="div-2" style="text-align: left;">{{ $doc->title }}</div>
      <div class="div-3">
        {{ $doc->description }}
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
          @foreach ($ver as $ver)
            <tr>

              <td>{{ $ver->created_at }}</td>
              <td>{{ $ver->description }}</td>
              <td>
                <a href="{{ route('downloaddoc', $ver->file) }}"><img src="../assets/Download.png" alt="Logo"
                    style="width: 30px; height: auto; margin-left: 10px; object-fit: cover;"></a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <form action="{{ route('updatepage', $doc->file_id) }}" method="GET">
        <button type="submit" class="div-4 btn btn-danger mb-4 mx-auto">Update Document</button>
      </form>
    </div>
  </div>

  <div>
    <img loading="lazy" srcset="assets/Octo1.png" />
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#790008" fill-opacity="1"
        d="M0,96L26.7,101.3C53.3,107,107,117,160,133.3C213.3,149,267,171,320,154.7C373.3,139,427,85,480,85.3C533.3,85,587,139,640,138.7C693.3,139,747,85,800,74.7C853.3,64,907,96,960,96C1013.3,96,1067,64,1120,48C1173.3,32,1227,32,1280,37.3C1333.3,43,1387,53,1413,58.7L1440,64L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
      </path>
    </svg>
  </div>

  <style>
    .div-4 {
      justify-content: center;
      align-items: center;
      border-radius: 14.063px;
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
      overflow-y: auto;
      display: block;
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
      color: white;
      position: sticky;
      top: 0;
      min-width: 65.5vh;
    }

    .div0 {
      background-color: #fff;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 0 20px;
      
    }

    .div {
      border-radius: 23.471px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
      display: flex;
      margin: 0 0 0 0;
      align-items: center;
      width: 100%;
      flex-direction: column;
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
