<nav class="navbar navbar-expand-lg" id="navbar"
  style="background-color: white; margin-bottom: 10px; position: sticky; top: 0; width:100%">
  <div class="container">
    <div class="navbar-brand">
      <a href="{{ route('home') }}"><img class="mx-auto" src="../assets/Logo.png" alt="cimbLogo"
          style="height: 5rem; width: auto;"></a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div>
      {{-- @dd($user); --}}
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div style="color: #9C0404;" class="poppins-reguler">Welcome, <a id="welcomeText"></a></div>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <img src="../assets/Profile.png" alt="Prof" class="rounded-circle"
                style="width: 60px; height: 60px; object-fit: cover;">
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" style="font-size: 25px" href="{{ route('logout') }}">Log Out</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<style>
  .navbar {
    border-bottom: 3px solid #9C0404;
    transition: background-color 0.3s ease, backdrop-filter 0.3s ease;
    /* Smooth transition effect for background color and backdrop filter */
    backdrop-filter: blur(10px);
    /* Initial blur effect */
    -webkit-backdrop-filter: blur(10px);
    /* For Safari */
  }

  .navbar.scrolled {
    backdrop-filter: blur(20px);
    /* Adjust the blur effect when scrolled */
    -webkit-backdrop-filter: blur(20px);
    /* For Safari */
  }

  .poppins-reguler {
    font-family: "Poppins", sans-serif;
    font-weight: 550;
    font-style: normal;
    font-size: x-large;
  }
</style>

<script>
   function typeWriter(text, i, speed) {
    if (i < text.length) {
      document.getElementById("welcomeText").innerHTML += text.charAt(i);
      i++;
      setTimeout(function () {
        typeWriter(text, i, speed);
      }, speed);
    } else {
      // Clear the text and start typing again
      setTimeout(function () {
        document.getElementById("welcomeText").innerHTML = '';
        typeWriter(text, 0, speed);
      }, 5000); // Adjust the delay before starting the next iteration
    }
  }

  // Call the typing function when the page is loaded
  window.onload = function () {
    var text = "{{ auth()->user()->name }}";
    var speed = 200; // Adjust typing speed here
    typeWriter(text, 0, speed);
  };

  window.addEventListener('scroll', function() {
    var navbar = document.getElementById('navbar');
    var scrollPosition = window.scrollY;
    var transparency = 0.5;

    if (scrollPosition > 0) {
      navbar.style.backgroundColor = 'rgba(255, 255, 255, ' + transparency + ')';
    } else {
      navbar.classList.remove('scrolled');
    }
  });
</script>
