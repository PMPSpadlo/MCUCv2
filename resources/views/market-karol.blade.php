@extends('layouts.app-karol')

@section('content')

    <div class="second-row coins-table">
        <section class="coins-table" style="padding-bottom: 50px !important;">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>1h %</th>
                    <th>24h %</th>
                    <th>7days %</th>
                    <th>Market Cap</th>

                </tr>
                @foreach($currencies as $currency)
                <tr>
                    <td>{{$currency->name}}</td>
                    <td>{{$currency->price}}</td>
                    <td class="percent">{{$currency->percent_change_1h}}</td>
                    <td class="percent">{{$currency->percent_change_24h}}</td>
                    <td class="percent">{{$currency->percent_change_7d}}</td>
                    <td>{{$currency->market_cap}}</td>

                </tr>
                @endforeach


            </table>
            <span class="testowa">
                 {{$currencies->links() }}
            </span>

        </section>
    </div>


@endsection

