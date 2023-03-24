@extends('front.auth.layouts.master')
@section('content')
<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 col-lg-6">
					<div class="wrap">
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">Üye Ol</h3>
								</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#"
											class="social-icon d-flex align-items-center justify-content-center"><span
												class="fa fa-facebook"></span></a>
										<a href="#"
											class="social-icon d-flex align-items-center justify-content-center"><span
												class="fa fa-twitter"></span></a>
									</p>
								</div>
							</div>
							<form action="{{route('registerPost')}}" method="POST" class="signin-form">
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
								<div class="form-group mt-3">
									<input type="text" name="name" class="form-control" required>
									<label class="form-control-placeholder" for="username">Adı Soyadı</label>
								</div>
                                <div class="form-group mt-3">
									<input type="email" name="email" class="form-control" required>
									<label class="form-control-placeholder" for="username">E-Posta</label>
								</div>
								<div class="form-group">
									<input id="password-field" name="password" type="password" class="form-control" required>
									<label class="form-control-placeholder" for="password">Şifre</label>
								</div>
                                <div class="form-group">
									<input id="password-field" name="password_confirmation" type="password" class="form-control" required>
									<label class="form-control-placeholder" for="password">Şifre Tekrar</label>
								</div>
								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary rounded submit px-3">Kaydet</button>
								</div>
								<div class="form-group d-md-flex">
									
									<div class="w-50 text-md-right">
										<a href="{{url('forget')}}">Şifremi Unuttum</a>
									</div>
								</div>
							</form>
							<p class="text-center">Zaten Üyeyim! <a data-toggle="tab" href="{{url('login')}}">Giriş</a>  </p>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection