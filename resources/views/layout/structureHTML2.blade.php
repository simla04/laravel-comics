<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield("link")
    <title>@yield("title")</title>
</head>
<body>

    <header>
        @include("components.navbar")
    </header>
    <main>

       @yield("main-content")
    </main>
    <footer>
    @include("components.footerOne")
    </footer>
</body>
</html>
