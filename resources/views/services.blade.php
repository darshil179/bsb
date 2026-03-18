<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Services &mdash; BSB Metal &amp; Trading</title>
<link rel="stylesheet" href="{{ asset('css/shared.css') }}">
<style>
.sw{padding:100px 60px;background:var(--white);}
.sg{display:grid;grid-template-columns:1fr 1fr;gap:2px;margin-top:56px;}
.sc{background:var(--cream);padding:52px 44px;border-left:3px solid transparent;transition:all 0.3s;}
.sc:hover{border-left-color:var(--gold);background:var(--cream-dark);}
.sn{font-family:'Cormorant Garamond',serif;font-size:54px;font-weight:300;color:rgba(201,168,76,0.18);line-height:1;margin-bottom:18px;}
.sc h3{font-family:'Cormorant Garamond',serif;font-size:28px;font-weight:500;color:var(--text-dark);margin-bottom:14px;}
.sc p{font-size:13px;line-height:1.8;color:var(--text-mid);font-weight:300;}
.stags{display:flex;flex-wrap:wrap;gap:6px;margin-top:18px;}
.stag{font-size:8.5px;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;color:var(--gold-dark);border:1px solid rgba(201,168,76,0.3);padding:4px 9px;}
.bw{background:var(--dark);padding:100px 60px;}
.bg{display:grid;grid-template-columns:repeat(3,1fr);gap:2px;margin-top:56px;}
.bc{background:rgba(255,255,255,0.03);border:1px solid var(--border);padding:40px 30px;transition:all 0.3s;}
.bc:hover{background:rgba(201,168,76,0.06);}
.bc h4{font-family:'Cormorant Garamond',serif;font-size:24px;color:var(--white);margin-bottom:10px;}
.bc p{font-size:12.5px;line-height:1.75;color:rgba(255,255,255,0.4);font-weight:300;}
@media(max-width:1024px){.sw,.bw{padding:60px 24px;}.sg,.bg{grid-template-columns:1fr;}}
</style>
</head>
<body>
<div class="ticker-bar"><div class="ticker-track" id="tickerTrack"></div></div>
<nav><a class="logo" href="{{ route('home') }}"><div class="logo-mark"><span>B</span></div><div class="logo-text"><span class="brand">BSB <em>Metal</em> &amp; Trading</span><span class="tagline">Toronto, Canada &middot; Global Trade</span></div></a><ul class="nav-links"><li><a href="{{ route('home') }}">Home</a></li><li><a href="{{ route('about') }}">About</a></li><li><a href="{{ route('products') }}">Products</a></li><li><a href="{{ route('services') }}" class="active">Services</a></li><li><a href="{{ route('process') }}">Process</a></li><li><a href="{{ route('compliance') }}">Compliance</a></li><li><a href="{{ route('sectors') }}">Sectors</a></li><li><a href="{{ route('faq') }}">FAQ</a></li><li><a href="{{ route('contact') }}" class="nav-cta">Contact</a></li></ul><button class="hamburger" onclick="document.getElementById('mobileMenu').classList.add('open')"><span></span><span></span><span></span></button></nav>
<div class="mobile-menu" id="mobileMenu"><button class="mobile-close" onclick="document.getElementById('mobileMenu').classList.remove('open')">&#x2715;</button><a href="{{ route('home') }}">Home</a><a href="{{ route('about') }}">About</a><a href="{{ route('products') }}">Products</a><a href="{{ route('services') }}">Services</a><a href="{{ route('process') }}">Process</a><a href="{{ route('compliance') }}">Compliance</a><a href="{{ route('sectors') }}">Sectors</a><a href="{{ route('faq') }}">FAQ</a><a href="{{ route('contact') }}" style="color:var(--gold)">Contact</a></div>

