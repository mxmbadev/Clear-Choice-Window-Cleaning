document.addEventListener('click', function (e) {
  const btn = e.target.closest('[data-toggle="service"]');
  if (!btn) return;

  // update button states
  document.querySelectorAll('[data-toggle="service"]').forEach(b => {
    b.classList.toggle('active', b === btn);
    b.setAttribute('aria-selected', b === btn ? 'true' : 'false');
  });

  // show/hide panels
  const targetId = btn.getAttribute('data-target');
  document.querySelectorAll('.service-panel').forEach(p => {
    p.hidden = (p.id !== targetId);
  });
});

