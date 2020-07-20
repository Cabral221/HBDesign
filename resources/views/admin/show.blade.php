@extends('layouts.admin.app')

@section('content')
    <div class="container pt-3 pb-3">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>        
        @endif
         @if (session('danger'))
            <div class="alert alert-danger">{{ session('danger') }}</div>        
        @endif
        <div class="alert alert-info row">
            <a href="{{ route('commande.all') }}" class="btn btn-success btn-sm col-xs-6 m-2">Tous les commandes</a>
            <a href="{{ route('commande.noready') }}" class="btn btn-warning btn-sm col-xs6 m-2">Commandes en cours</a>
            <a href="{{ route('commande.ready') }}" class="btn btn-info btn-sm col-xs-6 m-2">Commandes reglées</a>
            <a href="{{ route('commande.deleted') }}" class="btn btn-danger btn-sm col-xs-6 m-2">Commandes rejetées</a>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <h4>Commandes n° 00{{ $commande->id }}</h4>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <h4>Produit : {{ $commande->product->libele }}</h4>
                        <img src="{{ '/'.$commande->product->images[0]->image }}" height="200px" alt="image produit">
                        @if ($commande->product->id < 5)
                        <img src="{{ '/'.$commande->product->images[1]->image }}" height="200px" alt="image produit">
                        @endif
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">Nom</div>
                    <div class="col-6">{{ $commande->lastname }}</div>
                </div>
                <div class="row">
                    <div class="col-6">Prénom</div>
                    <div class="col-6">{{ $commande->firstname }}</div>
                </div>
                <div class="row">
                    <div class="col-6">Téléphone</div>
                    <div class="col-6">{{ $commande->number }}</div>
                </div>
                <div class="row">
                    <div class="col-6">Pointure</div>
                    <div class="col-6">{{ $commande->pointer }}</div>
                </div>
                <div class="row">
                    <div class="col-6">Quantité</div>
                    <div class="col-6">{{ $commande->amount }}</div>
                </div>
                <div class="row">
                    <div class="col-6">Actions</div>
                    <div class="col-6">
                        @if (!$commande->active)
                            <span class="badge badge-pill badge-dark">Commande déja rejeté</span>
                            
                        @else
                            @if ($commande->stat == true)
                                <span class="badge badge-pill badge-dark">Commande déja validée</span>
                            @else
                            <a href="{{ route('admin.product.handleready',$commande->id) }}" class="btn btn-sm btn-success">Valider</a>
                            @endif
                            <a href="{{ route('admin.product.handledeleted',$commande->id) }}" class="btn btn-sm btn-danger">Rejeter</a>
                        @endif
                    </div>    
                </div>
            </div>
        </div>
    </div>
@endsection