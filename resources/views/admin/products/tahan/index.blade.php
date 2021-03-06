@extends('layouts.master')

@section('content')
    <div class="col-lg-10 home-page-admin">
        <div class="carousel-info">
            <h2>Продукт Сусамов Тахан</h2>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Снимка</th>
                    <th scope="col">Име</th>
                    <th scope="col">Цена</th>
                    <th scope="col">Информация</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tahan as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td class="technology_image"><img class="img-fluid" src="{{ URL::to('/') }}/uploads/{{ $item->tahan_image }}" alt=""></td>
                        <td>{{ $item->tahan_title }}</td>
                        <td>{{ $item->tahan_price }}</td>
                        <td>{{ $item->tahan_info }}</td>
                        <td><a href="{{ route('tahan.edit', $item->id) }}" title="edit"><i class="small material-icons">edit</i></a></td>
                        <td><a onclick="return confirm('Delete?')" href="{{ route('tahan.delete', $item->id) }}" title="delete"><i class="small material-icons">delete_forever</i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <form name="tahan_form" enctype="multipart/form-data" method="POST" action="{{ route('tahan.store') }}" class="col-md-12 home-form">
                <input type="hidden" value="tahan_form" name="tahan_form">
                <div class="row">
                    <div class="form-group col-md-12">
                        <input name="tahan_image" id="tahan_image" type="file" class="form-control-file validate">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="tahan_title">Име</label>
                        <input name="tahan_title" id="tahan_title" type="text" class="form-control validate">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="tahan_price">Цена</label>
                        <input name="tahan_price" id="tahan_price" type="text" class="form-control validate">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="tahan_info">Информация</label>
                        <input name="tahan_info" id="tahan_info" type="text" class="form-control validate">
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="tahan_more_info">Повече информация за продукта</label>
                        <textarea name="tahan_more_info" id="tahan_more_info" type="text" class="form-control validate"></textarea>
                    </div>
                </div>
                <button type="submit" class="waves-effect waves-light btn">Добави</button>
                @csrf
            </form>
        </div>
    </div>
@endsection