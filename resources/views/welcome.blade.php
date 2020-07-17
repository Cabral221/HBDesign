@extends('layouts.app')

@section('content')
    <div id="myCarousel" class="carousel carousel-head slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class=""></li>
          <li data-target="#myCarousel" data-slide-to="1" class=""></li>
          <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active" style="background-image: url(http://placehold.it/1300x512);">
            <img class="first-slide" src="{{ 'https://picsum.photos/1300/512' }}"  alt="First slide">
            <div class="container">
              <div class="carousel-caption text-center text-mark text-dark rounded">
                <h1>Bienvenue dans l'univers de HB Design Sénégal.</h1>
                {{-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p> --}}
              </div>
            </div>
          </div>
          <div class="carousel-item" style="background-image: url(http://placehold.it/1300x512);">
            <img class="second-slide" src="{{ 'https://picsum.photos/1300/512' }}" alt="Second slide">
            <div class="container">
              <div class="carousel-caption text-center text-mark text-dark rounded">
                <h1>Bienvenue dans l'univers de HB Design Sénégal.</h1>
                {{-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p> --}}
              </div>
            </div>
          </div>
          <div class="carousel-item" style="background-image: url(http://placehold.it/1300x512);">
            <img class="third-slide" src="{{ 'https://picsum.photos/1300/512' }}" alt="Third slide">
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
        <p><h2>Faites-vous plaisir en commandant vos produits en quelques secondes.</h2></p>
        <hr>
        <div class="row">
            {{-- <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <a href="#" class=" link-product">
                    <div class="card-product d-flex align-items-end flex-column bd-highlight">
                        <div class="cf">
                            <img class="bottom" src="https://picsum.photos/250/290" />
                            <img class="top" src="https://picsum.photos/249/289" />
                        </div>
                        <div class="text-center mt-auto align-self-center">
                            <h3 class="text-center product-title">Mon titre de</h3>
                        </div>
                    </div>
                </a>
            </div> --}}
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 pt-3 pb-3">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{'https://picsum.photos/250/290'}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{'https://picsum.photos/249/289'}}" alt="Second slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="div-title pt-2 pb-2 px-auto text-center">
                    <div class="header">
                        <h4>Chaussure Noir cuir</h4>
                    </div>
                    <a href="{{ route('product.show') }}" class="link-product btn btn-dark">
                        <p class="text-center mt-auto mb-1">commander</p>
                    </a>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 pt-3 pb-3">
                <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{'https://picsum.photos/250/290'}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{'https://picsum.photos/249/289'}}" alt="Second slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="div-title pt-2 pb-2 px-auto text-center">
                    <div class="header">
                        <h4>Chaussure Blanc cuir</h4>
                    </div>
                    <a href="{{ route('product.show') }}" class="link-product btn btn-dark">
                        <p class="text-center mt-auto mb-1">commander</p>
                    </a>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 pt-3 pb-3">
                <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{'https://picsum.photos/250/290'}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{'https://picsum.photos/249/289'}}" alt="Second slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="div-title pt-2 pb-2 px-auto text-center">
                    <div class="header">
                        <h4>Chaussure Blue cuir</h4>
                    </div>
                    <a href="{{ route('product.show') }}" class="link-product btn btn-dark">
                        <p class="text-center mt-auto mb-1">commander</p>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-banner text-mark">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="text-center">
                        <img src="{{asset('img/logo.jpeg')}}" height="200px" alt="logo HB" class="center-block">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 text-center">
                    <p><h1>Faites-vous plaisir en commandant vos produits en quelques secondes.</h1></p>
                </div>
            </div>
        </div>
    </div>
@endsection