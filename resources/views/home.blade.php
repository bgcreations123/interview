@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-2">
            <div class="card">
                <div class="card-header text-center">
                    {{-- Dashboard --}}
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row justify-content-center">
                        <div class="col-md-4 text-center">
                            <a class="btn btn-primary" href="{{ route('product.index') }}">Products</a>
                        </div>
                        <div class="col-md-4 text-center">
                            <a class="btn btn-primary" href="{{ route('supplier.index') }}">Suppliers</a>
                        </div>
                        <div class="col-md-4 text-center">
                            <a class="btn btn-primary" href="{{ route('order.index') }}">Orders</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection
