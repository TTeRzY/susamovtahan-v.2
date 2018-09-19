@extends('layouts.master')

@section('content')
    <div class="home-page-admin">
        <div class="carousel-info">
            <h2>Слайдър информация</h2>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Carousel Title</th>
                    <th scope="col">Carousel Info</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tasks as $task)
                <tr>
                    <th scope="row">{{ $task->id }}</th>
                    <td>{{ $task->carousel_title }}</td>
                    <td>{{ $task->carousel_info }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <form enctype="multipart/form-data" method="POST" action="{{ route('store') }}" class="col s12 home-form">
                <div class="row">
                    <div class="form-group col-md-12">
                        <input name="carousel_image" id="carousel_image" type="file" class="form-control-file validate">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="carousel_title">Carousel Title</label>
                        <input name="carousel_title" id="carousel_title" type="text" class="form-control validate">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="carousel_info">Carousel Info</label>
                        <input name="carousel_info" id="carousel_info" type="text" class="form-control validate">
                    </div>
                </div>
                <button type="submit" class="waves-effect waves-light btn">Добави слайдер</button>
                @csrf
            </form>
        </div>
        <div class="home-page-products-form">
            <h2>Продукти информация</h2>
            <table class="table home-page-table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Title</th>
                    <th scope="col">Product Info</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>

                <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <td scope="row">{{ $task->id }}</td>
                        <td>
                            <img src="{{ URL::to('/') }}/uploads/{{ $task->product_image }}" alt="">
                        </td>
                        <td>
                            {{ $task->product_title }}
                        </td>
                        <td>
                            {{ $task->product_info }}
                        </td>
                        @isAdmin
                        <td>{{ $task->user->name }}</td>
                        @endisAdmin
                        <td><a href="{{ route('edit', $task->id) }}" title="edit"><i class="small material-icons">edit</i></a></td>
                        <td><a onclick="return confirm('Delete?')" href="{{ route('delete', $task->id) }}" title="delete"><i class="small material-icons">delete_forever</i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <form enctype="multipart/form-data" method="POST" action="{{ route('store') }}" class="col s12 home-form">
                <div class="row">
                    <div class="form-group col-md-12">
                        <input name="product_image" id="product_image" type="file" class="form-control-file validate">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="product_title">Product Title</label>
                        <input name="product_title" id="product_title" type="text" class="form-control validate">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="product_info">Product Info</label>
                        <input name="product_info" id="product_info" type="text" class="form-control validate">
                    </div>
                </div>
                <button type="submit" class="waves-effect waves-light btn">Добави продукт</button>
                @csrf
            </form>
        </div>
    </div>
@endsection