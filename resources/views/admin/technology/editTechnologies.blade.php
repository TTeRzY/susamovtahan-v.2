@extends('layouts.master')

@section('content')
    <div class="home-page-admin edit-technologies">
        <h1>Редакритрай технология</h1>
        <form enctype="multipart/form-data" method="POST" action="{{ route('technology.update',['id'=>$technology->id]) }}" class="col-lg-12">
            <div class="row">

                <div class="form-group col-lg-12">

                    <input name="technology_image" value="{{ $technology->technology_image }}" id="technology_image" type="file" class="validate">
                </div>
                <div class="form-group">
                    <img class="img-fluid" src="{{ URL::to('/') }}/uploads/{{ $technology->technology_image }}" alt="">
                </div>
                <div class="form-group col-lg-12">
                    <label for="technology_title">Edit title</label>
                    <input name="technology_title" value="{{ $technology->technology_title }}" id="technology_title" type="text" class="form-control validate">
                </div>
                <div class="form-group col-lg-12">
                    <label for="technology_info">Edit info</label>
                    <input name="technology_info" value="{{ $technology->technology_info }}" id="technology_info" type="text" class="form-control validate">
                </div>
            </div>

            <button type="submit" class="waves-effect waves-light btn">Edit carousel</button>
            @csrf
        </form>
    </div>
@endsection