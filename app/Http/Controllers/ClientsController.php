<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientsOrders;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;
class ClientsController extends Controller
{
    public function store(Request $request)
    {


        $clients_orders = new ClientsOrders();
        $json_products = json_encode($request->products);
        $clients_orders->products = $json_products;
        $clients_orders->name = $request->name;
        $clients_orders->phone = $request->phone;
        $clients_orders->email = $request->email;
        $clients_orders->city = $request->city;
        $clients_orders->address = $request->address;
        $clients_orders->message = $request->message;
        $clients_orders->totalPrice = $request->totalPrice;

        $clients_orders->save();

        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        $city = $request->city;
        $address = $request->address;
        $bodyMessage = $request->message;
        $products = $request->products;
        $totalPrice = $request->totalPrice;

         $data = array(
         'name' => $name,
         'phone' => $phone,
         'email' => $email,
         'city' => $city,
         'address' => $address,
         'bodyMessage' => $bodyMessage,
         'products' => $products,
         'totalPrice' => $totalPrice,

         );


         Mail::send('mail', $data, function($message) {
         global $request;
         $email = $request->email;

         $message->to($email)->subject('Вашата поръчка е приета успешно.');
         $message->from('susamov.tahan@gmail.com ','Susamovtahan.bg');
         });

         Mail::send('mail-order', $data, function($message) {
          global $request;
          $email = $request->email;
          $message->to('marin.terziyski@gmail.com')->subject('Имате нова поръчка.');
          $message->from($email,'Susamovtahan.bg');
          });


        return redirect()->back();
    }
}
