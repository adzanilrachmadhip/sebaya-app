<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sebaya-App | Sign In</title>
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
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <label for="username">Username</label>
        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username') }}" required>
        @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label for="password">Password</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}" required>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <button type="submit">Login</button>
      </form>
      <div class="spacer-10"></div>
      <p>Don't have an account? <a href="{{ route('register') }}" id="signup-link" class="text-muted">Sign up</a></p>
      <p>Lupa Password?<a href="/lupa" class="text-muted"> Klik Disini !</a></p>
    </div>
  </div>
  <script src="/back/js/login.js"></script>
  </body>
</html>
