@extends('layouts.master')

@section('content')
    <div class="home-page-admin">
        <h1>Редакция на секции</h1>
        <form enctype="multipart/form-data" method="POST" action="{{ route('updateSections',['id'=>$sections->id]) }}" class="col-lg-12">
            <div class="row">

                <div class="form-group col-lg-12">

                    <input name="section_image" value="{{ $sections->section_image }}" id="section_image" type="file" class="validate">
                </div>
                <div class="form-group">
                    <img class="img-fluid" src="{{ URL::to('/') }}/uploads/{{ $sections->carousel_image }}" alt="">
                </div>
                <div class="form-group col-lg-12">
                    <label for="section_title">Редактирай заглавие</label>
                    <input name="section_title" value="{{ $sections->section_title }}" id="section_title" type="text" class="form-control validate">
                </div>
                <div class="form-group col-lg-12">
                    <label for="section_info">Редактирай информация</label>
                    <input name="section_info" value="{{ $sections->section_info }}" id="section_info" type="text" class="form-control validate">
                </div>
            </div>

            <button type="submit" class="waves-effect waves-light btn">Запази промените</button>
            @csrf
        </form>
    </div>
@endsection