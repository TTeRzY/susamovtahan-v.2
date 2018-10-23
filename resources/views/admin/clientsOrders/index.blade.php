@extends('layouts.master')

@section('content')
    <div>
        <div class="carousel-info orders-table">
            <h2>Заявки от клиенти</h2>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Поръчка </th>
                    <th colspan="4">Продукт</th>
                    <th colspan="3">Клиент</th>
                    <th colspan="2">Телефон</th>
                    <th colspan="2">Имейл</th>
                    <th colspan="2">Град</th>
                    <th colspan="2">Адрес</th>
                    <th colspan="2">Съобщение</th>
                    <th colspan="2">Общо</th>
                </tr>
                </thead>
                <tbody>
                @foreach($clientsOrders as $key => $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td colspan="4">
                            <table>
                                @foreach(json_decode($item->products) as $key => $product)
                                <tr>
                                    <td><img src="{{ URL::to('/') }}/uploads/{{ $product->image }}" alt=""></td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }} лв.</td>
                                    <td>{{ $product->count }}</td>
                                    <td>{{ $product->total }} лв.</td>
                                </tr>
                                @endforeach
                            </table>
                        </td>
                        <td colspan="3">{{ $item->name }}</td>
                        <td colspan="2">{{ $item->phone }}</td>
                        <td colspan="2">{{ $item->email }}</td>
                        <td colspan="2">{{ $item->city }}</td>
                        <td colspan="2">{{ $item->address }}</td>
                        <td colspan="2">{{ $item->message }}</td>
                        <td colspan="3">{{ $item->totalPrice }} лв.</td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection