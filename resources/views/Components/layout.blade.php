<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
       <nav>
           <a href="/">Home</a>
           <a href="/about">About</a>
           <a href="/contact">Contact</a>
           <a href="#">Nuevo Link</a>
       </nav>

       {{ $slot }}
    </body>
</html>
