<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>{{ $title }}</title>
        @vite("resources/js/app.js")
    </head>

    <body>
        @include("shared.header")
        <main>
            @yield("main")
            @yield("scripts")
        </main>
        @include("shared.footer")
    </body>
</html>
