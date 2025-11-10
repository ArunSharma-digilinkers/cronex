	@extends('layouts.main')
	@section('content')

	<div class="page-banner-wrapper">
	    <img src="{{ asset('img/events-banner.jpg') }}" alt="" class="img-fluid">
	</div>

	<div class="gallery-wrapper section-entry">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-4 col-sm-12 mb-4">
	                <div class="thumb">
	                    <a data-fancybox="gallery" href="{{ asset('img/it.jpg') }}">
	                        <img src="{{ asset('img/it.jpg') }}" class="zoom img-fluid" alt="gallery">
	                    </a>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	@endsection