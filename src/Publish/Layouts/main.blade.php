<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
  <meta name="author" content="AdminKit">
  <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <title>SIAP</title>

  <link href="/vendor/salam/adminkit/css/app.css" rel="stylesheet">
  <link rel="stylesheet" href="{{mix('css/adminkit.css')}}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="{{ mix('js/app.js') }}" defer></script>
  @routes
</head>

<body>
  @inertia

</body>

</html>