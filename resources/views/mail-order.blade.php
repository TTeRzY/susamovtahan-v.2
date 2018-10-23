<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Сусамовтахан имейл потвърждение</title>


        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <style>
            .email-template{
                padding: 30px 0;
            }

            .email-template-header{
                padding: 15px 0;
            }

            .email-template-body{
                padding: 15px 0;
            }
            table {
                border-collapse: collapse;
                width: 100%;
                border: 1px solid #ddd;
            }

            tr{
             border: 1px solid #ddd;
            }

            th, td {
                color: #000000;
                text-align: left;
                padding: 8px;
                border: 1px solid #ddd;
            }

            tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            h4{
                text-align: right;
            }

            ul{
                list-style-type: none;
                margin:0;
                padding:0;
            }
            ul li{
                font-size: 15px;
                padding: 15px 0;
                margin-left: 0;
            }
        </style>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700,900|Raleway:300,400,700,900" rel="stylesheet">
    </head>
 <body>
 <div class="email-template">
<div class="email-template-header">
    <h1>Имате направена поръчка от: </h1>

    <ul>
        <li>Имена: {{ $name }} </li>
        <li>Телефон: {{ $phone }} </li>
        <li>Имейл адрес: {{ $email }} </li>
        <li>Град: {{ $city }} </li>
        <li>Адрес: {{ $address }} </li>
        <li>Съобщение: {{ $bodyMessage }} </li>
    </ul>
</div>


<div class="email-template-body">
    <h2>Детайли на поръчката </h2>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Снимка</th>
            <th scope="col">Продукт</th>
            <th scope="col">Цена за бр.</th>
            <th scope="col">Поръчано количество</th>
            <th scope="col">Общо</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $key=>$product)
            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td><img src="{{ URL::to('/') }}/uploads/{{ $product['image'] }}" alt=""></td>
                <td>{{ $product['name'] }}</td>
                <td>{{ $product['price'] }}</td>
                <td>{{ $product['count'] }}</td>
                <td>{{ $product['total'] }} лв.</td>
            </tr>
        @endforeach
        <tr>
            <th scope="row"></th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><h3>ОБЩО: {{ floatval($totalPrice) }} лв.</h3></td>
        </tr>
        </tbody>
    </table>
</div>
</div>
</body>
</html>


