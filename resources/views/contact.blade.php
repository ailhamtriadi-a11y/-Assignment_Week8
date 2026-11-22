@extends('layouts.main')
@section('title', 'Halaman Contact')
@section('content')
    <section class="mx-auto max-w-3xl p-8">
        <h1 class="mb-6 text-2xl font-bold">Contact Information</h1>

        <ul class="space-y-4">
            @forelse ($contacts as $contact)
                <li class="rounded-md border border-slate-300 bg-white p-4 text-slate-900 dark:border-neutral-700 dark:bg-neutral-800 dark:text-slate-50">
                    <strong>{{ $contact->platform }}:</strong>
                    @if ($contact->url)
                        <a href="{{ $contact->url }}" target="_blank" rel="noopener noreferrer"
                           class="text-blue-600 hover:underline dark:text-blue-400">
                            {{ $contact->username }}
                        </a>
                    @else
                        {{ $contact->username }}
                    @endif
                </li>
            @empty
                <li>Belum ada informasi kontak.</li>
            @endforelse
        </ul>
    </section>
@endsection