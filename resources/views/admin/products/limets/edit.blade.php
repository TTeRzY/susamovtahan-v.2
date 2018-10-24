@extends('layouts.master')

@section('content')
    <div class="home-page-admin edit-technologies">
        <h1>Редакритрай брашно от лимец</h1>
        <form enctype="multipart/form-data" method="POST" action="{{ route('limets.update',['id'=>$limets->id]) }}" class="col-lg-12">
            <div class="row">

                <div class="form-group col-lg-12">

                    <input name="limets_image" value="{{ $limets->limets_image }}" id="limets_image" type="file" class="validate">
                </div>
                <div class="form-group">
                    <img class="img-fluid" src="{{ URL::to('/') }}/uploads/{{ $limets->limets_image }}" alt="">
                </div>
                <div class="form-group col-lg-12">
                    <label for="limets_title">Редактирай заглавието</label>
                    <input name="limets_title" value="{{ $limets->limets_title }}" id="limets_title" type="text" class="form-control validate">
                </div>
                <div class="form-group col-lg-12">
                    <label for="limets_price">Редактирай цена</label>
                    <input name="limets_price" value="{{ $limets->limets_price }}" id="limets_price" type="text" class="form-control validate">
                </div>
                <div class="form-group col-lg-12">
                    <label for="limets_info">Редактирай информацията</label>
                    <input name="limets_info" value="{{ $limets->limets_info }}" id="limets_info" type="text" class="form-control validate">
                </div>
                <div class="form-group col-lg-12">
                    <label for="limets_more_info">Повече информация за продукта</label>
                    <textarea name="limets_more_info" id="limets_more_info" type="text" class="form-control validate" style="min-height: 400px">{{ $limets->limets_more_info }}</textarea>
                </div>
            </div>

            <button type="submit" class="waves-effect waves-light btn">Запази промените</button>
            @csrf
        </form>
    </div>
@endsection