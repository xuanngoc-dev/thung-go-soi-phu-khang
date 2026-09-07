(function () {
  const root = document.querySelector('.js-float-support');
  if (!root) {
    return;
  }

  const toggle = root.querySelector('.js-float-support-toggle');
  const channels = root.querySelector('.floatSupport__channels');
  if (!toggle || !channels) {
    return;
  }

  let closeTimer = null;
  let isOpen = false;

  const setOpen = (open) => {
    if (open === isOpen && !root.classList.contains('is-closing')) {
      return;
    }

    if (closeTimer) {
      clearTimeout(closeTimer);
      closeTimer = null;
    }

    isOpen = open;

    if (open) {
      root.classList.remove('is-closing');
      root.classList.add('is-open');
      channels.setAttribute('aria-hidden', 'false');
      toggle.setAttribute('aria-expanded', 'true');
      toggle.setAttribute('aria-label', 'Đóng kênh hỗ trợ');
      return;
    }

    root.classList.remove('is-open');
    root.classList.add('is-closing');
    toggle.setAttribute('aria-expanded', 'false');
    toggle.setAttribute('aria-label', 'Mở kênh hỗ trợ');

    closeTimer = setTimeout(() => {
      root.classList.remove('is-closing');
      channels.setAttribute('aria-hidden', 'true');
      closeTimer = null;
    }, 360);
  };

  toggle.addEventListener('click', (event) => {
    event.stopPropagation();
    setOpen(!isOpen);
  });

  document.addEventListener('click', (event) => {
    if (!root.contains(event.target)) {
      setOpen(false);
    }
  });

  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
      setOpen(false);
    }
  });
})();
