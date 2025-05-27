// logout.js
import { auth } from './firebase.js';
import { signOut } from "https://www.gstatic.com/firebasejs/11.8.1/firebase-auth.js";

document.addEventListener("DOMContentLoaded", () => {
  const logoutBtn = document.getElementById("logoutBtn");

  if (logoutBtn) {
    logoutBtn.addEventListener("click", (e) => {
      e.preventDefault(); // Prevent link default behavior

      signOut(auth)
        .then(() => {
          alert("✅ Logged out successfully!");
          window.location.href = "index.php"; // Redirect to your login page
        })
        .catch((error) => {
          console.error("Logout failed:", error);
          alert("❌ Failed to logout. Try again.");
        });
    });
  }
});
