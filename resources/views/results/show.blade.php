<x-layout title="Hasil">
    <div class="w-screen h-[80vh] flex items-center justify-center relative">
        <div class="flex-1 h-full border-r border-gray-300 flex flex-col justify-center p-8">
            <!-- Name Section -->
            <section class="mb-4">
                <h1 class="text-4xl font-bold text-gray-800">{{ $individual['nama'] }}</h1>
            </section>

            <section class="mb-2">
                <h1 class="text-lg text-gray-600">Tingkat Kesiapan Menikah:</h1>
            </section>

            <!-- Percentage Section -->
            <section class="flex justify-center">
                <h1 class="text-8xl text-pink-500 font-bold">{{ $total_alternatif_individual * 100 }}%</h1>
            </section>
        </div>

        <div class="flex-1 h-full flex flex-col justify-center p-8">
            <!-- Name Section -->
            <section class="mb-4">
                <h1 class="text-4xl font-bold text-gray-800">{{ $partner['nama'] }}</h1>
            </section>
      
            <section class="mb-2">
                <h1 class="text-lg text-gray-600">Tingkat Kesiapan Menikah:</h1>
            </section>

            <!-- Percentage Section -->
            <section class="flex justify-center">
                <h1 class="text-8xl text-pink-500 font-bold">{{ $total_alternatif_partner * 100 }}%</h1>
            </section>
        </div>

        <a href="/" class="absolute bottom-4 right-4 custom-hover-button px-4 py-2 text-white rounded-md bg-pink-500">
            <button>Home</button>
        </a>
    </div>
</x-layout>
