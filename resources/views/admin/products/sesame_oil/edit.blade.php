@extends('layouts.master')

@section('content')
    <div class="home-page-admin edit-technologies">
        <h1>Редакритрай технология</h1>
        <form enctype="multipart/form-data" method="POST" action="{{ route('sesame_oil.update',['id'=>$sesame_oil->id]) }}" class="col-lg-12">
            <div class="row">

                <div class="form-group col-lg-12">

                    <input name="sesame_oil_image" value="{{ $sesame_oil->sesame_oil_image }}" id="sesame_oil_image" type="file" class="validate">
                </div>
                <div class="form-group">
                    <img class="img-fluid" src="{{ URL::to('/') }}/uploads/{{ $sesame_oil->sesame_oil_image }}" alt="">
                </div>
                <div class="form-group col-lg-12">
                    <label for="sesame_oil_title">Име</label>
                    <input name="sesame_oil_title" value="{{ $sesame_oil->sesame_oil_title }}" id="sesame_oil_title" type="text" class="form-control validate">
                </div>
                <div class="form-group col-lg-12">
                    <label for="sesame_oil_price">Цена</label>
                    <input name="sesame_oil_price" value="{{ $sesame_oil->sesame_oil_price }}" id="sesame_oil_price" type="text" class="form-control validate">
                </div>
                <div class="form-group col-lg-12">
                    <label for="sesame_oil_info">Информация</label>
                    <input name="sesame_oil_info" value="{{ $sesame_oil->sesame_oil_info }}" id="sesame_oil_info" type="text" class="form-control validate">
                </div>
                <div class="form-group col-lg-12">
                    <label for="sesame_oil_more_info">Повече информация за продукта</label>
                    <textarea name="sesame_oil_more_info" id="sesame_oil_more_info" type="text" class="form-control validate" style="min-height: 400px">{{ $sesame_oil->sesame_oil_more_info }}</textarea>
                </div>
            </div>

            <button type="submit" class="waves-effect waves-light btn">Промени</button>
            @csrf
        </form>
    </div>
@endsection