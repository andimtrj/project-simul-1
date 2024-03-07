<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
</head>

<body>
  <form action="{{ route('uploadfile') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="div">
      <div class="div-2">
        <div class="div-3">Upload Document</div>
        <a href="{{ route('home') }}" class="img">
          <img loading="lazy"
            src="https://cdn.builder.io/api/v1/image/assets/TEMP/e47f9be03e4ed5219ff51a6490aad0d4c6771245c483a2c8d58705f53aa5bd4a?" /></a>
      </div>
      <label class="div-4 form-label">Document Title</label>
      <input name="title" type="text" class=" div-5 form-control" placeholder="Enter document title">

      @error('title')
        <div class="poppins-reguler error-message" role="alert">
          {{ $message }}
        </div>
      @enderror

      <label class="div-6 form-label">Description</label>
      <textarea name="description" type="text" class=" div-7 form-control" id="docDescription" rows="8"
        placeholder="Enter document description"></textarea>

      @error('description')
        <div class="poppins-reguler error-message" role="alert">
          {{ $message }}
        </div>
      @enderror
      
      @section('updesc')
          Upload Document
      @endsection
      @include('layout.drop-area')
    </div>

    @error('file')
      @if ($message == 'The file field must not be greater than 3000 kilobytes.')
        <div class="poppins-reguler error-message" role="alert">
          The file must not be greater than 3MB.
        </div>
      @else
        <div class="poppins-reguler error-message" role="alert">
          {{ $message }}
        </div>
      @endif
    @enderror
    </div>

  </form>


  <style>
    .browse-tag:hover {
      color: #9c0404;
    }

    .upload-area {
      width: 300px;
      height: 200px;
      border: 2px dashed #ccc;
      text-align: center;
      padding: 20px;
      margin: 0 auto;
      cursor: pointer;
    }

    .upload-area p {
      margin-bottom: 10px;
    }

    .upload-area.highlight {
      border: 2px solid #00b7ff;
    }

    #fileInput {
      display: none;
    }

    .div-1 {
      width: auto;
      height: 200px;
    }

    .error-message {
      vertical-align: left;
      color: red;
    }

    .dropZone {
      padding: 20px;
      text-align: center;
      cursor: pointer;
    }

    .div-0 {
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

    .div {
      border-radius: 13.277px;
      background-color: #fff;
      display: flex;
      flex-direction: column;
      font-weight: 700;
      padding: 47px 61px;
    }

    @media (max-width: 991px) {
      .div {
        padding: 0 20px;
      }
    }

    .div-2 {
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      gap: 20px;
      font-size: 36px;
      color: #9c0404;
    }

    @media (max-width: 991px) {
      .div-2 {
        max-width: 100%;
        flex-wrap: wrap;
      }
    }

    .div-3 {
      font-family: Poppins, sans-serif;
      text-decoration-line: underline;
      align-self: end;
      margin-top: 25px;
      flex-grow: 1;
      flex-basis: auto;
    }

    .img {
      aspect-ratio: 1;
      object-fit: auto;
      object-position: center;
      width: 38px;
      fill: #9c0404;
      align-self: start;
    }

    .div-4 {
      color: #790008;
      margin-top: 61px;
      font: 25px/150% Poppins, sans-serif;
    }

    @media (max-width: 991px) {
      .div-4 {
        max-width: 100%;
        margin-top: 40px;
      }
    }

    .div-5 {
      border-radius: 4px;
      border: 1px solid #d1d1d6;
      background-color: #f6f6f6;
      margin-top: 19px;
      width: 572px;
      max-width: 100%;
      height: 38px;
    }

    .div-6 {
      color: #790008;
      margin-top: 39px;
      font: 25px/150% Poppins, sans-serif;
    }

    @media (max-width: 991px) {
      .div-6 {
        max-width: 100%;
      }
    }

    .div-7 {
      border-radius: 4px;
      border: 1px solid #d1d1d6;
      background-color: #f6f6f6;
      margin-top: 14px;
      height: 354px;
    }

    @media (max-width: 991px) {
      .div-7 {
        max-width: 100%;
      }
    }

    .div-8 {
      color: #790008;
      margin-top: 94px;
      font: 25px/150% Poppins, sans-serif;
    }

    @media (max-width: 991px) {
      .div-8 {
        max-width: 100%;
        margin-top: 40px;
      }
    }

    .div-10 {
      align-items: center;
      display: flex;
      width: 251px;
      max-width: 100%;
      flex-direction: column;
    }

    @media (max-width: 991px) {
      .div-10 {
        white-space: initial;
      }
    }

    .img-2 {
      aspect-ratio: 1.14;
      object-fit: auto;
      object-position: center;
      width: 100%;
    }

    .div-11 {
      border-radius: 9.187px;
      background-color: #f80000;
      align-self: center;
      justify-content: center;
      color: #fff;
      padding: 13px 43px;
      font: 22px Poppins, sans-serif;
    }

    @media (max-width: 991px) {
      .div-11 {
        white-space: initial;
        padding: 0 20px;
      }
    }

    .div-12 {
      color: #790008;
      margin-top: 22px;
      font: 16px/150% Poppins, sans-serif;
    }

    @media (max-width: 991px) {
      .div-12 {
        white-space: initial;
      }
    }
  </style>

  <script>
    const dropArea = document.getElementById("dropArea");
    const fileInput = document.getElementById("fileInput");

    // Highlight the drop area when dragging over
    dropArea.addEventListener("dragover", (event) => {
      event.preventDefault();
      dropArea.classList.add("highlight");
    });

    // Remove highlight when dragging leaves
    dropArea.addEventListener("dragleave", () => {
      dropArea.classList.remove("highlight");
    });

    // Handle file drop
    dropArea.addEventListener("drop", (event) => {
      event.preventDefault();
      dropArea.classList.remove("highlight");

      const files = event.dataTransfer.files;

      // Handle single file upload for simplicity
      if (files.length > 1) {
        alert("Only one file allowed!");
        return;
      }

      const file = files[0];
      fileInput.files = files;

      // Display file name (optional)
      const fileNameElement = dropArea.querySelector("p");
      fileNameElement.textContent = file.name;

      // Handle file upload (replace with your actual upload logic)
      console.log("Uploading file:", file);
      // Implement your upload logic here, e.g., using AJAX or FormData
    });

    // Handle browsing for files (optional)
    dropArea.querySelector("a").addEventListener("click", () => {
      fileInput.click();
    });

    // Handle file selection from browse dialog
    fileInput.addEventListener("change", (event) => {
      const file = event.target.files[0];
      // Display file name (optional)
      const fileNameElement = dropArea.querySelector("p");
      fileNameElement.textContent = file.name;

      // Handle file upload (replace with your actual upload logic)
      console.log("Uploading file:", file);
      // Implement your upload logic here, e.g., using AJAX or FormData
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
