@extends('layouts.app')
@section('title')
الرئيسية
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
        <!--@if(Isset($array))
     @if(!empty($array))
       @foreach($array as $key=>$value)
         <li><a href="{{url('/')}}">searcnamefield() </a></li>
       @endforeach
     @endif
    @endif -->
  </ol>
</div>


  <div class="col-lg-8">
    <div class="text-center">
      <h2>عرض العقارات المتاحة في الوقت الحالي</h2>
      <p>
        اختار العقار المناسب بأفضل سعر ممكن
      </p>
    </div>
    <div class="clearfix">

    </div>
    @include('website.bu.buSharedFile',['bu'=>$buall])
    <div class="text-center">

      {{$buall->appends(Request::except('all'))->render()}}

    </div>


  </div>

@include('website.bu.pages')

</div>
</div>

@endsection
