<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Login</title>
  <link rel="stylesheet" href="{{asset('frontend/css/login/style.css')}}">
</head>
<body>
  <div class="wrapper">
    <form method="POST" action="{{ route('login') }}">
        @csrf
      <h2>Login</h2>
        <div class="input-field">
        <input type="text" name="login" required>
        <label>Username or Email</label>
      </div>
      <div class="input-field">
        <input type="password" name="password" required>
        <label>Password</label>
      </div>
      {{-- <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p>Remember me</p>
        </label>
        <a href="#">Forgot password?</a>
      </div> --}}
      <button type="submit">Log In</button>
      <div class="register">
        <p>Don't have an account? <a href="{{route('register')}}">Register</a></p>
      </div>
    </form>
  </div>
</body>
</html>