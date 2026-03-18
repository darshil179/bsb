<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About &mdash; BSB Metal &amp; Trading</title>
<link rel="stylesheet" href="{{ asset('css/shared.css') }}">
<style>
.about-story{display:grid;grid-template-columns:1fr 1fr;}
.story-img img{width:100%;height:100%;object-fit:cover;min-height:500px;display:block;}
.story-content{padding:80px 70px;background:var(--white);display:flex;flex-direction:column;justify-content:center;}
.values-section{background:var(--cream);padding:100px 60px;}
.values-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:2px;margin-top:56px;}
.value-card{background:var(--white);padding:44px 30px;border-bottom:3px solid transparent;transition:all 0.3s;}
.value-card:hover{border-bottom-color:var(--gold);}
.value-icon{width:40px;height:40px;background:var(--gold);display:flex;align-items:center;justify-content:center;margin-bottom:22px;}
.value-icon svg{width:18px;height:18px;color:var(--dark);}
.value-card h3{font-family:'Cormorant Garamond',serif;font-size:24px;font-weight:500;margin-bottom:10px;}
.value-card p{font-size:12.5px;line-height:1.75;color:var(--text-mid);font-weight:300;}
.vision-band{background:var(--dark);padding:100px 60px;}
.v3g{display:grid;grid-template-columns:repeat(3,1fr);gap:2px;margin-top:56px;}
.v3c{background:rgba(255,255,255,0.03);border:1px solid var(--border);padding:44px 32px;transition:all 0.3s;}
.v3c:hover{background:rgba(201,168,76,0.06);}
.v3c h3{font-family:'Cormorant Garamond',serif;font-size:26px;color:var(--white);margin-bottom:12px;}
.v3c p{font-size:12.5px;line-height:1.75;color:rgba(255,255,255,0.4);font-weight:300;}
.team-section{background:var(--white);padding:100px 60px;}
.team-card{background:var(--cream);border-top:3px solid var(--gold);padding:48px 40px;display:grid;grid-template-columns:auto 1fr;gap:36px;align-items:start;max-width:820px;}
.team-avatar{width:96px;height:96px;background:var(--gold);display:flex;align-items:center;justify-content:center;flex-shrink:0;}
.team-avatar span{font-family:'Cormorant Garamond',serif;font-size:38px;font-weight:300;color:var(--dark);}
.team-info h3{font-family:'Cormorant Garamond',serif;font-size:32px;color:var(--text-dark);margin-bottom:4px;}
.team-role{font-size:9px;letter-spacing:0.2em;text-transform:uppercase;color:var(--gold);font-weight:600;margin-bottom:18px;display:block;}
.team-info p{font-size:13px;line-height:1.8;color:var(--text-mid);font-weight:300;}
.chips{display:flex;gap:10px;margin-top:18px;flex-wrap:wrap;}
.chip{display:flex;align-items:center;gap:7px;background:var(--white);border:1px solid rgba(201,168,76,0.3);padding:7px 14px;font-size:11px;color:var(--gold-dark);text-decoration:none;}
.chip:hover{background:rgba(201,168,76,0.08);}
@media(max-width:1024px){.about-story{grid-template-columns:1fr;}.story-img img{min-height:280px;}.story-content{padding:50px 24px;}.values-grid,.v3g{grid-template-columns:1fr 1fr;}.values-section,.vision-band,.team-section{padding:60px 24px;}.team-card{grid-template-columns:1fr;}}
@media(max-width:600px){.values-grid,.v3g{grid-template-columns:1fr;}}
</style>
</head>
<body>
<div class="ticker-bar"><div class="ticker-track" id="tickerTrack"></div></div>
<nav>
  <a class="logo" href="{{ route('home') }}"><div class="logo-mark"><span>B</span></div><div class="logo-text"><span class="brand">BSB <em>Metal</em> &amp; Trading</span><span class="tagline">Toronto, Canada &middot; Global Trade</span></div></a>
  <ul class="nav-links"><li><a href="{{ route('home') }}">Home</a></li>
<li><a href="{{ route('about') }}" class="active">About</a></li>
<li><a href="{{ route('products') }}">Products</a></li>
<li><a href="{{ route('services') }}">Services</a></li>
<li><a href="{{ route('process') }}">Process</a></li>
<li><a href="{{ route('compliance') }}">Compliance</a></li>
<li><a href="{{ route('sectors') }}">Sectors</a></li>
<li><a href="{{ route('faq') }}">FAQ</a></li>
<li><a href="{{ route('contact') }}" class="nav-cta">Contact</a></li>
</ul>
  <button class="hamburger" onclick="document.getElementById('mobileMenu').classList.add('open')"><span></span><span></span><span></span></button>
</nav>
<div class="mobile-menu" id="mobileMenu"><button class="mobile-close" onclick="document.getElementById('mobileMenu').classList.remove('open')">&#x2715;</button><a href="{{ route('home') }}">Home</a><a href="{{ route('about') }}">About</a><a href="{{ route('products') }}">Products</a><a href="{{ route('services') }}">Services</a><a href="{{ route('process') }}">Process</a><a href="{{ route('compliance') }}">Compliance</a><a href="{{ route('sectors') }}">Sectors</a><a href="{{ route('faq') }}">FAQ</a><a href="{{ route('contact') }}" style="color:var(--gold)">Contact</a></div>

<div class="page-hero">
  <div class="page-hero-bg" style="background-image:url('https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=1600&q=80')"></div>
  <div class="page-hero-content">
    <div class="section-label">About BSB</div>
    <h1>A Trading Company Built<br>on <em>Discipline &amp; Integrity</em></h1>
    <p>BSB Metal &amp; Trading is a Toronto-based international trading company focused on ferrous and non-ferrous metals &mdash; connecting verified suppliers with established downstream buyers through disciplined execution and structured trade.</p>
  </div>
</div>
<div class="about-story">
  <div class="story-img"><img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=800&q=80" alt="BSB Operations"></div>
  <div class="story-content">
    <div class="section-label">Our Story</div>
    <h2 class="section-title">Built on<br><em>Process &amp; Control</em></h2>
    <p class="section-body" style="margin-bottom:20px">Founded in Toronto, BSB Metal &amp; Trading was established with a single principle: execution matters more than promises. In international metals trading, the difference between a good counterparty and a difficult one is almost always process discipline.</p>
    <p class="section-body" style="margin-bottom:32px">We built our operations around documentation, verified inspection options, and structured payment security &mdash; ensuring both suppliers and buyers can scale monthly business with full confidence.</p>
    <a class="btn-primary" href="{{ route('contact') }}">Work With Us</a>
  </div>
</div>
<section class="values-section">
  <div class="section-label">Our Foundation</div>
  <h2 class="section-title">Values That Drive<br><em>Every Transaction</em></h2>
  <div class="values-grid">
    <div class="value-card"><div class="value-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3>Integrity</h3><p>Clear terms, honest capability, zero shortcuts. We represent exactly what we can deliver.</p></div>
    <div class="value-card"><div class="value-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg></div><h3>Compliance</h3><p>Documentation, inspection, and origin transparency in every transaction. Clean paperwork is non-negotiable.</p></div>
    <div class="value-card"><div class="value-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>Reliability</h3><p>Timelines, logistics coordination, and performance. When we commit to a schedule, we honor it.</p></div>
    <div class="value-card"><div class="value-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div><h3>Partnership</h3><p>Repeat business over one-time transactions. We build relationships that compound value over time.</p></div>
  </div>
</section>
<section class="vision-band">
  <div class="section-label">Our Vision</div>
  <h2 class="section-title section-title-light">Leading with <em>Integrity</em> &amp; Innovation</h2>
  <div class="v3g">
    <div class="v3c"><h3>Sustainability</h3><p>Core to our global mission &mdash; reducing environmental impact through responsible sourcing and trading.</p></div>
    <div class="v3c"><h3>Innovation</h3><p>Continuously improving processes and partnerships to deliver better outcomes for every counterparty.</p></div>
    <div class="v3c"><h3>Global Reach</h3><p>An extensive international network spanning 40+ countries &mdash; seamless cross-border metal trading.</p></div>
  </div>
</section>
<section class="team-section">
  <div class="section-label">Leadership</div>
  <h2 class="section-title" style="margin-bottom:48px">The People <em>Behind BSB</em></h2>
  <div class="team-card">
    <div class="team-avatar"><span>SB</span></div>
    <div class="team-info">
      <h3>Saurav Bhuva</h3>
      <span class="team-role">Principal &middot; BSB Metal &amp; Trading</span>
      <p>Based in Toronto, Canada, Saurav leads all trade execution, supplier relationships, and buyer partnerships at BSB Metal &amp; Trading. He oversees the full transaction lifecycle &mdash; from sourcing and inspection coordination to documentation and shipment execution.</p>
      <div class="chips">
        <a class="chip" href="tel:+15146296870">&#128222; +1 514 629 6870</a>
        <a class="chip" href="mailto:saurav.bhuva@bsbmetals.com">&#9993; saurav.bhuva@bsbmetals.com</a>
        <span class="chip">&#128205; Toronto, Ontario, Canada</span>
      </div>
    </div>
  </div>
</section>
<div class="cta-band">
  <h2>Start a conversation about<br><em>your requirements</em></h2>
  <div class="cta-band-actions"><a class="btn-dark" href="{{ route('contact') }}">Get in Touch</a></div>
</div>
<footer>
  <div class="footer-top">
    <div class="footer-brand"><a class="logo" href="{{ route('home') }}"><div class="logo-mark"><span>B</span></div><div class="logo-text"><span class="brand" style="color:var(--white)">BSB <em>Metal</em> &amp; Trading</span><span class="tagline">Toronto, Canada &middot; Global Trade</span></div></a><p>Sourcing and supplying ferrous and non-ferrous metals and scrap to verified industrial buyers worldwide &mdash; built on compliance, documentation, and consistent execution.</p></div>
    <div class="footer-col"><h4>Pages</h4><ul><li><a href="{{ route('home') }}">Home</a></li><li><a href="{{ route('about') }}">About</a></li><li><a href="{{ route('products') }}">Products</a></li><li><a href="{{ route('services') }}">Services</a></li><li><a href="{{ route('process') }}">Process</a></li><li><a href="{{ route('compliance') }}">Compliance</a></li><li><a href="{{ route('sectors') }}">Sectors</a></li><li><a href="{{ route('faq') }}">FAQ</a></li><li><a href="{{ route('contact') }}">Contact</a></li></ul></div>
    <div class="footer-col"><h4>Products</h4><ul><li><a href="{{ route('products') }}">UBC Aluminium Scrap</a></li><li><a href="{{ route('products') }}">Taint/Tabor &amp; Tense</a></li><li><a href="{{ route('products') }}">Aluminium Ingots A7</a></li><li><a href="{{ route('products') }}">Copper &amp; Brass Scrap</a></li><li><a href="{{ route('products') }}">Steel &amp; HMS 1&amp;2</a></li><li><a href="{{ route('products') }}">Stainless 304/316/430</a></li></ul></div>
    <div class="footer-col"><h4>Contact</h4><ul><li><a href="#">Saurav Bhuva &mdash; Principal</a></li><li><a href="tel:+15146296870">+1 514 629 6870</a></li><li><a href="mailto:saurav.bhuva@bsbmetals.com">saurav.bhuva@bsbmetals.com</a></li><li><a href="#">Toronto, Ontario, Canada</a></li></ul></div>
  </div>
  <div class="footer-bottom"><p>&copy; 2026 BSB Metal &amp; Trading. All rights reserved.</p><div class="footer-certs"><span>SGS</span><span>Bureau Veritas</span><span>Intertek</span><span>Incoterms&reg; 2020</span></div></div>
</footer>
<script>
const td=['Aluminium UBC Scrap','Copper - ISRI Graded','Brass & Zinc','HMS 1 & 2 Ferrous','Taint/Tabor','Tense Extrusion 6063','Aluminium Ingots A7','Stainless 304/316/430','FOB CFR CIF','LC SBLC DLC','SGS BV Intertek','Toronto Canada Global Trade'];
const tr=document.getElementById('tickerTrack');
[...td,...td].forEach(t=>{const e=document.createElement('span');e.className='ticker-item';e.innerHTML='<span class="dot">&#9679;</span> <strong>'+t+'</strong>';tr.appendChild(e);});
</script>
</body>
</html>