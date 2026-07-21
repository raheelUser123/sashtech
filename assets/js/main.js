document.addEventListener('DOMContentLoaded', () => {
  const header = document.querySelector('#siteHeader');
  window.addEventListener('scroll', () => header?.classList.toggle('scrolled', window.scrollY > 20), { passive: true });

  const nav = document.querySelector('#mainNav');
  const toggle = document.querySelector('.nav-toggle');
  toggle?.addEventListener('click', () => {
    const open = nav.classList.toggle('open');
    toggle.setAttribute('aria-expanded', String(open));
  });

  document.querySelectorAll('.nav-dropdown > button').forEach((button) => {
    button.addEventListener('click', () => {
      const dropdown = button.parentElement;
      const open = dropdown.classList.toggle('open');
      button.setAttribute('aria-expanded', String(open));
    });
  });

  const popup = document.querySelector('#contactPopup');
  let lastFocus = null;
  const openPopup = () => {
    if (!popup) return;
    lastFocus = document.activeElement;
    popup.classList.add('open');
    popup.setAttribute('aria-hidden', 'false');
    document.body.classList.add('popup-open');
    popup.querySelector('input:not([type="hidden"]), button, select, textarea')?.focus();
  };
  const closePopup = () => {
    if (!popup) return;
    popup.classList.remove('open');
    popup.setAttribute('aria-hidden', 'true');
    document.body.classList.remove('popup-open');
    lastFocus?.focus();
  };
  document.querySelectorAll('[data-popup-open]').forEach((el) => el.addEventListener('click', openPopup));
  document.querySelectorAll('[data-popup-close]').forEach((el) => el.addEventListener('click', closePopup));
  document.addEventListener('keydown', (event) => { if (event.key === 'Escape') closePopup(); });

  document.querySelectorAll('.faq-button').forEach((button) => button.addEventListener('click', () => {
    const item = button.closest('.faq-item');
    const wasOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item.open').forEach((openItem) => {
      openItem.classList.remove('open');
      openItem.querySelector('button')?.setAttribute('aria-expanded', 'false');
    });
    if (!wasOpen) {
      item.classList.add('open');
      button.setAttribute('aria-expanded', 'true');
    }
  }));

  const revealObserver = new IntersectionObserver((entries) => entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
      revealObserver.unobserve(entry.target);
    }
  }), { threshold: 0.12 });
  document.querySelectorAll('.reveal').forEach((el) => revealObserver.observe(el));

  const runFilter = (buttonSelector, itemSelector) => {
    document.querySelectorAll(buttonSelector).forEach((button) => {
      button.addEventListener('click', () => {
        document.querySelectorAll(buttonSelector).forEach((item) => item.classList.remove('active'));
        button.classList.add('active');
        const filter = button.dataset.filter || 'all';
        document.querySelectorAll(itemSelector).forEach((card) => {
          const show = filter === 'all' || card.dataset.category === filter;
          card.classList.toggle('is-hidden', !show);
        });
      });
    });
  };
  runFilter('.filter-btn', '.project-card');
  runFilter('.work-filter', '.work-card');

  const counterObserver = new IntersectionObserver((entries) => entries.forEach((entry) => {
    if (!entry.isIntersecting) return;
    const el = entry.target;
    const target = Number(el.dataset.target || 0);
    const suffix = el.dataset.suffix || '';
    const duration = 1400;
    const started = performance.now();
    const update = (now) => {
      const progress = Math.min((now - started) / duration, 1);
      const eased = 1 - Math.pow(1 - progress, 3);
      el.textContent = `${Math.round(target * eased)}${suffix}`;
      if (progress < 1) requestAnimationFrame(update);
    };
    requestAnimationFrame(update);
    counterObserver.unobserve(el);
  }), { threshold: 0.45 });
  document.querySelectorAll('.counter').forEach((el) => counterObserver.observe(el));

  document.querySelectorAll('.contact-form').forEach((form) => form.addEventListener('submit', async (event) => {
    event.preventDefault();
    const status = form.querySelector('.form-status');
    const submit = form.querySelector('button[type="submit"]');
    if (status) status.textContent = 'Sending…';
    if (submit) submit.disabled = true;
    try {
      const response = await fetch(form.action, { method: 'POST', body: new FormData(form), headers: { 'X-Requested-With': 'XMLHttpRequest' } });
      const data = await response.json();
      if (status) {
        status.textContent = data.message;
        status.style.color = data.success ? '#79e6bb' : '#ff8eaa';
      }
      if (data.success) form.reset();
    } catch (error) {
      if (status) status.textContent = 'Something went wrong. Please try again.';
    } finally {
      if (submit) submit.disabled = false;
    }
  }));
});

