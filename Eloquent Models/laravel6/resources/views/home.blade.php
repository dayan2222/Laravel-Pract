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

                    {{-- {{ __('You are logged in!,' Auth::user()->name) }} --}}
                    You are logged in, {{(Auth::user()->name) }}
                    {{-- Or You can Write it Like this --}}
                    {{-- You are logged in, {{(Auth()->user()->name) }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
