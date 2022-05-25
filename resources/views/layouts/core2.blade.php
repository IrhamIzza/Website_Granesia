<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-light bg-white fixed-top">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="images/Capture.PNG" alt="" width="80" style="margin-left:30% ;" style="padding:0 ;">
    </a>
    <a class="navbar-brand" href="/index">Beranda</a>
    <a class="navbar-brand" href="/tanaman">Tanaman</a>
    <a class="navbar-brand" href="/budidaya">Budidaya</a>
    <a class="navbar-brand" href="/media">Media Tanam</a>
    <a class="navbar-brand" href="/belanja">Belanja</a>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="border-radius: 20px;">
      <button class="btn btn-outline-success" type="submit" style="border-radius: 20px;">Search</button>
    </form>
  </div>
</nav>

@yield('contents')

</body>