<x-layout :title="$title" :activePage="$activePage">
    @section('page')
        {{-- Start Main --}}
        <main class="relative h-[60vh] bg-cover bg-center overflow-x-hidden bg-catering md:h-[75vh]">
            <!-- Overlay hitam dengan opacity -->
            <div class="absolute inset-0 bg-black opacity-40"></div>
            <!-- Konten di atas background -->
            <div class="relative z-10 flex items-center justify-center h-full md:pt-12">
                <div class="text-center max-w-2xl -space-y-2 w-full px-5 md:pl-10 md:-space-y-1 lg:-space-y-4 lg:pl-7">
                    <h1 class="text-6xl text-yellow-400 font-medium tracking-tight mb-2 font-euphoria lg:mb-5 md:text-8xl">
                        Tentang</h1>
                    <p class="text-xl font-poppins font-semibold uppercase text-slate-100 md:text-5xl">Kami</p>
                </div>
            </div>
        </main>
        {{-- End Main --}}

        {{-- Start Section I --}}
        <section class="bg-slate-100 pb-10 pt-14">
            <div class="grid grid-cols-1 p-6 gap-y-6 md:grid-cols-2 md:gap-x-6 lg:px-32">
                <div
                    class="p-10 bg-slate-100 border border-gray-200 rounded-lg shadow-md shadow-yellow-500 flex flex-col justify-center h-full">
                    <div class="text-center space-y-3 px-5">
                        <h5 class="-mb-4 text-3xl font-euphoria tracking-tight text-gray-900 lg:text-4xl">
                            Tentang
                        </h5>
                        <h1 class="text-3xl mb-3 font-bold uppercase text-gray-700">Kami</h1>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-7 mx-auto">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                        </svg>
                        <div class="text-lg space-y-2 font-poppins">
                            <div>Diskusikan ide dan kebutuhan desain Anda bersama tim profesional kami. Temukan solusi terbaik untuk mewujudkan ruang yang Anda inginkan.</div>
                            <div>
                                <a href="https://wa.me/6285777818634" class="underline text-yellow-400 font-semibold">Mulai Konsultasi</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 h-full md:gap-6">
                    <img class="rounded-lg object-cover w-full h-full" src="images/bg3.jpg" alt="">
                    <img class="rounded-lg object-cover w-full h-full" src="images/bg5.jpeg" alt="">
                    <img class="rounded-lg object-cover w-full h-full" src="images/bg4.jpeg" alt="">
                    <img class="rounded-lg object-cover w-full h-full" src="images/bg6.jpeg" alt="">
                </div>
            </div>

            <div class="relative z-10 flex items-center justify-center h-full lg:h-auto font-poppins">
                <div class="text-center max-w-7xl px-4 md:px-12 lg:py-16">
                    <div
                        class="mt-8 mb-8 grid grid-cols-1 gap-14 md:grid-cols-4 md:grid-rows-1 lg:gap-y-20 lg:gap-x-36 lg:my-0">
                        <div class="space-y-2">
                            <h1 class="text-6xl text-yellow-400 font-semibold counter" data-target="1">0</h1>
                            <p class="text-gray-900 uppercase font-semibold whitespace-nowrap">Tahun Beroperasi</p>
                        </div>
                        <div class="space-y-2">
                            <h1 class="text-6xl text-yellow-400 font-semibold counter" data-target="12">0</h1>
                            <p class="text-gray-900 uppercase font-semibold whitespace-nowrap">Penghargaan diraih</p>
                        </div>
                        <div class="space-y-2">
                            <h1 class="text-6xl text-yellow-400 font-semibold counter" data-target="99">0</h1>
                            <p class="text-gray-900 uppercase font-semibold whitespace-nowrap">Jenis</p>
                        </div>
                        <div class="space-y-2">
                            <h1 class="text-6xl text-yellow-400 font-semibold counter" data-target="1" x>0</h1>
                            <p class="text-gray-900 uppercase font-semibold whitespace-nowrap">Cabang</p>
                        </div>
                    </div>
                </div>
        </section>
        {{-- End Section I --}}

{{-- Start Section III: Our Services --}}
<section class="bg-white pb-14 pt-16 lg:pt-20">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="text-center mb-10">
      <h2 class="text-3xl font-euphoria text-yellow-400 mb-2">Our</h2>
      <h1 class="text-4xl font-bold uppercase text-gray-800">Services</h1>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
      {{-- Service Card 1 --}}
      <div class="border border-gray-200 rounded-lg shadow-sm hover:shadow-lg transition p-6 flex flex-col">
        <img class="h-36 w-full object-cover rounded-md mb-4" src="images/home1.jpeg" alt="Service 1">
        <h3 class="text-xl font-semibold text-gray-800 mb-2">Jasa Desain Rumah</h3>
        <p class="text-gray-600 flex-grow">Kami membantu Anda merancang rumah impian dengan konsep modern dan fungsional.</p>
        <a href="/kontak" class="mt-4 text-yellow-400 font-semibold underline">Read More →</a>
      </div>

      {{-- Service Card 2 --}}
      <div class="border border-gray-200 rounded-lg shadow-sm hover:shadow-lg transition p-6 flex flex-col">
        <img class="h-36 w-full object-cover rounded-md mb-4" src="images/home2.jpeg" alt="Service 2">
        <h3 class="text-xl font-semibold text-gray-800 mb-2">Jasa Desain Interior</h3>
        <p class="text-gray-600 flex-grow">Transformasi interior rumah atau ruang kerja Anda dengan sentuhan profesional kami.</p>
        <a href="/kontak" class="mt-4 text-yellow-400 font-semibold underline">Read More →</a>
      </div>

      {{-- Service Card 3 --}}
      <div class="border border-gray-200 rounded-lg shadow-sm hover:shadow-lg transition p-6 flex flex-col">
        <img class="h-36 w-full object-cover rounded-md mb-4" src="images/home3.jpeg" alt="Service 3">
        <h3 class="text-xl font-semibold text-gray-800 mb-2">Jasa Desain Kantor</h3>
        <p class="text-gray-600 flex-grow">Rancang kantor impian yang efektif untuk produktivitas dan branding perusahaan Anda.</p>
        <a href="/kontak" class="mt-4 text-yellow-400 font-semibold underline">Read More →</a>
      </div>

      {{-- (Tambahkan kartu lebih banyak bila perlu) --}}
    </div>
  </div>
</section>
{{-- End Section III --}}


        {{-- Start Section II --}}
        <section class="relative bg-catering2 bg-cover bg-center bg-fixed lg:h-auto">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="relative z-10 flex items-center justify-center h-full lg:h-auto">
                <div class="text-center px-14 w-full bg-black bg-opacity-80 py-10 font-poppins space-y-3 lg:px-8 lg:py-16">
                    <h2 class="-mb-4 text-3xl font-euphoria text-yellow-400">Tentang</h2>
                    <h1 class="font-semibold uppercase text-slate-100 text-3xl">Kami</h1>
                    <div class="text-lg space-y-3">
                        <div class="text-slate-100">Kami menyediakan jasa blabla <br
                                class="hidden lg:block"> Anda tertarik dan ingin konsultasi langsung dengan Tim Profesional kami?</div>
                        <div>
                            <a href="/pemesanan" class="text-yellow-400 underline font-semibold">Konsultasi Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Section II --}}
    @endsection
</x-layout>
