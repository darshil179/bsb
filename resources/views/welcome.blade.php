<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BSB Metal &amp; Trading — Global Metal Trading</title>
<link rel="stylesheet" href="{{ asset('css/shared.css') }}">
<style>
.hero{min-height:92vh;background:var(--dark);display:grid;grid-template-columns:1fr 1fr;position:relative;overflow:hidden;}
.hero-bg{position:absolute;inset:0;background:url('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=1600&q=80') center/cover;opacity:0.11;}
.hero-left{padding:100px 80px 80px;display:flex;flex-direction:column;justify-content:center;position:relative;z-index:2;}
.hero-badge{display:inline-flex;align-items:center;gap:8px;border:1px solid var(--border);padding:8px 16px;margin-bottom:36px;width:fit-content;}
.hero-badge .pulse{width:7px;height:7px;background:var(--gold);border-radius:50%;animation:pulse 2s infinite;}
.hero-badge span{font-size:9px;letter-spacing:0.2em;text-transform:uppercase;color:var(--gold);font-weight:600;}
@keyframes pulse{0%,100%{opacity:1;transform:scale(1)}50%{opacity:0.4;transform:scale(1.6)}}
.hero h1{font-family:'Cormorant Garamond',serif;font-size:clamp(40px,5vw,72px);font-weight:300;color:var(--white);line-height:1.08;}
.hero h1 em{font-style:italic;color:var(--gold);}
.hero-divider{width:60px;height:1px;background:var(--gold);margin:22px 0;}
.hero-desc{font-size:13.5px;line-height:1.85;color:rgba(255,255,255,0.55);max-width:460px;font-weight:300;margin-bottom:44px;}
.hero-actions{display:flex;gap:14px;flex-wrap:wrap;}
.hero-right{display:flex;flex-direction:column;justify-content:center;padding:100px 70px 80px 40px;position:relative;z-index:2;gap:14px;}
.hero-stat{background:rgba(255,255,255,0.03);border:1px solid var(--border);padding:26px 30px;transition:all 0.3s;}
.hero-stat:hover{background:rgba(201,168,76,0.06);border-color:rgba(201,168,76,0.4);}
.hero-stat .num{font-family:'Cormorant Garamond',serif;font-size:52px;font-weight:300;color:var(--gold);line-height:1;margin-bottom:4px;}
.hero-stat .lbl{font-size:9px;letter-spacing:0.2em;text-transform:uppercase;color:var(--text-light);font-weight:500;}
.hero-stat .dsc{font-size:12px;color:rgba(255,255,255,0.35);margin-top:5px;font-weight:300;}

.metals-section{background:var(--white);padding:100px 60px;}
.metals-header{display:flex;justify-content:space-between;align-items:flex-end;margin-bottom:56px;flex-wrap:wrap;gap:20px;}
.metals-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:2px;}
.metal-card{position:relative;aspect-ratio:3/4;overflow:hidden;cursor:default;}
.metal-card img{width:100%;height:100%;object-fit:cover;transition:transform 0.6s;filter:brightness(0.65);}
.metal-card:hover img{transform:scale(1.07);filter:brightness(0.45);}
.metal-overlay{position:absolute;inset:0;background:linear-gradient(to top,rgba(0,0,0,0.88) 0%,transparent 55%);padding:26px;display:flex;flex-direction:column;justify-content:flex-end;}
.metal-tag{position:absolute;top:18px;right:18px;background:var(--gold);color:var(--dark);font-size:8px;font-weight:700;letter-spacing:0.15em;text-transform:uppercase;padding:4px 10px;}
.metal-card h3{font-family:'Cormorant Garamond',serif;font-size:26px;font-weight:400;color:var(--white);margin-bottom:5px;}
.metal-card p{font-size:11px;color:rgba(255,255,255,0.55);line-height:1.5;max-height:0;overflow:hidden;transition:max-height 0.4s;}
.metal-card:hover p{max-height:80px;}

.process-strip{background:var(--dark);padding:100px 60px;}
.process-steps{display:grid;grid-template-columns:repeat(5,1fr);gap:2px;margin-top:56px;}
.p-step{background:rgba(255,255,255,0.03);border:1px solid var(--border);padding:36px 24px;transition:all 0.3s;}
.p-step:hover{background:rgba(201,168,76,0.06);border-color:rgba(201,168,76,0.4);}
.p-num{font-family:'Cormorant Garamond',serif;font-size:60px;font-weight:300;color:rgba(201,168,76,0.12);line-height:1;margin-bottom:18px;}
.p-step h4{font-size:10px;font-weight:700;letter-spacing:0.12em;text-transform:uppercase;color:var(--gold);margin-bottom:10px;}
.p-step p{font-size:11.5px;line-height:1.7;color:rgba(255,255,255,0.4);font-weight:300;}

