@extends('layouts.app')
@section('title')
  {{$buinfo->bu_name}}
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
     <li><a href="{{url('/showallBuildings')}}">  كل العقارات </a></li>
     <li><a  href="{{url('/SingleBuilding/'.$buinfo->id)}}">  {{$messageTitle }} </a></li>
  </ol>
</div>


  <div class="col-lg-8">
    <div class="clearfix">

    </div>

    <div class="text-center">
<div class="alert alert-danger">
{{$messageContent}}

</div>
    </div>


  </div>

@include('website.bu.pages')

</div>
</div>

@endsection
