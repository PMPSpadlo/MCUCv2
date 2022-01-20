@extends('layouts.app')

@section('content')
    <div class="jumbotron-fluid">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="container mt-4">
                        @if(session('status'))
                            <div class="alert alert-success">
                                {{session('status')}}
                            </div>
                        @endif
                    </div>
                    <div class="card lr-form-card">
                        <div class="card-header card-header-custom">Add new transaction</div>

                        <div class="card-body">
                            <form method="post" action="{{url('store-order')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="amount">Amount</label>
                                    <input type="text" id="amount" name="amount" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="amount">Fee</label>
                                    <input type="text" id="fee" name="fee" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="amount">Type</label>
                                    <select class="form-control" name="type" id="type">
                                        <option value="1">+</option>
                                        <option value="0">-</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="amount">Currency</label>
                                    <select class="form-control" name="currency" id="currency">
                                        @foreach($currencies as $currency)
                                            <option value={{$currency->id}}>{{$currency->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group row form-row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-outline-danger" style="min-width: 10rem">
                                            Add transaction
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    <div class="card">--}}
{{--        <div class="card-body">--}}
{{--            <form method="post" action="{{url('store-order')}}">--}}
{{--                @csrf--}}
{{--                <div class="form-group">--}}
{{--                    <label for="amount">Amount</label>--}}
{{--                    <input type="text" id="amount" name="amount" class="form-control">--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="amount">Currency</label>--}}
{{--                    <select class="form-control" name="currency" id="currency">--}}
{{--                        @foreach($currencies as $currency)--}}
{{--                            <option value={{$currency->id}}>{{$currency->name}}</option>--}}
{{--                        @endforeach--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection

