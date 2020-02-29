@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <make-order></make-order>
        </div>
        <div class="row justify-content-center mt-4">
            <supply-product></supply-product>
        </div>
    </div>
@endsection
