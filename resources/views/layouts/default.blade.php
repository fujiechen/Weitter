<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Sample') - Laravel Small Project</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('layouts._header')

    <div class="containter">
        <div class="col-md-offset-1 col-md-10">
            @yield('content')
            @include('layouts._footer')
        </div>
    </div>
  </body>
</html>