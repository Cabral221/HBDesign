@extends('layouts.admin.app')

@section('content')
<div class="container pt-2 pb-2">
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if (session('danger'))
        <div class="alert alert-danger">{{ session('danger') }}</div>
    @endif
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card text-white text-center bg-success mb-3">
                <div class="card-header">
                    <a href="{{ route('commande.all') }}">Nombre de Commandes</a>
                </div>
                <div class="card-body">
                    <h1 class="card-title">{{ $all }}</h1>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card text-white text-center bg-warning mb-3">
                <div class="card-header">
                    <a href="{{ route('commande.noready')}}"> Commandes en cours</a>
                </div>
                <div class="card-body">
                    <h1 class="card-title">{{ $noready }}</h1>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card text-white text-center bg-primary mb-3">
                <div class="card-header">
                    <a href="{{ route('commande.ready') }}"> Commandes reglés</a> 
                </div>
                <div class="card-body">
                    <h1 class="card-title">{{ $ready }}</h1>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card text-white text-center bg-danger mb-3">
                <div class="card-header">
                    <a href="{{ route('commande.deleted') }}"> Commandes rejetés</a>
                </div>
                <div class="card-body">
                    <h1 class="card-title">{{ $deleted }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
