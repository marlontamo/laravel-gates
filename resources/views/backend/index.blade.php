@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">You are logged in! Admin Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    @can('view-dash')
                    <h1>Welcome Back <br/> {{ Auth::user()->name }}</h1>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
