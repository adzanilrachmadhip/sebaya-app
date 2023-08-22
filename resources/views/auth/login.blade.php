<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sebaya-App | {{$title}}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/back/css/login/style.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
  </head>
  <body>
    
  <div class="container">
    <div class="form-container" id="login-form">
      <h1 class="text-muted">Login</h1>
      <form>
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Login</button>
      </form>
      <div class="spacer-10"></div>
      <p>Don't have an account? <a href="#" id="signup-link" class="text-muted">Sign up</a></p>
      <p>Lupa Password?<a href="/lupa" class="text-muted"> Klik Disini !</a></p>
    </div>
    <div class="form-container" id="signup-form" style="display: none;">
      <h1 class="text-muted">Sign Up</h1>
      <form>
        <label for="new-username">Username</label>
        <input type="text" id="new-username" name="new-username" required>
        <label for="new-email">Email</label>
        <input type="email" id="new-email" name="new-email" required>
        <label for="new-password">Password</label>
        <input type="password" id="new-password" name="new-password" required>
        <button type="submit">Daftar</button>
      </form>
      <p>Already have an account? <a href="#" id="login-link">Login</a></p>
    </div>
  </div>
  <script src="/back/js/login.js"></script>      
  </body>
</html>