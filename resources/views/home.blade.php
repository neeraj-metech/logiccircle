@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Products</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product</th>
                            <th scope="col">View Users</th>
                          </tr>
                        </thead>
                        <tbody>
                         @if (!empty($products))
                         @php
                         $i=1;    
                         @endphp
                            @foreach ($products as $product)
                            <tr>
                                <th scope="row">{{$i}}</th>
                                <td>{{$product->product_name}}</td>
                                <td><a href="{{route('productusers')}}/{{$product->id}}">View</a></td>
                            </tr>
                            @php
                            $i++;    
                            @endphp
                            @endforeach
                        @else
                        <tr>
                            <th colspan="3">No product found.</th>
                        </tr>
                        @endif
                        </tbody>
                      </table>
                      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
