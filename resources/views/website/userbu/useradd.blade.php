@extends('layouts.app')
@section('title')
إضافة عقار
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
 <li><a href="{{url('/user/create/building')}}"> إضافة عقار </a></li>

  </ol>
</div>

</div>

  <div class="row">
    <div class="col-lg-8 " >
      <br>
      <br><br>
      {!!Form::open(['url'=>'user/create/building','method'=>'post','files'=>'true']) !!}
       @include('admin.bu.form',['user'=>1])

      {!! Form::close() !!}
    </div>

    @include('website.bu.pages')

  </div>


</div>
@endsection
