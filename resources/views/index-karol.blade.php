@extends('layouts.app-karol')

@section('content')


    <div class="second-row">
        <section class="first-crypto small-square">
            <img src="{{asset('storage/images/btc_cryptocurrencies_icon_188406.png')}}">
            <p class="percent">+5,87%/<span>24h</span></p>
            <p>60 223$</p>
        </section>

        <section class="second-crypto small-square">
            <img src="{{asset('storage/images/eth-crypto-cryptocurrency-cryptocurrencies-cash-money-bank-payment_95451.png')}}">
            <p class="percent">-5%<span>24h</span></p>
            <p>60 223</p>
        </section>

        <section class="my-balance small-square">
            <img src="{{asset('storage/images/dollar-sign-icon-png_1162859.png')}}">
            <p class="percent">+5%<span>24h</span></p>
            <p>60 223$</p>
        </section>
    </div>
    <div class="third-row">
        <section class="my-coins big-square">
            <p>My coins</p>
            <div></div>
            <ul>
                @foreach($currencies as $currency)
                <li>
                    <div><img src="{{asset('storage/images/btc_cryptocurrencies_icon_188406.png')}}" alt="">
                        <p>{{$currency->name}}</p>
                    </div>
                    <p>{{$currency->own}}</p>
                </li>
                    @endforeach
            </ul>
        </section>
        <section class="recent-transaction big-square">
            <p>Recent transactions</p>
            <div></div>
            <ul>
                @foreach($orders as $order)
                <li>
                    <div><img src="{{asset('storage/images/shiba-inu-shib-logo.png')}}" alt="">
                        <p>{{$order->currency()->name}}</p></div>
                    <div class="transaction-details"><p class="percent">@if($order->type == 1)<span style="color: rgb(0, 255, 41);">+@else <span style="color: rgb(255, 72, 72);">-@endif{{$order->amount}}</span></p>
                        <p>{{$order->created_at}}</p></div>
                </li>
                @endforeach
            </ul>
        </section>
    </div>

@endsection
