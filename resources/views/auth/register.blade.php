<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Register</title>
  <link rel="stylesheet" href="{{asset('frontend/css/login/style.css')}}">
</head>
<body>
  <div class="wrapper">
    <form method="POST" action="{{ route('student.register') }}">
        @csrf
      <h2>Student Registration</h2>
        
      <div class="input-field">
        <input type="text" name="firstName" required>
        <label>First Name</label>
        <x-input-error :messages="$errors->get('firstName')" class="mt-2" />
      </div>
      <div class="input-field">
        <input type="text" name="lastName" required>
        <label>Last Name</label>
      </div>
      <div class="input-field">
        <input type="text" name="username" required>
        <label>Username</label>
      </div>    
      <div class="input-field">
        <input type="email" name="email" required>
        <label>Email</label>
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
      <button type="submit">Submit</button>
      <div class="register">
        <p>If you have an account? <a href="{{route('login')}}">Login</a></p>
      </div>
    </form>
  </div>
</body>
</html>