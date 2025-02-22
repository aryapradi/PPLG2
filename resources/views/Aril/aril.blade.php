<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('asset-aril/style.css') }}">
  <title>My Website</title>
</head>

<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <h1><span>MY PORTO</span>FOLIO<span></span></h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="#hero" data-after="Home">Home</a></li>
            <li><a href="#services" data-after="Service">SKILL</a></li>
            <li><a href="#projects" data-after="Projects">Achievement</a></li>
            <li><a href="#about" data-after="About">About</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>I'M<span></span></h1>
        <h1>Aril pradana <span></span></h1>
        <a href="#projects" type="button" class="cta">Portofolio</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">S<span>KILL</span></h1>
        <p>Front-end & Back-end Developer</p>
      </div>
      <div class="service-bottom">
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
          <h2>Build LOB Applications</h2>
          <p>HTML</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
          <h2>Development Desktop Applications</h2>
          <p>CSS</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
          <h2>Web Designer and Development</h2>
          <p>JAVASCRIPT</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
          <h2>Junior JavaScript Developer</h2>
          <p>PHP</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Service Section -->

  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Recent <span>ACHIEVEMENT</span></h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>Juara Turnamen MLBB JCI DEPOK</h1>
            <h2>Esport is my hobby</h2>
            <p>Saya berhasil menjadi juara 1 di ajang turnamen mlbb yang di selenggarakan oleh JCI Depok</p>
          </div>
          <div class="project-img">
            <img src="{{ asset('asset-aril/img/piala.jpg') }}" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Juara 3 Turnamen Online</h1>
            <h2>Turnamen MLBB</h2>
            <p>Juara online</p>
          </div>
          <div class="project-img">
            <img src="{{ asset('asset-aril/img/belajar.jpg') }}" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Juara Runner-Up</h1>
            <h2>Turnamen Tingkat SMP / SMA </h2>
            <p>Tim saya berhasil menjadi runner-up di Cimahi</p>
          </div>
          <div class="project-img">
            <img src="{{ asset('asset-aril/img/belajar.jpg') }}" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Menjadi Rebutan perekrutan pemain</h1>
            <h2>Turnamen MLBB tingkat SMP/SMA</h2>
            <p>banyak dari SMP/SMA menginkan saya bergabung dengan masing masing tim dari sekolah mereka</p>
          </div>
          <div class="project-img">
            <img src="{{ asset('asset-aril/img/belajar.jpg') }}" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Menjadi MVP / Gelar Pemain Terbaik Mobile legend JCI DEPOK</h1>
            <h2>Turnamen MLBB</h2>
            <p>Saya mendapatkan penghargaan individu MLBB JCI DEPOK</p>
          </div>
          <div class="project-img">
            <img src="{{ asset('asset-aril/img/belajar.jpg') }}" alt="img">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Projects Section -->

  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="{{ asset('asset-aril/img/aril.jpg') }}" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">About <span>me</span></h1>
        <h2>Front End Developer</h2>
        <p>I have experience in ui/ux design and master 5 programming languages such as Javascript, PHP, Python, C++, Java</p>
        <a href="#" class="cta">Download Resume</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Contact <span>Me</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+62 234 123 1234</h2>
            <h2>+62 234 123 1234</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>aril@gmail.com</h2>
            <h2>pprdn@gmail.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>Depok, Jawa Barat, Indonesia</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>AR</span>il <span>PRAD</span>ana</h1>
      </div>
      <h2>Your Complete Web Solution</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png" /></a>
        </div>
      </div>
      <p>Copyright © 2020 Aril. All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->
  <script src="{{ asset('asset-aril/app.js') }}"></script>
</body>

</html>