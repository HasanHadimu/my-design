<x-layout :title="$title" :activePage="$activePage">
    @section('page')
        <x-header></x-header>

        <main class="bg-black">
            <div id="animation-carousel" class="relative w-full" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden md:h-96 lg:h-[34em] opacity-90">
                    <!-- Item 1 -->
                    <div class="hidden duration-200 ease-linear" data-carousel-item>
                        <img src="images/bg2.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-200 ease-linear" data-carousel-item="active">
                        <img src="images/bg1.jpeg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-200 ease-linear" data-carousel-item>
                        <img src="images/bg3.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-yellow-400/30
                        group-focus:ring-4 group-focus:ring-yellow-400 group-focus:outline-none">
                        <svg class="w-4 h-4 text-yellow-400 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-yellow-400/30
                        group-focus:ring-4 group-focus:ring-yellow-400 group-focus:outline-none">
                        <svg class="w-4 h-4 text-yellow-400 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </main>

        <section class="px-4 font-poppins bg-slate-100 py-10 lg:px-32">
            <hr class="h-[2px] mb-3 border border-gray-900">
            <h1 class="font-semibold text-2xl uppercase mb-4">Daftar Portofolio</h1>

            <div class="grid grid-cols-1 gap-y-10 md:grid-cols-2 md:gap-x-8 lg:grid-cols-3">
                @if ($menuItems->isEmpty())
                    <p>Tidak ada data menu tersedia.</p>
                @else
                    @foreach ($menuItems as $item)
                        <div>
                            <div class="relative h-[20em]">
                                <img src="{{ asset('images/' . $item->photo) }}" alt="{{ $item->name }}"
                                    class="w-full h-[20em]">
                                <div
                                    class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 hover:opacity-100 transition-opacity duration-300">
                                    <a href="{{ route('menu.show', $item->slug) }}"
                                        class="px-4 py-2 font-semibold text-slate-100 ring-1 ring-yellow-400 bg-transparent rounded hover:bg-yellow-400 duration-300">Lihat
                                        Detail</a>

                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

            
            <hr class="h-[2px] mb-6 border border-gray-900">

        </section>
    @endsection
</x-layout>
