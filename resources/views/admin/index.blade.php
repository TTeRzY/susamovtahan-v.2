@extends('layouts.master')

@section('content')
    <div class="home-page-admin">
        <!-- Carousel Section -->
        <div class="carousel-info">
            <h2>Слайдър информация</h2>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Carousel Image</th>
                    <th scope="col">Carousel Title</th>
                    <th scope="col">Carousel Info</th>
                </tr>
                </thead>
                <tbody>
                @foreach($carousels as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td><img class="img-fluid" src="{{ URL::to('/') }}/uploads/{{ $item->carousel_image }}" alt=""></td>
                    <td>{{ $item->carousel_title }}</td>
                    <td>{{ $item->carousel_text }}</td>
                    <td><a href="{{ route('editCarousel', $item->id) }}" title="edit"><i class="small material-icons">edit</i></a></td>
                    <td><a onclick="return confirm('Delete?')" href="{{ route('tehnologia.delete', $item->id) }}" title="delete"><i class="small material-icons">delete_forever</i></a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <form name="carousel_form" enctype="multipart/form-data" method="POST" action="{{ route('store') }}" class="col-md-12 home-form">
                <input type="hidden" value="carousel_form" name="carousel_form">
                <div class="row">
                    <div class="form-group col-md-12">
                        <input name="carousel_image" id="carousel_image" type="file" class="form-control-file validate">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="carousel_title">Carousel Title</label>
                        <input name="carousel_title" id="carousel_title" type="text" class="form-control validate">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="carousel_text">Carousel Info</label>
                        <input name="carousel_text" id="carousel_text" type="text" class="form-control validate">
                    </div>
                </div>
                <button type="submit" class="waves-effect waves-light btn">Добави слайдер</button>
                @csrf
            </form>
        </div>
        <!-- End Carousel Section -->

        <!-- Products Section -->
        <div class="home-page-products-form">
            <h2>Продукти информация</h2>
            <table class="table home-page-table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Image</th>
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
                        <td><a href="{{ route('edit', $task->id) }}" title="edit"><i class="small material-icons">edit</i></a></td>
                        <td><a onclick="return confirm('Delete?')" href="{{ route('delete', $task->id) }}" title="delete"><i class="small material-icons">delete_forever</i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <form name="products_form" enctype="multipart/form-data" method="POST" action="{{ route('store') }}" class="col s12 home-form">
                <input type="hidden" value="products_form" name="products_form">
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
        <!-- End Products Section -->


        <!-- Info Section -->

        <div class="home-sections-form">
            <h2>Секции информация</h2>
            <table class="table home-page-table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Section Image</th>
                    <th scope="col">Section Title</th>
                    <th scope="col">Section Info</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>

                <tbody>
                @foreach($sections as $section)
                    <tr>
                        <td scope="row">{{ $section->id }}</td>
                        <td>
                            <img src="{{ URL::to('/') }}/uploads/{{ $section->section_image }}" alt="">
                        </td>
                        <td>
                            {{ $section->section_title }}
                        </td>
                        <td>
                            {{ $section->section_info }}
                        </td>
                        <td><a href="{{ route('edit', $section->id) }}" title="edit"><i class="small material-icons">edit</i></a></td>
                        <td><a onclick="return confirm('Delete?')" href="{{ route('delete', $section->id) }}" title="delete"><i class="small material-icons">delete_forever</i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <form name="sections_form" enctype="multipart/form-data" method="POST" action="{{ route('store') }}" class="col-md-12 home-form">
                <input type="hidden" value="sections_form" name="sections_form">
                <div class="row">
                    <div class="form-group col-md-12">
                        <input name="section_image" id="section_image" type="file" class="form-control-file validate">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="section_title">Section Title</label>
                        <input name="section_title" id="section_title" type="text" class="form-control validate">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="section_info">Section Info</label>
                        <input name="section_info" id="section_info" type="text" class="form-control validate">
                    </div>
                </div>
                <button type="submit" class="waves-effect waves-light btn">Добави нова секция</button>
                @csrf
            </form>
        </div>


        <!-- End Info Section -->
    </div>
@endsection