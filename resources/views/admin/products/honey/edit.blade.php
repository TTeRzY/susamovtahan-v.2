@extends('layouts.master')

@section('content')
    <div class="home-page-admin edit-technologies">
        <h1>Редакритрай пчелен мед</h1>
        <form enctype="multipart/form-data" method="POST" action="{{ route('honey.update',['id'=>$honey->id]) }}" class="col-lg-12">
            <div class="row">

                <div class="form-group col-lg-12">

                    <input name="honey_image" value="{{ $honey->honey_image }}" id="honey_image" type="file" class="validate">
                </div>
                <div class="form-group">
                    <img class="img-fluid" src="{{ URL::to('/') }}/uploads/{{ $honey->honey_image }}" alt="">
                </div>
                <div class="form-group col-lg-12">
                    <label for="honey_title">Редактирай заглавието</label>
                    <input name="honey_title" value="{{ $honey->honey_title }}" id="honey_title" type="text" class="form-control validate">
                </div>
                <div class="form-group col-lg-12">
                    <label for="honey_price">Редактирай цената</label>
                    <input name="honey_price" value="{{ $honey->honey_price }}" id="honey_price" type="text" class="form-control validate">
                </div>
                <div class="form-group col-lg-12">
                    <label for="honey_info">Редактирай информацията</label>
                    <input name="honey_info" value="{{ $honey->honey_info }}" id="honey_info" type="text" class="form-control validate">
                </div>
                <div class="form-group col-lg-12">
                    <label for="honey_more_info">Повече информация за продукта</label>
                    <textarea name="honey_more_info" id="honey_more_info" type="text" class="form-control validate" style="min-height: 400px">{{ $honey->honey_more_info }}</textarea>
                </div>
            </div>

            <button type="submit" class="waves-effect waves-light btn">Запази промените</button>
            @csrf
        </form>
    </div>
@endsection