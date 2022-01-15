<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Codigo;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PainelController extends Controller
{
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
}
