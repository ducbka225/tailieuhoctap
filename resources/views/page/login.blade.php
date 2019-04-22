@extends('master')
@section('content')
<section class="courses">			
		<!-- .courses -->
		<div class="container">
			<div class="row">		
				<div class="sign-up-outer">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="our-course">
						<form name="ajax-form" id="contact-form2" action="login" method="post" class="contact-form">
							{!!csrf_field()!!}
							@if(count($errors)>0)
					            <div class="alert alert-danger">
					              @foreach($errors->all() as $err)
					              {{$err}}

					              @endforeach
					            </div>
				            @endif

				            @if(Session::has('message'))
				                <div class="alert alert-danger">{{Session::get('message')}}</div>
				            @endif

							<div class="col-sm-12 col-md-12">
								<h2>Đăng Nhập</h2>
								
							</div>

							<input id="role" name="role" value="0" type="hidden">
							<div class="col-sm-12 col-md-12 author">
								<input id="email" name="email" required="" placeholder="Email" type="email">
							</div>
							<div class="col-sm-12 col-md-12 email">
								<input id="password" name="password" required="" placeholder="Mật Khẩu" type="password">
							</div>							
							<div class="col-sm-9 col-md-7">
								<a href="#">Quên Mật Khẩu?</a>
							</div>
							<div class="col-sm-6 col-md-7">
								<label class="checkbox-inline">
									<input type="checkbox" value="">Lưu tài khoản
								</label>
							</div>
							<div class="col-sm-12 col-md-12 text-center">
								<input name="submit" value="Đăng Nhập" id="send" type="submit">
							</div>
							<div class="col-sm-12 col-md-12">
								<span>Bạn chưa có tài khoản? <a href="signup">Tạo tài khoản</a></span>
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