<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
    @vite(['resources/css/app.css', 'resources/js/app.js'])
        
    <title>{{ $title ?? 'Untitled' }} | {{ config('app.name') }}</title>
</head>
<body class="bg-[#e5dfd5]">
    
    {{-- @include('components.navbar') --}}
    
    <main class="h-full mb-10 px-8 mt-[60px] max-w-screen-lg lg:mx-auto sm:mx-12 flex justify-center items-center text-gray-800">
        {{ $slot }}
    </main>

</body>
</html>
