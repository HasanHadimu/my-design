<x-layout :title="$title" :activePage="$activePage">
    @section('page')
        <x-header></x-header>

        {{-- Breadcrumb --}}
        <header class="font-poppins">
            <div class="py-6 pl-4 text-sm font-medium flex items-start gap-x-1">
                <a href="/pemesanan" class="text-gray-900 hover:text-yellow-400 transition duration-400">Portofolio</a>
                <span class="opacity-50">/</span>
                <a href="/pemesanan" class="text-gray-900 hover:text-yellow-400 transition duration-400">
                    {{ $menuItem->type }}
                </a>
                <span class="opacity-50">/</span>
                <p>{{ $menuItem->name }}</p>
            </div>
        </header>

        {{-- Main Content --}}
        <main class="bg-slate-100 px-4 py-12 font-poppins lg:px-10">

            {{-- Bagian Gambar --}}
            <div class="w-full mb-8">
                <img src="{{ asset('images/' . $menuItem->photo) }}" 
                     alt="{{ $menuItem->name }}" 
                     class="w-full h-[28em] object-cover rounded-md shadow">
            </div>

            {{-- Tombol Konsultasi via WhatsApp (posisi tengah) --}}
            <div class="flex justify-center mb-10">
                @php
                    // Ganti nomor WA di sini (pakai format internasional tanpa +)
                    $whatsappNumber = '6285777818634';
                    $message = "Halo, saya ingin konsultasi proyek " . $menuItem->name;
                    $whatsappLink = "https://wa.me/{$whatsappNumber}?text=" . urlencode($message);
                @endphp
                <a href="{{ $whatsappLink }}" target="_blank" 
                    class="px-6 py-3 bg-red-400 rounded-md font-bold text-sm text-slate-100 uppercase border border-red-400 transition duration-500 hover:bg-slate-100 hover:text-red-400">
                    Konsultasi Proyek Ini
                </a>
            </div>

            {{-- Kolom Tunggal: Deskripsi Proyek --}}
            <div class="w-full p-6 border border-gray-900/50 rounded-md bg-white">
                <h1 class="font-bold uppercase text-xl mb-2">{{ $menuItem->name }}</h1>
                <p class="text-gray-700 mb-4">{{ $menuItem->description }}</p>

                <ul class="space-y-2">
                    <li class="p-2 border-b border-gray-300">
                        <span class="text-base font-bold">Jumlah Lantai</span> : {{ $menuItem->menu_number }}
                    </li>
                    <li class="p-2 border-b border-gray-300">
                        <span class="text-base font-bold">Kamar Tidur</span> : {{ $menuItem->type }}
                    </li>
                    <li class="p-2 border-b border-gray-300">
                        <span class="text-base font-bold">Kamar Mandi</span> : {{ $menuItem->stock }}
                    </li>
                </ul>
            </div>

        </main>
    @endsection
</x-layout>
