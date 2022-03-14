<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\OrderItem;

class PedidosController extends Controller
{
    public function index()
    {
        $orders = Order::with('user')->orderBy('created_at', 'desc')->paginate();
        return view('admin.pedidos.index', get_defined_vars());
    }

    public function pedidoDetail($id)
    {
        $order = Order::with('user', 'adress')->find($id);
        $produtos = OrderItem::where('order_id', $order->id)->get();
        return view('admin.pedidos.pedido-detail', get_defined_vars());
    }
}
