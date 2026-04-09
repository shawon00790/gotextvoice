<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Open Graph (Facebook SEO) -->
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">

</head>
<body>

@include('components.header')

@yield('content')

</body>
</html>