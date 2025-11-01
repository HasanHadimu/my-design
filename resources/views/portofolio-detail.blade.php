<x-layout :title="$title" :activePage="$activePage">
    @section('page')
        <main class="bg-slate-100 min-h-screen py-10 px-4 lg:px-32 font-poppins">
            <div class="max-w-5xl mx-auto bg-white shadow-md rounded-2xl overflow-hidden">
                <img src="{{ asset('images/' . $data['image']) }}" alt="{{ $data['name'] }}"
                     class="w-full h-96 object-cover">

                <div class="p-8">
                    <h1 class="text-3xl font-semibold mb-3">{{ $data['name'] }}</h1>
                    <p class="text-gray-700 leading-relaxed mb-6">
                        {{ $data['description'] }}
                    </p>

                    <a href="{{ url('/') }}"
                       class="inline-block px-5 py-2 bg-yellow-400 text-black font-semibold rounded hover:bg-yellow-500 transition">
                        ← Kembali ke Beranda
                    </a>
                </div>
            </div>
        </main>
    @endsection
</x-layout>
