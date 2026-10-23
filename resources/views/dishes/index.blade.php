@extends('layouts.app')

@section('title', 'Nusa Rasa | Galeri Kuliner Daerah')

@section('content')
<header class="hero">
    <div class="container">
        <h1 class="hero-title">Satu negeri,<br>delapan rasa.</h1>
        <p class="hero-sub">Kumpulan hidangan khas dari Sabang sampai Merauke, lengkap dengan asal daerah, bahan, dan harganya.</p>
    </div>
</header>

<section class="container pb-5" id="daftar">
    <div class="chips mb-4">
        <a href="{{ route('dishes.index') }}#daftar" class="chip {{ !$region ? 'active' : '' }}">Semua</a>
        @foreach ($regions as $r)
            <a href="{{ route('dishes.index', ['region' => $r]) }}#daftar" class="chip {{ $region === $r ? 'active' : '' }}">{{ $r }}</a>
        @endforeach
    </div>

    <div class="row g-4">
        @forelse ($dishes as $dish)
            <div class="col-12 col-sm-6 col-lg-3">
                <a href="{{ route('dishes.show', $dish) }}" class="dish-card">
                    <div class="dish-img">
                        <img src="{{ asset('assets/images/' . $dish->image) }}" alt="{{ $dish->name }}" loading="lazy">
                    </div>
                    <div class="dish-body">
                        <span class="dish-region">{{ $dish->origin_region }}</span>
                        <h2 class="dish-name">{{ $dish->name }}</h2>
                        <div class="dish-price">Rp {{ number_format($dish->price, 0, ',', '.') }}</div>
                    </div>
                </a>
            </div>
        @empty
            <p class="text-secondary">Belum ada hidangan untuk daerah ini.</p>
        @endforelse
    </div>
</section>
@endsection
