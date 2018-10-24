<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientsOrders;
use Mail;

use App\Http\Requests;


class ClientsController extends Controller
{
    public function index(){
        $clientsOrders = ClientsOrders::all();

        $totalOrdersInMoney = 0;

        foreach ($clientsOrders as $item){
            $totalOrdersInMoney += $item->totalPrice;
        }


        return view('admin.clientsOrders.index', compact('clientsOrders', 'totalOrdersInMoney'));
    }

    public function store(Request $request)
    {


        $clients_orders = new ClientsOrders();

        $json_products = json_encode($request->products);
        $clients_orders->products = $json_products;

        $clients_orders->name = htmlspecialchars($request->name);
        $clients_orders->phone = htmlspecialchars($request->phone);
        $clients_orders->email = htmlspecialchars($request->email);
        $clients_orders->city = htmlspecialchars($request->city);
        $clients_orders->address = htmlspecialchars($request->address);
        $clients_orders->message = htmlspecialchars($request->message);
        $clients_orders->totalPrice = $request->totalPrice;

        $clients_orders->save();

        $name = htmlspecialchars($request->name);
        $phone = htmlspecialchars($request->phone);
        $email = htmlspecialchars($request->email);
        $city = htmlspecialchars($request->city);
        $address = htmlspecialchars($request->address);
        $bodyMessage = htmlspecialchars($request->message);
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
