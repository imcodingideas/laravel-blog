@extends ('layouts.master')

@section ('content')
  <h1>Publish a Post</h1>
  <hr>

  <form method="POST" action="/posts">
    @csrf
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" placeholder="Post Title" name="title">
    </div>
    <div class="form-group">
      <label for="body">Body</label>
      <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Publish</button>
  </form>

@endsection