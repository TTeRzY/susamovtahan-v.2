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
                    <td class="technology_image"><img class="img-fluid" src="{{ URL::to('/') }}/uploads/{{ $item->technology_image }}" alt=""></td>
                    <td>{{ $item->technology_title }}</td>
                    <td>{{ $item->technology_info }}</td>
                    <td><a href="{{ route('tehnologia.edit', $item->id) }}" title="edit"><i class="small material-icons">edit</i></a></td>
                    <td><a onclick="return confirm('Delete?')" href="{{ route('tehnologia.delete', $item->id) }}" title="delete"><i class="small material-icons">delete_forever</i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <form name="technology_form" enctype="multipart/form-data" method="POST" action="{{ route('tehnologia.store') }}" class="col-md-12 home-form">
            <input type="hidden" value="technology_form" name="technology_form">
            <div class="row">
                <div class="form-group col-md-12">
                    <input name="technology_image" id="technology_image" type="file" class="form-control-file validate">
                </div>
                <div class="form-group col-md-12">
                    <label for="technology_title">Име на технология</label>
                    <input name="technology_title" id="technology_title" type="text" class="form-control validate">
                </div>
                <div class="form-group col-md-12">
                    <label for="technology_info">Информация</label>
                    <input name="technology_info" id="technology_info" type="text" class="form-control validate">
                </div>
            </div>
            <button type="submit" class="waves-effect waves-light btn">Добави технология</button>
            @csrf
        </form>
    </div>
</div>
@endsection