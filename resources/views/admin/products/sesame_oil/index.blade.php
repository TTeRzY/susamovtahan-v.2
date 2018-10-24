@extends('layouts.master')

@section('content')
    <div class="col-lg-10 home-page-admin">
        <div class="carousel-info">
            <h2>Продукт Сусамов Масло</h2>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Снимка</th>
                    <th scope="col">Име</th>
                    <th scope="col">Цена</th>
                    <th scope="col">Информация</th>
                    <th scope="col">Редактирай</th>
                    <th scope="col">Изтрий</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sesame_oil as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td class="technology_image"><img class="img-fluid" src="{{ URL::to('/') }}/uploads/{{ $item->sesame_oil_image }}" alt=""></td>
                        <td>{{ $item->sesame_oil_title }}</td>
                        <td>{{ $item->sesame_oil_price }}</td>
                        <td>{{ $item->sesame_oil_info }}</td>
                        <td><a href="{{ route('sesame_oil.edit', $item->id) }}" title="edit"><i class="small material-icons">edit</i></a></td>
                        <td><a onclick="return confirm('Delete?')" href="{{ route('sesame_oil.delete', $item->id) }}" title="delete"><i class="small material-icons">delete_forever</i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <form name="sesame_oil_form" enctype="multipart/form-data" method="POST" action="{{ route('sesame_oil.store') }}" class="col-md-12 home-form">
                <input type="hidden" value="sesame_oil_form" name="sesame_oil_form">
                <div class="row">
                    <div class="form-group col-md-12">
                        <input name="sesame_oil_image" id="sesame_oil_image" type="file" class="form-control-file validate" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="sesame_oil_title">Име</label>
                        <input name="sesame_oil_title" id="sesame_oil_title" type="text" class="form-control validate" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="sesame_oil_price">Цена</label>
                        <input name="sesame_oil_price" id="sesame_oil_price" type="text" class="form-control validate" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="sesame_oil_info">Информация</label>
                        <input name="sesame_oil_info" id="sesame_oil_info" type="text" class="form-control validate" required>
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="sesame_oil_more_info">Повече информация за продукта</label>
                        <textarea name="sesame_oil_more_info" id="sesame_oil_more_info" type="text" class="form-control validate" required></textarea>
                    </div>
                </div>
                <button type="submit" class="waves-effect waves-light btn">Добави</button>
                @csrf
            </form>
        </div>
    </div>
@endsection