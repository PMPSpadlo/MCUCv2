@extends('layouts.app-karol')

@section('content')

    <div class="second-row coins-table">
        <section class="coins-table">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Own</th>
                    <th>Price</th>
                    <th>1h %</th>
                    <th>24h %</th>
                    <th>7days %</th>

                </tr>
                @foreach($currencies as $currency)
                <tr>
                    <td>{{$currency->name}}</td>
                    <td>{{$currency->own}}</td>
                    <td>{{$currency->price}}</td>
                    <td class="percent">{{$currency->percent_change_1h}}</td>
                    <td class="percent">{{$currency->percent_change_24h}}</td>
                    <td class="percent">{{$currency->percent_change_7d}}</td>

                </tr>
                @endforeach

            </table>
        </section>
    </div>


@endsection

