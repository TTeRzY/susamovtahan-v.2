@extends('layouts.master')

@section('content')
    <div class="home-page-admin edit-technologies">
        <h1>Редакритрай снимка</h1>
        <form enctype="multipart/form-data" method="POST" action="{{ route('gallery.update',['id'=>$gallery->id]) }}" class="col-lg-12">
            <div class="row">

                <div class="form-group col-lg-12">

                    <input name="gallery_image" value="{{ $gallery->technology_image }}" id="gallery_image" type="file" class="validate">
                </div>
                <div class="form-group">
                    <img class="img-fluid" src="{{ URL::to('/') }}/uploads/{{ $gallery->gallery_image }}" alt="">
                </div>
                <div class="form-group col-lg-12">
                    <label for="gallery_info">Редактирай информацията</label>
                    <input name="gallery_info" value="{{ $gallery->gallery_info }}" id="gallery_info" type="text" class="form-control validate">
                </div>
            </div>

            <button type="submit" class="waves-effect waves-light btn">Запази промените</button>
            @csrf
        </form>
    </div>
@endsection