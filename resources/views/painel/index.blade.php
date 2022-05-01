@extends('layouts.app')

@section('titulo')
    Painel - LC3 Link
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('lc3.painel') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('lc3.logado') }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
