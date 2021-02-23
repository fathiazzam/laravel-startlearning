<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>
</head>
<body>
   <header>
     <nav>
        <a href="/">Home</a>
        <a href="/blog">Blog</a>
    </nav>
   </header>
   <br>
    @yield('content')

    <br>
    <footer>
    <p>
    &copy; laravel belajar
    </p>
    </footer>
</body>
</html>