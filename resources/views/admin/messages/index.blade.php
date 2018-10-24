@extends('layouts.master')

@section('content')
    <div style="padding-top: 80px">
        <div class="carousel-info orders-table">
            <h2>Съобщения от клиенти</h2>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col"># </th>
                    <th scope="col">Клиент</th>
                    <th scope="col">Телефон</th>
                    <th scope="col">Имейл</th>
                    <th scope="col">Съобщение</th>
                </tr>
                </thead>
                <tbody>
                @foreach($messages as $message)
                    <tr>
                        <th scope="row">{{ $message->id }}</th>
                        <td>{{ $message->name }}</td>
                        <td>{{ $message->phone }}</td>
                        <td>{{ $message->email }}</td>
                        <td>{{ $message->message }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection