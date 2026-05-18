/* ============================================
   THRIVE THERAPY UG — Main JavaScript
   ============================================ */

// ─── Header scroll behaviour ───
const siteHeader = document.getElementById('siteHeader');
if (siteHeader) {
  const onScroll = () => {
    if (window.scrollY > 50) siteHeader.classList.add('scrolled');
    else siteHeader.classList.remove('scrolled');
  };
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll(); // initialise state on load
}

// ─── Mobile nav ───
const hamburger   = document.getElementById('hamburger');
const mobileNav   = document.getElementById('mobileNav');
const mobileClose = document.querySelector('.mobile-close');

function openMenu()  { mobileNav.classList.add('open'); document.body.style.overflow = 'hidden'; }
function closeMenu() { mobileNav.classList.remove('open'); document.body.style.overflow = ''; }

if (hamburger)   hamburger.addEventListener('click', openMenu);
if (mobileClose) mobileClose.addEventListener('click', closeMenu);
document.querySelectorAll('.mobile-nav a').forEach(link => link.addEventListener('click', closeMenu));
document.addEventListener('keydown', e => { if (e.key === 'Escape') closeMenu(); });

// ─── Active nav link (desktop + mobile) ───
const currentPage = window.location.pathname.split('/').pop() || 'index.html';
document.querySelectorAll('.nav-links a, .mobile-nav-links a').forEach(link => {
  const href = (link.getAttribute('href') || '').split('?')[0];
  if (href === currentPage || (currentPage === '' && href === 'index.html')) {
    link.classList.add('active');
  }
});

// ─── Scroll fade-in animations ───
const fadeObserver = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
      fadeObserver.unobserve(entry.target);
    }
  });
}, { threshold: 0.12 });
document.querySelectorAll('.fade-in').forEach(el => fadeObserver.observe(el));

// ─── Counter animation ───
function animateCounter(el, target, suffix, duration) {
  const start = performance.now();
  const tick = ts => {
    const progress = Math.min((ts - start) / duration, 1);
    const eased = 1 - Math.pow(1 - progress, 3);
    el.textContent = Math.floor(eased * target) + suffix;
    if (progress < 1) requestAnimationFrame(tick);
  };
  requestAnimationFrame(tick);
}
const counterObserver = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting && !entry.target.dataset.counted) {
      entry.target.dataset.counted = 'true';
      animateCounter(
        entry.target,
        parseInt(entry.target.dataset.target, 10),
        entry.target.dataset.suffix || '',
        1800
      );
    }
  });
}, { threshold: 0.5 });
document.querySelectorAll('[data-target]').forEach(el => counterObserver.observe(el));

// ─── Booking form ───
const bookingForm = document.getElementById('bookingForm');
if (bookingForm) {
  bookingForm.addEventListener('submit', function(e) {
    e.preventDefault();
    const btn = this.querySelector('button[type="submit"]');
    const orig = btn.innerHTML;
    btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending…';
    btn.disabled = true;
    setTimeout(() => {
      btn.innerHTML = '<i class="fas fa-check"></i> Request Sent!';
      btn.style.background = '#52B788';
      setTimeout(() => {
        bookingForm.reset();
        btn.innerHTML = orig;
        btn.style.background = '';
        btn.disabled = false;
      }, 3000);
    }, 1500);
  });
}

// ─── Contact form ───
const contactForm = document.getElementById('contactForm');
if (contactForm) {
  contactForm.addEventListener('submit', function(e) {
    e.preventDefault();
    const btn = this.querySelector('button[type="submit"]');
    const orig = btn.innerHTML;
    btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending…';
    btn.disabled = true;
    setTimeout(() => {
      btn.innerHTML = '<i class="fas fa-check"></i> Message Sent!';
      btn.style.background = '#52B788';
      setTimeout(() => {
        contactForm.reset();
        btn.innerHTML = orig;
        btn.style.background = '';
        btn.disabled = false;
      }, 3000);
    }, 1500);
  });
}

// ─── WhatsApp dynamic booking link ───
const WA_PHONE = '256775939636';
const waServicePick = document.getElementById('waServicePick');
const waBookLink    = document.getElementById('waBookLink');

function buildWAMessage(service) {
  const svc = service ? `a *${service}*` : 'a';
  return encodeURIComponent(
    `Hello Thrive Therapy & Wellness,\n\nI'd like to book ${svc} session. Please advise on available times.\n\nThank you.`
  );
}
function refreshWALink() {
  if (!waBookLink) return;
  const service = waServicePick ? waServicePick.value : '';
  waBookLink.href = `https://wa.me/${WA_PHONE}?text=${buildWAMessage(service)}`;
}
if (waServicePick) waServicePick.addEventListener('change', refreshWALink);
refreshWALink();

// ─── Blog filter ───
window.filterBlog = function(category, btn) {
  document.querySelectorAll('#blogGrid .blog-card').forEach(card => {
    card.style.display = (category === 'all' || card.dataset.category === category) ? '' : 'none';
  });
  document.querySelectorAll('.blog-filter-btn').forEach(b => b.classList.remove('active'));
  if (btn) btn.classList.add('active');
};

// ─── Back to top button ───
const backToTopBtn = document.getElementById('backToTop');
if (backToTopBtn) {
  window.addEventListener('scroll', () => {
    backToTopBtn.classList.toggle('visible', window.scrollY > 400);
  }, { passive: true });
  backToTopBtn.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
}

// ─── Cookie consent ───
(function() {
  const COOKIE_KEY = 'thrive_cookie_consent';
  if (localStorage.getItem(COOKIE_KEY)) return;
  const banner = document.getElementById('cookieBanner');
  if (!banner) return;
  setTimeout(() => banner.classList.add('show'), 1200);
  document.getElementById('cookieAccept').addEventListener('click', () => {
    localStorage.setItem(COOKIE_KEY, 'accepted');
    banner.classList.remove('show');
  });
  document.getElementById('cookieDecline').addEventListener('click', () => {
    localStorage.setItem(COOKIE_KEY, 'declined');
    banner.classList.remove('show');
  });
})();

// ─── Blog reading time ───
document.querySelectorAll('.blog-card').forEach(card => {
  const body = card.querySelector('.blog-card-body p, .blog-excerpt');
  if (!body) return;
  const words = body.textContent.trim().split(/\s+/).length;
  const mins  = Math.max(1, Math.round(words / 200));
  const rt    = card.querySelector('.reading-time');
  if (rt) rt.innerHTML = `<i class="fas fa-clock"></i> ${mins} min read`;
});
