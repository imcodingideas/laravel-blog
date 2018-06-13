@extends('layouts.master')

@section('content')
<h1>Sign In</h1>
<hr>

<form method="POST" action="/login">
  @csrf

  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" placeholder="Your Email" name="email" required>
  </div>

  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" placeholder="Your Password" name="password" required>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary">Sign In</button>
  </div>

  @include ('layouts.errors')

</form>
@endsection