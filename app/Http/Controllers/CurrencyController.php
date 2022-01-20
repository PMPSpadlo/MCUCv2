<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
                $current = new Currency;
            }else{
                print_r("Jest");
            }
            $current->name = $coin->name;
            $current->slug = Str::slug($coin->name, '-');
            $current->symbol = $coin->symbol;
            $current->price = $coin->quote->USD->price;
            $current->volume_24h = $coin->quote->USD->volume_24h;
            $current->volume_change_24h = $coin->quote->USD->volume_change_24h;
            $current->percent_change_1h = $coin->quote->USD->percent_change_1h;
            $current->percent_change_24h = $coin->quote->USD->percent_change_24h;
            $current->percent_change_7d = $coin->quote->USD->percent_change_7d;
            $current->percent_change_30d = $coin->quote->USD->percent_change_30d;
            $current->market_cap = $coin->quote->USD->market_cap;
            $current->max_supply = $coin->max_supply;
            $current->circulating_supply = $coin->circulating_supply;
            $current->save();

        }
        return "";
    }
}
