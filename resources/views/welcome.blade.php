<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body>
    <h1>Welcome to {{ config('app.name', 'Laravel') }}</h1>
    <p>This is your first Laravel application!</p>
    <p class="p-2 font-bold">{{ date(DATE_RFC2822) }}</p>

    <script src="js/app.js"></script>
</body>

</html>
