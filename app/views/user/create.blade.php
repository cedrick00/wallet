@extends('tpl.main')

@section('meta-title','Login Form')

@section('css') {{-- additional css --}}
	@parent
	{{ HTML::style('assets/css/admin/style.css') }}
@show

@section('content')
	
<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
      <br><br><br><br><br><br><br><br>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Please sign up</h3>
        </div>
        <div class="panel-body">
            @if (Session::has('message'))
          <div class="alert alert-info">{{ Session::get('message') }}</div>
      @endif
            {{ HTML::ul($errors->all()) }}
      		{{ Form::open(array('url' => '/wallet/create')) }}
               <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                      <div class="form-group">
                      {{ Form::text('first_name', Input::old('first_name'), array('class' => 'form-control login input-sm','placeholder' => 'First Name')) }}
                      </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                      <div class="form-group">
                      {{ Form::text('last_name', Input::old('last_name'), array('class' => 'form-control login input-sm','placeholder' => 'Last Name')) }} 
                      </div>
                  </div>
              </div>

                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                     {{ Form::email('email', Input::old('email'), array('class' => 'form-control login input-sm','placeholder' => 'Email Address')) }}          
                  </div>

                  <div class="col-xs-6 col-sm-6 col-md-6">
                      <div class="form-group">
                          {{ Form::password('password', array ('class' => 'form-control login input-sm', 'placeholder' => 'Password')) }}
                      </div>
                   </div>
                 </div>

   

                <input type="submit" value="Register" class="btn btn-info btn-block">
              {{ Form::close() }}
               
        </div>
      </div>
   </div>
</div>


@section('js')
 {{ HTML::script('https://code.jquery.com/jquery-1.10.2.min.js') }}
 {{ HTML::script('assets/js/bootstrap.min.js') }}
@stop