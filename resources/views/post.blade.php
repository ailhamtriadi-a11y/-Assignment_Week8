<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title ?? 'Post' }}</title>
</head>
<body>
@forelse ($blogs as $blog)
    <div>
        <h3>{{ $blog->pertanyaan }}</h3>
        <p>{{ $blog->jawaban }}</p>
        <small>Kategori: {{ $blog->kategori }}</small>
    </div>
@empty
    <p>Belum ada data.</p>
@endforelse
</body>
</html>