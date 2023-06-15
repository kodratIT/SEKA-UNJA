<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- {{-- <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts --> --}}
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}} 

      <!-- BOOTSTRAP CSS -->
      <link id="style" href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

      <!-- STYLE CSS -->
       <link href="../assets/css/style.css" rel="stylesheet">
  
      <!-- Plugins CSS -->
      <link href="../assets/css/plugins.css" rel="stylesheet">
  
      <!--- FONT-ICONS CSS -->
      <link href="../assets/css/icons.css" rel="stylesheet">
  
      <!-- INTERNAL Switcher css -->
      <link href="../assets/switcher/css/switcher.css" rel="stylesheet">
      <link href="../assets/switcher/demo.css" rel="stylesheet">
</head>
<body class="app sidebar-mini ltr login-img">
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    

    
    <!-- JQUERY JS -->
    <script src="../assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SHOW PASSWORD JS -->
    <script src="../assets/js/show-password.min.js"></script>

    <!-- GENERATE OTP JS -->
    <script src="../assets/js/generate-otp.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="../assets/plugins/p-scroll/perfect-scrollbar.js"></script>

    <!-- Color Theme js -->
    <script src="../assets/js/themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="../assets/js/custom.js"></script>

    <!-- Custom-switcher -->
    <script src="../assets/js/custom-swicher.js"></script>

    <!-- Switcher js -->
    <script src="../assets/switcher/js/switcher.js"></script>
</body>
</html>
