<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Process &mdash; BSB Metal &amp; Trading</title>
<link rel="stylesheet" href="{{ asset('css/shared.css') }}">
<style>
.procw{padding:100px 60px;background:var(--white);}
.tl{margin-top:56px;position:relative;}
.tl::before{content:'';position:absolute;left:24px;top:0;bottom:0;width:1px;background:linear-gradient(to bottom,var(--gold),transparent);}
.ts{display:flex;gap:44px;margin-bottom:56px;}
.tm{width:48px;height:48px;background:var(--dark);border:1px solid var(--gold);display:flex;align-items:center;justify-content:center;flex-shrink:0;position:relative;z-index:1;}
.tm span{font-family:'Cormorant Garamond',serif;font-size:20px;color:var(--gold);font-weight:300;}
.tc{padding-top:8px;flex:1;max-width:720px;}
.tc h3{font-family:'Cormorant Garamond',serif;font-size:28px;font-weight:500;color:var(--text-dark);margin-bottom:10px;}
.tc>p{font-size:13px;line-height:1.8;color:var(--text-mid);font-weight:300;margin-bottom:14px;}
.tl2{list-style:none;display:flex;flex-direction:column;gap:7px;}
.tl2 li{font-size:12px;color:var(--text-mid);display:flex;align-items:flex-start;gap:10px;}
.tl2 li::before{content:'&mdash;';color:var(--gold);flex-shrink:0;}
.mils{background:var(--dark);padding:80px 60px;}
.mg{display:grid;grid-template-columns:repeat(4,1fr);gap:2px;margin-top:56px;}
.mc{background:rgba(255,255,255,0.03);border:1px solid var(--border);padding:36px 28px;transition:all 0.3s;}
.mc:hover{background:rgba(201,168,76,0.06);}
.mn{font-family:'Cormorant Garamond',serif;font-size:56px;font-weight:300;color:rgba(201,168,76,0.12);line-height:1;margin-bottom:14px;}
.mc h4{font-family:'Cormorant Garamond',serif;font-size:22px;color:var(--white);margin-bottom:10px;}
.mc p{font-size:12px;line-height:1.7;color:rgba(255,255,255,0.4);font-weight:300;}
@media(max-width:1024px){.procw,.mils{padding:60px 24px;}.tl::before{display:none;}.ts{flex-direction:column;gap:16px;}.mg{grid-template-columns:1fr 1fr;}}
@media(max-width:600px){.mg{grid-template-columns:1fr;}}
</style>
</head>
<body>
<div class="ticker-bar"><div class="ticker-track" id="tickerTrack"></div></div>
<nav><a class="logo" href="{{ route('home') }}"><div class="logo-mark"><span>B</span></div><div class="logo-text"><span class="brand">BSB <em>Metal</em> &amp; Trading</span><span class="tagline">Toronto, Canada &middot; Global Trade</span></div></a><ul class="nav-links"><li><a href="{{ route('home') }}">Home</a></li><li><a href="{{ route('about') }}">About</a></li><li><a href="{{ route('products') }}">Products</a></li><li><a href="{{ route('services') }}">Services</a></li><li><a href="{{ route('process') }}" class="active">Process</a></li><li><a href="{{ route('compliance') }}">Compliance</a></li><li><a href="{{ route('sectors') }}">Sectors</a></li><li><a href="{{ route('faq') }}">FAQ</a></li><li><a href="{{ route('contact') }}" class="nav-cta">Contact</a></li></ul><button class="hamburger" onclick="document.getElementById('mobileMenu').classList.add('open')"><span></span><span></span><span></span></button></nav>
<div class="mobile-menu" id="mobileMenu"><button class="mobile-close" onclick="document.getElementById('mobileMenu').classList.remove('open')">&#x2715;</button><a href="{{ route('home') }}">Home</a><a href="{{ route('about') }}">About</a><a href="{{ route('products') }}">Products</a><a href="{{ route('services') }}">Services</a><a href="{{ route('process') }}">Process</a><a href="{{ route('compliance') }}">Compliance</a><a href="{{ route('sectors') }}">Sectors</a><a href="{{ route('faq') }}">FAQ</a><a href="{{ route('contact') }}" style="color:var(--gold)">Contact</a></div>

