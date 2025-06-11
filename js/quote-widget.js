// === WIDGET: Daily Quote ===
document.addEventListener('DOMContentLoaded', () => {
  const quoteText = document.getElementById("quoteText");
  const quoteAuthor = document.getElementById("quoteAuthor");

  if (!quoteText || !quoteAuthor) {
    console.warn("Quote widget elements not found");
    return;
  }

  async function loadQuote() {
    const today = new Date().toISOString().split("T")[0];
    const savedDate = localStorage.getItem("quoteDate");
    const savedQuote = localStorage.getItem("quoteText");
    const savedAuthor = localStorage.getItem("quoteAuthor");

    // Use saved quote if it's from today
    if (savedDate === today && savedQuote && savedAuthor) {
      console.log("Using cached quote from localStorage");
      quoteText.textContent = `"${savedQuote}"`;
      quoteAuthor.textContent = savedAuthor;
      return;
    }

    try {
      console.log("Fetching new quote from API...");
      // Try the random endpoint instead of today as it has better rate limits
      const response = await fetch("https://api.quotable.io/random", {
        method: 'GET',
        headers: {
          'Accept': 'application/json',
        },
      });

      if (!response.ok) {
        throw new Error(`HTTP error! status: ${response.status}`);
      }

      const data = await response.json();
      console.log("API Response:", data);

      // Update DOM with the new quote
      quoteText.textContent = `"${data.content}"`;
      quoteAuthor.textContent = data.author || "Unknown";
      
      // Save to localStorage
      localStorage.setItem("quoteDate", today);
      localStorage.setItem("quoteText", data.content);
      localStorage.setItem("quoteAuthor", data.author || "Unknown");
      
      console.log("Quote successfully updated and cached");
    } catch (error) {
      console.error("Error fetching quote:", error);
      
      // Single fallback quote if API fails
      quoteText.textContent = `"The future belongs to those who believe in the beauty of their dreams."`;
      quoteAuthor.textContent = "Eleanor Roosevelt";
    }
  }

  // Load quote immediately
  loadQuote();

  // // Add a manual refresh button for testing
  // const refreshButton = document.createElement('button');
  // refreshButton.className = 'btn btn-sm btn-outline-secondary mt-2';
  // refreshButton.innerHTML = '<i class="fas fa-sync-alt"></i> New Quote';
  // refreshButton.onclick = () => {
  //   // Clear localStorage to force new quote fetch
  //   localStorage.removeItem("quoteDate");
  //   localStorage.removeItem("quoteText");
  //   localStorage.removeItem("quoteAuthor");
  //   loadQuote();
  // };
  // quoteText.parentElement.appendChild(refreshButton);
}); 