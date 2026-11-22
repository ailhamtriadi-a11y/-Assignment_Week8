@extends('layouts.main')
@section('title', 'halaman about')
@section('content')
<main class="flex-1 p-8">

  <ul class="timeline timeline-snap-icon max-md:timeline-compact timeline-vertical">
    @forelse ($abouts as $about)
      <li>
        @unless ($loop->first)
          <hr />
        @endunless

        <div class="timeline-middle">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
            fill="currentColor"
            class="h-5 w-5"
          >
            <path
              fill-rule="evenodd"
              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
              clip-rule="evenodd"
            />
          </svg>
        </div>

        <div class="{{ $loop->even ? 'timeline-end md:mb-10' : 'timeline-start mb-10 md:text-end' }}">
          <time class="font-mono italic">{{ $about->tahun }}</time>
          <div class="text-lg font-black">{{ $about->judul }}</div>
          {{ $about->deskripsi }}
        </div>

        @unless ($loop->last)
          <hr />
        @endunless
      </li>
    @empty
      <li class="p-4 text-center">Belum ada data timeline di tabel abouts.</li>
    @endforelse
  </ul>

  <!-- Card Info Profile -->
  <div class="bg-white border border-slate-200 shadow-sm w-full max-w-sm rounded-lg mx-auto mt-6 overflow-hidden dark:bg-neutral-800 dark:border-neutral-700">
     <div class="aspect-[3/2] w-full">
        <img src="{{ asset('img/gambar.jpg') }}" alt="Foto" class="w-full h-full object-cover">
     </div>

     <div class="p-4 sm:p-6">
        <h3 class="text-slate-900 text-base font-semibold dark:text-slate-50 mb-3"> ABOUT MY INFORMATION</h3>

        <p><b>Nama:</b> {{ $nama }}</p>
        <p><b>Usia:</b> {{ $usia }} tahun</p>
        <p><b>NIM:</b> {{ $nim }}</p>
        <p><b>Jurusan:</b> {{ $jurusan }}</p>
     </div>
  </div>

</main>
@endsection