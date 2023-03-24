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
									<h3 class="mb-4">Forget</h3>
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
							<form action="#" class="signin-form">
								<div class="form-group mt-3">
									<input type="text" class="form-control" required>
									<label class="form-control-placeholder" for="username">Email</label>
								</div>
								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary rounded submit px-3">
                                        Send Message
									</button>
								</div>
								<div class="form-group d-md-flex">
									<div class="w-50 text-left">

									</div>
									<div class="w-50 text-md-right">
										<a href="#">Forgot Password</a>
									</div>
								</div>
							</form>
							<p class="text-center">Not a member? <a data-toggle="tab" href="register.html">Sign-Up</a> / <a data-toggle="tab" href="register.html">Sign-İn</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>  
@endsection