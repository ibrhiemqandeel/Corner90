// CORNER90 — shared interactions

document.addEventListener('DOMContentLoaded', () => {

  // Mobile nav toggle
  const navToggle = document.querySelector('.nav-toggle');
  const mainNav = document.querySelector('.main-nav');
  if (navToggle && mainNav) {
    navToggle.addEventListener('click', () => {
      const isOpen = mainNav.classList.toggle('is-open');
      navToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
      mainNav.style.display = isOpen ? 'flex' : 'none';
      if (isOpen) {
        mainNav.style.position = 'absolute';
        mainNav.style.top = '76px';
        mainNav.style.left = '0';
        mainNav.style.right = '0';
        mainNav.style.background = 'var(--bg)';
        mainNav.style.borderBottom = '1px solid var(--line)';
        mainNav.style.flexDirection = 'column';
        mainNav.style.padding = '18px 24px';
        mainNav.style.gap = '18px';
      }
    });
  }

  // Tabs (match detail page)
  document.querySelectorAll('.tabs').forEach(tabGroup => {
    const tabs = tabGroup.querySelectorAll('.tab');
    tabs.forEach(tab => {
      tab.addEventListener('click', () => {
        tabs.forEach(t => t.setAttribute('aria-selected', 'false'));
        tab.setAttribute('aria-selected', 'true');
        const targetId = tab.getAttribute('data-tab');
        const panels = document.querySelectorAll('.tab-panel');
        panels.forEach(p => p.classList.remove('is-active'));
        const target = document.getElementById(targetId);
        if (target) target.classList.add('is-active');
      });
    });
  });

  // Filter chips (fixtures / news pages) — purely presentational filtering
  document.querySelectorAll('.filters').forEach(filterGroup => {
    const chips = filterGroup.querySelectorAll('.filter-chip');
    chips.forEach(chip => {
      chip.addEventListener('click', () => {
        chips.forEach(c => c.setAttribute('aria-pressed', 'false'));
        chip.setAttribute('aria-pressed', 'true');
        const filter = chip.getAttribute('data-filter');
        const scope = document.querySelector(filterGroup.getAttribute('data-scope'));
        if (!scope) return;
        scope.querySelectorAll('[data-comp]').forEach(item => {
          const show = filter === 'all' || item.getAttribute('data-comp') === filter;
          item.style.display = show ? '' : 'none';
        });
      });
    });
  });

});
