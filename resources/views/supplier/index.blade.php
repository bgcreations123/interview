@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mb-2">
                <div class="card">
                    <div class="card-header text-center">
                        Supplier List
                        <a class="btn btn-secondary float-right" href="{{ route('supplier.create') }}">+</a>
                    </div>

                    <div class="card-body">
                        @if(empty($suppliers))
                            No suppliers in the sys.
                        @else
                            @foreach($suppliers as $supplier)
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <a href="{{ route('supplier.show', ['supplier' => $supplier->id]) }}">{{ $supplier->name }}</a>
                                        {{-- <a href="{{ route('supplier.edit', ['supplier' => $supplier->id]) }}">
                                            Edit
                                        </a> --}}
                                        <a class="btn btn-primary float-right" href="javascript:void(0);" onclick="$(this).find('form').submit();" >
                                            <form action="{{ route('supplier.destroy', ['supplier' => $supplier->id]) }}" method="post">
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