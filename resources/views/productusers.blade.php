@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Products User
                </div>

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
                            <th scope="col">User Name</th>
                          </tr>
                        </thead>
                        <tbody>
                         @if (!empty($users))
                         @php
                         $i=1;    
                         @endphp
                            @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{$i}}</th>
                                <td>{{$user['name']}}</td>
                            </tr>
                            @php
                            $i++;    
                            @endphp
                            @endforeach
                        @else
                        <tr>
                            <th colspan="3">No user found.</th>
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
