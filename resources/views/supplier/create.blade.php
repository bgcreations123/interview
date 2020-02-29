@extends('layouts.app')

@section('content')
	<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mb-2">
                <div class="card">
                    <div class="card-header text-center">
                        Add New Supplier
                    </div>

                    <div class="card-body">
                        <form method="post" action="{{ route('supplier.store') }}">
                            {{ csrf_field() }}
                            <div class="form-group col-md-6">
                                <label for="sname">Supplier Name</label>
                                <input type="text" class="form-control" id="sname" name="sname" placeholder="Supplier Name" value="{{old('sname')}}" required="">
                                @error('sname')
                                    <div class="error text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Add Supplier</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection