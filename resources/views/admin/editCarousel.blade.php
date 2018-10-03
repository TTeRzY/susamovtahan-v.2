@extends('layouts.master')

@section('content')
    <div class="home-page-admin">
        <h1>Edit Product</h1>
        <form enctype="multipart/form-data" method="POST" action="{{ route('updateCarousel',['id'=>$carouselItem->id]) }}" class="col-lg-12">
            <div class="row">

                <div class="form-group col-lg-12">

                    <input name="carousel_image" value="{{ $carouselItem->carousel_image }}" id="carousel_image" type="file" class="validate">
                </div>
                <div class="form-group">
                    <img class="img-fluid" src="{{ URL::to('/') }}/uploads/{{ $carouselItem->carousel_image }}" alt="">
                </div>
                <div class="form-group col-lg-12">
                    <label for="carousel_title">Edit title</label>
                    <input name="carousel_title" value="{{ $carouselItem->carousel_title }}" id="carousel_title" type="text" class="form-control validate">
                </div>
                <div class="form-group col-lg-12">
                    <label for="carousel_text">Edit info</label>
                    <input name="carousel_text" value="{{ $carouselItem->carousel_text }}" id="carousel_text" type="text" class="form-control validate">
                </div>
            </div>

            <button type="submit" class="waves-effect waves-light btn">Edit carousel</button>
            @csrf
        </form>
    </div>
@endsection