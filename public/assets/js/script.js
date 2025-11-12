// === NAVBAR TOGGLE ===
const menuToggle = document.querySelector('.menu-toggle');
const navLinks = document.querySelector('.nav-links');

menuToggle.addEventListener('click', () => {
  navLinks.classList.toggle('active');
});

// Tutup menu otomatis setelah klik salah satu link
document.querySelectorAll('.nav-links a').forEach(link => {
  link.addEventListener('click', () => {
    navLinks.classList.remove('active');
  });
});


// === SCROLL ANIMATIONS ===
const fadeElements = document.querySelectorAll('.fade-in, .slide-up');

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.style.animationPlayState = 'running';
      observer.unobserve(entry.target); // agar tidak berulang-ulang
    }
  });
}, {
  threshold: 0.2
});

fadeElements.forEach(el => {
  el.style.animationPlayState = 'paused';
  observer.observe(el);
});
