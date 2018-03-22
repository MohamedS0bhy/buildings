@extends('layouts.app')
@section('title')
العقر {{$buinfo->name}}
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
 <li><a href="{{url('/showallBuildings')}}">  كل العقارات </a></li>
     <li><a  href="{{url('/SingleBuilding/'.$buinfo->id)}}">  {{$buinfo->bu_name}} </a></li>
  </ol>
</div>


  <div class="col-lg-8">


    <div class="profile--content">
      <h1 class="text-center"> {{$buinfo->bu_name}} </h1>
      <img src="{{ Request::root().'/website/bu_images/'.$buinfo->image}}" class="img-responsive">
<br>
    <div class="btn-group text-center">
@if($buinfo->bu_type==0)
      <a class="btn btn-default"  href="{{url('/type/0')}}">
نوع العقار
:شقة
  </a>

@elseif($buinfo->bu_type==1)
<a class="btn btn-default"  href="{{url('/type/1')}}">
نوع العقار
:فيلا
</a>
@else($buinfo->bu_type==2)
<a class="btn btn-default" href="{{url('/type/2')}}">
نوع العقار
:شاليه
</a>
@endif







        @if($buinfo->bu_rent==0)
      <a class="btn btn-default" href="{{url('forBuy')}}" >
      نوع العملية
    :  تمليك
        </a>
      @else
      <a class="btn btn-default" href="{{url('forRent')}}">
      نوع العملية
      : إيجار
        </a>
      @endif

      <a  class="btn btn-default"href="">
عدد الغرف
:{{$buinfo->rooms}}
      </a>
      <a  class="btn btn-default" href="">
المساحة
:{{$buinfo->bu_squar}}
      </a>
      <a  class="btn btn-default" href="">
السعر
:{{$buinfo->bu_price}}
      </a>
<hr>
<br>
<br>
<span> {{$buinfo->bu_larg_dis}} </span>


<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a7c668e247fbf8c"></script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<br><br><br>
<div class="addthis_inline_share_toolbox"></div>
<br><br>
<h1> موقع العقار علي خرائط جوجل </h1>

<div id="googleMap" style="width:100%;height:400px;"></div>


    </div>

    </div>

<div class="profile-content">
@include('website.bu.buSharedFile',['bu'=>$same_rent])
@include('website.bu.buSharedFile',['bu'=>$same_type])
</div>




  </div>

@include('website.bu.pages')

</div>
</div>




@endsection
@section('footer')
<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng({{$buinfo->bu_latitude}},{{$buinfo->bu_langitude}}),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIF9QtCNtCm8cMH2onGsB5LHkLY8l-hJA&callback=myMap"></script>

@endsection
