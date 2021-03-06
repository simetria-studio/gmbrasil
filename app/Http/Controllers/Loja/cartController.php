<?php

namespace App\Http\Controllers\Loja;

use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class CartController extends Controller
{
    public function cartAdd(Request $request)
    {

        $cart = $request->all();

        // dd($cart);

        \Cart::add(array(
            'id' => $cart['id'],
            'name' => $cart['name'],
            'price' => $cart['value'],
            'quantity' => 1,
            'attributes' => array(
                'sales_unit'    => $cart['sales_unit'],
                'image' => $cart['product_image'][0]['image_name'],
                'code' => $cart['code'],
                'description' => $cart['brief_description']
            ),

        ));
        return response()->json(\Cart::getContent());
    }

    public function cartClear()
    {
        \Cart::clear();

        return redirect()->back();
    }

    public function cartRemove($id)
    {
        \Cart::remove($id);
        return response()->json(\Cart::getContent());
    }

    public function cartGet()
    {
        $cartItens = \Cart::getContent();

        return response()->json($cartItens);
    }

    public function cart()
    {
        return view('loja.cart-checkout');
    }

    public function cartUpdate(Request $request, $id)
    {

        \Cart::update($id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->value,
            ),
          ));

          return response()->json(\Cart::getContent());
    }
}
