<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <!-- my css  -->
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sidebars.css">

    <title>Seeder</title>
  </head>
  <body class="bg-light">
    @include("components.icon")


    @yield('container')



    {{-- script --}}
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
  </body>
</html>

