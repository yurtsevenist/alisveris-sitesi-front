@extends('front.layouts.master')
@section('content') 
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2 alert alert-danger text-center text-danger shadow p-3 mb-5 rounded" 
            role="alert" style="margin-top:15%">
                <h3>Bu Sayfaya Erişim Yetkiniz Bulunmamaktadır!</h3>
                <br>
                <p>Bağlantı Bilgileriniz</p>
                <hr>
                <ul>
                   <li>Ip Adresiniz :{{$data->ip}}</li>
                  <li>Bağlantı Ülkesi:{{$data->countryName}}</li>
                  <li>Bağlantı Şehri :{{$data->cityName}}</li>           
                </ul>
            </div>
        </div>
    </div>
@endsection