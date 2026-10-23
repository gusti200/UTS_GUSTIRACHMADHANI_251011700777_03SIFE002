@extends('layouts.app')

@section('title', $dish->name . ' | Nusa Rasa')

@section('content')
<section class="container detail">
    <a href="{{ route('dishes.index') }}#daftar" class="back-link">&larr; Kembali ke daftar</a>

    <div class="row g-5 mt-1">
        <div class="col-lg-6">
            <div class="detail-img">
                <img src="{{ asset('assets/images/' . $dish->image) }}" alt="{{ $dish->name }}">
            </div>
        </div>
        <div class="col-lg-6">
            <span class="dish-region">{{ $dish->origin_region }}</span>
            <h1 class="detail-title">{{ $dish->name }}</h1>
            <div class="detail-price">Rp {{ number_format($dish->price, 0, ',', '.') }}</div>

            <p class="detail-desc">{{ $dish->description }}</p>

            <h2 class="detail-h">Bahan utama</h2>
            <div class="d-flex flex-wrap gap-2">
                @foreach ($dish->ingredient_list as $item)
                    <span class="tag">{{ $item }}</span>
                @endforeach
            </div>
        </div>
    </div>

    <hr class="my-5">

    <h2 class="detail-h mb-3">Kuliner lainnya</h2>
    <div class="row g-4">
        @foreach ($others as $o)
            <div class="col-12 col-sm-4">
                <a href="{{ route('dishes.show', $o) }}" class="dish-card">
                    <div class="dish-img"><img src="{{ asset('assets/images/' . $o->image) }}" alt="{{ $o->name }}" loading="lazy"></div>
                    <div class="dish-body">
                        <span class="dish-region">{{ $o->origin_region }}</span>
                        <h3 class="dish-name">{{ $o->name }}</h3>
                        <div class="dish-price">Rp {{ number_format($o->price, 0, ',', '.') }}</div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</section>
@endsection
