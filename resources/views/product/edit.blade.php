@extends('layouts.app')

@section('content')
	<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mb-2">
                <div class="card">
                    <div class="card-header text-center">
                        Update Product
                        <a href="{{ URL::previous() }}" class="btn btn-primary float-right">Back</a>
                    </div>

                    {{-- {{dd($product)}} --}}

                    <div class="card-body">
                        <form method="post" action="{{ route('product.update', ['product' => $product->id]) }}">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="pname">Product Name</label>
                                    <input type="text" class="form-control" id="pname" name="pname" placeholder="Product Name" value="{{old('pname', $product->name)}}" required="">
                                    @error('pname')
                                        <div class="error text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="quantity">Quantity</label>
                                    <input class="form-control" type="number" id="quantity" name="quantity" min="1" max="100" placeholder="Quantity" value="{{old('quantity', $product->quantity)}}" required="">
                                    @error('quantity')
                                        <div class="error text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="5" required="">{{old('description', $product->description)}}</textarea>
                                @error('description')
                                    <div class="error text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Update Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection