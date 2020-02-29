@extends('layouts.app')

@section('content')
	<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mb-2">
                <div class="card">
                    <div class="card-header text-center">
                        Add New Order
                    </div>

                    <div class="card-body">
                        <form method="post" action="{{ route('order.store') }}">
                            {{ csrf_field() }}
                            <div class="form-group col-md-6">
                                <label for="o_num">Order Number</label>
                                <input type="text" class="form-control" id="o_num" name="o_num" placeholder="Order Number" value="{{old('o_num')}}" required="">
                                @error('o_num')
                                    <div class="error text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Add Order</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection