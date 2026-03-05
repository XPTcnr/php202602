function closeMobile() {
  document.getElementById('hamburger').classList.remove('open');
  document.getElementById('mobile-menu').classList.remove('open');
}

function toggleMobile() {
  const h = document.getElementById('hamburger'), m = document.getElementById('mobile-menu');
  h.classList.toggle('open'); m.classList.toggle('open');
}