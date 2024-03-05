<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <form action="{{ route('uploadfile') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="div">
        <div class="container-header">
            <div class="title-header">Upload Document</div>
            <a href="{{ route("home") }}" class="img">
              <img loading="lazy" 
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/e47f9be03e4ed5219ff51a6490aad0d4c6771245c483a2c8d58705f53aa5bd4a?"
              /></a>
        </div>    
        <label class="sub-title form-label">Document Title</label>
        <input name="title" type="text" class=" textbox-title form-control" placeholder="Enter document title">
        
        @error('title')
            <div class="poppins-reguler error-message" role="alert">
              {{ $message }}
            </div>
        @enderror

        <label class="sub-desc form-label">Description</label>
        <textarea name="description" type="text" class=" textbox-desc form-control" id="docDescription" rows="8" placeholder="Enter document description"></textarea>
        
        @error('description')
            <div class="poppins-reguler error-message" role="alert">
              {{ $message }}
            </div>
        @enderror

        <div class="sub-upload">Upload Document</div>
            <div class="container-uploadfiles" id="dropZone">
                <div class="middle-container-uploadfiles">
                <img
                    loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/5429c0ca66db95123f5e11c9a2a546a0ed20ceacdf5ef55cc3b5c5a37d821a10?"
                    class="img-2"
                />
                <input name="file" type="file" class="div-1 form-control" id="fileInput">
                <div class="small-title">file type .pdf | maximum 3mb</div>
                <button class="div-0" type="submit">Submit</button>
            </div>
            
          </div>

          @error('file')
          <div class="poppins-reguler error-message" role="alert">
            {{ $message }}
          </div>
          @enderror
          
    </div>
        
    </form>


<style>
  #dropZone {
            border: 2px dashed #9c0404;
            padding: 20px;
            text-align: center;
            cursor: pointer;
        }

        /* Highlight the drop zone when a file is dragged over it */
        #dropZone.dragover {
            background-color: #f6f6f6;
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

    .div-00 {
      justify-content: center;
      align-items: center;
      border-radius: 14.063px;
      background-color: #9c0404;
      width: 1000px;
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
  .container-header {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 20px;
    font-size: 36px;
    color: #9c0404;
  }
  @media (max-width: 991px) {
    .container-header {
      max-width: 100%;
      flex-wrap: wrap;
    }
  }
  .title-header {
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
  .sub-title {
    color: #790008;
    margin-top: 61px;
    font: 25px/150% Poppins, sans-serif;
  }
  @media (max-width: 991px) {
    .sub-title {
      max-width: 100%;
      margin-top: 40px;
    }
  }
  .textbox-title {
    border-radius: 4px;
    border: 1px solid #d1d1d6;
    background-color: #f6f6f6;
    margin-top: 19px;
    width: 572px;
    max-width: 100%;
    height: 38px;
  }
  .sub-desc {
    color: #790008;
    margin-top: 39px;
    font: 25px/150% Poppins, sans-serif;
  }
  @media (max-width: 991px) {
    .sub-desc {
      max-width: 100%;
    }
  }
  .textbox-desc {
    border-radius: 4px;
    border: 1px solid #d1d1d6;
    background-color: #f6f6f6;
    margin-top: 14px;
    height: 354px;
  }
  @media (max-width: 991px) {
    .textbox-desc {
      max-width: 100%;
    }
  }
  .sub-upload {
    color: #790008;
    margin-top: 94px;
    font: 25px/150% Poppins, sans-serif;
  }
  @media (max-width: 991px) {
    .sub-upload {
      max-width: 100%;
      margin-top: 40px;
    }
  }
  .container-uploadfiles {
    border-radius: 4px;
    border: 1px solid #d1d1d6;
    background-color: #f6f6f6;
    display: flex;
    margin-top: 16px;
    flex-direction: column;
    align-items: center;
    white-space: nowrap;
    padding: 45px 60px 29px;
  }
  @media (max-width: 991px) {
    .container-uploadfiles {
      max-width: 100%;
      white-space: initial;
      padding: 0 20px;
    }
  }
  .middle-container-uploadfiles {
    display: flex;
    width: 251px;
    max-width: 100%;
    flex-direction: column;
  }
  @media (max-width: 991px) {
    .middle-container-uploadfiles {
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
  .small-title {
    color: #790008;
    margin-top: 22px;
    font: 16px/150% Poppins, sans-serif;
  }
  @media (max-width: 991px) {
    .small-title {
      white-space: initial;
    }
  }
</style> 

<script>
       document.addEventListener('DOMContentLoaded', function () {
    var dropArea = document.getElementById('dropArea');
    var fileInput = document.getElementById('fileInput');

    dropArea.addEventListener('dragover', function (e) {
        e.preventDefault();
        dropArea.classList.add('dragover');
    });

    dropArea.addEventListener('dragleave', function () {
        dropArea.classList.remove('dragover');
    });

    dropArea.addEventListener('drop', function (e) {
        e.preventDefault();
        dropArea.classList.remove('dragover');

        var files = e.dataTransfer.files;

        if (files.length > 0) {
            fileInput.files = files;
            // You can also update the fileInput label or perform other actions
        }
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>   
</body>
</html>