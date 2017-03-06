<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
        <title>{{ config('app.name') }}</title>

        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div id="app">
            <app></app>
        </div>

        <script src="/js/app.js" charset="utf-8"></script>
    </body>
</html>
