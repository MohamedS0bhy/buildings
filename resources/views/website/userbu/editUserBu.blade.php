@extends('layouts.app')
@section('title')
تعديل العقار   {{$bu->bu_name}}
@endsection
@section('header')
{!! Html::style('cus/buall.css') !!}
@endsection
@section('content')
<div class="container">

<div class="row">
<div class="col-sm-12">
  <ol class="breadcrumb">
 <li><a href="{{url('/')}}">الرئيسية</a></li>
 <li> <a href="{{url('/user/buildingshowwaiting')}}">عقاراتي </a> </li>
 <li><a href="{{url('/user/edit/building/'.$bu->id)}}">تعديل العقار  </a></li>

  </ol>
</div>

</div>

  <div class="row">
    <div class="col-lg-8 " >
      <br>
      <br><br>
      {!!Form::model( $bu ,['url'=>'user/update/building','method'=>'POST','files'=>'true']) !!}
<input type="hidden" name="bu_id" value=" {{$bu->id}} ">
       @include('admin.bu.form',['user'=>1])

      {!! Form::close() !!}
    </div>

    @include('website.bu.pages')

  </div>


</div>
@endsection
