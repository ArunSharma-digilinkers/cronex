	@extends('layouts.main')
	@section('content')


<div class="main-wrapper">
    <div class="main-cover">
     
        <div class="product-detail-wrapper section-entry">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="product-inner-image-wrap">
                                <h3> {{$product->category}}</h3>
                           <img src="{{ asset('storage/product/' . $product->image) }}" alt="Tubular Battery Manufacturer" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-6 pro-inner-col-sd">
                        <div class="pro-inner-wrap">
                            <div class="pro-inner-wrap-tb">
                                <h4>
                                   Model
                                </h4>
                                <h4>{{$product->model}}</h4>
                            </div>
                            <div class="pro-inner-wrap-tb">
                                <h4>
                                    Battery Type
                                </h4>
                                <h4>{{$product->battery_type}}</h4>
                            </div>
                            <div class="pro-inner-wrap-tb">
                                <h4>
                                    Capacity Range
                                </h4>
                                <h4>{{$product->capacity_range}} </h4>
                            </div>
                            <div class="pro-inner-wrap-tb">
                                <h4>
                                    Cycle Life
                                </h4>
                                <h4>{{$product->cycle_life}}</h4>
                            </div>
                            <div class="pro-inner-wrap-tb">
                                <h4>
                                    Float Life
                                </h4>
                                <h4>{{$product->float_life}}</h4>
                            </div>
                            <div class="pro-inner-wrap-tb">
                                <h4>
                                   Self Discharge
                                </h4>
                                <h4>{{$product->self_discharge}}</h4>
                            </div>
							  <div class="pro-inner-wrap-tb">
                                <h4>
                                   Operational Temperature
                                </h4>
                                <h4>{{$product->operational_temperature}}</h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    @endsection