@extends('layouts.app')

@section('title', 'BSB Metal & Trading | Global Metal Trading')
@section('meta_description', 'BSB Metal & Trading sources and supplies ferrous and non-ferrous metals and scrap globally with inspection-ready, documentation-driven execution.')

@section('content')
@php
  // Metal-related photos (replace anytime). You can also download and host locally in /public/images.
  $imgHero = "https://images.unsplash.com/photo-1516937941344-00b4e0337589?auto=format&fit=crop&w=2000&q=80"; // containers/industrial vibe
  $imgAl  = "https://images.unsplash.com/photo-1581092334651-ddf26d9a09d0?auto=format&fit=crop&w=1400&q=80"; // industrial metal vibe
  $imgCu  = "https://images.unsplash.com/photo-1615996001375-c7ef13294436?auto=format&fit=crop&w=1400&q=80"; // copper-ish tones
  $imgSt  = "https://images.unsplash.com/photo-1610116306796-6fea9f4fae38?auto=format&fit=crop&w=1400&q=80"; // steel/warehouse vibe
@endphp

<section class="hero" style="--hero:url('{{ $imgHero }}')">
  <div class="container hero-inner">
    <div class="hero-copy">
      <div class="pill reveal">Compliance-first • Inspection-ready • Global execution</div>

      <h1 class="reveal">
        Global Metal Trading,<br>
        Built on <span class="gradient">Reliability</span>.
      </h1>

      <p class="lead reveal">
        BSB Metal & Trading sources and supplies ferrous and non-ferrous metals and scrap to verified buyers worldwide—
        with transparent documentation, quality control, and secure trade structures.
      </p>

      <div class="hero-ctas reveal">
        <a class="btn" href="#contact">Request a Quote</a>
        <a class="btn btn-ghost" href="#products">View Products</a>
      </div>

      <div class="hero-metrics reveal">
        <div class="metric">
          <div class="metric-num" data-count="100">0</div>
          <div class="metric-label">KYC-driven counterparty checks</div>
        </div>
        <div class="metric">
          <div class="metric-num" data-count="24">0</div>
          <div class="metric-label">Hour response target</div>
        </div>
        <div class="metric">
          <div class="metric-num" data-count="2020">0</div>
          <div class="metric-label">Incoterms aligned</div>
        </div>
      </div>
    </div>

    <div class="hero-card reveal">
      <div class="hero-card-top">
        <div class="dot"></div><div class="dot"></div><div class="dot"></div>
        <span class="muted">Deal Snapshot</span>
      </div>

      <div class="hero-card-body">
        <div class="kv">
          <span>Products</span>
          <strong>UBC • Aluminium Scrap • Copper/Brass • HMS</strong>
        </div>
        <div class="kv">
          <span>Inspection</span>
          <strong>SGS / BV / Intertek (as agreed)</strong>
        </div>
        <div class="kv">
          <span>Terms</span>
          <strong>FOB / CFR / CIF</strong>
        </div>
        <div class="kv">
          <span>Payments</span>
          <strong>LC at Sight / SBLC / Bank-to-Bank</strong>
        </div>

        <div class="divider"></div>

        <a class="btn btn-block" href="#contact">Start Discussion</a>
        <p class="tiny muted">We proceed only with clear specs, verified parties, and agreed procedure.</p>
      </div>
    </div>
  </div>

  <div class="hero-wave" aria-hidden="true"></div>
</section>

