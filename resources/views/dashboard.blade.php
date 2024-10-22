<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])

    <title>Dashboard | {{ config('app.name') }}</title>
</head>
<body>
    <div class="w-full flex flex-col items-center justify-center h-screen">
        <h1 class="text-4xl font-extrabold">Kesiapan Menikah</h1>
        <h3 class="text-xl font-light mb-4">Apakah Anda siap untuk <p class="text-pink-500 inline font-medium">menikah?</p></h3>
        <div class="mt-16 flex flex-col items-center justify-center">
            <h4 className="text-lg font-medium">Cari tau sekarang juga!</h4>
            <a href={{ route('individuals.create') }}>
                <button class="custom-hover-button px-4 py-2 mt-3 text-white rounded-md bg-pink-500">Mulai</button>
            </a>
        </div>
    </div>
</body>
</html>