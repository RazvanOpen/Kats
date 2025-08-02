// Fade-in des sections au chargement
document.addEventListener("DOMContentLoaded", () => {
  const sections = document.querySelectorAll(".section");

  sections.forEach((section, index) => {
    section.style.animationDelay = `${index * 0.3}s`;
    section.classList.add("fade-in");
  });
});

// Animation des titres au scroll
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
    }
  });
}, { threshold: 0.5 });

document.querySelectorAll('.section-title').forEach(title => {
  observer.observe(title);
});
// Effet parallaxe sur le titre flottant HERO
window.addEventListener('scroll', () => {
  const title = document.querySelector('.floating-title');
  const scrollPos = window.scrollY;
  if (title) {
    title.style.transform = `translateY(${scrollPos * 0.3}px)`; // effet parallaxe subtil
  }
});
