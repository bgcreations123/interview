@extends('layouts.app')

@section('content')
	<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mb-2">
                <div class="card">
                    <div class="card-header text-center">
                        Product List
                        <a class="btn btn-secondary float-right" href="{{ route('product.create') }}">+</a>
                    </div>

                    <div class="card-body">
                        @if(empty($products))
                            No products in the sys.
                        @else
                            @foreach($products as $product)
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <a href="{{ route('product.show', ['product' => $product->id]) }}">{{ $product->name }}</a>
                                        {{-- <a href="{{ route('product.edit', ['product' => $product->id]) }}">
                                            Edit
                                        </a> --}}
                                        <a class="btn btn-primary float-right" href="javascript:void(0);" onclick="$(this).find('form').submit();" >
                                            <form action="{{ route('product.destroy', ['product' => $product->id]) }}" method="post">
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