/* ============================================
   THRIVE THERAPY UG — Main JavaScript
   ============================================ */

// ─── Site-header scroll effect ───
const siteHeader = document.querySelector('.site-header');
const navbar     = document.querySelector('.navbar');
window.addEventListener('scroll', () => {
  if (siteHeader) {
    if (window.scrollY > 40) siteHeader.classList.add('scrolled');
    else siteHeader.classList.remove('scrolled');
  } else if (navbar) {
    // Fallback for pages without .site-header wrapper
    if (window.scrollY > 50) navbar.classList.add('scrolled');
    else navbar.classList.remove('scrolled');
  }
});

// ─── Mobile nav ───
const hamburger  = document.querySelector('.hamburger');
const mobileNav  = document.querySelector('.mobile-nav');
const mobileClose = document.querySelector('.mobile-close');

if (hamburger)  hamburger.addEventListener('click', () => mobileNav.classList.add('open'));
if (mobileClose) mobileClose.addEventListener('click', () => mobileNav.classList.remove('open'));
document.querySelectorAll('.mobile-nav a').forEach(link => {
  link.addEventListener('click', () => mobileNav.classList.remove('open'));
});

// ─── Active nav link ───
const currentPage = window.location.pathname.split('/').pop() || 'index.html';
document.querySelectorAll('.nav-links a').forEach(link => {
  const href = link.getAttribute('href');
  if (href === currentPage || (currentPage === '' && href === 'index.html')) {
    link.classList.add('active');
  }
});

// ─── Scroll animations ───
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) entry.target.classList.add('visible');
  });
}, { threshold: 0.1 });

document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));

// ─── Counter animation ───
function animateCounter(el, target, duration = 1800) {
  let start = 0;
  const step = target / (duration / 16);
  const timer = setInterval(() => {
    start += step;
    if (start >= target) { el.textContent = target + (el.dataset.suffix || ''); clearInterval(timer); }
    else el.textContent = Math.floor(start) + (el.dataset.suffix || '');
  }, 16);
}
const counterObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting && !entry.target.dataset.counted) {
      entry.target.dataset.counted = 'true';
      animateCounter(entry.target, parseInt(entry.target.dataset.target), 1800);
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
    btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
    btn.disabled = true;
    setTimeout(() => {
      btn.innerHTML = '<i class="fas fa-check"></i> Booking Request Sent!';
      btn.style.background = '#52B788';
      setTimeout(() => {
        bookingForm.reset();
        btn.innerHTML = 'Book My Session';
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
    btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
    btn.disabled = true;
    setTimeout(() => {
      btn.innerHTML = '<i class="fas fa-check"></i> Message Sent!';
      btn.style.background = '#52B788';
      setTimeout(() => {
        contactForm.reset();
        btn.innerHTML = 'Send Message';
        btn.style.background = '';
        btn.disabled = false;
      }, 3000);
    }, 1500);
  });
}

// ─── Blog filter ───
window.filterBlog = function(category) {
  const cards = document.querySelectorAll('#blogGrid .blog-card');
  const btns  = document.querySelectorAll('.blog-filter-btn');
  btns.forEach(b => {
    b.style.background = 'transparent';
    b.style.color = 'var(--green-deep)';
    b.style.borderColor = 'rgba(27,67,50,0.2)';
  });
  event.target.style.background = 'var(--green-deep)';
  event.target.style.color = 'white';
  event.target.style.borderColor = 'var(--green-deep)';
  cards.forEach(card => {
    card.style.display = (category === 'all' || card.dataset.category === category) ? '' : 'none';
  });
};
