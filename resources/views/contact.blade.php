<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact &mdash; BSB Metal &amp; Trading</title>
<link rel="stylesheet" href="{{ asset('css/shared.css') }}">
<style>
.cgrid{display:grid;grid-template-columns:1fr 1fr;min-height:80vh;}
.cleft{background:var(--dark);padding:80px 60px;display:flex;flex-direction:column;justify-content:center;position:relative;overflow:hidden;}
.cleft-bg{position:absolute;inset:0;background:url('https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=800&q=80') center/cover;opacity:0.06;}
.cleft-inner{position:relative;z-index:2;}
.cleft h2{font-family:'Cormorant Garamond',serif;font-size:52px;font-weight:300;color:var(--white);line-height:1.08;margin-bottom:20px;}
.cleft h2 em{color:var(--gold);font-style:italic;}
.cleft>div>p{font-size:13.5px;line-height:1.8;color:rgba(255,255,255,0.45);margin-bottom:44px;font-weight:300;}
.cdets{display:flex;flex-direction:column;gap:22px;}
.cdet{display:flex;align-items:flex-start;gap:14px;}
.dico{width:38px;height:38px;border:1px solid var(--border);display:flex;align-items:center;justify-content:center;flex-shrink:0;}
.dico svg{width:15px;height:15px;color:var(--gold);}
.dlbl{font-size:8.5px;letter-spacing:0.2em;text-transform:uppercase;color:var(--text-light);font-weight:600;margin-bottom:3px;}
.dval{font-size:13.5px;color:var(--white);text-decoration:none;display:block;}
.dval:hover{color:var(--gold);}
.cright{padding:80px 60px;background:var(--white);}
.cright h3{font-family:'Cormorant Garamond',serif;font-size:38px;font-weight:400;color:var(--text-dark);margin-bottom:36px;}
.frow{display:grid;grid-template-columns:1fr 1fr;gap:16px;}
.fg2{margin-bottom:20px;}
.flbl{display:block;font-size:9px;font-weight:700;letter-spacing:0.2em;text-transform:uppercase;color:var(--text-mid);margin-bottom:7px;}
.flbl .req{color:var(--gold);}
.finp,.fsel,.ftxt{width:100%;padding:13px 15px;border:1px solid rgba(0,0,0,0.12);background:var(--cream);font-family:'Montserrat',sans-serif;font-size:13px;color:var(--text-dark);outline:none;transition:border-color 0.2s;appearance:none;border-radius:0;}
.finp:focus,.fsel:focus,.ftxt:focus{border-color:var(--gold);background:var(--white);}
.ftxt{min-height:130px;resize:vertical;}
.fnote{font-size:11px;color:var(--text-light);margin-bottom:24px;line-height:1.6;font-weight:300;}
.fsub{width:100%;background:var(--dark);color:var(--gold);padding:15px;font-family:'Montserrat',sans-serif;font-size:10px;font-weight:700;letter-spacing:0.2em;text-transform:uppercase;border:1px solid var(--gold);cursor:pointer;transition:all 0.2s;}
.fsub:hover{background:var(--gold);color:var(--dark);}
.extra{padding:100px 60px;background:var(--cream);}
.eg{display:grid;grid-template-columns:repeat(3,1fr);gap:2px;}
.ec{background:var(--white);padding:40px 32px;border-top:3px solid transparent;transition:all 0.3s;}
.ec:hover{border-top-color:var(--gold);}
.ec h4{font-family:'Cormorant Garamond',serif;font-size:22px;color:var(--text-dark);margin-bottom:10px;}
.ec p{font-size:12.5px;color:var(--text-mid);line-height:1.7;font-weight:300;}
@media(max-width:1024px){.cgrid{grid-template-columns:1fr;}.cleft,.cright{padding:60px 24px;}.extra{padding:60px 24px;}.eg{grid-template-columns:1fr;}}
@media(max-width:600px){.frow{grid-template-columns:1fr;}}
</style>
</head>
<body>
<div class="ticker-bar"><div class="ticker-track" id="tickerTrack"></div></div>
<nav><a class="logo" href="{{ route('home') }}"><div class="logo-mark"><span>B</span></div><div class="logo-text"><span class="brand">BSB <em>Metal</em> &amp; Trading</span><span class="tagline">Toronto, Canada &middot; Global Trade</span></div></a><ul class="nav-links"><li><a href="{{ route('home') }}">Home</a></li><li><a href="{{ route('about') }}">About</a></li><li><a href="{{ route('products') }}">Products</a></li><li><a href="{{ route('services') }}">Services</a></li><li><a href="{{ route('process') }}">Process</a></li><li><a href="{{ route('compliance') }}">Compliance</a></li><li><a href="{{ route('sectors') }}">Sectors</a></li><li><a href="{{ route('faq') }}">FAQ</a></li><li><a href="{{ route('contact') }}" class="active">Contact</a></li></ul><button class="hamburger" onclick="document.getElementById('mobileMenu').classList.add('open')"><span></span><span></span><span></span></button></nav>
<div class="mobile-menu" id="mobileMenu"><button class="mobile-close" onclick="document.getElementById('mobileMenu').classList.remove('open')">&#x2715;</button><a href="{{ route('home') }}">Home</a><a href="{{ route('about') }}">About</a><a href="{{ route('products') }}">Products</a><a href="{{ route('services') }}">Services</a><a href="{{ route('process') }}">Process</a><a href="{{ route('compliance') }}">Compliance</a><a href="{{ route('sectors') }}">Sectors</a><a href="{{ route('faq') }}">FAQ</a><a href="{{ route('contact') }}" style="color:var(--gold)">Contact</a></div>

<div class="page-hero"><div class="page-hero-bg" style="background-image:url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=1600&q=80')"></div><div class="page-hero-content"><div class="section-label">Get in Touch</div><h1>Start a Conversation<br>About Your <em>Requirements</em></h1><p>Whether you're a buyer looking for consistent supply or a supplier with material to trade &mdash; reach out and we'll respond within one business day.</p></div></div>
<div class="cgrid">
  <div class="cleft">
    <div class="cleft-bg"></div>
    <div class="cleft-inner">
      <h2>BSB Metal<br>&amp; <em>Trading</em></h2>
      <p>Toronto-based international metals trading &mdash; verified counterparties, clean documentation, and structured trade execution.</p>
      <div class="cdets">
        <div class="cdet"><div class="dico"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg></div><div><div class="dlbl">Principal</div><span class="dval">Saurav Bhuva</span></div></div>
        <div class="cdet"><div class="dico"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></div><div><div class="dlbl">Phone</div><a class="dval" href="tel:+15146296870">+1 514 629 6870</a></div></div>
        <div class="cdet"><div class="dico"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg></div><div><div class="dlbl">Email</div><a class="dval" href="mailto:saurav.bhuva@bsbmetals.com">saurav.bhuva@bsbmetals.com</a></div></div>
        <div class="cdet"><div class="dico"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div><div><div class="dlbl">Location</div><span class="dval">Toronto, Ontario, Canada</span></div></div>
        <div class="cdet"><div class="dico"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="dlbl">Response Time</div><span class="dval">Within 1 Business Day</span></div></div>
      </div>
    </div>
  </div>
  <div class="cright">
    <h3>Send an Inquiry</h3>
    <form action="mailto:saurav.bhuva@bsbmetals.com" method="POST" enctype="text/plain" onsubmit="return handleSubmit(event)">
      <div class="frow">
        <div class="fg2"><label class="flbl">First Name <span class="req">*</span></label><input class="finp" type="text" name="first_name" placeholder="John" required></div>
        <div class="fg2"><label class="flbl">Last Name <span class="req">*</span></label><input class="finp" type="text" name="last_name" placeholder="Smith" required></div>
      </div>
      <div class="fg2"><label class="flbl">Company Name</label><input class="finp" type="text" name="company" placeholder="Your Company Ltd."></div>
      <div class="frow">
        <div class="fg2"><label class="flbl">Email Address <span class="req">*</span></label><input class="finp" type="email" name="email" placeholder="john@company.com" required></div>
        <div class="fg2"><label class="flbl">Phone Number</label><input class="finp" type="tel" name="phone" placeholder="+1 000 000 0000"></div>
      </div>
      <div class="frow">
        <div class="fg2"><label class="flbl">You Are a <span class="req">*</span></label><select class="fsel" name="role" required><option value="">Select your role</option><option value="buyer">Buyer</option><option value="supplier">Supplier</option><option value="both">Buyer &amp; Supplier</option><option value="broker">Broker / Agent</option><option value="other">Other</option></select></div>
        <div class="fg2"><label class="flbl">Preferred Incoterm</label><select class="fsel" name="incoterm"><option value="">Select incoterm</option><option>FOB</option><option>CFR</option><option>CIF</option><option>To be discussed</option></select></div>
      </div>
      <div class="fg2"><label class="flbl">Material / Metal Type <span class="req">*</span></label>
        <select class="fsel" name="material" required>
          <option value="">Select material</option>
          <optgroup label="Non-Ferrous &mdash; Aluminium"><option>UBC Aluminium Scrap</option><option>Taint/Tabor Aluminium</option><option>Tense &mdash; 6063 Extrusion</option><option>Aluminium Ingots (A7)</option></optgroup>
          <optgroup label="Non-Ferrous &mdash; Other"><option>Copper Scrap</option><option>Brass Scrap</option><option>Zinc</option><option>Lead</option><option>Stainless Steel Scrap</option></optgroup>
          <optgroup label="Ferrous"><option>HMS 1 &amp; 2</option><option>Steel Scrap</option><option>Cast / Pig Iron</option></optgroup>
          <option>Multiple / Other</option>
        </select>
      </div>
      <div class="frow">
        <div class="fg2"><label class="flbl">Estimated Quantity</label><input class="finp" type="text" name="quantity" placeholder="e.g. 200 MT / month"></div>
        <div class="fg2"><label class="flbl">Destination Port / Country</label><input class="finp" type="text" name="destination" placeholder="e.g. Port Klang, Malaysia"></div>
      </div>
      <div class="fg2"><label class="flbl">Message / Requirements <span class="req">*</span></label><textarea class="ftxt" name="message" placeholder="Please describe your requirements, specifications, inspection preferences, payment structure, or any other relevant details..." required></textarea></div>
      <p class="fnote">All inquiries are treated confidentially. KYC documentation may be requested before proceeding. We respond within one business day.</p>
      <button type="submit" class="fsub">Submit Inquiry &rarr;</button>
    </form>
    <div id="formMsg" style="display:none;margin-top:20px;padding:16px 20px;background:rgba(34,197,94,0.1);border:1px solid rgba(34,197,94,0.3);color:#166534;font-size:13px;font-weight:500;">Thank you! Your inquiry has been received. Saurav will respond within one business day.</div>
  </div>
