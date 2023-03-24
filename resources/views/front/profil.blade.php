@extends('front.layouts.master')
@section('content') 
    <div class="container-fluid">
        <div class="row">
            <div class="d-flex" id="wrapper" style="margin-top:85px">
                <!-- Sidebar-->
                @include('front.menu')
                
                    <!-- Page content-->
                    <div class="container-fluid">
                       <div class="col-md-6 offset-md-3 mt-4 shadow p-3 mb-5 bg-body rounded">
                           <h3 class="text-center text-primary">Üyelik Bilgilerim</h3>
                           <hr>
                           <form action="{{route('userUpdate')}}" method="POST">
                            @csrf
                            @if($errors->any())
                            <div class="alert alert-danger" role="alert">
                                @foreach ($errors->all() as $error )
                                    <li>{{$error}}</li>
                                @endforeach
                            </div>
                            @endif
                            @if(Session::has('fail'))
                            <div class="alert alert-danger" role="alert">
                                {{Session::get('fail')}}
                            </div>
                            @endif      
                           @if(Session::has('success'))
                           <div class="alert alert-success" role="alert">
                               {{Session::get('success')}}
                            </div>
                           @endif
                            <div class="mb-3">
                                <label for="name" class="form-label">Adınız Soyadınız</label>
                                <input type="name" class="form-control" id="name"  name="name" value="{{Auth::user()->name}}">                                
                              </div>
                            <div class="mb-3">
                              <label for="email" class="form-label">E-Posta Adresiniz</label>
                              <input type="email" readonly class="form-control" id="email" aria-describedby="emailHelp" name="email" value="{{Auth::user()->email}}">                              
                            </div>
                            <div class="mb-3">
                              <label for="password" class="form-label">Şifreniz</label>
                              <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Şifreniz Tekrar</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                              </div>
                              <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Güncelle</button>
                          </form>
                       </div>
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
@endsection