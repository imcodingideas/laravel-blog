@extends ('layouts.master')

@section ('content')
  <h1>Register</h1>
  <hr>

  <form method="POST" action="/register">
    @csrf
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" placeholder="Your Name" name="name" required>
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" placeholder="Your Email" name="email" required>
    </div>

    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" placeholder="Your Password" name="password" required>
    </div>

    <div class="form-group">
      <label for="password_confirmation">Password Confirmation:</label>
      <input type="password" class="form-control" placeholder="Your Password" name="password_confirmation" required>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Register</button>
    </div>

    @include ('layouts.errors')

  </form>

@endsection