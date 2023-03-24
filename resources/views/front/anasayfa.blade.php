@extends('front.layouts.master')
@section('content') 
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>New Arrivals On Sale</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Last Minute</h4>
            <h2>Grab last minute deals</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Son Eklenen Ürünler</h2>
              <a href="{{route('urunler')}}">Tüm Ürünler <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          @foreach ($urunler as $urun )
                  <div class="col-lg-4 col-md-4 all des">
                    <div class="product-item">
                      <a href="#"><img src="{{$urun->photo}}" alt=""></a>
                      <div class="down-content">
                        <a href="#"><h4>{{$urun->name}}</h4></a>
                        <h6>$ &nbsp;{{$urun->price}}</h6>
                        <p>{{Str::words($urun->info,3)}} <a href="#">devamı</a></p>
                        <ul class="stars">                          
                           @if($urun->point==0)
                           <li title="Ürün Puanı: {{$urun->point}}" style="font-size:10px">Henüz Puanı Yok </li> 
                           @else
                           @for($i=0;$i<$urun->point;$i++)
                           <li title="Ürün Puanı: {{$urun->point}}"><i class="fa fa-star"></i></li>   
                           @endfor
                           @endif
                        </ul>
                        <span>Reviews : {{$urun->review}}</span>
                      </div>
                      <div class="col-md-12 text-center">
                        @auth
                        @if($urun->number>0)
                        <a class="btn btn-outline-danger mb-2 ekle-click" href="#" urun_id={{$urun->id}} type="button">Sepete Ekle</a> 
                        @else
                        <a class="btn btn-outline-danger mb-2 disabled" href="#" urun_id={{$urun->id}} type="button">Stokta Yok</a> 
                        @endif
                        @else
                        <a class="btn btn-outline-danger mb-2 " href="{{url('login')}}"  type="button">Sepete Ekle</a> 
                        @endauth
                        <a class="btn btn-outline-info mb-2" href="{{route('urunDetay',$urun->id)}}"  type="button">İncele</a>                                               
                      </div>
                     
                    </div>
                  </div>
                  @endforeach 
        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Sixteen Clothing</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Looking for the best products?</h4>
              <p><a rel="nofollow" href="https://templatemo.com/tm-546-sixteen-clothing" target="_parent">This template</a> is free to use for your business websites. However, you have no permission to redistribute the downloadable ZIP file on any template collection website. <a rel="nofollow" href="https://templatemo.com/contact">Contact us</a> for more info.</p>
              <ul class="featured-list">
                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                <li><a href="#">Consectetur an adipisicing elit</a></li>
                <li><a href="#">It aquecorporis nulla aspernatur</a></li>
                <li><a href="#">Corporis, omnis doloremque</a></li>
                <li><a href="#">Non cum id reprehenderit</a></li>
              </ul>
              <a href="about.html" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="{{asset('fronttema')}}/assets/images/feature-image.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Creative &amp; Unique <em>Sixteen</em> Products</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                </div>
                <div class="col-md-4">
                  <a href="#" class="filled-button">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection
    @section('js')
    <script>
      $(function(){
         $('.ekle-click').click(function(){
           urun_id=$(this)[0].getAttribute('urun_id');
          // console.log(urun_id);
          $.ajax({
            type:'GET',
            url:'{{route('sepeteEkle')}}',
            data:{urun_id:urun_id},
            success:function(data){
              $('#sepetim').text(data)
            },
          })
         });
      });
    </script> 
 @endsection