<div class="page-hero"><div class="page-hero-bg" style="background-image:url('https://images.unsplash.com/photo-1565043666747-69f6646db940?w=1600&q=80')"></div><div class="page-hero-content"><div class="section-label">How We Work</div><h1>A Disciplined<br><em>Five-Step Process</em></h1><p>Every transaction at BSB Metal &amp; Trading follows a structured execution process &mdash; from initial spec confirmation through to final documentation. No shortcuts, no ambiguity.</p></div></div>
<section class="procw">
  <div class="section-label">Trade Execution</div>
  <h2 class="section-title">From First Contact to <em>Final Document</em></h2>
  <div class="tl">
    <div class="ts"><div class="tm"><span>1</span></div><div class="tc"><h3>Requirement &amp; Spec Confirmation</h3><p>Before any offer is made, we confirm the complete trade parameters to ensure the offer is accurate and executable.</p><ul class="tl2"><li>Grade/spec and allowed contamination tolerance</li><li>Quantity and shipment schedule (trial or monthly)</li><li>Destination port and agreed Incoterm (FOB/CFR/CIF)</li><li>Inspection requirement and agreed agency</li><li>Payment instrument preference and expected timeline</li></ul></div></div>
    <div class="ts"><div class="tm"><span>2</span></div><div class="tc"><h3>Supplier Sourcing &amp; Offer</h3><p>We identify the right supplier capability for the confirmed requirements and prepare a complete offer package.</p><ul class="tl2"><li>Supplier monthly capacity and loading readiness</li><li>Packing and loading method (baled, loose, bundled)</li><li>FOB price offer with offer validity period</li><li>Photos/videos of available stock (as available)</li><li>Yard details and origin documentation overview</li></ul></div></div>
    <div class="ts"><div class="tm"><span>3</span></div><div class="tc"><h3>Contract &amp; Payment Security</h3><p>All transactions proceed under a signed agreement with payment security confirmed before any loading begins.</p><ul class="tl2"><li>Sales &amp; Purchase Agreement (SPA) &mdash; mutually signed</li><li>IMFPA / NCNDA where intermediaries are involved</li><li>Payment instrument: LC at sight / SBLC / DLC / bank-to-bank</li><li>Agreed document list and procedure timeline</li></ul></div></div>
    <div class="ts"><div class="tm"><span>4</span></div><div class="tc"><h3>Inspection &amp; Stuffing</h3><p>Once contract and payment are in place, we coordinate third-party inspection and container stuffing at the agreed loading port.</p><ul class="tl2"><li>Pre-shipment inspection by agreed agency (SGS/BV/Intertek)</li><li>Quantity verification and weight certificates</li><li>Radiation-free certificate where required</li><li>Stuffing and loading supervision</li><li>Photos/video documentation of loading process</li></ul></div></div>
    <div class="ts"><div class="tm"><span>5</span></div><div class="tc"><h3>Shipment &amp; Documentation</h3><p>Final shipping documents are prepared, couriered or sent electronically, and buyer clearance support is provided as needed.</p><ul class="tl2"><li>Bill of Lading issuance and endorsement</li><li>Commercial Invoice and Packing List</li><li>Certificate of Origin (COO)</li><li>Inspection Certificate and Radiation-Free Certificate</li><li>Courier of original docs / soft copy to buyer's bank</li></ul></div></div>
  </div>
</section>
<section class="mils">
  <div class="section-label">Expansion Timeline</div>
  <h2 class="section-title section-title-light">Strategic Growth <em>Milestones</em></h2>
  <div class="mg">
    <div class="mc"><div class="mn">01</div><h4>Launch Phase</h4><p>Establishing initial trading operations in Canada. Building local supplier relationships in Toronto.</p></div>
    <div class="mc"><div class="mn">02</div><h4>Market Expansion</h4><p>Expanding into European and Asian markets. Establishing key export routes for containerized scrap shipments.</p></div>
    <div class="mc"><div class="mn">03</div><h4>Partnership Development</h4><p>Forming strategic partnerships with suppliers, recycling facilities, and trade organizations globally.</p></div>
    <div class="mc"><div class="mn">04</div><h4>Global Operations</h4><p>Scaling for worldwide metal trading. Full international reach across all major markets &mdash; 40+ country distribution.</p></div>
  </div>
</section>
<div class="cta-band"><h2>Ready to start<br><em>the process?</em></h2><div class="cta-band-actions"><a class="btn-dark" href="{{ route('contact') }}">Submit Your Requirements</a></div></div>
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