.why-section{display:grid;grid-template-columns:1fr 1fr;gap:0;}
.why-image img{width:100%;height:100%;object-fit:cover;min-height:500px;display:block;}
.why-content{padding:80px 70px;background:var(--cream);display:flex;flex-direction:column;justify-content:center;}
.why-points{margin-top:36px;display:flex;flex-direction:column;}
.why-point{display:flex;align-items:flex-start;gap:16px;padding:16px 0;border-bottom:1px solid rgba(0,0,0,0.06);}
.why-check{width:20px;height:20px;background:var(--gold);display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:2px;}
.why-check svg{width:10px;height:10px;}
.why-text strong{color:var(--text-dark);font-weight:600;display:block;font-size:12px;letter-spacing:0.04em;margin-bottom:2px;}
.why-text span{font-size:12.5px;color:var(--text-mid);font-weight:300;}

.vision-section{background:var(--cream);padding:100px 60px;display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center;}
.vision-pillars{display:flex;flex-direction:column;gap:2px;}
.vision-pillar{background:var(--white);padding:32px 28px;border-left:3px solid transparent;transition:all 0.3s;}
.vision-pillar:hover{border-left-color:var(--gold);}
.vision-pillar h4{font-family:'Cormorant Garamond',serif;font-size:22px;color:var(--text-dark);margin-bottom:8px;}
.vision-pillar p{font-size:12.5px;color:var(--text-mid);line-height:1.7;font-weight:300;}
.vision-img{position:relative;}
.vision-img img{width:100%;aspect-ratio:4/3;object-fit:cover;display:block;}
.vision-img::after{content:'';position:absolute;inset:0;border:1px solid var(--gold);transform:translate(12px,12px);pointer-events:none;}

.serve-section{background:var(--dark);padding:100px 60px;}
.serve-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:2px;margin-top:56px;}
.serve-card{padding:44px 32px;background:rgba(255,255,255,0.03);border:1px solid var(--border);transition:all 0.3s;}
.serve-card:hover{background:rgba(201,168,76,0.06);}
.serve-num{font-family:'Cormorant Garamond',serif;font-size:76px;font-weight:300;color:rgba(201,168,76,0.08);line-height:1;margin-bottom:14px;}
.serve-card h3{font-family:'Cormorant Garamond',serif;font-size:26px;color:var(--white);margin-bottom:14px;}
.serve-card p{font-size:12.5px;line-height:1.75;color:rgba(255,255,255,0.4);font-weight:300;}

@media(max-width:1024px){
  .hero{grid-template-columns:1fr;min-height:auto;}
  .hero-left{padding:80px 24px 40px;}
  .hero-right{padding:0 24px 60px;display:grid;grid-template-columns:1fr 1fr;gap:2px;}
  .metals-section,.process-strip,.vision-section,.serve-section{padding:60px 24px;}
  .metals-grid{grid-template-columns:repeat(2,1fr);}
  .process-steps{grid-template-columns:1fr 1fr;}
  .why-section{grid-template-columns:1fr;}
  .why-image img{min-height:280px;}
  .why-content{padding:50px 24px;}
  .vision-section{grid-template-columns:1fr;gap:40px;}
  .serve-grid{grid-template-columns:1fr 1fr;}
}
@media(max-width:600px){
  .metals-grid,.serve-grid,.process-steps,.hero-right{grid-template-columns:1fr;}
}
</style>
</head>
<body>

