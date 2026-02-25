<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title', 'BSB Metal & Trading | Global Metal Trading')</title>
  <meta name="description" content="@yield('meta_description', 'BSB Metal & Trading sources and supplies ferrous and non-ferrous metals and scrap globally with compliance-first execution.')">

  <link rel="preconnect" href="https://images.unsplash.com">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <meta property="og:title" content="BSB Metal & Trading">
  <meta property="og:description" content="Global metal trading. Compliance-first. Reliable execution.">
  <meta property="og:type" content="website">
</head>
<body>

  <div class="noise" aria-hidden="true"></div>

  <header class="site-header" id="top">
    <div class="container header-inner">
      <a class="brand" href="{{ route('home') }}">
        <span class="brand-mark" aria-hidden="true"></span>
        <span class="brand-text">
          <strong>BSB</strong> Metal & Trading
          <small>International Metal Trading • Toronto, Canada</small>
        </span>
      </a>

      <nav class="nav" id="nav">
        <a href="#about">About</a>
        <a href="#products">Products</a>
        <a href="#services">Services</a>
        <a href="#compliance">Compliance</a>
        <a href="#process">How We Work</a>
        <a href="#contact" class="btn btn-sm">Request Quote</a>
      </nav>

      <button class="nav-toggle" id="navToggle" aria-label="Open menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>
  </header>

  <main>
    @yield('content')
  </main>

  <footer class="footer">
    <div class="container footer-inner">
      <div>
        <div class="footer-brand">BSB Metal & Trading</div>
        <p class="muted">Global sourcing & supply of ferrous and non-ferrous metals and scrap with compliance-first execution.</p>
      </div>

      <div class="footer-cols">
        <div>
          <div class="footer-title">Quick Links</div>
          <a href="#products">Products</a>
          <a href="#services">Services</a>
          <a href="#process">Process</a>
          <a href="#contact">Contact</a>
        </div>
        <div>
          <div class="footer-title">Contact</div>
          <a href="tel:+15146296870">+1 514 629 6870</a>
          <a href="mailto:saurav.bhuva@bsbmetals.com">saurav.bhuva@bsbmetals.com</a>
          <span class="muted">Toronto, Canada</span>
        </div>
      </div>
    </div>

    <div class="container footer-bottom">
      <span class="muted">© <span id="year"></span> BSB Metal & Trading. All rights reserved.</span>
      <a class="backtop" href="#top">Back to top ↑</a>
    </div>
  </footer>

  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
