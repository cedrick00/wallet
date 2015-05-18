@extends('tpl.main')

@section('meta-title','Login Form')

@section('css') {{-- additional css --}}
	@parent
	{{ HTML::style('assets/css/admin/style.css') }}
@show

@section('content')
	<br><br><br>
	<div class="row">
		<div class="col-sm-6 col-md-4 col-md-offset-4">
			<br><br><br>
			<div class="account-wall">
				<form class="form-signin">
					<input type="text" class="form-control" placeholder="Email" required autofocus>
					<input type="password" class="form-control" placeholder="Password" required>
					<button class="btn btn-lg btn-primary btn-block" type="submit">
					Sign in</button	
					<label class="checkbox pull-left">
					<input type="checkbox" value="remember-me">
					Remember me
					</label>
				</form>
			</div>
		 <a class="text-center new-account" href="/wallet/create">Create an account</a>
		</div>
	</div>


@section('js')
 {{ HTML::script('https://code.jquery.com/jquery-1.10.2.min.js') }}
 {{ HTML::script('assets/js/bootstrap.min.js') }}
@stop