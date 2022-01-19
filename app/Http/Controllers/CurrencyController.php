<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;
use KriosMane\CoinMarketCap\Api;

class CurrencyController extends Controller
{
    public function testCoin(){
        $file = 'test.json';
//        $test = (new \KriosMane\CoinMarketCap\Api)->all_cryptos();
//        file_put_contents($file, json_encode($test));

        $crypto = json_decode(file_get_contents($file));
//        print_r($crypto);
//        die();
        foreach ($crypto->data as $coin){
            $current = Currency::where('name',$coin->name)->first();
            if(!$current){
                print_r("Nie ma");

                $new = new Currency;
                $new->name = $coin->name;

            }else{
                print_r("Jest");
            }
        print_r($coin->name);
        }
        return "";
    }
}
