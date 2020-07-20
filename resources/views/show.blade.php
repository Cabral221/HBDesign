@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <div class="container">
            @if (session('success'))
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success">{{ session('success') }}</div>
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <div class="row">
                        @foreach ($product->images as $i)
                            <div class="col-xs-12 col-sm-6">
                                <img src="{{ '/'.$i->image }}" width="100%" style="margin-bottom: 2rem" alt="chaussure">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <h1>Commandez cette chaussure à votre pointure <span class="text-success"><i class="fa fa-arrow-down" aria-hidden="true"></i></span></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        {{-- <div class="row"> --}}
            <form action="{{ route('commande',$product) }}" method="POST">
                @csrf
                <div class="form-group row">
                        <label for="amount" class="col-form-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Quantité</label>
                        <div class="col-xs-10 col-sm-10 col-md-2 col-lg-2">
                            <input type="number" name="amount" id="amount" class="form-control @error('amount') is-invalid @enderror" value="{{ old('amount') ?? 1 }}" min="1">
                            @error('amount')
                                <div class="invalid-feedback">
                                    <span>{{ $errors->first('amount') }}</span>
                                </div>
                            @enderror
                        </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 col-lg-6">
                        <label for="firstname" class="sr-only">Prénom</label>
                        <input type="text" name="first_name" id="firstname" class="form-control @error('first_name') is-invalid @enderror" placeholder="Prénom *" value="{{ old('first_name') }}">
                        @error('first_name')
                            <div class="invalid-feedback">
                                <span>{{ $errors->first() }}</span>
                            </div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6 col-lg-6">
                        <label for="lastname" class="sr-only">Nom</label>
                        <input type="text" name="last_name" id="lastname" class="form-control @error('last_name') is-invalid @enderror" placeholder="Nom *" value="{{ old('last_name') }}">
                        @error('last_name')
                            <div class="invalid-feedback">
                                <span>{{ $errors->first('last_name') }}</span>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 col-lg-6">
                        <div class="input-group mb-2">
                            <label for="number" class="sr-only">Numéro de téléphone</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text">+ind</div>
                            </div>
                            <input type="number" name="number" id="number" class="form-control @error('number') is-invalid @enderror" placeholder="Numéro de téléphone (indicatif) *" value="{{ old('number') }}">
                            @error('number')
                                <div class="invalid-feedback">
                                    <span>{{ $errors->first('number') }}</span>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-md-6 col-lg-6">
                        <label for="pointer" class="sr-only">Pointure</label>
                        <input type="number" name="pointer" id="pointer" class="form-control @error('pointer') is-invalid @enderror" placeholder="Pointure *" value="{{ old('pointer') }}">
                        @error('pointer')
                            <div class="invalid-feedback">
                                <span>{{ $errors->first('pointer') }}</span>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-row text-center">
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <button type="submit"class="btn btn-primary btn-block">Commander</button>
                    </div>
                </div>

            </form>
        {{-- </div> --}}
    </div>

    <div class="bg-banner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="text-center">
                        <img src="{{asset('img/logo2.jpeg')}}" height="200px" alt="logo HB" class="center-block">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 text-center">
                    <p class="text-describe text-mark">Une marque qui refléte la société sénégalaise à travers les mots wolofs ou proverbes utilisés.</p>
                    <div class="text mt-2 mb-2">
                            <h3>Suivez-nous sur</h3>
                        <div class="text-center">
                            <a href="https://www.facebook.com/Hbdesignofficiel/" class="icon icon-facebook m-1"><i class="fa fa-facebook-square" aria-hidden="true"></i> Facebook</a>
                            <a href="https://www.instagram.com/hbdesignn__/" class="icon icon-instagram m-1"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a>
                            <a href="https://twitter.com/homme_beau_corp" class="icon icon-twitter m-1"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
                        </div>
                        
                    </div>

                    <div class="text mt-2 mb-2">
                        <h3>Contactez-nous</h3>
                        <div class="text-center">
                            <a href="https://www.facebook.com/Hbdesignofficiel/" class="icon icon-phone m-1"><i class="fa fa-phone" aria-hidden="true"></i> +221778090148</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection