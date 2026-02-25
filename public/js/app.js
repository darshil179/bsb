(function () {
  // year
  const y = document.getElementById("year");
  if (y) y.textContent = new Date().getFullYear();

  // mobile nav
  const nav = document.getElementById("nav");
  const toggle = document.getElementById("navToggle");

  if (toggle && nav) {
    toggle.addEventListener("click", () => {
      const open = nav.classList.toggle("open");
      toggle.setAttribute("aria-expanded", open ? "true" : "false");
    });

    // close menu on click
    nav.querySelectorAll("a").forEach(a => {
      a.addEventListener("click", () => {
        nav.classList.remove("open");
        toggle.setAttribute("aria-expanded", "false");
      });
    });
  }

  // reveal on scroll
  const els = Array.from(document.querySelectorAll(".reveal"));
  const io = new IntersectionObserver((entries) => {
    entries.forEach((e) => {
      if (e.isIntersecting) {
        e.target.classList.add("show");
        io.unobserve(e.target);
      }
    });
  }, { threshold: 0.12 });

  els.forEach(el => io.observe(el));

  // counters
  const counters = Array.from(document.querySelectorAll("[data-count]"));
  const easeOutCubic = (t) => 1 - Math.pow(1 - t, 3);

  const counterIO = new IntersectionObserver((entries) => {
    entries.forEach((e) => {
      if (!e.isIntersecting) return;

      const el = e.target;
      const target = Number(el.getAttribute("data-count")) || 0;
      const duration = 900;
      const start = performance.now();
      const from = 0;

      const tick = (now) => {
        const p = Math.min(1, (now - start) / duration);
        const val = Math.round(from + (target - from) * easeOutCubic(p));
        el.textContent = val.toLocaleString();
        if (p < 1) requestAnimationFrame(tick);
      };

      requestAnimationFrame(tick);
      counterIO.unobserve(el);
    });
  }, { threshold: 0.4 });

  counters.forEach(c => counterIO.observe(c));

  // demo form submit
  window.BSBForms = {
    fakeSubmit: (ev) => {
      ev.preventDefault();
      const btn = ev.target.querySelector("button[type='submit']");
      const old = btn.textContent;
      btn.textContent = "Sending...";
      btn.disabled = true;

      setTimeout(() => {
        btn.textContent = "Sent ✓ (Demo)";
        setTimeout(() => {
          btn.textContent = old;
          btn.disabled = false;
          ev.target.reset();
          alert("Demo: Form submitted. Connect this to Laravel controller to send email.");
        }, 700);
      }, 650);

      return false;
    }
  };
})();
