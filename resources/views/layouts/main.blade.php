<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
        <p class="text-sm text-gray-500  dark:text-gray-400">Нарушений.нет</p>
    </header>
    <main class="container md:mx-auto">
        @yield('content')
    </main>
    <footer class="bg-white mt-4 dark:bg-gray-900">
    <div class="w-full md:mx-auto p-4 md:flex md:items-center md:justify-between">
      <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">
        © 2024 Васильев В. All Rights Reserved.
    </span>
    </div>
</footer>

</body>
</html>