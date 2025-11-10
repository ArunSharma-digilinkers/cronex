@extends('layouts.main')
@section('content')

<div class="page-banner-wrapper">
    <img src="{{ asset('img/solar-banner.jpg') }}" alt="" class="img-fluid">
</div>

<div class="products-wrapper section-entry">
    <div class="container">
        <div class="row">
            <div class="row">
                @foreach ($product as $item)
                <div class="col-md-4 col-sm-6 mb-4" data-aos="fade-up">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="{{ asset('storage/product/' . $item->image) }}" alt="{{ $item->model }}"
                                class="img-fluid">
                        </div>
                        <div class="product-info">
                            <h4>{{ $item->model }}</h4>
                            <a href="{{ route('solar-battery', $item->id) }}" class="btn-view">View Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</div>

@endsection