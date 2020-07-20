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
        <div class="row justify-content-center">
            <div class="col-12 alert alert-info text-center"><h2>Commandes en cours ({{ $commandes->total() }})</h2></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="table-responsive-sm table-responsive-md">
                    <table class="table">
                        <thead class="thead-dark">
                            <th>#</th>
                            <th>Produit</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Téléphone</th>
                            <th>Pointure</th>
                            <th>Quantité</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($commandes as $c)
                                <tr>
                                    <td>{{ $c->id }}</td>
                                    <td>
                                        {{ $c->product->libele }}
                                        <br>
                                        <img src="{{ asset($c->product->images[0]->image) }}" alt="image produit" class="mr-3" height="39px">
                                        @if ($c->product->id < 5)
                                            <img src="{{ asset($c->product->images[1]->image) }}" alt="image produit" height="39px">
                                        @endif
                                    </td>
                                    <td>{{ $c->lastname }}</td>
                                    <td>{{ $c->firstname }}</td>
                                    <td>{{ $c->number }}</td>
                                    <td>{{ $c->pointer }}</td>
                                    <td>{{ $c->amount }}</td>
                                    <td>
                                        <div><a href="{{ route('admin.product.show', $c->id) }}">Etudier</a></div>
                                        <div><a href="{{ route('admin.product.handledeleted', $c->id) }}"></a> Rejeter</div>
                                        {{-- <div>Supprimer</div> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $commandes->links() }}
            </div>
        </div>
    </div>
@endsection