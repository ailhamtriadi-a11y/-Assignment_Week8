@extends('layouts.main')
@section('title', 'halaman blog')
@section('content')
    @forelse ($blogs as $blog)
        <div class="collapse collapse-arrow bg-base-100 border border-base-300">
            <input type="radio" name="my-accordion-2" @checked($loop->first) />
            <div class="collapse-title font-semibold">{{ $blog->pertanyaan }}</div>
            <div class="collapse-content text-sm">{{ $blog->jawaban }}</div>
        </div>
    @empty
        <p>Belum ada data di tabel blogs.</p>
    @endforelse
@endsection