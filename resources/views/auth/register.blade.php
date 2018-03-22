@extends('layouts.app')
@section('title')
صفحة تسجيل العضوية
@endsection
@section('content')
<div class="container">
  <div class="contact_bottom">
    <hr>
  <h3>   تسجيل عضوية جديدة  </h3>
  <hr>
  <form class="form-horizontal" method="POST" action="{{url('/register')}}">
      {{ csrf_field() }}

      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

          <div class="col-md-offset-1  col-md-6">
              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

              @if ($errors->has('name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
          </div>
          <label for="name" class="col-md-2 control-label"> الاسم </label>

      </div>

      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

          <div class="col-md-offset-1  col-md-6">
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
          </div>
          <label for="email" class="col-md-2 control-label"> البريد الإلكتروني </label>

      </div>

      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">


          <div class="col-md-offset-1  col-md-6">
              <input id="password" type="password" class="form-control" name="password" required>

              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
          </div>
<label for="password" class="col-md-2 control-label"> الرقم السري</label>
      </div>

      <div class="form-group">

          <div class="col-md-offset-1  col-md-6">
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
          </div>
          <label for="password-confirm" class="col-md-2 control-label"> تأكيد الرقم السري </label>



      </div>


<br>
<div class="form-group">
  <div class="col-sm-6">
      <button type="submit" class="btn btn-primary" style="width:300px" >
       تنفيذ
      </button>

    </div>
</div>

  </form>
 </div>
</div>
@endsection
