@extends('layouts.app')
@section('title')
تعديل المعلومات الشخصية للعضو
{{$user->name}}

@endsection
@section('header')
{!! Html::style('cus/buall.css') !!}
@endsection
@section('content')
<div class="container">

<div class="row">
<div class="col-sm-8">
  <ol class="breadcrumb">
 <li><a href="{{url('/')}}">الرئيسية</a></li>
    <li class="active" ><a href="#">  <b> {{$user->name}} </b> تعديل النعلومات الشخصية للعضو </a></li>
  </ol>
</div>


  <div class="col-lg-8">
    <h2 class="text-center"> تعديل البيانات </h2>
    <div class="profile-content">
          {!! Form::model($user,['route'=>['users.editsetting',$user->id],'method'=>'PATCH'])  !!}
        @include('admin.user.form',['showforuser'=>1])
              {!! Form::close() !!}
<br>
<h2 class="text-center" >   تغيير كلمة المرور </h2>

                 {!! Form::open(['url'=>'/user/changepassword','method'=>'post'])  !!}

              


                 <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" >


                     <div class="col-md-10">
                         <input id="password" placeholder="أدخل كلمة المرور القديمة"  type="password" class="form-control" name="password" required>

                         @if ($errors->has('password'))
                             <span class="help-block">
                                 <strong>{{ $errors->first('password') }}</strong>
                             </span>
                         @endif
                     </div>


                 </div>
                 <br>
                 <br>


                <div class="form-group{{ $errors->has('newpassword') ? ' has-error' : '' }}" >


                    <div class="col-md-10">
                        <input id="password" placeholder="أدخل كلمة المرور الجديدة" type="password" class="form-control" name="newpassword" required>

                        @if ($errors->has('newpassword'))
                            <span class="help-block">
                                <strong>{{ $errors->first('newpassword') }}</strong>
                            </span>
                        @endif
                    </div>


                </div>
                <br>
                <br>

                 <div class="col-md-10">
                     <button type="submit" class="btn btn-primary">
                      <i class="fa fa-pencil"></i> غير كلمة المرور
                     </button>
                 </div>

                    {!! Form::close() !!}

</div>
  </div>

@include('website.bu.pages')

</div>
</div>

@endsection
