<?php

use App\Models\About;
use App\Models\Blog;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    $abouts = About::all(); // atau About::latest()->get() jika punya kolom timestamps

    return view('about', [
        'nama' => 'Andra Ilham Triadi Mijaya',
        'usia' => 18,
        'nim' => '2086022510016',
        'jurusan' => 'Informatika - AI',
        'abouts' => $abouts,
    ]);
});

Route::get('/blog', function () {
    $blogs = Blog::latest()->get();

    return view('blog', [
        'title' => 'Halaman Blog',
        'blogs' => $blogs,
    ]);
});

Route::get('/contact', function () {
    $contacts = Contact::latest()->get(); // atau Contact::all()

    return view('contact', [
        'contacts' => $contacts,
    ]);
});
