@extends('layouts.master')

@section('content')
    <div class="col-lg-10">
        <div class="carousel-info">
            <h2>Поръчки добави продукт</h2>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Снимка</th>
                    <th scope="col">Име</th>
                    <th scope="col">Цена</th>
                </tr>
                </thead>
                <tbody>
                @foreach($order as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td class="technology_image"><img class="img-fluid" src="{{ URL::to('/') }}/uploads/{{ $item->image }}" alt=""></td>
                        <td>{{ $item->price }}</td>
                        <td><a href="{{ route('order.edit', $item->id) }}" title="edit"><i class="small material-icons">edit</i></a></td>
                        <td><a onclick="return confirm('Delete?')" href="{{ route('order.delete', $item->id) }}" title="delete"><i class="small material-icons">delete_forever</i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <form name="form" enctype="multipart/form-data" method="POST" action="{{ route('order.store') }}" class="col-md-12 home-form">
                <input type="hidden" value="order_form" name="order_form">
                <div class="row">
                    <div class="form-group col-md-12">
                        <input name="image" id="image" type="file" class="form-control-file validate">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="name">Име</label>
                        <input name="name" id="name" type="text" class="form-control validate">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="price">Цена</label>
                        <input name="price" id="price" type="text" class="form-control validate">
                    </div>
                </div>
                <button type="submit" class="waves-effect waves-light btn">Добави</button>
                @csrf
            </form>
        </div>
    </div>
@endsection