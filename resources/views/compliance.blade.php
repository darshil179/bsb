<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Compliance &mdash; BSB Metal &amp; Trading</title>
<link rel="stylesheet" href="{{ asset('css/shared.css') }}">
<style>
.compw{padding:100px 60px;background:var(--white);}
.cg3{display:grid;grid-template-columns:repeat(3,1fr);gap:2px;margin-top:56px;}
.cc3{background:var(--cream);padding:44px 34px;border-top:3px solid transparent;transition:all 0.3s;}
.cc3:hover{border-top-color:var(--gold);}
.ci{width:46px;height:46px;background:var(--dark);display:flex;align-items:center;justify-content:center;margin-bottom:24px;}
.ci svg{width:20px;height:20px;color:var(--gold);}
.cc3 h3{font-family:'Cormorant Garamond',serif;font-size:24px;font-weight:500;color:var(--text-dark);margin-bottom:12px;}
.cc3 p{font-size:12.5px;line-height:1.7;color:var(--text-mid);font-weight:300;}
.cl{margin-top:14px;list-style:none;}
.cl li{font-size:12px;color:var(--text-mid);padding:5px 0;border-bottom:1px solid rgba(0,0,0,0.05);display:flex;align-items:center;gap:8px;}
.cl li::before{content:'&mdash;';color:var(--gold);font-size:10px;flex-shrink:0;}
.docw{background:var(--cream);padding:100px 60px;}
.dg{display:grid;grid-template-columns:repeat(3,1fr);gap:2px;margin-top:56px;}
.dc{background:var(--white);padding:44px 32px;display:flex;flex-direction:column;gap:14px;border-bottom:3px solid transparent;transition:all 0.3s;}
.dc:hover{border-bottom-color:var(--gold);}
.di{font-size:30px;}
.dc h3{font-family:'Cormorant Garamond',serif;font-size:22px;font-weight:500;color:var(--text-dark);}
.dc p{font-size:12px;line-height:1.7;color:var(--text-mid);font-weight:300;flex:1;}
.dr{font-size:9px;font-weight:700;letter-spacing:0.15em;text-transform:uppercase;color:var(--gold-dark);text-decoration:none;}
.dr:hover{text-decoration:underline;}
@media(max-width:1024px){.compw,.docw{padding:60px 24px;}.cg3,.dg{grid-template-columns:1fr 1fr;}}
@media(max-width:600px){.cg3,.dg{grid-template-columns:1fr;}}
</style>
</head>
<body>
<div class="ticker-bar"><div class="ticker-track" id="tickerTrack"></div></div>
<nav><a class="logo" href="{{ route('home') }}">
<div class="logo-mark">
      <img src="{{ asset('images/logo-BSB.jpeg') }}" alt="BSB Metal & Trading Logo" width="30" height="30">
    </div>  
<div class="logo-text"><span class="brand">BSB <em>Metal</em> &amp; Trading</span><span class="tagline">Toronto, Canada &middot; Global Trade</span></div></a><ul class="nav-links"><li><a href="{{ route('home') }}">Home</a></li><li><a href="{{ route('about') }}">About</a></li><li><a href="{{ route('products') }}">Products</a></li><li><a href="{{ route('services') }}">Services</a></li><li><a href="{{ route('process') }}">Process</a></li><li><a href="{{ route('compliance') }}" class="active">Compliance</a></li><li><a href="{{ route('sectors') }}">Sectors</a></li><li><a href="{{ route('faq') }}">FAQ</a></li><li><a href="{{ route('contact') }}" class="nav-cta">Contact</a></li></ul><button class="hamburger" onclick="document.getElementById('mobileMenu').classList.add('open')"><span></span><span></span><span></span></button></nav>
<div class="mobile-menu" id="mobileMenu"><button class="mobile-close" onclick="document.getElementById('mobileMenu').classList.remove('open')">&#x2715;</button><a href="{{ route('home') }}">Home</a><a href="{{ route('about') }}">About</a><a href="{{ route('products') }}">Products</a><a href="{{ route('services') }}">Services</a><a href="{{ route('process') }}">Process</a><a href="{{ route('compliance') }}">Compliance</a><a href="{{ route('sectors') }}">Sectors</a><a href="{{ route('faq') }}">FAQ</a><a href="{{ route('contact') }}" style="color:var(--gold)">Contact</a></div>

<div class="page-hero"><div class="page-hero-bg" style="background-image:url('https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=1600&q=80')"></div><div class="page-hero-content"><div class="section-label">Compliance &amp; Quality</div><h1>Compliance Is Not<br>a Feature &mdash; It's <em>Foundational</em></h1><p>International scrap and metal trade requires structured compliance. We built BSB around clean documentation, verified inspection, and origin transparency &mdash; from day one.</p></div></div>
<section class="compw">
  <div class="section-label">Our Standards</div>
  <h2 class="section-title">How We Maintain<br><em>Trade Integrity</em></h2>
  <div class="cg3">
    <div class="cc3"><div class="ci"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg></div><h3>Documentation Standards</h3><p>Every shipment supported by complete, accurate export documentation &mdash; coordinated and verified before release.</p><ul class="cl"><li>Commercial Invoice &amp; Packing List</li><li>Bill of Lading (Original + copies)</li><li>Certificate of Origin</li><li>Inspection Certificate (when applicable)</li><li>Radiation-Free Certificate (when required)</li></ul></div>
    <div class="cc3"><div class="ci"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3>Inspection &amp; Quality</h3><p>Independent third-party inspection available for all shipments, covering quantity, quality, and radiation standards.</p><ul class="cl"><li>SGS / Bureau Veritas / Intertek</li><li>Pre-shipment quantity and weight verification</li><li>Contamination and moisture assessment</li><li>Radiation checks where applicable</li><li>Stuffing supervision options available</li></ul></div>
    <div class="cc3"><div class="ci"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/></svg></div><h3>Payment Security</h3><p>Structured, bank-secured payment instruments that protect both buyer and supplier in every transaction.</p><ul class="cl"><li>Letter of Credit at Sight (LC)</li><li>Standby Letter of Credit (SBLC)</li><li>Documentary Letter of Credit (DLC)</li><li>Bank-to-bank transfer terms</li><li>KYC documentation required from all counterparties</li></ul></div>
  </div>
