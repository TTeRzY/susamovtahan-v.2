@extends('layouts.master')

@section('content')
    <div class="home-page-admin edit-technologies">
        <h1>Редакритрай сусамов тахан</h1>
        <form enctype="multipart/form-data" method="POST" action="{{ route('tahan.update',['id'=>$tahan->id]) }}" class="col-lg-12">
            <div class="row">

                <div class="form-group col-lg-12">

                    <input name="tahan_image" value="{{ $tahan->tahan_image }}" id="tahan_image" type="file" class="validate">
                </div>
                <div class="form-group">
                    <img class="img-fluid" src="{{ URL::to('/') }}/uploads/{{ $tahan->tahan_image }}" alt="">
                </div>
                <div class="form-group col-lg-12">
                    <label for="tahan_title">Редактирай заглавието</label>
                    <input name="tahan_title" value="{{ $tahan->tahan_title }}" id="tahan_title" type="text" class="form-control validate">
                </div>
                <div class="form-group col-lg-12">
                    <label for="tahan_price">Редактирай цена</label>
                    <input name="tahan_price" value="{{ $tahan->tahan_price }}" id="tahan_price" type="text" class="form-control validate">
                </div>
                <div class="form-group col-lg-12">
                    <label for="tahan_info">Редактирай информацията</label>
                    <input name="tahan_info" value="{{ $tahan->tahan_info }}" id="tahan_info" type="text" class="form-control validate">
                </div>
                <div class="form-group col-lg-12">
                    <label for="tahan_more_info">Повече информация за продукта</label>
                    <textarea name="tahan_more_info" id="tahan_more_info" type="text" class="form-control validate" style="min-height: 400px">{{ $tahan->tahan_more_info }}</textarea>
                </div>
            </div>

            <button type="submit" class="waves-effect waves-light btn">Запази промените</button>
            @csrf
        </form>
    </div>
@endsection