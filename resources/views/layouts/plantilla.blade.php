<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!--<script src="https://cdn.tailwindcss.com"></script>-->
    <script src="//unpkg.com/alpinejs" defer></script>
    <!-- favicon -->
    <!-- estilos -->
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-400">

<!-- header -->
<!-- nav -->
@include('layouts.partials.header')


<div class="container mx-auto p-10 bg-slate-400 w-full">

@yield('content')

</div>

<!-- footer -->
@include('layouts.partials.footer')

<!-- script -->
</body>
</html>
