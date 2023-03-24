@extends('front.auth.layouts.master')
@section('content')    
<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4" style="font-family:Arial, Helvetica, sans-serif !important">Üye Giriş</h3>
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
							<form action="{{route('loginPost')}}" method="POST" class="signin-form">
                                @csrf
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
								<div class="form-group mt-5">
									<input type="email" name="email" class="form-control" required>
									<label class="form-control-placeholder" for="username">Kullanıcı E-Posta</label>
								</div>
								<div class="form-group mt-5">
									<input id="password-field" type="password" name="password" class="form-control" required>
									<label class="form-control-placeholder" for="password">Şifre</label>
								</div>
								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary rounded submit px-3">Giriş</button>
								</div>
								<div class="form-group d-md-flex">
									<div class="w-50 text-left">
										<label class="checkbox-wrap checkbox-primary mb-0">Beni Hatırla
											<input type="checkbox" checked>
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="{{url('forget')}}">Şifremi Unuttum</a>
									</div>
								</div>
							</form>
							<p class="text-center">Üye Değilmisiniz? <a data-toggle="tab" href="{{url('register')}}">Üye Ol</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection