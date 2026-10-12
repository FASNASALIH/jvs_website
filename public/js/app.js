// Icons, mobile menu, scroll progress bar and scroll-reveal animations.
document.addEventListener('DOMContentLoaded', function () {
  if (window.lucide) lucide.createIcons();

  var toggle = document.getElementById('menu-toggle');
  var nav = document.getElementById('mobile-nav');
  if (toggle && nav) {
    toggle.addEventListener('click', function () {
      var open = nav.hasAttribute('hidden');
      open ? nav.removeAttribute('hidden') : nav.setAttribute('hidden', '');
      toggle.setAttribute('aria-expanded', open);
      toggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
      toggle.innerHTML = '<i data-lucide="' + (open ? 'x' : 'menu') + '"></i>';
      if (window.lucide) lucide.createIcons();
    });
  }

  var bar = document.getElementById('scroll-bar');
  function onScroll() {
    var max = document.documentElement.scrollHeight - window.innerHeight;
    if (bar) bar.style.transform = 'scaleX(' + (max > 0 ? window.scrollY / max : 0) + ')';
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) {
      if (e.isIntersecting) { e.target.classList.add('revealed'); observer.unobserve(e.target); }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -36px 0px' });
  document.querySelectorAll('.reveal').forEach(function (el) { observer.observe(el); });

  var form = document.getElementById('contact-form');
  if (form) {
    form.addEventListener('submit', function (ev) {
      ev.preventDefault();
      var f = new FormData(form);
      var subject = 'JVS enquiry: ' + (f.get('interest') || 'General enquiry');
      var body = 'Name: ' + f.get('name') + '\nEmail: ' + f.get('email') + '\n\n' + f.get('message');
      window.location.href = 'mailto:' + form.dataset.email + '?subject=' + encodeURIComponent(subject) + '&body=' + encodeURIComponent(body);
      document.getElementById('form-note').textContent = 'Your email draft is ready in your email app. Send it there to contact JVS.';
    });
  }
});
