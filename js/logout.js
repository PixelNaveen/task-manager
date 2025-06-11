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
          // Use a relative path to the root
          window.location.href = "/index.php"; // Absolute path from web root
        })
        .catch((error) => {
          console.error("Logout failed:", error);
          alert("❌ Failed to logout. Try again.");
        });
    });
  } else {
    console.warn("Logout button with ID 'logoutBtn' not found. Check your HTML.");
  }
});