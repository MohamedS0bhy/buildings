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
 <li class="active"><a href="#"> تم إضافة العقار بنجاح </a></li>
      
  </ol>
</div>

</div>

  <div class="row">
  <div class="profile-content">
    <div class="alert alert-success">
      تم إضافة العقار بنجاح
    </div>
  </div>

  </div>


</div>
@endsection