<div class="ticker-bar"><div class="ticker-track" id="tickerTrack"></div></div>
<nav>
  <a class="logo" href="{{ route('home') }}">
    <div class="logo-mark">
      <img src="{{ asset('images/logo-BSB.jpeg') }}" alt="BSB Metal & Trading Logo" width="30" height="30">
  </div>
    <div class="logo-text">
      <span class="brand">BSB <em>Metal</em> &amp; Trading</span>
      <span class="tagline">Toronto, Canada &middot; Global Trade</span>
    </div>
  </a>
  <ul class="nav-links">
    <li><a href="{{ route('home') }}" class="active">Home</a></li>
    <li><a href="{{ route('about') }}">About</a></li>
    <li><a href="{{ route('products') }}">Products</a></li>
    <li><a href="{{ route('services') }}">Services</a></li>
    <li><a href="{{ route('process') }}">Process</a></li>
    <li><a href="{{ route('compliance') }}">Compliance</a></li>
    <li><a href="{{ route('sectors') }}">Sectors</a></li>
    <li><a href="{{ route('sectors') }}">FAQ</a></li>
    <li><a href="{{ route('contact') }}" class="nav-cta">Contact</a></li>
  </ul>
  <button class="hamburger" onclick="document.getElementById('mobileMenu').classList.add('open')"><span></span><span></span><span></span></button>
</nav>
<div class="mobile-menu" id="mobileMenu">
  <button class="mobile-close" onclick="document.getElementById('mobileMenu').classList.remove('open')">&#x2715;</button>
  <a href="{{ route('home') }}">Home</a><a href="{{ route('about') }}">About</a><a href="{{ route('products') }}">Products</a>
  <a href="{{ route('services') }}">Services</a><a href="{{ route('process') }}">Process</a><a href="{{ route('compliance') }}">Compliance</a>
  <a href="{{ route('sectors') }}">Sectors</a><a href="{{ route('faq') }}">FAQ</a><a href="{{ route('contact') }}" style="color:var(--gold)">Contact Us</a>
</div>

<!-- HERO -->
<section class="hero">
  <div class="hero-bg"></div>
  <div class="hero-left">
    <div class="hero-badge"><div class="pulse"></div><span>Toronto, Canada &middot; Global Metal Trade</span></div>
    <h1>Global Metal Trading,<br>Built on <em>Compliance</em><br>&amp; Consistency</h1>
    <div class="hero-divider"></div>
    <p class="hero-desc">BSB Metal &amp; Trading sources and supplies ferrous and non-ferrous metals and scrap to verified industrial buyers worldwide &mdash; focused on transparent execution, quality control, and secure trade terms.</p>
    <div class="hero-actions">
      <a class="btn-primary" href="{{ route('contact') }}">Request a Quote</a>
      <a class="btn-outline" href="{{ route('products') }}">View Products</a>
    </div>
  </div>
  <div class="hero-right">
    <div class="hero-stat"><div class="num">40+</div><div class="lbl">Countries Served</div><div class="dsc">Verified buyers &amp; suppliers worldwide</div></div>
    <div class="hero-stat"><div class="num">8</div><div class="lbl">Metal Categories</div><div class="dsc">Ferrous, Non-Ferrous &amp; Specialty grades</div></div>
    <div class="hero-stat"><div class="num">100%</div><div class="lbl">Documentation Driven</div><div class="dsc">SGS / BV / Intertek inspection options</div></div>
  </div>
</section>

<!-- TRUST BAR -->
<div class="trust-bar">
  <div class="trust-item"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>SGS / Bureau Veritas / Intertek</div>
  <div class="trust-item"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg>Incoterms&reg; 2020 &mdash; FOB / CFR / CIF</div>
  <div class="trust-item"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/></svg>LC / SBLC / DLC Payment Structures</div>
  <div class="trust-item"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>Clean Documentation Always</div>
</div>

<!-- METALS -->
<section class="metals-section">
  <div class="metals-header">
    <div><div class="section-label">What We Trade</div><h2 class="section-title">Metals We <em>Handle</em></h2></div>
    <a class="btn-primary" href="{{ route('products') }}">All Products &rarr;</a>
  </div>
  <div class="metals-grid">
    <div class="metal-card"><img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&q=80" alt="Aluminium"><div class="metal-overlay"><span class="metal-tag">Non-Ferrous</span><h3>Aluminium</h3><p>UBC, Taint/Tabor, Tense, Ingots A7 &mdash; baled or loose per spec</p></div></div>
    <div class="metal-card"><img src="https://images.unsplash.com/photo-1567427017947-545c5f8d16ad?w=600&q=80" alt="Copper"><div class="metal-overlay"><span class="metal-tag">Non-Ferrous</span><h3>Copper</h3><p>ISRI-graded scrap &mdash; Barley, Berry, Birch per spec</p></div></div>
    <div class="metal-card"><img src="https://images.unsplash.com/photo-1587293852726-70cdb56c2866?w=600&q=80" alt="Steel"><div class="metal-overlay"><span class="metal-tag">Ferrous</span><h3>Steel / HMS</h3><p>HMS 1&amp;2, beams, sheet, rebar &mdash; other ferrous on request</p></div></div>
    <div class="metal-card"><img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=600&q=80" alt="Brass"><div class="metal-overlay"><span class="metal-tag">Non-Ferrous</span><h3>Brass &amp; Zinc</h3><p>Brass scrap grades and zinc die cast per buyer specification</p></div></div>
  </div>
