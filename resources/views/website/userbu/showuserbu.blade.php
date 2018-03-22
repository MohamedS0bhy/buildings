@extends('layouts.app')
@section('title')
عقارت الستخدم
||{{$user->name}}
@endsection
@section('header')
{!! Html::style('cus/buall.css') !!}
@endsection
@section('content')
<div class="container">


  <!--
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
-->
<div class="row">
<div class="col-sm-8">
  <ol class="breadcrumb">
 <li><a href="{{url('/')}}">الرئيسية</a></li>
<li><a href="{{url('/showallBuildings')}}">كل العقارات</a></li>
<li><a href="#"> عقاراتي </a></li>
  </ol>
</div>


  <div class="col-lg-8">
    @include('website.bu.buSharedFile',['bu'=>$bu])
    <div class="text-center">

      {{$bu->appends(Request::except('all'))->render()}}

    </div>


  </div>

@include('website.bu.pages')

</div>
</div>

@endsection
