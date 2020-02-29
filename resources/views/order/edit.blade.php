@extends('layouts.app')

@section('content')
	<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mb-2">
                <div class="card">
                    <div class="card-header text-center">
                        Update Order
                        <a href="{{ URL::previous() }}" class="btn btn-primary float-right">Back</a>
                    </div>

                    {{-- {{dd($product)}} --}}

                    <div class="card-body">
                        <form method="post" action="{{ route('order.update', ['order' => $order->id]) }}">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <div class="form-group col-md-6">
                                <label for="o_num">Order Number</label>
                                <input type="text" class="form-control" id="o_num" name="o_num" placeholder="Order Number" value="{{old('o_num', $order->order_number)}}" required="">
                                @error('o_num')
                                    <div class="error text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Update Order</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection