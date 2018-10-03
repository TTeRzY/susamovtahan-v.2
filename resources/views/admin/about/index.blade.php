@extends('layouts.master')

@section('content')
    <div class="col-lg-10">
        <div class="carousel-info">
            <h2>За нас</h2>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Снимка</th>
                    <th scope="col">Заглавие</th>
                    <th scope="col">Информация</th>
                </tr>
                </thead>
                <tbody>
                @foreach($about as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td class="about_image"><img class="img-fluid" src="{{ URL::to('/') }}/uploads/{{ $item->about_image }}" alt=""></td>
                        <td>{{ $item->about_title }}</td>
                        <td>{{ $item->about_info }}</td>
                        <td><a href="{{ route('about.edit', $item->id) }}" title="edit"><i class="small material-icons">edit</i></a></td>
                        <td><a onclick="return confirm('Delete?')" href="{{ route('about.delete', $item->id) }}" title="delete"><i class="small material-icons">delete_forever</i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <form name="about_form" enctype="multipart/form-data" method="POST" action="{{ route('gallery.store') }}" class="col-md-12 home-form">
                <input type="hidden" value="about_form" name="about_form">
                <div class="row">
                    <div class="form-group col-md-12">
                        <input name="about_image" id="about_image" type="file" class="form-control-file validate">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="about_title">Заглавие</label>
                        <input name="about_title" id="about_title" type="text" class="form-control validate">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="about_info">Информация</label>
                        <input name="about_info" id="about_info" type="text" class="form-control validate">
                    </div>
                </div>
                <button type="submit" class="waves-effect waves-light btn">Добави секция ЗА НАС</button>
                @csrf
            </form>
        </div>
    </div>
@endsection