@extends('layouts.master')

@section('content')
    <div class="home-page-admin">
        <h1>Edit Product</h1>
        <form enctype="multipart/form-data" method="POST" action="{{ route('update',['id'=>$carouselItem->id]) }}" class="col-lg-12">
            <div class="row">

                <div class="form-group col-lg-12">

                    <input name="product_image" value="{{ $carouselItem->carousel_image }}" id="product_image" type="file" class="validate">
                </div>
                <div class="form-group">
                    <img class="img-fluid" src="{{ URL::to('/') }}/uploads/{{ $carouselItem->carousel_image }}" alt="">
                </div>
                <div class="form-group col-lg-12">
                    <label for="product_title">Edit title</label>
                    <input name="product_title" value="{{ $carouselItem->carousel_title }}" id="product_title" type="text" class="form-control validate">
                </div>
                <div class="form-group col-lg-12">
                    <label for="product_info">Edit info</label>
                    <input name="product_info" value="{{ $carouselItem->carousel_text }}" id="product_info" type="text" class="form-control validate">
                </div>
            </div>

            <button type="submit" class="waves-effect waves-light btn">Edit carousel</button>
            @csrf
        </form>
    </div>
@endsection