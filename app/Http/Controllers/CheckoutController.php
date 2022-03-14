<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\Order;
use App\Models\Adress;
use App\Models\OrderItem;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use Illuminate\Support\Facades\Http;

class CheckoutController extends Controller
{
    public function shipping()
    {

        $adress = Adress::where('user_id', auth()->user()->id)->first();
        return view('loja.shipping', get_defined_vars());
    }

    public function checkout()
    {
        $this->getToken();

        // session()->forget('pagseguro_session_code');
        // dd(session()->get('pagseguro_session_code'));
        return view('loja.checkout', get_defined_vars());
    }

    public function makePagSeguroSession()
    {
    }
    public function getToken()
    {
        if (!session()->has('pagseguro_session_code')) {
            $client = new \GuzzleHttp\Client();
            $response = $client->request('POST', 'https://ws.sandbox.pagseguro.uol.com.br/v2/sessions?email=felipetestepremium@gmail.com&token=8294963D221547C7907E0D789F35E4DE', []);

            $token = simplexml_load_string($response->getBody());
            $newtoken = collect($token)->toJson();

            session(['pagseguro_session_code' => json_decode($newtoken)->id->{'0'}]);
        }
    }


    public function getClient()
    {
    }

    public function checkoutEnd(Request $request)
    {


        $iten['paymentMode'] = 'default';
        $iten['paymentMethod'] = 'creditCard';
        $iten['receiverEmail'] = 'felipetestepremium@gmail.com';
        $iten['currency'] = 'BRL';
        $iten['extraAmount'] = '0.00';
        $i = 1;
        foreach (\Cart::getContent() as $cart) {
            $iten["itemId{$i}"] = (string)$cart->id;
            $iten["itemQuantity{$i}"] = (string)$cart->quantity;
            $iten["itemAmount{$i}"] = (string)$cart->price;
            $iten["itemDescription{$i}"] = (string)$cart->attributes->description;
            $i++;
        }
        $iten['notificationURL'] = 'https://sualoja.com.br/notifica.html';
        $iten['reference'] = 'REF1234';
        $iten['senderName'] = (string)auth()->user()->name;
        $iten['senderCPF'] = '22111944785';
        $iten['senderAreaCode'] = '11';
        $iten['senderPhone'] = '56273440';
        $iten['senderEmail'] = (string)auth()->user()->email;
        $iten['senderHash'] = $request->hash;
        $iten['shippingAddressRequired'] = 'false';
        $iten['creditCardToken'] = $request->token;
        $iten['installmentQuantity'] = filter_var($request->installment, FILTER_SANITIZE_SPECIAL_CHARS);
        $iten['installmentValue'] = $request->valor;
        $iten['noInterestInstallmentQuantity'] = '3';
        $iten['creditCardHolderName'] = 'Jose Comprador';
        $iten['creditCardHolderCPF'] = '22111944785';
        $iten['creditCardHolderBirthDate'] = '27/10/1987';
        $iten['creditCardHolderAreaCode'] = '11';
        $iten['creditCardHolderPhone'] = '56273440';
        $iten['billingAddressStreet'] = 'Av. Brig. Faria Lima';
        $iten['billingAddressNumber'] = '1384';
        $iten['billingAddressComplement'] = '5o andar';
        $iten['billingAddressDistrict'] = 'Jardim Paulistano';
        $iten['billingAddressPostalCode'] = '01452002';
        $iten['billingAddressCity'] = 'Sao Paulo';
        $iten['billingAddressState'] = 'SP';
        $iten['billingAddressCountry'] = 'BRA';

        // dd($iten);
        try {
            $client = new Client();

            $create = $client->post('https://ws.sandbox.pagseguro.uol.com.br/v2/transactions?email=felipetestepremium@gmail.com&token=8294963D221547C7907E0D789F35E4DE', [
                'headers' => [
                    "Content-Type", "application/x-www-form-urlencoded; charset=ISO-8859-1",
                ],
                'form_params' => $iten,
            ]);
            $ref = rand(1000, 9999);
            $adress = Adress::where('user_id', auth()->user()->id)->first();
            $order = Order::create([
                'user_id' => auth()->user()->id,
                'adress_id' => $adress->id,
                'orderitens_id' => 1,
                'payment_type' => 'Cartão de Crédito',
                'reference' => 'REF' . $ref,
                'order_code' => '0001',
                'total' => \Cart::getTotal(),
            ]);
            foreach (\Cart::getContent() as $cart) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'name' => $cart->name,
                    'product_id' => $cart->id,
                    'price' => $cart->price,
                    'quantity' => $cart->quantity,
                    'total' => $cart->price * $cart->quantity
                ]);
            }
            \Cart::clear();
            session()->forget('pagseguro_session_code');
            return response()->json('ok', 200);
        } catch (Throwable $e) {
            $erros = simplexml_load_string($e->getMessage());
            return response()->json($erros, 412);
        }
    }

    public function boleto(Request $request)
    {
        $iten['paymentMode'] = 'default';
        $iten['paymentMethod'] = 'boleto';
        $iten['receiverEmail'] = 'felipetestepremium@gmail.com';
        $iten['currency'] = 'BRL';
        $iten['extraAmount'] = '0.00';
        $i = 1;
        foreach (\Cart::getContent() as $cart) {
            $iten["itemId{$i}"] = (string)$cart->id;
            $iten["itemQuantity{$i}"] = (string)$cart->quantity;
            $iten["itemAmount{$i}"] = (string)$cart->price;
            $iten["itemDescription{$i}"] = (string)$cart->attributes->description;
            $i++;
        }
        $iten['notificationURL'] = 'https://sualoja.com.br/notifica.html';
        $iten['reference'] = 'REF1234';
        $iten['senderName'] = (string)auth()->user()->name;
        $iten['senderCPF'] = '72962940005';
        $iten['senderAreaCode'] = '11';
        $iten['senderPhone'] = '56273440';
        $iten['senderEmail'] = (string)auth()->user()->email;
        $iten['senderHash'] = $request->hash;
        $iten['shippingAddressRequired'] = 'false';
        // $iten['shippingAddressStreet'] = 'Av. Brig. Faria Lima';
        // $iten['shippingAddressNumber'] = '1384';
        // $iten['shippingAddressComplement'] = '5o andar';
        // $iten['shippingAddressDistrict'] = 'Jardim Paulistano';
        // $iten['shippingAddressPostalCode'] = '01452002';
        // $iten['shippingAddressCity'] = 'Sao Paulo';
        // $iten['shippingAddressState'] = 'SP';
        // $iten['shippingAddressCountry'] = 'BRA';
        $iten['shippingCost'] = '0.00';

        try {
            $client = new Client();
            $create = $client->post('https://ws.sandbox.pagseguro.uol.com.br/v2/transactions?email=felipetestepremium@gmail.com&token=8294963D221547C7907E0D789F35E4DE', [
                'headers' => [
                    "Content-Type", "application/x-www-form-urlencoded; charset=ISO-8859-1",
                ],
                'form_params' => $iten,
            ]);

            $xml = simplexml_load_string($create->getBody());
            $getlink = collect($xml)->toJson();

            $ref = rand(1000, 9999);
            $adress = Adress::where('user_id', auth()->user()->id)->first();
            $order = Order::create([
                'user_id' => auth()->user()->id,
                'adress_id' => $adress->id,
                'orderitens_id' => 1,
                'boleto' => (json_decode($getlink)->paymentLink->{0}),
                'payment_type' => 'Boleto',
                'reference' => 'REF' . $ref,
                'order_code' => '0001',
                'total' => \Cart::getTotal(),
            ]);
            foreach (\Cart::getContent() as $cart) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'name' => $cart->name,
                    'product_id' => $cart->id,
                    'price' => $cart->price,
                    'quantity' => $cart->quantity,
                    'total' => $cart->price * $cart->quantity
                ]);
            }
            \Cart::clear();
            session()->forget('pagseguro_session_code');
            return response()->json('ok', 200);
        } catch (Throwable $e) {
            // dd($e->getMessage());

            return response()->json('error', 412);
        }
    }
}
