// Highlight current language button
const currentPath = window.location.pathname.toLowerCase();
const buttons = document.querySelectorAll('.lang-btn');
buttons.forEach(btn => {
  if (currentPath.endsWith(btn.dataset.url.toLowerCase())) {
    btn.classList.add('current');
  }
});

// Change language and save preference
function changeLanguage(url) {
  localStorage.setItem('preferredLang', url);
  window.location.href = url;
}