
@extends('layouts.navbar')
@section('content')
<div class="container" style="background-color:pink;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <h1>this is user homepage</h1>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are notifiicaton in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
