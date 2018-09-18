@extends('layouts.master')

@section('content')
    <table class="home-page-table">
        <thead>
        <tr>
            <th>Product Title</th>
            <th>Product Info</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>

        <tbody>
        @foreach($tasks as $task)
            <tr>
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
            <div class="input-field col s12">
                <input name="product_image" id="product_image" type="file" class="validate">
            </div>
            <div class="input-field col s12">
                <input name="product_title" id="product_title" type="text" class="validate">
                <label for="product_title">Product Title</label>
            </div>
            <div class="input-field col s12">
                <input name="product_info" id="product_info" type="text" class="validate">
                <label for="product_info">Product Info</label>
            </div>
        </div>

        @include('partials.coworkers')

        <button type="submit" class="waves-effect waves-light btn">Add new product</button>
        @csrf
    </form>
@endsection