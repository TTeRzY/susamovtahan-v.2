@extends('layouts.master')

@section('content')
    <div class="col-lg-10">
        <div class="carousel-info">
            <h2>Контакти</h2>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Снимка/Икона</th>
                    <th scope="col">Заглавие</th>
                    <th scope="col">Информация</th>
                </tr>
                </thead>
                <tbody>
                @foreach($contacts as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td class="about_image"><img class="img-fluid" src="{{ URL::to('/') }}/uploads/{{ $item->contacts_image }}" alt=""></td>
                        <td>{{ $item->contacts_title }}</td>
                        <td>{{ $item->contacts_paragraph }}</td>
                        <td>{{ $item->contacts_info }}</td>
                        <td><a href="{{ route('contacts.edit', $item->id) }}" title="edit"><i class="small material-icons">edit</i></a></td>
                        <td><a onclick="return confirm('Delete?')" href="{{ route('contacts.delete', $item->id) }}" title="delete"><i class="small material-icons">delete_forever</i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <form name="contacts_form" enctype="multipart/form-data" method="POST" action="{{ route('contacts.store') }}" class="col-md-12 home-form">
                <input type="hidden" value="contacts_form" name="about_form">
                <div class="row">
                    <div class="form-group col-md-12">
                        <input name="contacts_image" id="contacts_image" type="file" class="form-control-file validate">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="contacts_title">Заглавие</label>
                        <input name="contacts_title" id="contacts_title" type="text" class="form-control validate">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="contacts_paragraph">Параграф</label>
                        <input name="contacts_paragraph" id="contacts_paragraph" type="text" class="form-control validate">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="contacts_info">Информация</label>
                        <input name="contacts_info" id="contacts_info" type="text" class="form-control validate">
                    </div>
                </div>
                <button type="submit" class="waves-effect waves-light btn">Добави контакти</button>
                @csrf
            </form>
        </div>
    </div>
@endsection