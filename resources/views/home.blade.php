@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <table class="table table-responsive">
                        <tr>
                            <th>Username</th>
                            <th>:</th>
                            <td>{{$data->username}}</td>
                        </tr>
                         <tr>
                            <th>Name</th>
                            <th>:</th>
                            <td>{{$data->name}}</td>
                        </tr>
                         <tr>
                            <th>Email</th>
                            <th>:</th>
                            <td>{{$data->email}}</td>
                        </tr>
                         <tr>
                            <th>Cretaed At</th>
                            <th>:</th>
                            <td>{{$data->created_at}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
