<?php

namespace App\Http\Controllers\Loja;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LojaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // dd($sessionId);
        $products = Product::where('status', '1')->with(['productImage', 'productCategory'])->get();
        // $sales_unit_array = $this->sales_unit_array;
        return view('loja.index', get_defined_vars());
    }



    public function productDetail($slug)
    {
        $product = Product::where('status', '1')->with(['productImage', 'productCategory'])->find($slug);
        // dd($product);
        return view('loja.product-detail', get_defined_vars());
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public static function show()
    {
      return 'ok';
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
