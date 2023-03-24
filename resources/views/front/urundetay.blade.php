@extends('front.layouts.master')
@section('content') 
 <!-- Page Content -->
 <div class="page-heading products-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>new arrivals</h4>
            <h2>sixteen products</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  <div class="products">
    <div class="container">
      <div class="row">                         
                  <div class="col-lg-10 col-md-10 offset-lg-1  offset-md-1" style="margin-top:1vh!important">
                    <div class="product-item">
                      <a href="#"><img src="{{$urun->photo}}" alt=""></a>
                      <div class="down-content">
                        <a href="#"><h4>{{$urun->name}}</h4></a>
                        <h6>$ &nbsp;{{$urun->price}}</h6>
                        <p>{{$urun->info}} </p>
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
                        <a class="btn btn-outline-info mb-2" href="{{route('urunler')}}"  type="button">Geri Dön</a>                                               
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