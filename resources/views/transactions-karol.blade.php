@extends('layouts.app-karol')

@section('content')

        <div class="second-row coins-table">
            <section class="coins-table transactions-table" style="padding-bottom: 50px !important;">
                <table>
                    <tr>
                        <th>Coin</th>
                        <th>Price</th>
                        <th>Transaction</th>
                        <th>Date</th>

                    </tr>
                    @foreach($orders as $order)
                    <tr>
                        <td>{{$order->currency()->name}}</td>
                        <td>{{$order->limit}}</td>
                        <td class="percent">@if($order->type == 1)<span style="color: rgb(0, 255, 41);">+@else <span style="color: rgb(255, 72, 72);">-@endif{{$order->amount}}</span></td>
                        <td>{{$order->created_at}}</td>


                    </tr>
                    @endforeach
                </table>
                <span class="testowa">
                 {{$orders->links() }}
            </span>
            </section>
        </div>

@endsection

