<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::where('wallet_id',Auth::user()->id)->paginate(10);
        return view('transactions-karol', compact('orders'));
    }

    public function add(){
        $currencies = Currency::all();
        return view('transactions-new', compact('currencies'));
    }

    public function store(Request $request)
    {
        $order = new Order();
        $currency = Currency::where('id',$request->currency)->first();
        $order->amount = $request->amount;
        $order->limit = $currency->price;
        $order->fee = $request->fee;
        $order->wallet_id = Auth::user()->id;
        $order->currency_id = $request->currency;
        $order->type = $request->type;
        $order->save();
        return redirect()->route('karolNewTransactions')->with('status','New transaction has been inserted');
    }
}
