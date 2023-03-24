<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Sixteen Clothing HTML Template</title>
 
    <!-- Bootstrap core CSS -->
    <link href="{{asset('fronttema')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('fronttema')}}/assets/css/fontawesome.css">
    <link rel="stylesheet" href="{{asset('fronttema')}}/assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="{{asset('fronttema')}}/assets/css/owl.css">
    @yield('css')
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('anasayfa')}}"><h2>Sixteen <em>Clothing</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item @if(Request::segment(1)=="") active @endif">
                <a class="nav-link" href="{{route('anasayfa')}}">Anasayfa
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item @if(Request::segment(1)=="urunler") active @endif">
                <a class="nav-link" href="{{url('urunler')}}">Ürünlerimiz</a>
              </li>
              <li class="nav-item @if(Request::segment(1)=="hakkimizda") active @endif">
                <a class="nav-link" href="{{url('hakkimizda')}}">Hakkımızda</a>
              </li>
              <li class="nav-item @if(Request::segment(1)=="iletisim") active @endif">
                <a class="nav-link" href="{{url('iletisim')}}">İletişim</a>
              </li>
              <li class="nav-item @if(Request::segment(1)=="sepet") active @endif">
                <a class="nav-link" href="{{route('sepet')}}" ><i class="fa fa-shopping-cart"></i>&nbsp; Sepetim(<b id="sepetim">{{$sepet}}</b>)</a>
              </li>
              @auth         
              <li class="nav-item @if(Request::segment(1)=="profil") active @endif">
                <a class="nav-link" href="{{route('profil')}}"><i class="fa fa-user"></i>&nbsp; {{Str::Words(Auth::user()->name,2)}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" title="Oturumu Kapat" href="{{route('logout')}}"><i class="fa fa-sign-out"></i></a>
              </li>
              @else
              <li class="nav-item ">
                <a class="nav-link" href="{{url('login')}}"><i class="fa fa-user"></i>&nbsp; Üye İşlemleri</a>
              </li>
              @endauth
              
            </ul>

          </div>
        </div>
      </nav>
    </header>