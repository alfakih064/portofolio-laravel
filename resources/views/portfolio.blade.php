<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Al Fakih Shah | UI/UX Designer Portfolio</title>

  <!-- === CSS === -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<script src="{{ asset('assets/js/script.js') }}"></script>
<body>
  <!-- Navbar -->
  <header>
    <nav class="navbar">
      <div class="logo">Al Fakih Shah</div>
      <ul class="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <a href="#contact" class="btn talk-btn">Let's Talk</a>
      <div class="menu-toggle">☰</div>
    </nav>
  </header>

  <!-- Hero Section -->
  <section class="hero" id="home">
    <div class="hero-text">
      <p>Hello, I’m a</p>
      <h1>UI & UX <span>Designer.</span></h1>
      <p>
        Hi! I'm Al Fakih Shah Achmad Ilham Pacongai, a passionate UI/UX Designer 
        who loves turning complex problems into elegant designs.
      </p>
      <a href="#portfolio" class="btn primary-btn">View Portfolio</a>
    </div>

    <div class="hero-img">
      <img src="{{ asset('assets/img/hero.jpeg') }}" alt="Al Fakih Shah">
    </div>
  </section>

  <!-- About Section -->
  <section class="about" id="about">
    <div class="about-img">
      <img src="{{ asset('assets/img/about.jpeg') }}" alt="Al Fakih Shah">
    </div>

    <div class="about-text">
      <h2>About me</h2>
      <p>
        Hi! I'm Al Fakih Shah, a student at Universitas Negeri Makassar, majoring in Electrical Engineering (GCS Singapore Program). 
        I'm a passionate designer focused on creating user-centered digital experiences. 
        My work combines UI/UX design, web design, and creative branding — blending creativity with functionality 
        to make every project meaningful.
      </p>

      <div class="about-stats">
        <div><h3>5+</h3><p>Years Experience</p></div>
        <div><h3>50+</h3><p>Projects Done</p></div>
        <div><h3>30+</h3><p>Happy Clients</p></div>
      </div>

      <div class="about-buttons">
        <a href="#contact" class="btn primary-btn">Hire Me</a>
        <a href="{{ asset('assets/files/CV-Al-Fakih-Shah.pdf') }}" download class="btn secondary-btn">Download CV</a>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section id="services" class="services fade-in">
    <h2>Services</h2>
    <div class="service-list">
      <div class="service-card highlight">
        <h3>UI & UX Design</h3>
        <p>Data analysis, wireframes, prototypes, usability testing, and style guides.</p>
      </div>
      <div class="service-card">
        <h3>Graphic Design</h3>
        <p>Visual branding, color systems, typography, and marketing assets.</p>
      </div>
      <div class="service-card">
        <h3>Web Design</h3>
        <p>Responsive websites, landing pages, and interactive design systems.</p>
      </div>
    </div>
  </section>

  <!-- Portfolio -->
  <section id="portfolio" class="portfolio slide-up">
    <h2>Portfolio</h2>
    <div class="portfolio-grid">
      <img src="{{ asset('assets/img/work1.jpeg') }}" alt="Portfolio 1">
      <img src="{{ asset('assets/img/work2.jpeg') }}" alt="Portfolio 2">
      <img src="{{ asset('assets/img/work3.jpeg') }}" alt="Portfolio 3">
      <img src="{{ asset('assets/img/work4.jpeg') }}" alt="Portfolio 4">
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="contact fade-in">
    <h2>Contact</h2>
    <p>Want to collaborate or have a project in mind? Let’s talk!</p>
    <a href="mailto:alfakih064.@gmail.com" class="btn primary-btn">Say Hello</a>
  </section>

  <!-- Footer -->
  <footer>
    <p>© 2025 Al Fakih Shah. All rights reserved.</p>
  </footer>

  <!-- JS -->
  <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
