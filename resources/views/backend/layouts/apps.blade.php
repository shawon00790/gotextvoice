@include('backend.inc.header')
</head>
<body class="bg-gray-100 font-sans">

<div class="flex h-screen">
  <!-- Sidebar -->
  @include('backend.inc.asidebar')
  <main class="ml-64 w-full">
    @yield('content')
  </main>
</div>
  @yield('scripts')
</body>
</html>