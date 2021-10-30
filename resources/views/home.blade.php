@extends('layouts.app')
@section('content')
<div class="container">


@include('dashboard.clima')
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

                    @if (!empty(auth()->user()->id_cliente))
                        @include('cliente/home')
                    @endif

                    @if (!empty(auth()->user()->id_chofer))
                        @include('chofer/home')
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
