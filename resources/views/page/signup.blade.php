@extends('master')
@section('content')
<section class="courses">			
		<!-- .courses -->
		<div class="container">
			<div class="row">		
				<div class="sign-up-outer">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="our-course">
						<form name="ajax-form" id="contact-form2" action="signup" method="post" class="contact-form">
							{!!csrf_field()!!}

							@if(count($errors)>0)
					            <div class="alert alert-danger">
					              @foreach($errors->all() as $err)
					              {{$err}}

					              @endforeach
					            </div>
				            @endif
				            @if(Session::has('success'))
				            <div class="alert alert-success">{{Session::get('success')}}</div>
				            @endif
							<div class="col-sm-12 col-md-12">
								<h2>Tạo mới tài khoản </h2>
								
							</div>
							<div class="col-sm-12 col-md-12 author">
								<input id="name" name="username" required="" placeholder="Họ Tên" type="text">
							</div>
							<div class="col-sm-12 col-md-12 email">
								<input id="email" name="email" required="" placeholder="Email" type="email">
							</div>
							
							<div class="col-sm-12 col-md-12 password">
								<input id="password" name="password" required="" placeholder="Mật Khẩu" type="password">							</div>
							<div class="col-sm-12 col-md-12 password">
							<input id="repassword" name="repassword" required="" placeholder="Nhập Lại Mật Khẩu" type="password">							</div>
						
							<div class="col-sm-12 col-md-12">
								<span>Bạn đồng ý với các <a href="#">Chính sách</a> của chúng tôi</span>
							</div>
							<div class="col-sm-12 col-md-12 text-center">
								<input name="submit" value="Đăng ký" id="send" type="submit">
							</div>
							<div class="col-sm-12 col-md-12">
								<span>Bạn đã có tài khoản? <a href="login">Đăng nhập</a></span>
							</div>
						</form>
					</div>
				</div>				
				</div>	
			</div>
		</div>
		<!-- /.courses -->
	</section>
@endsection