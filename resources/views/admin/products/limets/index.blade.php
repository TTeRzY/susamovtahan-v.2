@extends('layouts.master')

@section('content')
    <div class="col-lg-10">
        <div class="carousel-info">
            <h2>Продукт Брашно от Лимец</h2>
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
                @foreach($limets as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td class="technology_image"><img class="img-fluid" src="{{ URL::to('/') }}/uploads/{{ $item->limets_image }}" alt=""></td>
                        <td>{{ $item->limets_title }}</td>
                        <td>{{ $item->limets_price }}</td>
                        <td>{{ $item->limets_info }}</td>
                        <td><a href="{{ route('limets.edit', $item->id) }}" title="edit"><i class="small material-icons">edit</i></a></td>
                        <td><a onclick="return confirm('Delete?')" href="{{ route('limets.delete', $item->id) }}" title="delete"><i class="small material-icons">delete_forever</i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <form name="limets_form" enctype="multipart/form-data" method="POST" action="{{ route('limets.store') }}" class="col-md-12 home-form">
                <input type="hidden" value="limets_form" name="limets_form">
                <div class="row">
                    <div class="form-group col-md-12">
                        <input name="limets_image" id="limets_image" type="file" class="form-control-file validate">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="limets_title">Име</label>
                        <input name="limets_title" id="limets_title" type="text" class="form-control validate">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="limets_price">Цена</label>
                        <input name="limets_price" id="limets_price" type="text" class="form-control validate">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="limets_info">Информация</label>
                        <input name="limets_info" id="limets_info" type="text" class="form-control validate">
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="limets_more_info">Повече информация за продукта</label>
                        <textarea name="limets_more_info" id="limets_more_info" type="text" class="form-control validate"></textarea>
                    </div>
                </div>
                <button type="submit" class="waves-effect waves-light btn">Добави</button>
                @csrf
            </form>
        </div>
    </div>
@endsection