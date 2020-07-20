@extends('layouts.app')

@section('content')
    <div id="myCarousel" class="carousel carousel-head slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class=""></li>
          <li data-target="#myCarousel" data-slide-to="1" class=""></li>
          <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active" style="background-image: url('{{ asset('img/product/slide.jpeg') }}');">
            <img class="first-slide" src="{{ asset('img/product/slide.jpeg') }}"  alt="First slide">
            <div class="container">
              <div class="carousel-caption text-center text-mark text-dark rounded">
                <h1>Bienvenue dans l'univers de HB Design Sénégal.</h1>
                {{-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p> --}}
              </div>
            </div>
          </div>
          <div class="carousel-item" style="background-image: url('{{ asset('img/product/slide.jpeg') }}');">
            <img class="second-slide" src="{{ asset('img/product/slide.jpeg') }}" alt="Second slide">
            <div class="container">
              <div class="carousel-caption text-center text-mark text-dark rounded">
                <h1>Bienvenue dans l'univers de HB Design Sénégal.</h1>
                {{-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p> --}}
              </div>
            </div>
          </div>
          <div class="carousel-item" style="background-image: url('{{ asset('img/product/slide.jpeg') }}');">
            <img class="third-slide" src="{{ asset('img/product/slide.jpeg') }}" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-center text-mark text-dark rounded">
                <h1>Bienvenue dans l'univers de HB Design Sénégal.</h1>
                {{-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p> --}}
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container">
        <p><h2>Commandez vos chaussures de design unique en quelques secondes.</h2></p>
        <hr>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 pt-3 pb-3">
                    <div id="carouselExampleControls{{ $product->id }}" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($product->images as $i)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <img class="d-block w-100" src="{{ '/'.$i->image }}" alt="slide image produit">
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls{{ $product->id }}" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls{{ $product->id }}" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="div-title pt-2 pb-2 px-auto text-center">
                        <a href="{{ route('product.show',[$product]) }}" class="link-product btn btn-dark">
                            <p class="text-center mt-auto mb-1">commander</p>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <div class="bg-banner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="text-center">
                        <img src="{{asset('img/logo.jpeg')}}" height="200px" alt="logo HB" class="center-block">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 text-center">
                    <p class="text-describe text-mark">Une marque qui refléte la société sénégalaise à travers les mots wolofs ou proverbes utilisés sur les t shirts. On y ajoute aussi la classe mais faut savoir qu'avoir de la classe n’a aucun rapport avec le fait d’avoir de l’argent.</p>
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