<section class="section" id="about">
  <div class="container grid-2">
    <div class="reveal">
      <h2>About BSB Metal & Trading</h2>
      <p>
        We operate as a documentation-driven international trading company connecting reliable suppliers with established downstream buyers.
        Our focus is long-term supply programs, consistent execution, and compliance-first workflows.
      </p>
      <ul class="checklist">
        <li>Verified suppliers & buyers (KYC-first)</li>
        <li>Clear specifications and packing alignment</li>
        <li>Inspection and stuffing supervision options</li>
        <li>Clean export documentation support</li>
      </ul>
    </div>

    <div class="glass reveal">
      <div class="mini-cards">
        <div class="mini">
          <div class="mini-title">Mission</div>
          <p class="muted">Build repeat business through reliability, transparency, and trade discipline.</p>
        </div>
        <div class="mini">
          <div class="mini-title">Values</div>
          <p class="muted">Integrity • Compliance • Speed • Long-term partnerships</p>
        </div>
        <div class="mini">
          <div class="mini-title">Coverage</div>
          <p class="muted">North America sourcing + global buyers (subject to compliance).</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section alt" id="products">
  <div class="container">
    <div class="section-head reveal">
      <h2>Products</h2>
      <p class="muted">Handled subject to availability, origin compliance, and buyer specification.</p>
    </div>

    <div class="cards-3">
      <article class="card reveal">
        <img src="{{ $imgAl }}" alt="Aluminium / scrap trading" loading="lazy">
        <div class="card-body">
          <h3>Aluminium</h3>
          <p class="muted">UBC (baled/loose), Taint/Tabor, Tense, extrusion grades, and related aluminium scrap.</p>
          <div class="tag-row">
            <span class="tag">UBC</span><span class="tag">Taint/Tabor</span><span class="tag">Tense</span>
          </div>
        </div>
      </article>

      <article class="card reveal">
        <img src="{{ $imgCu }}" alt="Copper and brass scrap" loading="lazy">
        <div class="card-body">
          <h3>Copper / Brass</h3>
          <p class="muted">Copper and brass grades as per mutually agreed spec and inspection requirements.</p>
          <div class="tag-row">
            <span class="tag">Copper</span><span class="tag">Brass</span><span class="tag">Spec-based</span>
          </div>
        </div>
      </article>

      <article class="card reveal">
        <img src="{{ $imgSt }}" alt="Ferrous metals" loading="lazy">
        <div class="card-body">
          <h3>Ferrous</h3>
          <p class="muted">HMS 1&2 and other ferrous grades on request, based on origin and buyer needs.</p>
          <div class="tag-row">
            <span class="tag">HMS 1&2</span><span class="tag">Bulk</span><span class="tag">On request</span>
          </div>
        </div>
      </article>
    </div>
  </div>
</section>

<section class="section" id="services">
  <div class="container">
    <div class="section-head reveal">
      <h2>Services</h2>
      <p class="muted">End-to-end trading support built for repeat monthly execution.</p>
    </div>

    <div class="steps">
      <div class="step reveal">
        <div class="step-no">01</div>
        <h3>Sourcing & Supply Programs</h3>
        <p class="muted">We structure supply programs with verified yards/suppliers to match buyer specs and monthly targets.</p>
      </div>
      <div class="step reveal">
        <div class="step-no">02</div>
        <h3>Inspection & Quality Control</h3>
        <p class="muted">SGS/BV/Intertek options (as agreed), plus photos/videos, packing checks, and spec alignment.</p>
      </div>
      <div class="step reveal">
        <div class="step-no">03</div>
        <h3>Documentation & Logistics</h3>
        <p class="muted">Incoterms support, shipping coordination, and clean document sets for smooth clearance.</p>
      </div>
      <div class="step reveal">
        <div class="step-no">04</div>
        <h3>Secure Trade Structures</h3>
        <p class="muted">LC at sight / SBLC / bank-to-bank procedures based on counterparty profile and risk controls.</p>
      </div>
    </div>
  </div>
</section>

<section class="section alt" id="compliance">
  <div class="container grid-2">
    <div class="reveal">
      <h2>Compliance & Quality</h2>
      <p>
        International scrap and metal trading requires discipline: clear specs, origin transparency, and documentation.
        We support structured deals with inspection options and clean export paperwork.
      </p>
      <div class="callout">
        <strong>Typical documents:</strong>
        <span class="muted">Commercial Invoice • Packing List • Bill of Lading • Certificate of Origin • Inspection Certificate (if required)</span>
      </div>
    </div>

    <div class="glass reveal">
      <h3>Risk Controls We Prefer</h3>
      <ul class="checklist">
        <li>KYC verification before pricing confirmation</li>
        <li>Clear spec + packing clause in contract</li>
        <li>Inspection agency defined in procedure</li>
        <li>Payment instrument confirmed before loading</li>
        <li>Timeline commitments and update cadence</li>
      </ul>
    </div>
  </div>
</section>

<section class="section" id="process">
  <div class="container">
    <div class="section-head reveal">
      <h2>How We Work</h2>
      <p class="muted">A simple process designed for speed and control.</p>
    </div>

    <div class="timeline">
      <div class="tl-item reveal">
        <span class="tl-dot"></span>
        <h3>Requirement Confirmation</h3>
        <p class="muted">Grade/spec, quantity, destination, incoterm, inspection, and payment structure.</p>
      </div>
      <div class="tl-item reveal">
        <span class="tl-dot"></span>
        <h3>Offer & Validation</h3>
        <p class="muted">Supplier capability, packing method, price validity, and documentation checklist.</p>
      </div>
      <div class="tl-item reveal">
        <span class="tl-dot"></span>
        <h3>Contract & Procedure</h3>
        <p class="muted">SPA/IMFPA/NCNDA (if applicable), plus an agreed step-by-step procedure.</p>
      </div>
      <div class="tl-item reveal">
        <span class="tl-dot"></span>
        <h3>Inspection, Loading, Shipment</h3>
        <p class="muted">Inspection/stuffing, BL issuance, and full document delivery.</p>
      </div>
    </div>
  </div>
</section>

<section class="section cta" id="contact">
  <div class="container cta-inner reveal">
    <h2>Request a Quote / Offer</h2>
    <p class="muted">Share product grade, monthly quantity, destination port, and preferred Incoterm. We’ll respond with next steps.</p>

    <div class="contact-grid">
      <form class="form" onsubmit="return window.BSBForms.fakeSubmit(event)">
        <div class="row">
          <div class="field">
            <label>Full Name</label>
            <input required type="text" placeholder="Your name">
          </div>
          <div class="field">
            <label>Company</label>
            <input required type="text" placeholder="Company name">
          </div>
        </div>

        <div class="row">
          <div class="field">
            <label>Email</label>
            <input required type="email" placeholder="name@company.com">
          </div>
          <div class="field">
            <label>Phone</label>
            <input type="tel" placeholder="+1 ...">
          </div>
        </div>

        <div class="row">
          <div class="field">
            <label>Product / Grade</label>
            <input required type="text" placeholder="UBC / Taint-Tabor / HMS 1&2 ...">
          </div>
          <div class="field">
            <label>Monthly Quantity (MT)</label>
            <input required type="number" min="1" placeholder="e.g., 1000">
          </div>
        </div>

        <div class="row">
          <div class="field">
            <label>Incoterm</label>
            <select required>
              <option value="">Select</option>
              <option>FOB</option>
              <option>CFR</option>
              <option>CIF</option>
            </select>
          </div>
          <div class="field">
            <label>Destination Port</label>
            <input required type="text" placeholder="e.g., Nhava Sheva / Mundra / ...">
          </div>
        </div>

        <div class="field">
          <label>Message</label>
          <textarea rows="4" placeholder="Add spec, packing, inspection requirement, target timeline..."></textarea>
        </div>

        <button class="btn btn-block" type="submit">Send Inquiry</button>
        <p class="tiny muted">This demo form shows a success message. For real submissions, connect it to Laravel mail/controller.</p>
      </form>

      <div class="contact-card">
        <div class="contact-title">Direct Contact</div>
        <div class="contact-item">
          <span class="muted">Email</span>
          <a href="mailto:saurav.bhuva@bsbmetals.com"><strong>saurav.bhuva@bsbmetals.com</strong></a>
        </div>
        <div class="contact-item">
          <span class="muted">Phone</span>
          <a href="tel:+15146296870"><strong>+1 514 629 6870</strong></a>
        </div>
        <div class="contact-item">
          <span class="muted">Location</span>
          <strong>Toronto, Canada</strong>
        </div>

        <div class="divider"></div>

        <div class="contact-title">What to Send</div>
        <ul class="checklist compact">
          <li>Grade/spec + allowed tolerance</li>
          <li>Monthly volume + shipment plan</li>
          <li>Origin preference + loading port</li>
          <li>Inspection requirement</li>
          <li>Payment structure (LC/SBLC)</li>
        </ul>
      </div>
    </div>
  </div>
</section>
@endsection