<div class="page-hero"><div class="page-hero-bg" style="background-image:url('https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=1600&q=80')"></div><div class="page-hero-content"><div class="section-label">What We Do</div><h1>Trade Services Built<br>for <em>Industrial Scale</em></h1><p>From global sourcing and inspection coordination to documentation management and supplier onboarding &mdash; we handle the full trade execution stack.</p></div></div>
<section class="sw">
  <div class="section-label">Our Services</div>
  <h2 class="section-title">End-to-End Trade <em>Execution</em></h2>
  <div class="sg">
    <div class="sc"><div class="sn">01</div><h3>Global Sourcing &amp; Supply Programs</h3><p>We source metals and scrap from reliable yards and verified networks globally. For consistent buyers, we structure monthly supply programs based on agreed specs, inspection requirements, and payment security.</p><div class="stags"><span class="stag">Monthly Programs</span><span class="stag">Verified Yards</span><span class="stag">Global Network</span></div></div>
    <div class="sc"><div class="sn">02</div><h3>Import/Export Trade Execution</h3><p>Full support for Incoterms&reg; 2020 transactions under FOB, CFR, and CIF. We coordinate shipping, freight, and port logistics &mdash; from stuffing supervision at origin to document courier to buyer's bank.</p><div class="stags"><span class="stag">FOB / CFR / CIF</span><span class="stag">Incoterms&reg; 2020</span><span class="stag">Freight Coordination</span></div></div>
    <div class="sc"><div class="sn">03</div><h3>Quality &amp; Inspection Coordination</h3><p>Pre-shipment inspection through SGS, Bureau Veritas, Intertek or mutually agreed agencies. Scope includes quantity, quality, radiation checks, moisture assessment, and stuffing supervision.</p><div class="stags"><span class="stag">SGS</span><span class="stag">Bureau Veritas</span><span class="stag">Intertek</span><span class="stag">Radiation Checks</span></div></div>
    <div class="sc"><div class="sn">04</div><h3>Documentation Management</h3><p>Complete export documentation package for every shipment &mdash; Commercial Invoice, Packing List, Bill of Lading, Certificate of Origin, Inspection Certificate, and Radiation-Free Certificate.</p><div class="stags"><span class="stag">Bill of Lading</span><span class="stag">COO</span><span class="stag">Inspection Certs</span></div></div>
    <div class="sc"><div class="sn">05</div><h3>Secure Payment Structures</h3><p>Structured, bank-secured payment instruments including Letter of Credit at sight (LC), Standby LC (SBLC), Documentary LC (DLC), and bank-to-bank transfers depending on counterparty profile.</p><div class="stags"><span class="stag">LC at Sight</span><span class="stag">SBLC</span><span class="stag">DLC</span></div></div>
    <div class="sc"><div class="sn">06</div><h3>Supplier Onboarding</h3><p>We work with new suppliers to confirm specs and packing standards, assess loading readiness, verify origin compliance, and align on payment expectations. KYC documentation required from all new counterparties.</p><div class="stags"><span class="stag">KYC Review</span><span class="stag">Spec Confirmation</span><span class="stag">Origin Verification</span></div></div>
  </div>
</section>
<section class="bw">
  <div class="section-label">Key Benefits</div>
  <h2 class="section-title section-title-light">Value Through <em>Sustainable</em> Practices</h2>
  <div class="bg">
    <div class="bc"><h4>Environmental Impact</h4><p>Our operations reduce landfill waste while promoting eco-friendly recycling practices &mdash; monitoring and improving our carbon footprint across all trade activities.</p></div>
    <div class="bc"><h4>Cost Efficiency</h4><p>Optimizing trading processes, we offer competitive pricing that benefits both clients and operations. Efficient logistics and streamlined processes drive costs down while maintaining quality.</p></div>
    <div class="bc"><h4>Global Reach</h4><p>Our international network allows us to source and distribute metal scrap seamlessly across borders &mdash; ensuring a reliable supply chain across 40+ countries.</p></div>
    <div class="bc"><h4>Reliable Logistics</h4><p>A robust logistics network that guarantees prompt and efficient delivery of materials globally &mdash; minimizing downtime and ensuring clients always have what they need.</p></div>
    <div class="bc"><h4>Competitive Pricing</h4><p>Real-time market monitoring and optimized operational costs mean we consistently offer rates that reflect market conditions &mdash; saving you money on every tonne traded.</p></div>
    <div class="bc"><h4>Sustainable Practices</h4><p>Advanced recycling processes that minimize waste and promote eco-friendly practices. Sustainability is embedded in every operation &mdash; not just a promise.</p></div>
  </div>
</section>
<div class="cta-band"><h2>Ready to work with<br><em>a compliant partner?</em></h2><div class="cta-band-actions"><a class="btn-dark" href="{{ route('contact') }}">Start a Conversation</a></div></div>
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