
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Blog</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/app.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="#">Josephs Blog</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            @if (Auth::check())
              <a class="btn btn-sm btn-outline-secondary" href="/logout">Logout</a>
            @endif

            @if (!Auth::check())
              <div class="btn-groug">
                <a class="btn btn-sm btn-outline-secondary" href="/register">Sign Up</a>
                <a class="btn btn-sm btn-outline-secondary" href="/login">Login</a>
              </div>
            @endif

          </div>
        </div>
      </header>

      @include ('layouts.nav')

    </div>

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">

          @yield ('content')

        </div><!-- /.blog-main -->

        @include ('layouts.sidebar')

      </div><!-- /.row -->

    </main><!-- /.container -->

    @include ('layouts.footer')
  </body>
</html>