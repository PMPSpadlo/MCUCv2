<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function karolIndex(){ return view('index-karol'); }
    public function karolMarket(){ return view('market-karol'); }
    public function karolTransactions(){ return view('transactions-karol'); }
    public function karolWallet(){ return view('wallet-karol'); }
}