</section>

<!-- PROCESS -->
<section class="process-strip">
  <div class="section-label">How We Work</div>
  <h2 class="section-title section-title-light">Trade Execution <em>Process</em></h2>
  <p class="section-body section-body-light">Every transaction follows a disciplined five-step structure &mdash; from spec confirmation to final documentation.</p>
  <div class="process-steps">
    <div class="p-step"><div class="p-num">01</div><h4>Requirement Confirmation</h4><p>Grade/spec, quantity, destination, incoterm, inspection requirement, payment timeline</p></div>
    <div class="p-step"><div class="p-num">02</div><h4>Sourcing &amp; Offer</h4><p>Supplier capacity, packing method, price offer with validity, photos/yard details</p></div>
    <div class="p-step"><div class="p-num">03</div><h4>Contract &amp; Security</h4><p>SPA, IMFPA/NCNDA if applicable. Payment: LC/SBLC/DLC per counterparty profile</p></div>
    <div class="p-step"><div class="p-num">04</div><h4>Inspection &amp; Stuffing</h4><p>SGS/BV/Intertek by agreed agency. Quantity, quality, radiation checks &amp; stuffing</p></div>
    <div class="p-step"><div class="p-num">05</div><h4>Shipment &amp; Docs</h4><p>BL, COO, invoice, packing list, inspection cert &mdash; courier or soft copy to buyer</p></div>
  </div>
</section>

<!-- WHY BSB -->
<div class="why-section">
  <div class="why-image"><img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=800&q=80" alt="Operations"></div>
  <div class="why-content">
    <div class="section-label">Why Choose Us</div>
    <h2 class="section-title">Execution Matters<br>More Than <em>Promises</em></h2>
    <p class="section-body">We operate with a focus on process and control &mdash; so both supplier and buyer can scale monthly business with full confidence.</p>
    <div class="why-points">
      <div class="why-point"><div class="why-check"><svg fill="none" stroke="white" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></div><div class="why-text"><strong>Clear Specs &amp; Confirmed Packing</strong><span>Pre-agreed standards &mdash; no surprises at port</span></div></div>
      <div class="why-point"><div class="why-check"><svg fill="none" stroke="white" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></div><div class="why-text"><strong>Pre-Shipment Inspection Options</strong><span>SGS, BV, Intertek or mutually agreed agency</span></div></div>
      <div class="why-point"><div class="why-check"><svg fill="none" stroke="white" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></div><div class="why-text"><strong>Clean Documentation Always</strong><span>BL, COO, invoice, packing list &mdash; every shipment</span></div></div>
      <div class="why-point"><div class="why-check"><svg fill="none" stroke="white" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></div><div class="why-text"><strong>Market-Tied Transparent Pricing</strong><span>Pricing logic tied to LME/market conditions</span></div></div>
      <div class="why-point"><div class="why-check"><svg fill="none" stroke="white" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></div><div class="why-text"><strong>Long-Term Partnership Focus</strong><span>Repeat business over one-time transactions</span></div></div>
    </div>
  </div>
</div>

<!-- VISION -->
<section class="vision-section">
  <div>
    <div class="section-label">Our Vision</div>
    <h2 class="section-title">Leading with <em>Integrity</em><br>&amp; Innovation</h2>
    <p class="section-body" style="margin-bottom:32px">Committed to sustainable metal trading solutions that minimize environmental impact while maximizing resource recovery &mdash; across 40+ countries.</p>
    <div class="vision-pillars">
      <div class="vision-pillar"><h4>Sustainability</h4><p>Core to our global mission &mdash; responsible sourcing and trading practices that reduce environmental impact.</p></div>
      <div class="vision-pillar"><h4>Innovation</h4><p>Continuously improving processes and partnerships to deliver better outcomes for every counterparty.</p></div>
      <div class="vision-pillar"><h4>Global Reach</h4><p>An extensive international network spanning 40+ countries &mdash; seamless cross-border metal trading.</p></div>
    </div>
  </div>
  <div class="vision-img"><img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=800&q=80" alt="Global Operations"></div>
