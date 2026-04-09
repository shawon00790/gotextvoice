<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @include('frontend.inc.header')

    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <!-- Open Graph (Facebook SEO) -->
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">
    @include('frontend.inc.css')
    

</head>
<body>

@include('frontend.inc.navbar')

@yield('content')

@include('frontend.inc.js')
@include('frontend.inc.footer')

<a href="https://wa.me/8801710200773" target="_blank"
   class="fixed bottom-5 right-5 z-50 bg-green-500 hover:bg-green-600 text-white p-4 rounded-full shadow-lg transition duration-300">
    
    <!-- WhatsApp Icon -->
    <svg xmlns="http://www.w3.org/2000/svg" 
         class="w-6 h-6" 
         fill="currentColor" 
         viewBox="0 0 24 24">
        <path d="M20.52 3.48A11.78 11.78 0 0012.05 0C5.41 0 .02 5.39.02 12.02c0 2.12.55 4.2 1.6 6.04L0 24l6.09-1.6a12 12 0 005.96 1.52h.01c6.63 0 12.02-5.39 12.02-12.02 0-3.2-1.25-6.2-3.56-8.42zM12.05 21.8h-.01a9.9 9.9 0 01-5.05-1.38l-.36-.21-3.61.95.96-3.52-.23-.36a9.87 9.87 0 01-1.52-5.27c0-5.47 4.45-9.92 9.92-9.92 2.65 0 5.14 1.03 7.01 2.9a9.86 9.86 0 012.9 7c0 5.47-4.45 9.92-9.92 9.92zm5.45-7.43c-.3-.15-1.76-.87-2.03-.97-.27-.1-.47-.15-.66.15-.2.3-.76.97-.93 1.17-.17.2-.35.22-.65.07-.3-.15-1.25-.46-2.38-1.48-.88-.78-1.47-1.74-1.64-2.04-.17-.3-.02-.46.13-.61.13-.13.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.07-.15-.66-1.6-.9-2.2-.24-.58-.48-.5-.66-.51h-.56c-.2 0-.52.07-.8.37-.27.3-1.04 1.02-1.04 2.48s1.06 2.87 1.2 3.07c.15.2 2.07 3.16 5.02 4.43.7.3 1.25.48 1.68.62.7.22 1.34.19 1.84.12.56-.08 1.76-.72 2.01-1.41.25-.7.25-1.3.17-1.41-.08-.1-.27-.15-.57-.3z"/>
    </svg>
</a>
</body>
</html>