@extends('layouts.master')

@section('content')
    <div class="home-page-admin edit-technologies">
        <h1>Редакритрай продукт</h1>
        <form enctype="multipart/form-data" method="POST" action="{{ route('order.update',['id'=>$order->id]) }}" class="col-lg-12">
            <div class="row">

                <div class="form-group col-lg-12">

                    <input name="image" value="{{ $order->image }}" id="image" type="file" class="validate">
                </div>
                <div class="form-group">
                    <img class="img-fluid" src="{{ URL::to('/') }}/uploads/{{ $order->image }}" alt="">
                </div>
                <div class="form-group col-lg-12">
                    <label for="name">Редактирай заглавието</label>
                    <input name="name" value="{{ $order->name }}" id="name" type="text" class="form-control validate">
                </div>
                <div class="form-group col-lg-12">
                    <label for="price">Редактирай цената</label>
                    <input name="price" value="{{ $order->price }}" id="price" type="text" class="form-control validate">
                </div>

            </div>

            <button type="submit" class="waves-effect waves-light btn">Запази промените</button>
            @csrf
        </form>
    </div>
@endsection