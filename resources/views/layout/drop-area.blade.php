<div class="div-8">
  @yield('updesc')
</div>
<div class="div-9" id="dropArea">
  <div class="div-10">
    <img loading="lazy"
      src="https://cdn.builder.io/api/v1/image/assets/TEMP/5429c0ca66db95123f5e11c9a2a546a0ed20ceacdf5ef55cc3b5c5a37d821a10?"
      class="img-2" />
    <input name="file" type="file" id="fileInput" class="div-1 form-control" hidden />
    <p class="div-12">Drag & drop files here or <a class="browse-tag">Browse</a></p>
    <div class="div-12">File type .pdf | Maximum 3mb</div>
    <button class="div-0 btn btn-danger" type="submit">Submit</button>
  </div>
</div>

<style>
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

  .div-9 {
    border-radius: 4px;
    border: 2px dashed #9c0404;
    background-color: #f6f6f6;
    display: flex;
    margin-top: 16px;
    flex-direction: column;
    align-items: center;
    white-space: nowrap;
    padding: 45px 60px 29px;
    cursor: pointer;
  }

  @media (max-width: 991px) {
    .div-9 {
      max-width: 100%;
      white-space: initial;
      padding: 0 20px;
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
