@extends('layouts.app')

@section('content')
	<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mb-2">
                <div class="card">
                    <div class="card-header text-center">
                        Orders List
                        <a class="btn btn-secondary float-right" href="{{ route('order.create') }}">+</a>
                    </div>

                    <div class="card-body">
                        @if(empty($orders))
                            No orders in the sys.
                        @else
                            @foreach($orders as $order)
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <a href="{{ route('order.show', ['order' => $order->id]) }}">{{ $order->order_number }}</a>
                                        {{-- <a href="{{ route('order.edit', ['order' => $order->id]) }}">
                                            Edit
                                        </a> --}}
                                        <a class="btn btn-primary float-right" href="javascript:void(0);" onclick="$(this).find('form').submit();" >
                                            <form action="{{ route('order.destroy', ['order' => $order->id]) }}" method="post">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                Delete
                                            </form>
                                        </a>
                                    </li>
                                </ul>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection