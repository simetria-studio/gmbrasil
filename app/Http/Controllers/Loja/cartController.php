<?php

namespace App\Http\Controllers\Loja;

use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class CartController extends Controller
{
    public function cartAdd($id)
    {

        $product = Product::find($id);

        \Cart::add(array(
            'id' => $id,
            'name' => $product->name,
            'price' => $product->value,
            'quantity' => 1,
            'attributes' => array(
                'sales_unit'    => $product->sales_unit,
                'image' => $product->productImage[0]->image_name,
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
}
