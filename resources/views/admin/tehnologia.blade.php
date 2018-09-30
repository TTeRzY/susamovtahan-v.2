@extends('layouts.master')

@section('content')
<div class="col-lg-10">
    <div class="carousel-info">
        <h2>Добавяне на технология</h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Снимка</th>
                <th scope="col">Име на технологията</th>
                <th scope="col">Информазия за технологията</th>
            </tr>
            </thead>
            <tbody>
            @foreach($technologies as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td><img class="img-fluid" src="" alt=""></td>
                    <td>{{ $item->technology_title }}</td>
                    <td>{{ $item->technology_info }}</td>
                    <td><a href="" title="edit"><i class="small material-icons">edit</i></a></td>
                    <td><a onclick="return confirm('Delete?')" href="" title="delete"><i class="small material-icons">delete_forever</i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <form name="technology_form" enctype="multipart/form-data" method="POST" action="{{ route('tehnologia.store') }}" class="col-md-12 home-form">
            <input type="hidden" value="carousel_form" name="technology_form">
            <div class="row">
                <div class="form-group col-md-12">
                    <input name="tech_image" id="tech_image" type="file" class="form-control-file validate">
                </div>
                <div class="form-group col-md-12">
                    <label for="tech_title">Име на технология</label>
                    <input name="tech_title" id="tech_title" type="text" class="form-control validate">
                </div>
                <div class="form-group col-md-12">
                    <label for="tech_text">Информация</label>
                    <input name="tech_text" id="tech_text" type="text" class="form-control validate">
                </div>
            </div>
            <button type="submit" class="waves-effect waves-light btn">Добави технология</button>
            @csrf
        </form>
    </div>
</div>
@endsection