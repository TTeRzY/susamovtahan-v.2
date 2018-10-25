@extends('layouts.master')

@section('content')
    <div class="home-page-admin edit-technologies">
        <h1>Редакритрай контакти</h1>
        <form enctype="multipart/form-data" method="POST" action="{{ route('contacts.update',['id'=>$contacts->id]) }}" class="col-lg-12">
            <div class="row">

                <div class="form-group col-lg-12">

                    <input name="contacts_image" value="{{ $contacts->contacts_image }}" id="contacts_image" type="file" class="validate">
                </div>
                <div class="form-group">
                    <img class="img-fluid" src="{{ URL::to('/') }}/uploads/{{ $contacts->contacts_image }}" alt="">
                </div>
                <div class="form-group col-lg-12">
                    <label for="contacts_title">Редактирай заглавието</label>
                    <input name="contacts_title" value="{{ $contacts->contacts_title }}" id="contacts_title" type="text" class="form-control validate">
                </div>
                <div class="form-group col-lg-12">
                    <label for="contacts_paragraph">Редактирай Параграфа</label>
                    <input name="contacts_paragraph" value="{{ $contacts->contacts_paragraph }}" id="contacts_paragraph" type="text" class="form-control validate">
                </div>
                <div class="form-group col-lg-12">
                    <label for="contacts_info">Редактирай информацията</label>
                    <input name="contacts_info" value="{{ $contacts->contacts_info }}" id="contacts_info" type="text" class="form-control validate">
                </div>
            </div>

            <button type="submit" class="waves-effect waves-light btn">Запази промените</button>
            @csrf
        </form>
    </div>
@endsection