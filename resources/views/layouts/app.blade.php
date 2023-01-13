<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    {{-- @yield => sono dei segnaposto blade che possiamo richiamare all'occorenza all'interno di una pagina e scegliere che cosa inserire al suo interno--}}
    <title>@yield('page-title')</title>

    <link rel="stylesheet" href=" {{ asset("css/>app.css") }} ">
</head>

<body>
    <header>
        @include('partials.menu')
    </header>
    <main>
        @yield('main-content')
    </main>
</body>
</html>