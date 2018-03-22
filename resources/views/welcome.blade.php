@extends('layouts.app')
@section('title')
أهلا بك زائرنا الكريم
@endsection
@section('header')

	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="{{Request::root()}}/main/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="{{Request::root()}}/main/css/style.css"> <!-- Resource style -->


@endsection
@section('content')
<div class="banner text-center">
  <div class="container">
    <div class="banner-info">
      <h1>مرحبا بك في أكبر شركة عقارات في الشرق الأوسط</h1>
      <p>
        <div class="profile-usermenu">
    {{Form::open(['url'=>'search','method'=>'GET'])}}
					<ul class="nav">

            <div class="row">
              <div class="col-sm-3  col-sm-offset-1">
                <li>
                {!! Form::text('bu_price_from',null,['class'=>'form-control text-center','placeholder'=>'  سعر العقار من'])  !!}
                </li>
              </div>
              <div class="col-sm-3 col-sm-offset-1">
                <li>
                {!! Form::text('bu_price_to',null,['class'=>'form-control text-center','placeholder'=>'سعر العقار إلي'])  !!}
                </li>
              </div>
              <div class="col-sm-3">
                <li>
                {!! Form::select('rooms',['0'=>'1','1'=>'2','2'=>'3','3'=>'4','4'=>'5','5'=>'6','6'=>'7','7'=>'8','8'=>'9','9'=>'10','10'=>'11','11'=>'12','12'=>'13','13'=>'14','14'=>'15','15'=>'16'],null,['class'=>'form-control text-center','placeholder'=>'عدد الغرف'])  !!}
                </li>
              </div>



            </div>
            <br>
            <div class="row">
              <div class="col-sm-3 col-sm-offset-1 ">
                <li>
                {!! Form::select('bu_type',['0'=>'شقة','1'=>'فيلا','2'=>'شاليه'],null,['class'=>'form-control text-center','placeholder'=>'نوع العقار'])  !!}
                </li>
              </div>
              <div class="col-sm-3 col-sm-offset-1">

                  <li>
                  {!! Form::select('bu_rent',['0'=>'تمليك','1'=>'إيجار'],null,['class'=>'form-control text-center','placeholder'=>'نوع العملية'])  !!}
                  </li>
              </div>
              <div class="col-sm-3 ">

                  <li>
                  {!! Form::text('bu_squar',null,['class'=>'form-control text-center','placeholder'=>'مساحة العقار'])  !!}
                  </li>
              </div>
              <br>


            </div>
            <br>
          <div class="col-sm-offset-5 col-sm-6 ">
            <li class="text-center" >
          <input type="submit" name="submit" value="ابحث" class="pull-left btn btn-primary" style="width:150px; margin-left: 49px;">
            </li>
          </div>
					</ul>
          {!! Form::close() !!}
				</div>
				<!-- END MENU -->
      <a class="banner_btn" style="width:150px; margin-left:75px;" href="{{url('/user/create/building')}}"> أضف عقار  مجانا </a> </div>
       </p>

  </div>

</div>
@endsection







<script>

function  initMap()
{
// map Options

var options=
{
zoom:6,
center:{lat:30.0444,lng:31.2357}

}

// new map
var map=new
google.maps.Map(document.getElementById('map'),options);

// add marker
//
// var marker =new google.maps.Marker(
//   {
//   position:{lat:42.3601,lng:-71.0589}  ,
//   map:map
//   });

// adding markers dynamically using function which is called add marker
addMarker({lat:42.3601,lng:-71.0589});

function addMarker(coords)
{
var marker =new google.maps.Marker(
{
position:coords ,
map:map
});

}





}



	</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIF9QtCNtCm8cMH2onGsB5LHkLY8l-hJA&callback=initMap"></script>
@section('footer')
<script  src="{{Request::root()}}./main/js/jquery-2.1.1.js"  type="text/javascript"></script>
<script  src="{{Request::root()}}./main/js/modernizr.js"  type="text/javascript"></script>

<script  src="{{Request::root()}}./main/js/velocity.min.js"  type="text/javascript"></script>
<script  src="{{Request::root()}}./main/js/main.js"  type="text/javascript"></script>
@endsection
