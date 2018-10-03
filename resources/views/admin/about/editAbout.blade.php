@extends('layouts.master')

@section('content')
    <div class="home-page-admin edit-technologies">
        <h1>Редакритрай страница ЗА НАС</h1>
        <form enctype="multipart/form-data" method="POST" action="{{ route('about.update',['id'=>$about->id]) }}" class="col-lg-12">
            <div class="row">

                <div class="form-group col-lg-12">

                    <input name="about_image" value="{{ $about->about_image }}" id="about_image" type="file" class="validate">
                </div>
                <div class="form-group">
                    <img class="img-fluid" src="{{ URL::to('/') }}/uploads/{{ $about->about_image }}" alt="">
                </div>
                <div class="form-group col-lg-12">
                    <label for="about_title">Редактирай името</label>
                    <input name="about_title" value="{{ $about->about_title }}" id="about_title" type="text" class="form-control validate">
                </div>
                <div class="form-group col-lg-12">
                    <label for="about_info">Редактирай информацията</label>
                    <input name="about_info" value="{{ $about->about_info }}" id="about_info" type="text" class="form-control validate">
                </div>
            </div>

            <button type="submit" class="waves-effect waves-light btn">Запази</button>
            @csrf
        </form>
    </div>
@endsection