document.addEventListener('DOMContentLoaded', () => {
  const navbar = document.getElementById('navbar');
  const mobileMenuBtn = document.getElementById('mobile-menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  const menuIcon = document.getElementById('menu-icon');
  const mobileLinks = document.querySelectorAll('.mobile-link');
  const backToTopBtn = document.getElementById('back-to-top');
  const contactForm = document.getElementById('contact-form');
  const formFeedback = document.getElementById('form-feedback');

  // 1. Navbar Scroll Effect & Back to Top Visibility
  const handleScroll = () => {
    if (window.scrollY > 40) {
      navbar.classList.add('navbar-scrolled');
    } else {
      navbar.classList.remove('navbar-scrolled');
    }

    if (window.scrollY > 500) {
      backToTopBtn.classList.remove('opacity-0', 'pointer-events-none');
      backToTopBtn.classList.add('opacity-100');
    } else {
      backToTopBtn.classList.add('opacity-0', 'pointer-events-none');
      backToTopBtn.classList.remove('opacity-100');
    }
  };

  window.addEventListener('scroll', handleScroll, { passive: true });
  handleScroll();

  // 2. Mobile Hamburger Menu Toggle
  if (mobileMenuBtn && mobileMenu) {
    mobileMenuBtn.addEventListener('click', () => {
      const isHidden = mobileMenu.classList.contains('hidden');
      mobileMenu.classList.toggle('hidden');
      mobileMenuBtn.setAttribute('aria-expanded', String(isHidden));

      if (isHidden) {
        menuIcon.classList.remove('fa-bars');
        menuIcon.classList.add('fa-xmark');
      } else {
        menuIcon.classList.remove('fa-xmark');
        menuIcon.classList.add('fa-bars');
      }
    });

    mobileLinks.forEach((link) => {
      link.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
        mobileMenuBtn.setAttribute('aria-expanded', 'false');
        menuIcon.classList.remove('fa-xmark');
        menuIcon.classList.add('fa-bars');
      });
    });
  }

  // 3. Back to Top Action
  if (backToTopBtn) {
    backToTopBtn.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // 4. Intersection Observer untuk Scroll Reveal Animation
  const revealElements = document.querySelectorAll('.reveal');
  const revealObserver = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('active');
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
  );

  revealElements.forEach((el) => revealObserver.observe(el));

  // 5. Validasi Sederhana & Integrasi Mailto pada Form Kontak (Tanpa Backend/Storage)
  if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
      e.preventDefault();

      const name = document.getElementById('sender-name').value.trim();
      const company = document.getElementById('sender-company').value.trim();
      const email = document.getElementById('sender-email').value.trim();
      const topic = document.getElementById('service-topic').value;
      const message = document.getElementById('sender-message').value.trim();

      if (!name || !email || !message) {
        formFeedback.textContent = 'Mohon lengkapi Nama Lengkap, Alamat Email, dan Detail Kebutuhan.';
        formFeedback.classList.remove('hidden');
        return;
      }

      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailPattern.test(email)) {
        formFeedback.textContent = 'Format alamat email tidak valid.';
        formFeedback.classList.remove('hidden');
        return;
      }

      formFeedback.classList.add('hidden');

      const subject = encodeURIComponent(`[Konsultasi ${topic}] - ${name}${company ? ' (' + company + ')' : ''}`);
      const body = encodeURIComponent(
        `Halo Tim PT. Guido Techno,\n\n` +
        `Nama: ${name}\n` +
        `Perusahaan: ${company || '-'}\n` +
        `Email: ${email}\n` +
        `Topik Layanan: ${topic}\n\n` +
        `Detail Kebutuhan:\n${message}`
      );

      window.location.href = `mailto:info@guidotechno.co.id?subject=${subject}&body=${body}`;
    });
  }
});