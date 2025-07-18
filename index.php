<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign In</title>
  <link rel="stylesheet" href="css/signin.css" />
  <link rel="stylesheet" href="css/spinner.css" />
  <script defer type="module" src="js/signin.js"></script>
  <script src="js/spinner.js"></script>
</head>
<body>
  <?php include 'php/spinner.php'; ?>
  <div class="container">
    <div class="form-box">
      <h2>Sign In</h2>
      <form id="signinForm">
        <div class="form-group">
          <label for="email">Email or Username</label>
          <input type="text" id="email" name="email" placeholder="Enter email or username" required />
        </div>
        <div class="form-group password-group">
          <label for="password">Password</label>
          <div class="password-wrapper">
            <input type="password" id="password" name="password" placeholder="Enter password" required />
            <span class="toggle-password" id="togglePassword">
              <svg class="eye-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                <circle cx="12" cy="12" r="3"/>
              </svg>
            </span>
          </div>
        </div>
        <div class="form-remember">
          <input type="checkbox" id="rememberMe" name="rememberMe" />
          <label for="rememberMe">Remember me</label>
        </div>
        <button type="submit" class="btn">Sign In</button>
      </form>
      <div class="divider"><span>or</span></div>
      <button id="customBtn" onclick="signInWithGoogle()">
        <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google logo" />
        Sign in with Google
      </button>
      <p class="redirect">Don't have an account? <a href="php/signup.php">Sign up here</a></p>
    </div>
  </div>
</body>
</html>