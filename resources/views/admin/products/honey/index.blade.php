@extends('layouts.master')

@section('content')
    <div class="col-lg-10">
        <div class="carousel-info">
            <h2>Продукт Пчелен Мед</h2>
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
                @foreach($honey as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td class="technology_image"><img class="img-fluid" src="{{ URL::to('/') }}/uploads/{{ $item->honey_image }}" alt=""></td>
                        <td>{{ $item->honey_title }}</td>
                        <td>{{ $item->honey_price }}</td>
                        <td>{{ $item->honey_info }}</td>
                        <td><a href="{{ route('honey.edit', $item->id) }}" title="edit"><i class="small material-icons">edit</i></a></td>
                        <td><a onclick="return confirm('Delete?')" href="{{ route('honey.delete', $item->id) }}" title="delete"><i class="small material-icons">delete_forever</i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <form name="honey_form" enctype="multipart/form-data" method="POST" action="{{ route('honey.store') }}" class="col-md-12 home-form">
                <input type="hidden" value="honey_form" name="honey_form">
                <div class="row">
                    <div class="form-group col-md-12">
                        <input name="honey_image" id="honey_image" type="file" class="form-control-file validate">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="honey_title">Име</label>
                        <input name="honey_title" id="honey_title" type="text" class="form-control validate">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="honey_price">Цена</label>
                        <input name="honey_price" id="honey_price" type="text" class="form-control validate">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="honey_info">Информация</label>
                        <input name="honey_info" id="honey_info" type="text" class="form-control validate">
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="honey_more_info">Повече информация за продукта</label>
                        <textarea name="honey_more_info" id="honey_more_info" type="text"
                                  class="form-control validate"></textarea>
                    </div>
                </div>
                <button type="submit" class="waves-effect waves-light btn">Добави</button>
                @csrf
            </form>
        </div>
    </div>
@endsection