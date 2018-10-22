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
                background-color: #FCFCFC;
                padding: 30px;
            }
            table {
                border-collapse: collapse;
                width: 100%;
                border: 1px solid #ddd;
                background-color: #70c1b3;
            }

            tr{
             border: 1px solid #ddd;
            }

            th, td {
                color: #ffffff;
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
        </style>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700,900|Raleway:300,400,700,900" rel="stylesheet">
    </head>
 <body>
 <div class="email-template">
<h1>Здравейте, {{ $name }}.</h1>
<h3>Благодарим Ви , че пазарувахте от Нас.</p>
<h5>Разгледайте вашата поръчка : </h2>
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
      <th scope="row">{{ $key }}</th>
      <td>{{ $product['name'] }}</td>
      <td><img src="{{ URL::to('/') }}/uploads/{{ $product['image'] }}" alt=""></td>
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
      <td><h3>ОБЩО: {{ floatval($totalPrice) }} лв.</h3></td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>


