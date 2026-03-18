<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Products &mdash; BSB Metal &amp; Trading</title>
<link rel="stylesheet" href="{{ asset('css/shared.css') }}">
<style>
.pw{padding:100px 60px;background:var(--white);}
.ch{display:flex;align-items:center;gap:16px;margin-bottom:28px;padding-bottom:16px;border-bottom:1px solid var(--cream-dark);}
.cb{background:var(--dark);color:var(--gold);font-size:8px;font-weight:700;letter-spacing:0.2em;text-transform:uppercase;padding:5px 12px;border:1px solid var(--border);}
.ch h2{font-family:'Cormorant Garamond',serif;font-size:34px;font-weight:400;color:var(--text-dark);}
.pg{display:grid;grid-template-columns:repeat(3,1fr);gap:2px;margin-bottom:72px;}
.pc{background:var(--cream);padding:38px 30px;border-top:2px solid transparent;transition:all 0.3s;}
.pc:hover{border-top-color:var(--gold);background:var(--cream-dark);}
.st{display:inline-block;background:var(--gold);color:var(--dark);font-size:7.5px;font-weight:700;letter-spacing:0.15em;text-transform:uppercase;padding:3px 8px;margin-bottom:10px;}
.pc h4{font-family:'Cormorant Garamond',serif;font-size:22px;font-weight:500;color:var(--text-dark);margin-bottom:8px;}
.pc p{font-size:12.5px;line-height:1.7;color:var(--text-mid);font-weight:300;}
.nb{background:var(--dark);padding:44px;border-left:3px solid var(--gold);}
.nb h3{font-family:'Cormorant Garamond',serif;font-size:26px;color:var(--white);margin-bottom:10px;}
.nb p{font-size:13px;color:rgba(255,255,255,0.45);line-height:1.8;font-weight:300;max-width:720px;}
.cap-section{background:var(--cream);padding:100px 60px;}
.cg{display:grid;grid-template-columns:repeat(4,1fr);gap:2px;margin-top:56px;}
.cc{background:var(--white);padding:36px 28px;border-bottom:3px solid transparent;transition:all 0.3s;}
.cc:hover{border-bottom-color:var(--gold);}
.cc h4{font-family:'Cormorant Garamond',serif;font-size:20px;margin-bottom:10px;color:var(--text-dark);}
.cc p{font-size:12px;line-height:1.7;color:var(--text-mid);font-weight:300;}
@media(max-width:1024px){.pw,.cap-section{padding:60px 24px;}.pg,.cg{grid-template-columns:1fr 1fr;}}
@media(max-width:600px){.pg,.cg{grid-template-columns:1fr;}}
</style>
</head>
<body>
<div class="ticker-bar"><div class="ticker-track" id="tickerTrack"></div></div>
<nav> </li><li><a href="{{ route('about') }}">About</a></li><li><a href="{{ route('products') }}" class="active">Products</a></li><li><a href="{{ route('services') }}">Services</a></li><li><a href="{{ route('process') }}">Process</a></li><li><a href="{{ route('compliance') }}">Compliance</a></li><li><a href="{{ route('sectors') }}">Sectors</a></li><li><a href="{{ route('faq') }}">FAQ</a></li><li><a href="{{ route('contact') }}" class="nav-cta">Contact</a></li></ul><button class="hamburger" onclick="document.getElementById('mobileMenu').classList.add('open')"><span></span><span></span><span></span></button></nav>
<div class="mobile-menu" id="mobileMenu"><button class="mobile-close" onclick="document.getElementById('mobileMenu').classList.remove('open')">&#x2715;</button><a href="{{ route('home') }}">Home</a><a href="{{ route('about') }}">About</a><a href="{{ route('products') }}">Products</a><a href="{{ route('services') }}">Services</a><a href="{{ route('process') }}">Process</a><a href="{{ route('compliance') }}">Compliance</a><a href="{{ route('sectors') }}">Sectors</a><a href="{{ route('faq') }}">FAQ</a><a href="{{ route('contact') }}" style="color:var(--gold)">Contact</a></div>

<div class="page-hero"><div class="page-hero-bg" style="background-image:url('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=1600&q=80')"></div><div class="page-hero-content"><div class="section-label">What We Trade</div><h1>Metals &amp; Scrap<br><em>We Handle</em></h1><p>All grades handled subject to availability, origin compliance, and buyer specifications. Contact us for current availability and pricing tied to market conditions.</p></div></div>
<section class="pw">
  <div class="ch"><span class="cb">Non-Ferrous</span><h2>Aluminium</h2></div>
  <div class="pg">
    <div class="pc"><span class="st">High Volume</span><h4>UBC Aluminium Scrap</h4><p>Used Beverage Cans &mdash; mixed, loose, or baled per buyer spec. Monthly supply programs available for consistent industrial buyers.</p></div>
    <div class="pc"><span class="st">ISRI Grade</span><h4>Taint / Tabor</h4><p>Aluminium scrap &mdash; old sheet and casting alloy mix. Specifications per ISRI or mutually agreed standard.</p></div>
    <div class="pc"><span class="st">ISRI Grade</span><h4>Tense &mdash; 6063 Extrusion</h4><p>Aluminium extrusion scrap &mdash; 6063 and related grades. Baled or cut per buyer spec. Origin verification and inspection available.</p></div>
    <div class="pc"><span class="st">Refined</span><h4>Aluminium Ingots A7</h4><p>Primary aluminium ingots &mdash; A7 grade and other grades on request. Certificates of origin and quality available.</p></div>
    <div class="pc"><span class="st">On Request</span><h4>Aluminium Cans &amp; Sheet</h4><p>Aluminium cans, sheet, and wire grades available subject to origin and current supplier capacity.</p></div>
  </div>
  <div class="ch"><span class="cb">Non-Ferrous</span><h2>Copper, Brass &amp; Other</h2></div>
  <div class="pg">
    <div class="pc"><span class="st">ISRI Graded</span><h4>Copper Scrap</h4><p>Barley, Berry, Birch and other ISRI copper grades per mutually agreed specification. Subject to compliance and availability.</p></div>
    <div class="pc"><span class="st">ISRI Graded</span><h4>Brass Scrap</h4><p>Brass scrap &mdash; rod, shell, valves, fittings &mdash; yellow brass, red brass, mixed grades per spec.</p></div>
    <div class="pc"><span class="st">On Request</span><h4>Zinc Grades</h4><p>Die cast, galvanized, and sheet zinc. Compliance-dependent &mdash; origin documentation required.</p></div>
    <div class="pc"><span class="st">On Request</span><h4>Lead Grades</h4><p>Battery lead, sheet, and pipe grades subject to compliance, origin verification, and buyer requirements.</p></div>
    <div class="pc"><span class="st">Grades Available</span><h4>Stainless Steel Scrap</h4><p>Grades 304, 316, and 430 stainless steel scrap. Spectroscopic analysis available for grade verification.</p></div>
  </div>
  <div class="ch"><span class="cb">Ferrous</span><h2>Iron &amp; Steel</h2></div>
  <div class="pg">
    <div class="pc"><span class="st">Standard</span><h4>HMS 1 &amp; 2</h4><p>Heavy Melting Scrap grade 1 and 2 &mdash; beams, sheet, rebar, cast. Baled or loose per buyer requirement.</p></div>
    <div class="pc"><span class="st">On Request</span><h4>Cast Iron / Pig Iron</h4><p>Cast iron, wrought iron, and pig iron grades available on request depending on origin and current supply.</p></div>
    <div class="pc"><span class="st">On Request</span><h4>Other Ferrous Grades</h4><p>Additional ferrous grades available on request &mdash; subject to origin, buyer specification, and supply availability.</p></div>
  </div>
  <div class="nb"><h3>Note on Availability</h3><p>Product availability depends on origin, inspection requirements, and buyer specification. All offers are subject to prior sale and final confirmation. KYC documentation is required before proceeding.</p><a class="btn-primary" href="{{ route('contact') }}" style="margin-top:28px;display:inline-block">Request Current Availability</a></div>
</section>
<section class="cap-section">
  <div class="section-label">Processing Capabilities</div>
  <h2 class="section-title">From Raw Scrap to<br><em>Export-Ready</em> Material</h2>
  <div class="cg">
    <div class="cc"><h4>Shredding &amp; Shearing</h4><p>Shredding, shearing, baling and compacting of all metal types &mdash; prepared to buyer packing specification.</p></div>
    <div class="cc"><h4>Magnetic Separation</h4><p>Magnetic separation and eddy current sorting for material purity and contamination control.</p></div>
    <div class="cc"><h4>Spectroscopic Analysis</h4><p>Spectroscopic metal analysis for grade verification &mdash; ensuring material meets agreed specification before shipment.</p></div>
    <div class="cc"><h4>Export Packaging</h4><p>Containerized export packaging for global distribution &mdash; seaworthy bales, bundles, or loose as required.</p></div>
  </div>
</section>
<div class="cta-band"><h2>Looking for a specific grade<br><em>or monthly program?</em></h2><div class="cta-band-actions"><a class="btn-dark" href="{{ route('contact') }}">Submit Your Requirements</a></div></div>
<footer><div class="footer-top">
<div class="footer-brand"><a class="logo" href="{{ route('home') }}"><div class="logo-mark"><span>B</span></div><div class="logo-text"><span class="brand" style="color:var(--white)">BSB <em>Metal</em> &amp; Trading</span><span class="tagline">Toronto, Canada &middot; Global Trade</span></div></a><p>Sourcing and supplying ferrous and non-ferrous metals and scrap to verified industrial buyers worldwide &mdash; built on compliance, documentation, and consistent execution.</p></div>
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