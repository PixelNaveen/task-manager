// Show spinner immediately when script loads
document.addEventListener('DOMContentLoaded', () => {
  const spinner = document.getElementById('loadingSpinner');
  if (spinner) {
    spinner.style.display = 'flex';
  }
});

// Hide spinner when page is fully loaded
window.addEventListener('load', () => {
  const spinner = document.getElementById('loadingSpinner');
  if (spinner) {
    spinner.style.opacity = '0';
    setTimeout(() => {
      spinner.style.display = 'none';
    }, 300); // Match transition duration from CSS
  }
});

// Show spinner when navigating away
window.addEventListener('beforeunload', () => {
  const spinner = document.getElementById('loadingSpinner');
  if (spinner) {
    spinner.style.opacity = '1';
    spinner.style.display = 'flex';
  }
}); 