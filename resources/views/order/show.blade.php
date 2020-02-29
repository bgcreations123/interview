@extends('layouts.app')

@section('content')
	<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mb-2">
                <div class="card">
                    <div class="card-header text-center">
                        View Order
                        <a href="{{ URL::previous() }}" class="btn btn-primary float-right">Back</a>
                    </div>

                    <div class="card-body">
                        <div class="card text-center" style="width: 18rem;">
                            <div class="card-header">
                                Title: {{ $order->order_number }}
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    Description: {{ $order->order_number }}
                                </p>
                                <a class="btn btn-secondary" href="{{ route('order.edit', ['order' => $order->id]) }}">Edit</a>
                            </div>
                            <div class="card-footer text-muted">
                                Qty: {{ $order->order_number }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection