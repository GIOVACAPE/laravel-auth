@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Dashboard') }}
        </h2>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard utente') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Sei loggato!, qui potrai vedere tutte le statistiche del tuo portfolio') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
