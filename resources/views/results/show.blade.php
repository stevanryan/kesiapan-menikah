<x-layout title="Hasil">
    <div class="w-screen h-[90vh] flex items-center justify-center relative">
        <div class="flex-1 h-full border-r border-gray-300 flex flex-col justify-center p-8">
            <!-- Name Section -->
            <section class="mb-4">
                <h1 class="text-5xl font-bold text-gray-800">{{ $individual['nama'] }}</h1>
            </section>

      
            <section class="mb-2">
                <h1 class="text-lg text-gray-600">Tingkat Kesiapan Menikah:</h1>
            </section>

            <!-- Percentage Section -->
            <section class="flex justify-center">
                <h1 class="text-9xl text-pink-500 font-bold">{{ $total_alternatif_individual * 100 }}%</h1>
            </section>
        </div>

        <div class="flex-1 h-full flex flex-col justify-center p-8">
            <!-- Name Section -->
            <section class="mb-4">
                <h1 class="text-5xl font-bold text-gray-800">{{ $partner['nama'] }}</h1>
            </section>

      
            <section class="mb-2">
                <h1 class="text-lg text-gray-600">Tingkat Kesiapan Menikah:</h1>
            </section>


            <!-- Percentage Section -->
            <section class="flex justify-center">
                <h1 class="text-9xl text-pink-500 font-bold">{{ $total_alternatif_partner * 100 }}%</h1>
            </section>
        </div>

        <a href="/" class="absolute right-4 bottom-4 bg-pink-600 text-white py-3 px-6 rounded-md hover:bg-pink-400 transition-colors shadow-lg">
            <button>Home</button>
        </a>
    </div>
</x-layout>
