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
                <li>
                    <div><img src="{{asset('storage/images/btc_cryptocurrencies_icon_188406.png')}}" alt="">
                        <p>Bitcoin</p></div>
                    <p>3</p>
                </li>
                <li>
                    <div><img src="{{asset('storage/images/eth-crypto-cryptocurrency-cryptocurrencies-cash-money-bank-payment_95451.png')}}"
                              alt="">
                        <p>Ethereum</p></div>
                    <p>3</p>
                </li>
                <li>
                    <div><img src="{{asset('storage/images/shiba-inu-shib-logo.png')}}" alt="">
                        <p>Shiba inu</p></div>
                    <p>1 200 000</p>
                </li>
                <li>
                    <div><img src="{{asset('storage/images/Dogecoin-icon.png')}}" alt="">
                        <p>Dogecoin</p></div>
                    <p>850 000</p>
                </li>
                <li>
                    <div><img src="{{asset('storage/images/binance-coin-icon-2211-thumb.png')}}" alt="">
                        <p>Binance coin</p></div>
                    <p>17</p>
                </li>
            </ul>
        </section>
        <section class="recent-transaction big-square">
            <p>Recent transactions</p>
            <div></div>
            <ul>
                <li>
                    <div><img src="{{asset('storage/images/shiba-inu-shib-logo.png')}}" alt="">
                        <p>Shiba inu</p></div>
                    <div class="transaction-details"><p class="percent">+ 300 000</p>
                        <p>at 24/10/2021 23:55</p></div>
                </li>
                <li>
                    <div><img src="{{asset('storage/images/shiba-inu-shib-logo.png')}}" alt="">
                        <p>Shiba inu</p></div>
                    <div class="transaction-details"><p class="percent">- 250 000</p>
                        <p>at 24/10/2021 23:35</p></div>
                </li>
                <li>
                    <div><img src="{{asset('storage/images/eth-crypto-cryptocurrency-cryptocurrencies-cash-money-bank-payment_95451.png')}}"
                              alt="">
                        <p>Ethereum</p></div>
                    <div class="transaction-details"><p class="percent">+ 0.76</p>
                        <p>at 20/10/2021 03:55</p></div>
                </li>
            </ul>
        </section>
    </div>

@endsection
