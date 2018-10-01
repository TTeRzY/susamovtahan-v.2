@extends('layouts.master')

@section('content')
    <div class="col-lg-10">
        <div class="carousel-info">
            <h2>Добавяне на снимки в галерията</h2>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Снимка</th>
                    <th scope="col">Информация за снимката</th>
                </tr>
                </thead>
                <tbody>
                @foreach($gallery as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td class="technology_image"><img class="img-fluid" src="{{ URL::to('/') }}/uploads/{{ $item->gallery_image }}" alt=""></td>
                        <td>{{ $item->gallery_info }}</td>
                        <td><a href="{{ route('gallery.edit', $item->id) }}" title="edit"><i class="small material-icons">edit</i></a></td>
                        <td><a onclick="return confirm('Delete?')" href="{{ route('gallery.delete', $item->id) }}" title="delete"><i class="small material-icons">delete_forever</i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <form name="gallery_form" enctype="multipart/form-data" method="POST" action="{{ route('gallery.store') }}" class="col-md-12 home-form">
                <input type="hidden" value="gallery_form" name="gallery_form">
                <div class="row">
                    <div class="form-group col-md-12">
                        <input name="gallery_image" id="gallery_image" type="file" class="form-control-file validate">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="gallery_info">Информация</label>
                        <input name="gallery_info" id="gallery_info" type="text" class="form-control validate">
                    </div>
                </div>
                <button type="submit" class="waves-effect waves-light btn">Добави снимка</button>
                @csrf
            </form>
        </div>
    </div>
@endsection