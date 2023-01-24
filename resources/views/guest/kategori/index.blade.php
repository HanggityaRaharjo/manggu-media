@extends('layouts.guest')

@section('content')
    <main>
        <!-- Content Start -->
        <div class="about-area2 gray-bg pt-60 pb-60">
            <h1 class="text-center">Semua Kategori</h1>

            {{-- Semua Kategori --}}
            <div class="manggu-cards">
                @foreach ($kategoris as $kategori)
                    <a href="{{ url('by-category/' . $kategori->id) }}">
                        <div class="manggu-card">{{ ucwords(strtolower($kategori->nama_kategori)) }}</div>
                    </a>
                @endforeach
            </div>
            {{-- End Semua Kategori --}}

        </div>
        <!-- Content End -->
    </main>
@endsection