</section>

<!-- SERVE -->
<section class="serve-section">
  <div class="section-label">Our Clients</div>
  <h2 class="section-title section-title-light">Who We <em>Serve</em></h2>
  <div class="serve-grid">
    <div class="serve-card"><div class="serve-num">01</div><h3>Downstream Processors &amp; Smelters</h3><p>Industrial buyers requiring consistent monthly supply with verified origin and full documentation for downstream manufacturing inputs.</p></div>
    <div class="serve-card"><div class="serve-num">02</div><h3>Foundries &amp; Manufacturing Units</h3><p>High-volume consumers needing reliable scrap grades to specification with packing and loading standards matched to their process requirements.</p></div>
    <div class="serve-card"><div class="serve-num">03</div><h3>Large Importers &amp; Trading Houses</h3><p>Established trading entities looking for a reliable supply-side partner with documented origin, clean paperwork, and structured trade terms.</p></div>
  </div>
</section>

<!-- CTA -->
<div class="cta-band">
  <h2>Ready to buy or supply<br><em>metals reliably?</em></h2>
  <div class="cta-band-actions">
    <a class="btn-dark" href="{{ route('contact') }}">Request a Quote</a>
    <a class="btn-white-outline" href="{{ route('contact') }}">Become a Supplier</a>
  </div>
</div>

<footer>
  <div class="footer-top">
    <div class="footer-brand">
      <a class="logo" href="{{ route('home') }}"><div class="logo-mark"><span>B</span></div><div class="logo-text"><span class="brand" style="color:var(--white)">BSB <em>Metal</em> &amp; Trading</span><span class="tagline">Toronto, Canada &middot; Global Trade</span></div></a>
      <p>Sourcing and supplying ferrous and non-ferrous metals and scrap to verified industrial buyers worldwide &mdash; built on compliance, documentation, and consistent execution.</p>
    </div>
    <div class="footer-col"><h4>Pages</h4><ul><li><a href="{{ route('home') }}">Home</a></li><li><a href="{{ route('about') }}">About</a></li><li><a href="{{ route('products') }}">Products</a></li><li><a href="{{ route('services') }}">Services</a></li><li><a href="{{ route('process') }}">Process</a></li><li><a href="{{ route('compliance') }}">Compliance</a></li><li><a href="{{ route('sectors') }}">Sectors</a></li><li><a href="{{ route('faq') }}">FAQ</a></li><li><a href="{{ route('contact') }}">Contact</a></li></ul></div>
    <div class="footer-col"><h4>Products</h4><ul><li><a href="{{ route('products') }}">UBC Aluminium Scrap</a></li><li><a href="{{ route('products') }}">Taint/Tabor &amp; Tense</a></li><li><a href="{{ route('products') }}">Aluminium Ingots A7</a></li><li><a href="{{ route('products') }}">Copper &amp; Brass Scrap</a></li><li><a href="{{ route('products') }}">Steel &amp; HMS 1&amp;2</a></li><li><a href="{{ route('products') }}">Stainless 304/316/430</a></li></ul></div>
    <div class="footer-col"><h4>Contact</h4><ul><li><a href="#">Saurav Bhuva &mdash; Principal</a></li><li><a href="tel:+15146296870">+1 514 629 6870</a></li><li><a href="mailto:saurav.bhuva@bsbmetals.com">saurav.bhuva@bsbmetals.com</a></li><li><a href="#">Toronto, Ontario, Canada</a></li></ul></div>
  </div>
  <div class="footer-bottom">
    <p>&copy; 2026 BSB Metal &amp; Trading. All rights reserved.</p>
    <div class="footer-certs"><span>SGS</span><span>Bureau Veritas</span><span>Intertek</span><span>Incoterms&reg; 2020</span></div>
  </div>
</footer>

<script>
const td=['Aluminium UBC Scrap','Copper — ISRI Graded','Brass & Zinc','HMS 1 & 2 Ferrous','Taint/Tabor','Tense Extrusion 6063','Aluminium Ingots A7','Stainless 304/316/430','FOB · CFR · CIF','LC · SBLC · DLC','SGS · BV · Intertek','Toronto, Canada · Global Trade'];
const tr=document.getElementById('tickerTrack');
[...td,...td].forEach(t=>{const e=document.createElement('span');e.className='ticker-item';e.innerHTML=`<span class="dot">●</span> <strong>${t}</strong>`;tr.appendChild(e);});
</script>
</body>
</html>
