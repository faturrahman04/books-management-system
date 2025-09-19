<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>@yield('title')</title>
</head>
<body>
  <div class="flex">
    <x-sidebar></x-sidebar>

    <div class="flex flex-col w-full">
      <x-navbar></x-navbar>

      @yield('page')
    </div>
  </div>
</body>
</html>