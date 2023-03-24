@extends('front.layouts.master')
@section('content') 
    <div class="container-fluid">
        <div class="row">
            <div class="d-flex" id="wrapper" style="margin-top:85px">
                <!-- Sidebar-->
                @include('front.menu')
              
                    <!-- Page content-->
                    <div class="container-fluid">
                       @if($sepetim->count()>0)
                       <div class="col-md-8 offset-md-2 mt-4 shadow p-3 mb-5 bg-body rounded">
                        <h3 class="text-center text-primary sepetbaslik">Sepetim</h3>
                        <hr>
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Ürün Resmi</th>
                                <th scope="col">Ürün Kodu</th>
                                <th scope="col">Ürün Adı</th>
                                <th scope="col">Birim Fiyat</th>
                                <th scope="col">Adet</th>
                                <th scope="col">Toplam Fiyat</th>
                                <th scope="col">İşlemler</th>                                    
                              </tr>
                            </thead>
                            <tbody>
                              @php($i=0) 
                              @php($toplam=0)                              
                              @foreach ($sepetim as $item)
                              @php($i++)
                              <tr>
                                <th scope="row">{{$i}}</th>
                               <td><a href="{{route('urunDetay',$item->id)}}"><img src="{{$item->getUrun->photo}}" width="50" alt=""></a></td>
                               <td>{{$item->urun_id}}</td>
                                <td>{{$item->getUrun->name}}</td>
                                <td>{{$item->fiyat}}$</td>
                                <td><input type="number" class="form-control adet" name="adet" id="adet" uid={{$item->id}} value="{{$item->adet}}" min="1" max="10"></td>
                                <td>{{round($item->adet*$item->fiyat,2)}}</td>
                                <td>
                                  {{-- <a class="btn btn-primary btn-sm" href=""><i class="fa fa-plus" aria-hidden="true"></i></a> --}}
                                  <a class="btn btn-danger btn-sm" href="{{route('urunSil',$item->id)}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                </td>
                                @php($toplam=$toplam+($item->fiyat*$item->adet))
                              </tr> 
                              @endforeach                         
                              
                            </tbody>

                          </table>  
                          <div class="row">
                            <div class="col-md-9">

                            </div>
                            <div class="col-md-3">
                              <p class="text-left"><b><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Toplam:{{round($toplam-$toplam*0.18,2)}} $</b> </p>
                              <p class="text-left"><b><i class="fa fa-check-square" aria-hidden="true"></i>&nbsp;Kdv(%8):{{round($toplam*0.18,2)}} $</b> </p>
                              <p class="text-left">  <b ><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp; Sepet Toplamı:{{round($toplam,2)}} $</b>  </p>                                  
                            </div>
                          </div>
                     
                          <div class="row">
                            <div class="col-md-6">
                              <button class="btn btn-outline-primary btn-block" type="button"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Sepeti Onayla</button>

                            </div>
                            <div class="col-md-6">
                              <a class="btn btn-outline-danger btn-block" type="button" href="{{route('sepetSil')}}"><i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;Sepeti Boşalt</a>
                            </div>
                          </div>
                        </div>
                       </div>
                       @else
                       <div class="col-md-8 offset-md-2 mt-4 shadow p-3 mb-5 bg-body rounded">
                        <h3 class="text-center text-primary sepetbaslik">Sepetim</h3>
                        <hr>
                          <p class="text-center fs-5 fw-bold text-danger"><b>Sepetinizde Ürün Bulunmamaktadır!</b></p>
                       </div>
                       @endif
                       </div>       
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('css')
<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
<!-- Core theme CSS (includes Bootstrap)-->
<link href="{{asset('sidebar')}}/css/styles.css" rel="stylesheet" />
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{asset('sidebar')}}/js/scripts.js"></script>
<script>
  $(function(){
     $('.adet').click(function(){
       uid=$(this)[0].getAttribute('uid');
       adet=$("#adet").val();   
      $.ajax({
        type:'GET',
        url:'{{route('adetGuncelle')}}',
        data:{
          uid:uid,
          adet:adet
        },
        success:function(data){         
          window.location.href="/sepet";
        },
      })
     });
  });
</script>
@endsection