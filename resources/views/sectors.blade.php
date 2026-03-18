<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sectors &mdash; BSB Metal &amp; Trading</title>
<link rel="stylesheet" href="{{ asset('css/shared.css') }}">
<style>
.secw{padding:100px 60px;background:var(--white);}
.sg{display:grid;grid-template-columns:1fr 1fr;gap:2px;margin-top:56px;}
.scard{position:relative;overflow:hidden;aspect-ratio:16/7;cursor:default;}
.scard img{width:100%;height:100%;object-fit:cover;filter:brightness(0.55);transition:transform 0.6s;display:block;}
.scard:hover img{transform:scale(1.04);filter:brightness(0.4);}
.so{position:absolute;inset:0;background:linear-gradient(to top,rgba(0,0,0,0.85) 0%,transparent 60%);padding:36px;display:flex;flex-direction:column;justify-content:flex-end;}
.so h3{font-family:'Cormorant Garamond',serif;font-size:32px;font-weight:400;color:var(--white);margin-bottom:8px;}
.so p{font-size:12.5px;color:rgba(255,255,255,0.6);line-height:1.6;max-width:400px;}
.stag2{display:inline-block;background:var(--gold);color:var(--dark);font-size:8px;font-weight:700;letter-spacing:0.15em;text-transform:uppercase;padding:4px 10px;margin-bottom:10px;}
.opsw{background:var(--dark);padding:100px 60px;}
.og{display:grid;grid-template-columns:repeat(3,1fr);gap:2px;margin-top:56px;}
.oc{background:rgba(255,255,255,0.03);border:1px solid var(--border);padding:40px 30px;transition:all 0.3s;}
.oc:hover{background:rgba(201,168,76,0.06);}
.oc h4{font-family:'Cormorant Garamond',serif;font-size:24px;color:var(--white);margin-bottom:10px;}
.oc p{font-size:12.5px;line-height:1.75;color:rgba(255,255,255,0.4);font-weight:300;}
@media(max-width:1024px){.secw,.opsw{padding:60px 24px;}.sg{grid-template-columns:1fr;}.og{grid-template-columns:1fr 1fr;}}
@media(max-width:600px){.og{grid-template-columns:1fr;}}
</style>
</head>
<body>
<div class="ticker-bar"><div class="ticker-track" id="tickerTrack"></div></div>
<nav><a class="logo" href="{{ route('home') }}"><div class="logo-mark"><span>B</span></div><div class="logo-text"><span class="brand">BSB <em>Metal</em> &amp; Trading</span><span class="tagline">Toronto, Canada &middot; Global Trade</span></div></a><ul class="nav-links"><li><a href="{{ route('home') }}">Home</a></li><li><a href="{{ route('about') }}">About</a></li><li><a href="{{ route('products') }}">Products</a></li><li><a href="{{ route('services') }}">Services</a></li><li><a href="{{ route('process') }}">Process</a></li><li><a href="{{ route('compliance') }}">Compliance</a></li><li><a href="{{ route('sectors') }}" class="active">Sectors</a></li><li><a href="{{ route('faq') }}">FAQ</a></li><li><a href="{{ route('contact') }}" class="nav-cta">Contact</a></li></ul><button class="hamburger" onclick="document.getElementById('mobileMenu').classList.add('open')"><span></span><span></span><span></span></button></nav>
<div class="mobile-menu" id="mobileMenu"><button class="mobile-close" onclick="document.getElementById('mobileMenu').classList.remove('open')">&#x2715;</button><a href="{{ route('home') }}">Home</a><a href="{{ route('about') }}">About</a><a href="{{ route('products') }}">Products</a><a href="{{ route('services') }}">Services</a><a href="{{ route('process') }}">Process</a><a href="{{ route('compliance') }}">Compliance</a><a href="{{ route('sectors') }}">Sectors</a><a href="{{ route('faq') }}">FAQ</a><a href="{{ route('contact') }}" style="color:var(--gold)">Contact</a></div>

<div class="page-hero"><div class="page-hero-bg" style="background-image:url('https://images.unsplash.com/photo-1565043666747-69f6646db940?w=1600&q=80')"></div><div class="page-hero-content"><div class="section-label">Industries We Serve</div><h1>Sectors &amp;<br><em>Industries</em></h1><p>From construction and automotive to manufacturing and global export &mdash; BSB Metal &amp; Trading serves the full spectrum of industrial metals consumers worldwide.</p></div></div>
<section class="secw">
  <div class="section-label">Who We Serve</div>
  <h2 class="section-title">Industries That Drive<br><em>Metal Demand</em></h2>
  <div class="sg">
    <div class="scard"><img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800&q=80" alt="Construction"><div class="so"><span class="stag2">Construction</span><h3>Construction &amp; Demolition</h3><p>Structural steel, rebar, beams, and demolition metals &mdash; sourced and supplied for construction sector buyers and processors.</p></div></div>
    <div class="scard"><img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=800&q=80" alt="Automotive"><div class="so"><span class="stag2">Automotive</span><h3>Automotive Recycling</h3><p>Vehicle shredder residue, cast iron, aluminium, and battery lead &mdash; from automotive recyclers and dismantlers.</p></div></div>
    <div class="scard"><img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=800&q=80" alt="Manufacturing"><div class="so"><span class="stag2">Manufacturing</span><h3>Manufacturing &amp; Industrial</h3><p>Industrial offcuts, turnings, stamping scrap, and process residuals &mdash; from manufacturers across all metal categories.</p></div></div>
    <div class="scard"><img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=800&q=80" alt="Export"><div class="so"><span class="stag2">Global Export</span><h3>Global Export &amp; Trading</h3><p>Containerized bulk shipments to 40+ countries &mdash; working with importers, trading houses, and smelters worldwide.</p></div></div>
  </div>
</section>
<section class="opsw">
  <div class="section-label">Business Operations</div>
  <h2 class="section-title section-title-light">Efficient Trading,<br><em>Global Distribution</em></h2>
  <div class="og">
    <div class="oc"><h4>Downstream Processors</h4><p>Industrial buyers requiring consistent monthly supply programs with verified origin and full documentation for downstream processing.</p></div>
    <div class="oc"><h4>Smelters &amp; Foundries</h4><p>High-volume consumers needing reliable scrap grades to specification &mdash; with packing and loading standards matched to their process requirements.</p></div>
    <div class="oc"><h4>Trading Houses</h4><p>Established trading entities looking for a reliable supply-side partner with documented origin, clean paperwork, and structured trade terms.</p></div>
    <div class="oc"><h4>Recycling Facilities</h4><p>Recyclers with processed and sorted scrap output seeking export-ready buyers and brokers for reliable monthly offtake.</p></div>
    <div class="oc"><h4>Industrial Producers</h4><p>Manufacturers with metal offcuts, turnings, and process scrap seeking efficient disposal and competitive recovery pricing.</p></div>
    <div class="oc"><h4>Demolition Companies</h4><p>Demolition and construction firms with ferrous and non-ferrous metal streams needing organized collection and export.</p></div>
  </div>
</section>
<div class="cta-band"><h2>Is your sector listed?<br><em>Let's build a program.</em></h2><div class="cta-band-actions"><a class="btn-dark" href="{{ route('contact') }}">Discuss Your Requirements</a></div></div>
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