</div>
<section class="extra">
  <div class="section-label">What to Expect</div>
  <h2 class="section-title" style="margin-bottom:56px">After You Reach <em>Out</em></h2>
  <div class="eg">
    <div class="ec"><h4>1. Discovery Call</h4><p>We'll schedule a call to discuss your scrap metal needs, volumes, and trade requirements in detail. We'll assess fit and outline the next steps.</p></div>
    <div class="ec"><h4>2. Tailored Offer</h4><p>Receive a customized offer with competitive pricing, logistics options, and inspection terms tailored specifically to your requirements.</p></div>
    <div class="ec"><h4>3. Agreement &amp; Launch</h4><p>Review and sign the SPA/agreement. We handle everything from inspection to shipment documentation &mdash; your trade, executed cleanly.</p></div>
  </div>
</section>
<script>
function handleSubmit(e) {
  e.preventDefault();
  const form = e.target;
  const data = new FormData(form);
  const body = Array.from(data.entries()).map(([k,v]) => k.replace(/_/g,' ').toUpperCase() + ': ' + v).join('%0D%0A');
  const name = data.get('first_name') + ' ' + data.get('last_name');
  const mat = data.get('material') || 'Inquiry';
  window.location.href = 'mailto:saurav.bhuva@bsbmetals.com?subject=BSB Inquiry - ' + encodeURIComponent(mat + ' - ' + name) + '&body=' + body;
  form.reset();
  document.getElementById('formMsg').style.display = 'block';
  return false;
}
</script>
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