@extends('layouts.master')

@section('content')
    <div class="home-page-admin edit-technologies">
        <h1>Редакритрай видео</h1>
        <form enctype="multipart/form-data" method="POST" action="{{ route('videos.update',['id'=>$videos->id]) }}" class="col-lg-12">
            <div class="row">

                <div class="form-group col-lg-12">

                    <input name="video_content"
                           value="{{ $videos->video_content }}" id="video_content" type="file" class="validate">
                </div>
                <div class="form-group">
                    <video controls="" width="100%" height="auto">
                        <source src="{{ URL::to('/') }}/uploads/videos/{{ $videos->video_content }}" type="video/mp4">
                    </video>
                </div>
                <div class="form-group col-lg-12">
                    <label for="video_title">Редакритрай заглавието</label>
                    <input name="video_title" value="{{ $videos->video_title }}" id="video_title" type="text" class="form-control validate">
                </div>
                <div class="form-group col-lg-12">
                    <label for="video_info">Редакритрай информацията</label>
                    <input name="video_info" value="{{ $videos->video_info }}" id="video_info" type="text" class="form-control validate">
                </div>
            </div>

            <button type="submit" class="waves-effect waves-light btn">Запази промените</button>
            @csrf
        </form>
    </div>
@endsection