<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>FAQ &mdash; BSB Metal &amp; Trading</title>
<link rel="stylesheet" href="{{ asset('css/shared.css') }}">
<style>
.faqw{padding:100px 60px;background:var(--white);}
.fg{display:grid;grid-template-columns:1fr 1fr;gap:0 60px;margin-top:56px;}
.fi{padding:28px 0;border-bottom:1px solid rgba(0,0,0,0.08);cursor:pointer;}
.fq{display:flex;justify-content:space-between;align-items:flex-start;gap:14px;}
.fq h4{font-family:'Cormorant Garamond',serif;font-size:20px;font-weight:500;color:var(--text-dark);line-height:1.3;}
.ft{width:26px;height:26px;background:var(--dark);display:flex;align-items:center;justify-content:center;flex-shrink:0;transition:all 0.2s;}
.ft svg{width:11px;height:11px;color:var(--gold);transition:transform 0.2s;}
.fi.open .ft{background:var(--gold);}
.fi.open .ft svg{transform:rotate(45deg);color:var(--dark);}
.fa{max-height:0;overflow:hidden;transition:max-height 0.3s ease;}
.fi.open .fa{max-height:300px;}
.fa p{font-size:13px;line-height:1.8;color:var(--text-mid);padding-top:14px;font-weight:300;}
@media(max-width:1024px){.faqw{padding:60px 24px;}.fg{grid-template-columns:1fr;}}
</style>
</head>
<body>
<div class="ticker-bar"><div class="ticker-track" id="tickerTrack"></div></div>
<nav> </li><li><a href="{{ route('about') }}">About</a></li><li><a href="{{ route('products') }}">Products</a></li><li><a href="{{ route('services') }}">Services</a></li><li><a href="{{ route('process') }}">Process</a></li><li><a href="{{ route('compliance') }}">Compliance</a></li><li><a href="{{ route('sectors') }}">Sectors</a></li><li><a href="{{ route('faq') }}" class="active">FAQ</a></li><li><a href="{{ route('contact') }}" class="nav-cta">Contact</a></li></ul><button class="hamburger" onclick="document.getElementById('mobileMenu').classList.add('open')"><span></span><span></span><span></span></button></nav>
<div class="mobile-menu" id="mobileMenu"><button class="mobile-close" onclick="document.getElementById('mobileMenu').classList.remove('open')">&#x2715;</button><a href="{{ route('home') }}">Home</a><a href="{{ route('about') }}">About</a><a href="{{ route('products') }}">Products</a><a href="{{ route('services') }}">Services</a><a href="{{ route('process') }}">Process</a><a href="{{ route('compliance') }}">Compliance</a><a href="{{ route('sectors') }}">Sectors</a><a href="{{ route('faq') }}">FAQ</a><a href="{{ route('contact') }}" style="color:var(--gold)">Contact</a></div>

<div class="page-hero"><div class="page-hero-bg" style="background-image:url('https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=1600&q=80')"></div><div class="page-hero-content"><div class="section-label">FAQ</div><h1>Frequently Asked<br><em>Questions</em></h1><p>Answers to the most common questions about working with BSB Metal &amp; Trading &mdash; from trial shipments to payment structures and documentation.</p></div></div>
<section class="faqw">
  <div class="section-label">Common Questions</div>
  <h2 class="section-title">Everything You <em>Need to Know</em></h2>
  <div class="fg">
    <div>
      <div class="fi" onclick="this.classList.toggle('open')"><div class="fq"><h4>Do you work with trial shipments?</h4><div class="ft"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/></svg></div></div><div class="fa"><p>Yes. Trial shipments can be arranged based on grade, origin, and a secure payment and inspection structure. We treat trials with the same documentation discipline as regular shipments &mdash; the process is identical, just smaller in volume.</p></div></div>
      <div class="fi" onclick="this.classList.toggle('open')"><div class="fq"><h4>What inspections do you support?</h4><div class="ft"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/></svg></div></div><div class="fa"><p>SGS, Bureau Veritas (BV), Intertek, or any mutually agreed third-party inspection agency. Inspection scope depends on origin and deal terms &mdash; covering quantity, quality, radiation, moisture, and stuffing supervision.</p></div></div>
      <div class="fi" onclick="this.classList.toggle('open')"><div class="fq"><h4>What Incoterms do you support?</h4><div class="ft"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/></svg></div></div><div class="fa"><p>FOB, CFR, and CIF under Incoterms&reg; 2020 &mdash; depending on supplier capability and buyer requirement. We confirm the applicable incoterm at the spec confirmation stage before any offer is issued.</p></div></div>
      <div class="fi" onclick="this.classList.toggle('open')"><div class="fq"><h4>What payment structures do you accept?</h4><div class="ft"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/></svg></div></div><div class="fa"><p>We support LC at sight, SBLC, DLC, and bank-to-bank transfer terms depending on counterparty profile and deal structure. Payment security is confirmed before any loading begins &mdash; without exception.</p></div></div>
      <div class="fi" onclick="this.classList.toggle('open')"><div class="fq"><h4>What metals do you trade?</h4><div class="ft"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/></svg></div></div><div class="fa"><p>We trade aluminium (UBC, taint/tabor, tense, ingots), copper, brass, zinc, lead, stainless steel (304/316/430), HMS ferrous, and cast/pig iron. Availability depends on origin and current supplier capacity.</p></div></div>
    </div>
    <div>
      <div class="fi" onclick="this.classList.toggle('open')"><div class="fq"><h4>What documents are typically included?</h4><div class="ft"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/></svg></div></div><div class="fa"><p>Standard export documents include: Commercial Invoice, Packing List, Bill of Lading, Certificate of Origin, and Inspection Certificate when applicable. Radiation-Free Certificate is included where required by destination port.</p></div></div>
      <div class="fi" onclick="this.classList.toggle('open')"><div class="fq"><h4>Which markets do you serve?</h4><div class="ft"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/></svg></div></div><div class="fa"><p>Worldwide. We serve buyers in Asia, the Middle East, Europe, and beyond &mdash; with structured programs for consistent buyers and suppliers. We prioritize long-term monthly supply programs over one-time transactions.</p></div></div>
      <div class="fi" onclick="this.classList.toggle('open')"><div class="fq"><h4>Do you require KYC documentation?</h4><div class="ft"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/></svg></div></div><div class="fa"><p>Yes. KYC documentation is required from all new counterparties &mdash; both buyers and suppliers &mdash; before any transaction proceeds. This is a standard compliance requirement. We also provide our own KYC pack on request.</p></div></div>
      <div class="fi" onclick="this.classList.toggle('open')"><div class="fq"><h4>Can you support monthly supply programs?</h4><div class="ft"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/></svg></div></div><div class="fa"><p>Yes &mdash; monthly supply programs are our preference. We typically start with a trial shipment before committing to a monthly program, which allows both parties to verify specs, execution quality, and logistics.</p></div></div>
      <div class="fi" onclick="this.classList.toggle('open')"><div class="fq"><h4>How long does the process take?</h4><div class="ft"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/></svg></div></div><div class="fa"><p>Timeline depends on deal complexity, payment instrument, and inspection arrangements. A typical first shipment from offer to BL issuance can range from 2 to 6 weeks depending on all parties' readiness.</p></div></div>
    </div>
  </div>
</section>
<div class="cta-band"><h2>Still have questions?<br><em>Let's talk directly.</em></h2><div class="cta-band-actions"><a class="btn-dark" href="{{ route('contact') }}">Contact Us</a></div></div>
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