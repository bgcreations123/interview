@extends('layouts.app')

@section('content')
	<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mb-2">
                <div class="card">
                    <div class="card-header text-center">
                        Update Supplier
                        <a href="{{ URL::previous() }}" class="btn btn-primary float-right">Back</a>
                    </div>

                    {{-- {{dd($supplier)}} --}}

                    <div class="card-body">
                        <form method="post" action="{{ route('supplier.update', ['supplier' => $supplier->id]) }}">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <div class="form-group col-md-6">
                                <label for="sname">Supplier Name</label>
                                <input type="text" class="form-control" id="sname" name="sname" placeholder="Supplier Name" value="{{old('sname', $supplier->name)}}" required="">
                                @error('sname')
                                    <div class="error text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Update Supplier</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection