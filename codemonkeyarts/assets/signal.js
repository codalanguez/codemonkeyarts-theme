/* Decorative effects never change readable content or run network requests. */
(() => {
  'use strict';
  const button = document.querySelector('.cma-motion');
  if (!button) return;
  const preference = window.matchMedia('(prefers-reduced-motion: reduce)');
  let disabled = preference.matches;
  try { disabled = disabled || localStorage.getItem('cma-effects') === 'off'; } catch (_) { /* Storage may be blocked. */ }
  function render() {
    const paused = disabled || preference.matches;
    document.documentElement.classList.toggle('cma-still', paused);
    button.setAttribute('aria-pressed', String(!paused));
    button.dataset.state = paused ? 'off' : 'on';
  }
  button.hidden = false;
  button.addEventListener('click', () => {
    disabled = !disabled;
    try { localStorage.setItem('cma-effects', disabled ? 'off' : 'on'); } catch (_) { /* Optional preference only. */ }
    render();
  });
  preference.addEventListener('change', render);
  render();
})();
