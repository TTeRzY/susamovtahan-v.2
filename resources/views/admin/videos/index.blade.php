@extends('layouts.master')

@section('content')
    <div class="col-lg-10">
        <div class="carousel-info">
            <h2>Добави ново видео</h2>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Видео съдържание</th>
                    <th scope="col">Име на видеото</th>
                    <th scope="col">Информация за видеото</th>
                </tr>
                </thead>
                <tbody>
                @foreach($videos as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td class="technology_image">
                            <video controls="" width="100%" height="auto">
                                <source src="{{ URL::to('/') }}/uploads/videos/{{ $item->video_content }}" type="video/mp4">
                            </video>
                        </td>
                        <td>{{ $item->video_title }}</td>
                        <td>{{ $item->video_info }}</td>
                        <td><a href="{{ route('videos.edit', $item->id) }}" title="edit"><i class="small material-icons">edit</i></a></td>
                        <td><a onclick="return confirm('Delete?')" href="{{ route('videos.delete', $item->id) }}" title="delete"><i class="small material-icons">delete_forever</i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <form name="video_form" enctype="multipart/form-data" method="POST" action="{{ route('videos.store') }}" class="col-md-12 home-form">
                <input type="hidden" value="video_form" name="video_form">
                <div class="row">
                    <div class="form-group col-md-12">
                        <input name="video_content" id="video_content" type="file" class="form-control-file validate">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="video_title">Име на видеото</label>
                        <input name="video_title" id="video_title" type="text" class="form-control validate">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="video_info">Видео информация</label>
                        <input name="video_info" id="video_info" type="text" class="form-control validate">
                    </div>
                </div>
                <button type="submit" class="waves-effect waves-light btn">Добави видео</button>
                @csrf
            </form>
        </div>
    </div>
@endsection