<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Your Metals Company - Responsive Single Page</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', system-ui, sans-serif;
      background: #f8f9fa;
      color: #333;
      line-height: 1.6;
    }

    /* ── Navigation ── */
    nav {
      position: fixed;
      top: 0;
      width: 100%;
      background: rgba(40, 40, 40, 0.88);
      backdrop-filter: blur(8px);
      z-index: 1000;
      transition: background 0.4s ease;
    }

    nav.scrolled {
      background: rgba(30, 30, 30, 0.98);
    }

    .nav-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 70px;
    }

    .logo {
      color: white;
      font-size: clamp(1.4rem, 5vw, 1.7rem);
      font-weight: 700;
      text-decoration: none;
    }

    .nav-links {
      display: flex;
      gap: 2.2rem;
    }

    .nav-links a {
      color: white;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s ease, transform 0.3s ease;
    }

    .nav-links a:hover {
      color: #a0c0ff;
      transform: translateY(-2px);
    }

    /* Hamburger */
    .hamburger {
      display: none;
      flex-direction: column;
      gap: 6px;
      cursor: pointer;
      z-index: 1100;
    }

    .hamburger span {
      width: 28px;
      height: 3px;
      background: white;
      border-radius: 2px;
      transition: all 0.35s ease;
    }

    .hamburger.active span:nth-child(1) { transform: rotate(45deg) translate(6px, 6px); }
    .hamburger.active span:nth-child(2) { opacity: 0; }
    .hamburger.active span:nth-child(3) { transform: rotate(-45deg) translate(7px, -7px); }

    /* ── Hero ── */
    .hero {
      position: relative;
      height: 100vh;
      min-height: 620px;
      overflow: hidden;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 0 20px;
      margin-top: 70px;
    }

    .hero video {
      position: absolute;
      top: 50%;
      left: 50%;
      min-width: 100%;
      min-height: 100%;
      width: auto;
      height: auto;
      transform: translate(-50%, -50%);
      object-fit: cover;
      z-index: -2;
    }

    .hero::after {
      content: '';
      position: absolute;
      inset: 0;
      background: rgba(0,0,0,0.65);
      z-index: -1;
    }

    .hero-content {
      max-width: 960px;
      opacity: 0;
      transform: translateY(40px);
      transition: opacity 1.2s ease, transform 1.2s ease;
    }

    .hero-content.visible {
      opacity: 1;
      transform: translateY(0);
    }

    .hero h1 {
      font-size: clamp(2.6rem, 8vw, 4.5rem);
      margin-bottom: 1.2rem;
      font-weight: 700;
      letter-spacing: -1px;
      text-shadow: 0 3px 12px rgba(0,0,0,0.6);
    }

    .hero p {
      font-size: clamp(1.1rem, 4vw, 1.45rem);
      margin-bottom: 2.4rem;
      max-width: 780px;
      margin-left: auto;
      margin-right: auto;
      opacity: 0.97;
    }

    .btn {
      display: inline-block;
      padding: clamp(12px, 3vw, 16px) clamp(24px, 5vw, 36px);
      margin: 10px;
      background: #e0e0e0;
      color: #222;
      text-decoration: none;
      font-weight: 600;
      border-radius: 6px;
      transition: all 0.35s ease;
      border: 1px solid #ccc;
      min-width: 140px;
      text-align: center;
    }

    .btn:hover {
      background: #d0d0d0;
      transform: translateY(-4px) scale(1.04);
      box-shadow: 0 10px 24px rgba(0,0,0,0.22);
    }

    .btn-primary {
      background: #4a6fa5;
      color: white;
      border-color: #3a5a8a;
    }

    .btn-primary:hover {
      background: #3a5a8a;
      transform: translateY(-4px) scale(1.04);
    }

    /* ── Sections ── */
    section {
      padding: clamp(60px, 12vw, 110px) 20px clamp(50px, 10vw, 90px);
      text-align: center;
      opacity: 0;
      transform: translateY(60px);
      transition: opacity 0.9s ease-out, transform 0.9s ease-out;
    }

    section.visible {
      opacity: 1;
      transform: translateY(0);
    }

    .content-wrapper {
      max-width: 1100px;
      margin: 0 auto;
    }

    h2 {
      font-size: clamp(2.2rem, 6vw, 3rem);
      margin-bottom: 1.6rem;
      color: #222;
      font-weight: 700;
    }

    p.lead {
      font-size: clamp(1.15rem, 3.5vw, 1.35rem);
      max-width: 820px;
      margin: 0 auto 2.5rem;
      color: #555;
    }

    .gray-section {
      background: #e9ecef;
    }

    /* Services cards */
    .services-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 2rem;
      margin: 3rem 0;
    }

    .service-card {
      background: white;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 4px 16px rgba(0,0,0,0.08);
      transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .service-card:hover {
      transform: translateY(-10px) scale(1.03);
      box-shadow: 0 12px 32px rgba(0,0,0,0.14);
    }

    .service-card h3 {
      margin-bottom: 1rem;
      color: #2c3e50;
    }

    /* Contact form */
    form {
      max-width: 680px;
      margin: 3rem auto 0;
      text-align: left;
    }

    label {
      display: block;
      margin: 1.4rem 0 0.6rem;
      font-weight: 500;
      color: #444;
    }

    input, textarea {
      width: 100%;
      padding: 12px 16px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 1rem;
      transition: border-color 0.3s ease;
    }

    input:focus, textarea:focus {
      border-color: #4a6fa5;
      outline: none;
    }

    textarea {
      min-height: 140px;
    }

    button[type="submit"] {
      margin-top: 2rem;
      padding: 14px 40px;
      background: #4a6fa5;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 1.1rem;
      cursor: pointer;
      transition: background 0.3s ease, transform 0.3s ease;
    }

    button[type="submit"]:hover {
      background: #3a5a8a;
      transform: translateY(-3px);
    }

    .contact-info {
      margin: 3rem 0;
      font-size: 1.1rem;
      color: #444;
    }

    footer {
      background: #2c2c2c;
      color: #ccc;
      text-align: center;
      padding: 60px 20px 40px;
      font-size: 0.95rem;
    }

    /* ── Mobile-first media queries ── */
    @media (min-width: 850px) {
      .nav-links {
        display: flex !important;
      }

      .hamburger {
        display: none;
      }

      .services-grid {
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      }
    }

    @media (max-width: 849px) {
      .nav-links {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        background: rgba(40, 40, 40, 0.98);
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 3rem;
        transform: translateX(100%);
        transition: transform 0.45s cubic-bezier(0.68, -0.55, 0.265, 1.55);
      }

      .nav-links.active {
        transform: translateX(0);
      }

      .nav-links a {
        font-size: 1.6rem;
      }

      section {
        padding-left: 15px;
        padding-right: 15px;
      }
    }

    @media (max-width: 480px) {
      .hero h1 { font-size: 2.8rem; }
      .hero p  { font-size: 1.15rem; }
      .btn     { padding: 12px 28px; font-size: 1rem; min-width: 120px; }
    }
  </style>
</head>
<body>

  <!-- Navigation -->
  <nav id="nav">
    <div class="nav-container">
      <a href="#" class="logo">Your Metals Co.</a>

      <div class="nav-links" id="navLinks">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#contact">Contact</a>
      </div>

      <div class="hamburger" id="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <section id="home" class="hero">
    <video autoplay muted loop playsinline>
      <source src="https://videos.pexels.com/video-files/29848606/29848606-hd_1920_1080_30fps.mp4" type="video/mp4">
    </video>

    <div class="hero-content" id="heroContent">
      <h1>Positioned for Sustainability</h1>
      <p>We are a global leader in supply chain management of critical and recycled metals — connecting supply and demand to enable innovation in sustainable technologies worldwide.</p>
      <div>
        <a href="#services" class="btn btn-primary">Our Services</a>
        <a href="#contact" class="btn">Get in Touch</a>
      </div>
    </div>
  </section>

  <!-- About -->
  <section id="about" class="gray-section">
    <div class="content-wrapper">
      <h2>About Us</h2>
      <p class="lead">
        For over 30 years, we have been a trusted partner in the global metals industry. Headquartered in North America and operating across more than 50 countries, we specialize in critical metals, recycled materials, and sustainable supply chains.
      </p>
      <p class="lead">
        We bridge regions of abundance with areas of high demand — delivering copper, aluminium, zinc, nickel, steel, and more — while prioritizing carbon neutrality and responsible sourcing.
      </p>
    </div>
  </section>

  <!-- Services -->
  <section id="services">
    <div class="content-wrapper">
      <h2>Our Services</h2>
      <p class="lead">
        Comprehensive end-to-end solutions for critical metals supply chains.
      </p>

      <div class="services-grid">
        <div class="service-card">
          <h3>Supply Chain Management</h3>
          <p>Sourcing, marketing, financing, logistics, inventory & risk hedging across continents.</p>
        </div>
        <div class="service-card">
          <h3>Recycled & Primary Metals</h3>
          <p>Major supplier of recycled copper and critical materials for sustainable production.</p>
        </div>
        <div class="service-card">
          <h3>Strategic Partnerships</h3>
          <p>Long-term collaborations enabling large-scale sustainable metal output.</p>
        </div>
      </div>

      <a href="#contact" class="btn btn-primary">Discuss Your Needs</a>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="gray-section">
    <div class="content-wrapper">
      <h2>Contact Us</h2>
      <p class="lead">
        Reach out to discuss your metals supply needs.
      </p>

      <div class="contact-info">
        <p><strong>Email:</strong> info@yourcompany.com</p>
        <p><strong>Phone:</strong> +1 (314) 863-6699</p>
        <p><strong>Address:</strong><br>7733 Forsyth Blvd., Suite 300<br>St. Louis, MO 63105, USA</p>
      </div>

      <form id="contact-form">
        <label for="name">Name</label>
        <input type="text" id="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" required>

        <label for="message">Message</label>
        <textarea id="message" required placeholder="Your inquiry..."></textarea>

        <button type="submit">Send Message</button>
      </form>
    </div>
  </section>

  <footer>
    <p>© 2026 Your Metals Company — Toronto, Canada | St. Louis, USA</p>
  </footer>

  <script>
    // Hamburger toggle
    const hamburger = document.getElementById('hamburger');
    const navLinks = document.getElementById('navLinks');

    hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('active');
      navLinks.classList.toggle('active');
    });

    // Close mobile menu when clicking a link
    navLinks.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        hamburger.classList.remove('active');
        navLinks.classList.remove('active');
      });
    });

    // Smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', e => {
        e.preventDefault();
        document.querySelector(anchor.getAttribute('href')).scrollIntoView({ behavior: 'smooth' });
      });
    });

    // Nav scroll effect
    window.addEventListener('scroll', () => {
      document.getElementById('nav').classList.toggle('scrolled', window.scrollY > 80);
    });

    // Fade-in / slide-up on scroll (Intersection Observer)
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    }, { threshold: 0.12 });

    document.querySelectorAll('section, .hero-content').forEach(el => {
      observer.observe(el);
    });

    // Form demo submit
    document.getElementById('contact-form').addEventListener('submit', e => {
      e.preventDefault();
      alert('Message sent (demo mode)');
    });
  </script>
</body>
</html>