@extends('layouts.master')

@section('content')
    <div class="home-page-admin">
        <h1>Редактиране на продукт</h1>
        <form enctype="multipart/form-data" method="POST" action="{{ route('update',['id'=>$task->id]) }}" class="col-lg-12">
            <div class="row">
                <div class="form-group col-lg-12">
                    <input name="product_image" value="{{ $task->product_image }}" id="product_image" type="file" class="validate">
                </div>
                <div class="form-group col-lg-12">
                    <label for="product_title">Редактирай заглавие</label>
                    <input name="product_title" value="{{ $task->product_title }}" id="product_title" type="text" class="form-control validate">
                </div>
                <div class="form-group col-lg-12">
                    <label for="product_info">Редактирай информацията</label>
                    <input name="product_info" value="{{ $task->product_info }}" id="product_info" type="text" class="form-control validate">
                </div>
            </div>

            <button type="submit" class="waves-effect waves-light btn">Запази промените</button>
            @csrf
        </form>
    </div>
@endsection