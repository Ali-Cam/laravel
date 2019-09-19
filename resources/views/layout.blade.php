<!DOCTYPE html>
<html>  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'index')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <style>
      .is-checked{
        text-decoration:line-through;
      }
    </style>
  </head>
  <body>
  <section class="section">
    <div class="container">
      @yield('content')
    </div>
  </section>
  </body>
</html>