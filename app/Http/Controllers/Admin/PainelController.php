<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Codigo;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PainelController extends Controller
{
    public $sales_unit_array = [
        'P' => 'Curso',
        'M' => 'Produto',
        'MQ' => 'Serviço'
    ];

    public function index()
    {
        $users = User::get();
        return view('admin.index', get_defined_vars());
    }

    public function users()
    {
        $users = User::with('filiados')->paginate();
        // dd($users);
        return view('admin.usuarios', get_defined_vars());
    }

    public function categorias($id = null)
    {
        if($id){
            $categories = Category::where('parent_id', $id)->get();
            $category_name = Category::where('id', $id)->first()->name;
        }else{
            $categories = Category::whereNull('parent_id')->with(['subCategories'])->get();
            $category_name = '';
        }
        return view('admin.produtos.categoria', get_defined_vars());
    }
    public function indexProduto()
    {
        $sales_unit_array = $this->sales_unit_array;

        $categories = Category::whereNull('parent_id')->get();

        // $attributes = Attribute::with(['variations'])->whereNull('parent_id')->get();

        $products = Product::where('status', '1')->with(['productImage', 'productCategory'])->paginate(15);

        return view('admin.produtos.produto', get_defined_vars());
    }
}
