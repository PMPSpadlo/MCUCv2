<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index(){ return view('welcome'); }
    public function karolIndex(){
        $currencies = [];
        $i =1;
        $currencies_all = $this->getCurrencies();
        foreach ($currencies_all as $currency){
            $currencies[] = $currency;
            if($i == 5) break;
            $i++;
        }
        $orders = Order::where('wallet_id',Auth::user()->id)->latest('created_at')->take(5)->get();

        return view('index-karol', compact(['currencies','orders']));
    }
    public function karolMarket(){
        $currencies = Currency::paginate(10);
        return view('market-karol', compact('currencies'));
    }
    public function karolTransactions(){ return view('transactions-karol'); }

    public function karolWallet(){
        $currencies = $this->getCurrencies();
        return view('wallet-karol', compact('currencies'));
    }

    /**
     * @return array
     */
    public function getCurrencies(): array
    {
        $test = [];
        $currencies = [];
        $user = Auth::user();
        foreach ($user->orders() as $order) {
            if ($order->type == 1) {
                $value = (int)("+" . $order->amount);
            } else {
                $value = (int)("-" . $order->amount);
            }
            if ( ! isset($test[$order->currency_id])) {
                $test[$order->currency_id] = 0;
            }
            $test[$order->currency_id] += $value;
        }
        foreach ($test as $id => $val) {
            $currency = Currency::where('id', $id)->first();
            $currency->own = $val;
            $currencies[] = $currency;
        }
        return $currencies;
    }
}
