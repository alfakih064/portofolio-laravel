<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Al Fakih Shah | Home</title>

  <style>
    /* === GENERAL === */
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #0a0a0a;
      color: #ffffff;
      overflow-x: hidden;
    }

    h1, h2, h3 {
      margin: 0;
      font-weight: 700;
    }

    /* === NAVBAR === */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 25px 8%;
      background: rgba(10, 10, 10, 0.95);
      position: fixed;
      width: 100%;
      top: 0;
      z-index: 1000;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .logo {
      font-size: 1.5rem;
      font-weight: bold;
      color: #00ff80;
    }

    .nav-links {
      list-style: none;
      display: flex;
      gap: 30px;
    }

    .nav-links li a {
      color: #fff;
      text-decoration: none;
      font-weight: 500;
      transition: 0.3s;
    }

    .nav-links li a:hover,
    .nav-links li a.active {
      color: #00ff80;
    }

    .btn {
      padding: 10px 20px;
      border-radius: 8px;
      text-decoration: none;
      font-weight: 600;
      transition: 0.3s;
    }

    .talk-btn {
      border: 2px solid #00ff80;
      color: #00ff80;
    }

    .talk-btn:hover {
      background-color: #00ff80;
      color: #000;
    }

    /* === HERO SECTION === */
    .hero {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 160px 10% 80px;
      gap: 50px;
    }

    .hero-content {
      max-width: 50%;
    }

    .hero-content h1 {
      font-size: 3rem;
      color: #fff;
    }

    .hero-content span {
      color: #00ff80;
    }

    .hero-content p {
      font-size: 1.2rem;
      color: #ccc;
      margin: 20px 0;
      line-height: 1.6;
    }

    .hero-buttons {
      margin-top: 20px;
    }

    .primary-btn {
      background-color: #00ff80;
      color: #000;
    }

    .secondary-btn {
      border: 2px solid #00ff80;
      color: #00ff80;
      margin-left: 10px;
    }

    .secondary-btn:hover {
      background-color: #00ff80;
      color: #000;
    }

    .hero-img img {
      width: 320px;
      border-radius: 20px;
      box-shadow: 0 0 25px #00ff80;
    }

    /* === HIGHLIGHT SECTION === */
    .highlights {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 50px;
      padding: 80px 0;
      background: #111;
      text-align: center;
    }

    .highlight-card {
      background: #0f0f0f;
      padding: 40px 50px;
      border-radius: 15px;
      box-shadow: 0 0 20px rgba(0, 255, 128, 0.1);
      transition: 0.3s;
    }

    .highlight-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 0 25px rgba(0, 255, 128, 0.3);
    }

    .highlight-card h3 {
      color: #00ff80;
      font-size: 2rem;
    }

    /* === CONTACT CTA === */
    .contact-cta {
      text-align: center;
      padding: 100px 10%;
      background-color: #0a0a0a;
    }

    .contact-cta h2 {
      font-size: 2.5rem;
      color: #fff;
    }

    .contact-cta p {
      color: #ccc;
      margin: 20px 0 40px;
      font-size: 1.1rem;
    }

    /* === FOOTER === */
    footer {
      text-align: center;
      padding: 30px;
      background: #000;
      color: #777;
      font-size: 0.9rem;
    }

    @media (max-width: 900px) {
      .hero {
        flex-direction: column;
        text-align: center;
        padding: 140px 5% 60px;
      }
      .hero-content {
        max-width: 100%;
      }
      .hero-img img {
        width: 250px;
      }
      .highlights {
        flex-direction: column;
        gap: 30px;
      }
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <header>
    <nav class="navbar">
      <div class="logo">Al Fakih Shah</div>
      <ul class="nav-links">
        <li><a href="{{ url('/') }}" class="active">Home</a></li>
        <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
        <li><a href="{{ url('/case-studies') }}">Case Studies</a></li>
        <li><a href="{{ url('/blog') }}">Blog</a></li>
      </ul>
      <a href="#contact" class="btn talk-btn">Let's Talk</a>
      <div class="menu-toggle">☰</div>
    </nav>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-content">
      <h1>Hello, I'm <span>Al Fakih Shah</span></h1>
      <p>A passionate UI/UX Designer crafting elegant and user-centered experiences.</p>
      <div class="hero-buttons">
        <a href="{{ url('/portfolio') }}" class="btn primary-btn">View Portfolio</a>
        <a href="{{ url('/case-studies') }}" class="btn secondary-btn">Case Studies</a>
        <a href="{{ url('/blog') }}" class="btn secondary-btn">Read Blog</a>
      </div>
    </div>
    <div class="hero-img">
      <img src="{{ asset('assets/img/hero.jpeg') }}" alt="Al Fakih Shah">
    </div>
  </section>

  <!-- Highlight Section -->
  <section class="highlights">
    <div class="highlight-card">
      <h3>5+</h3>
      <p>Years Experience</p>
    </div>
    <div class="highlight-card">
      <h3>50+</h3>
      <p>Projects Completed</p>
    </div>
    <div class="highlight-card">
      <h3>30+</h3>
      <p>Happy Clients</p>
    </div>
  </section>

  <!-- Contact CTA -->
  <section class="contact-cta" id="contact">
    <h2>Let’s Collaborate!</h2>
    <p>Have a project idea or want to work together? Let’s create something amazing.</p>
    <a href="mailto:alfakih064.@gmail.com" class="btn primary-btn">Say Hello</a>
  </section>

  <!-- Footer -->
  <footer>
    <p>© 2025 Al Fakih Shah. All Rights Reserved.</p>
  </footer>
</body>
</html>
