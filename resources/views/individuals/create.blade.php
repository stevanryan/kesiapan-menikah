<x-layout title="Individual">
    
    <div class="w-96">
        <h1 class="text-center font-bold mb-4 text-2xl">Individuals</h1>
        <form action="{{ route('individuals.store') }}" method="POST">
            @csrf
            @method('POST')
        
            <!-- Field untuk Nama -->
            <div class="mb-3">
                <label for="nama" class="block font-medium text-gray-700">Nama</label>
                <input type="text" name="nama" id="nama" class="focus:border-none bg-transparent placeholder-gray-500 text-sm w-full border border-gray-700 rounded-lg px-2 py-2 mt-2" placeholder="Masukkan nama" required>
                @error('nama')
                    <p class="text-sm my-1 text-red-500">{{ $message }}</p>
                @enderror
            </div>
        
            <!-- Radio Button untuk Tingkat Pendidikan -->
            <div class="mb-3">
                <p class="block font-medium text-gray-700 mb-2">Tingkat Pendidikan</p>
                <div class="flex flex-col">
                    <div class="flex items-center justify-start mb-2">
                        <input type="radio" name="tingkat_pendidikan" value="S2/S3" class="form-radio" required>
                        <span class="ml-2">S2/S3</span>
                    </div>
                    <div class="flex items-center justify-start mb-2">
                        <input type="radio" name="tingkat_pendidikan" value="D3/S1" class="form-radio">
                        <span class="ml-2">D3/S1</span>
                    </div>
                    <div class="flex items-center justify-start mb-2">
                        <input type="radio" name="tingkat_pendidikan" value="SMA/SMK" class="form-radio">
                        <span class="ml-2">SMA/SMK</span>
                    </div>
                    <div class="flex items-center justify-start mb-2">
                        <input type="radio" name="tingkat_pendidikan" value="SD/SMP" class="form-radio">
                        <span class="ml-2">SD/SMP</span>
                    </div>
                </div>
                @error('tingkat_pendidikan')
                    <p class="text-sm my-1 text-red-500">{{ $message }}</p>
                @enderror
            </div>
        
            <!-- Radio Button untuk Jumlah Penghasilan -->
            <div class="mb-3">
                <p class="block font-medium text-gray-700 mb-2">Jumlah Penghasilan</p>
                <div>
                    <div class="flex items-center justify-start mb-2">
                        <input type="radio" name="jumlah_penghasilan" value="> 7.000.000" class="form-radio" required>
                        <span class="ml-2">> 7.000.000</span>
                    </div>
                    <div class="flex items-center justify-start mb-2">
                        <input type="radio" name="jumlah_penghasilan" value="> 4.000.000 s.d. 7.000.000" class="form-radio">
                        <span class="ml-2">> 4.000.000 s.d. 7.000.000</span>
                    </div>
                    <div class="flex items-center justify-start mb-2">
                        <input type="radio" name="jumlah_penghasilan" value="> 2.000.000 s.d. 4.000.000" class="form-radio">
                        <span class="ml-2">> 2.000.000 s.d. 4.000.000</span>
                    </div>
                    <div class="flex items-center justify-start mb-2">
                        <input type="radio" name="jumlah_penghasilan" value="< 2.000.000" class="form-radio">
                        <span class="ml-2">< 2.000.000</span>
                    </div>
                </div>
                @error('jumlah_penghasilan')
                    <p class="text-sm my-1 text-red-500">{{ $message }}</p>
                @enderror
            </div>
        
            <!-- Radio Button untuk Jumlah Tabungan -->
            <div class="mb-3">
                <p class="block font-medium text-gray-700 mb-2">Jumlah Tabungan</p>
                <div>
                    <div class="flex items-center justify-start mb-2">
                        <input type="radio" name="jumlah_tabungan" value="> 35.000.000" class="form-radio" required>
                        <span class="ml-2">> 35.000.000</span>
                    </div>
                    <div class="flex items-center justify-start mb-2">
                        <input type="radio" name="jumlah_tabungan" value="> 15.000.000 s.d. 35.000.000" class="form-radio">
                        <span class="ml-2">> 15.000.000 s.d. 35.000.000</span>
                    </div>
                    <div class="flex items-center justify-start mb-2">
                        <input type="radio" name="jumlah_tabungan" value="< 15.000.000" class="form-radio">
                        <span class="ml-2">< 15.000.000</span>
                    </div>
                    <div class="flex items-center justify-start mb-2">
                        <input type="radio" name="jumlah_tabungan" value="Tidak memiliki tabungan" class="form-radio">
                        <span class="ml-2">Tidak memiliki tabungan</span>
                    </div>
                </div>
                @error('jumlah_tabungan')
                    <p class="text-sm my-1 text-red-500">{{ $message }}</p>
                @enderror
            </div>
        
            <!-- Radio Button untuk Usia -->
            <div class="mb-3">
                <p class="block font-medium text-gray-700 mb-2">Usia</p>
                <div>
                    <div class="flex items-center justify-start mb-2">
                        <input type="radio" name="usia" value="> 30" class="form-radio" required>
                        <span class="ml-2">> 30</span>
                    </div>
                    <div class="flex items-center justify-start mb-2">
                        <input type="radio" name="usia" value="25 - 30" class="form-radio">
                        <span class="ml-2">25 - 30</span>
                    </div>
                    <div class="flex items-center justify-start mb-2">
                        <input type="radio" name="usia" value="20 - 24" class="form-radio">
                        <span class="ml-2">20 - 24</span>
                    </div>
                    <div class="flex items-center justify-start mb-2">
                        <input type="radio" name="usia" value="< 20" class="form-radio">
                        <span class="ml-2">< 20</span>
                    </div>
                </div>
                @error('usia')
                    <p class="text-sm my-1 text-red-500">{{ $message }}</p>
                @enderror
            </div>
        
            <!-- Radio Button untuk Tempat Tinggal -->
            <div class="mb-3">
                <p class="block font-medium text-gray-700 mb-2">Tempat Tinggal</p>
                <div>
                    <div class="flex items-center justify-start mb-2">
                        <input type="radio" name="tempat_tinggal" value="Rumah sendiri" class="form-radio" required>
                        <span class="ml-2">Rumah sendiri</span>
                    </div>
                    <div class="flex items-center justify-start mb-2">
                        <input type="radio" name="tempat_tinggal" value="Kontrakan/Apartemen" class="form-radio">
                        <span class="ml-2">Kontrakan/Apartemen</span>
                    </div>
                    <div class="flex items-center justify-start mb-2">
                        <input type="radio" name="tempat_tinggal" value="Kos" class="form-radio">
                        <span class="ml-2">Kos</span>
                    </div>
                    <div class="flex items-center justify-start mb-2">
                        <input type="radio" name="tempat_tinggal" value="Tinggal bersama orang tua/saudara" class="form-radio">
                        <span class="ml-2">Tinggal bersama orang tua/saudara</span>
                    </div>
                </div>
                @error('tempat_tinggal')
                    <p class="text-sm my-1 text-red-500">{{ $message }}</p>
                @enderror
            </div>
        
            <button type="submit" class="mt-2 text-white bg-pink-500 hover:bg-pink-500 focus:ring-4 font-medium rounded-lg text-sm px-4 py-2 mb-4 dark:bg-pink-500 dark:hover:bg-white dark:hover:text-pink-500 focus:outline-none border border-pink-500">Berikutnya</button>
        </form>
    </div>

</x-layout>