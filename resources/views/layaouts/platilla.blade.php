<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- favicon -->
    <!-- estilos -->
    <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
    <style>
        .active{
            background: #c9c9c9;
            padding: 2px;
        }
    </style>
</head>
<body>
    <!-- header -->
    @include('layaouts/partials/header')
    <h1>@yield('content')</h1>

    @include('layaouts/partials/footer')
    @include('layaouts/partials/scripts')
</body>
</html>