</section>
<section class="docw">
  <div class="section-label">Documents Available</div>
  <h2 class="section-title">Available Upon <em>Request</em></h2>
  <div class="dg">
    <div class="dc"><div class="di">&#128196;</div><h3>Company Profile</h3><p>Full company overview including trade focus, geographic reach, operational standards, and team background.</p><a class="dr" href="{{ route('contact') }}">&rarr; Request Document</a></div>
    <div class="dc"><div class="di">&#128203;</div><h3>Product Specifications</h3><p>Detailed product specs and ISRI references for all grades we handle &mdash; aluminium, copper, brass, and ferrous.</p><a class="dr" href="{{ route('contact') }}">&rarr; Request Document</a></div>
    <div class="dc"><div class="di">&#11088;</div><h3>Past Performance References</h3><p>Trade performance references available for qualified buyers and suppliers upon request with NDA.</p><a class="dr" href="{{ route('contact') }}">&rarr; Request Document</a></div>
    <div class="dc"><div class="di">&#9989;</div><h3>Standard Document Checklist</h3><p>Complete checklist of all documents required for a standard export transaction &mdash; from SPA to final BL.</p><a class="dr" href="{{ route('contact') }}">&rarr; Request Document</a></div>
    <div class="dc"><div class="di">&#128272;</div><h3>KYC Pack</h3><p>Our standard KYC documentation package &mdash; provided to and required from all new trading counterparties.</p><a class="dr" href="{{ route('contact') }}">&rarr; Request Document</a></div>
  </div>
</section>
<div class="cta-band"><h2>Questions about our<br><em>compliance standards?</em></h2><div class="cta-band-actions"><a class="btn-dark" href="{{ route('contact') }}">Contact Us</a></div></div>
<footer><div class="footer-top">
<div class="footer-brand"><a class="logo" href="{{ route('home') }}">
<div class="logo-mark">
      <img src="{{ asset('images/logo-BSB.jpeg') }}" alt="BSB Metal & Trading Logo" width="30" height="30">
    </div>  
<div class="logo-text"><span class="brand" style="color:var(--white)">BSB <em>Metal</em> &amp; Trading</span><span class="tagline">Toronto, Canada &middot; Global Trade</span></div></a><p>Sourcing and supplying ferrous and non-ferrous metals and scrap to verified industrial buyers worldwide &mdash; built on compliance, documentation, and consistent execution.</p></div>
<div class="footer-col"><h4>Pages</h4><ul><li><a href="{{ route('home') }}">Home</a></li><li><a href="{{ route('about') }}">About</a></li><li><a href="{{ route('products') }}">Products</a></li><li><a href="{{ route('services') }}">Services</a></li><li><a href="{{ route('process') }}">Process</a></li><li><a href="{{ route('compliance') }}">Compliance</a></li><li><a href="{{ route('sectors') }}">Sectors</a></li><li><a href="{{ route('faq') }}">FAQ</a></li><li><a href="{{ route('contact') }}">Contact</a></li></ul></div>
<div class="footer-col"><h4>Products</h4><ul><li><a href="{{ route('products') }}">UBC Aluminium Scrap</a></li><li><a href="{{ route('products') }}">Taint/Tabor &amp; Tense</a></li><li><a href="{{ route('products') }}">Aluminium Ingots A7</a></li><li><a href="{{ route('products') }}">Copper &amp; Brass Scrap</a></li><li><a href="{{ route('products') }}">Steel &amp; HMS 1&amp;2</a></li><li><a href="{{ route('products') }}">Stainless 304/316/430</a></li></ul></div>
<div class="footer-col"><h4>Contact</h4><ul><li><a href="#">Saurav Bhuva &mdash; Principal</a></li><li><a href="tel:+15146296870">+1 514 629 6870</a></li><li><a href="mailto:saurav.bhuva@bsbmetals.com">saurav.bhuva@bsbmetals.com</a></li><li><a href="#">Toronto, Ontario, Canada</a></li></ul></div>
</div><div class="footer-bottom"><p>&copy; 2026 BSB Metal &amp; Trading. All rights reserved.</p><div class="footer-certs"><span>SGS</span><span>Bureau Veritas</span><span>Intertek</span><span>Incoterms&reg; 2020</span></div></div></footer>
<script>
const td=['Aluminium UBC','Copper ISRI Graded','Brass Zinc','HMS 1&2 Ferrous','Taint Tabor','Tense 6063','Aluminium Ingots A7','Stainless 304/316','FOB CFR CIF','LC SBLC DLC','SGS BV Intertek','Toronto Canada Global Trade'];
const tr=document.getElementById('tickerTrack');
[...td,...td].forEach(t=>{const e=document.createElement('span');e.className='ticker-item';e.innerHTML='<span class="dot">&#9679;</span> <strong>'+t+'</strong>';tr.appendChild(e);});
</script>
</body>
</html>