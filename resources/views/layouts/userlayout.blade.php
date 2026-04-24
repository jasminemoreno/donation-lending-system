<!-- resources/views/layouts/userlayout.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    body { font-family: 'Segoe UI', sans-serif; }
    .card { border-radius: 18px; box-shadow: 0 6px 14px rgba(0,0,0,0.06); }
    .soft { background: #E4EFE6; }
    .green-soft { background: #E8F5E9; }
  </style>
</head>

<body class="bg-[#C6F2E0]">

  <!-- CALL NAVBAR -->
  @include('component.usernavbar')

  <!-- PAGE CONTENT -->
  <main>
    @yield('content')
  </main>

</body>
</html>