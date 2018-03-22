@extends('admin.layouts.layout')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        لوحة التحكم الرئيسية

      </h1>

    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-envelope"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"> الرسائل </span>
              <span class="info-box-number"> {{$contactUsCount}} </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-building"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"> العقارات الغير مفعلة  </span>
              <span class="info-box-number">{{ $buCountWaiting }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-building"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">  العقارات المفعلة </span>
              <span class="info-box-number"> {{$buCountActive}} </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">  عدد الأعضاء </span>
              <span class="info-box-number"> {{$userscount}} </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
         <div class="col-md-12">
           <div class="box">
             <div class="box-header with-border">
               <h3 class="box-title pull-left" > حصر للعقارات المضافة للموقع </h3>

               <div class="box-tools" style="left:10px">

                 <div class="btn-group">
                   <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                     <i class="fa fa-wrench"></i></button>
                   <ul class="dropdown-menu" role="menu">
                     <li><a href="#">Action</a></li>
                     <li><a href="#">Another action</a></li>
                     <li><a href="#">Something else here</a></li>
                     <li class="divider"></li>
                     <li><a href="#">Separated link</a></li>
                   </ul>
                 </div>
                 <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                 <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                 </button>
               </div>
             </div>
             <!-- /.box-header -->
             <div class="box-body">
               <div class="row">
                 <div class="col-md-12">
                   <p class="text-center">
                     <strong> شكل بياني يوضح إضافة العقارات طوال العام </strong>
                   </p>

                   <div class="chart">
                     <!-- Sales Chart Canvas -->
                     <canvas id="salesChart" style="height: 180px;"></canvas>
                   </div>
                   <!-- /.chart-responsive -->
                 </div>
                 <!-- /.col -->

                 <!-- /.col -->
               </div>
               <!-- /.row -->
             </div>
             <!-- ./box-body -->
             <div class="box-footer">
               <div class="row">
                 <div class="col-sm-3 col-xs-6">
                   <div class="description-block border-right">
                     <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                     <h5 class="description-header">$35,210.43</h5>
                     <span class="description-text">TOTAL REVENUE</span>
                   </div>
                   <!-- /.description-block -->
                 </div>
                 <!-- /.col -->
                 <div class="col-sm-3 col-xs-6">
                   <div class="description-block border-right">
                     <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                     <h5 class="description-header">$10,390.90</h5>
                     <span class="description-text">TOTAL COST</span>
                   </div>
                   <!-- /.description-block -->
                 </div>
                 <!-- /.col -->
                 <div class="col-sm-3 col-xs-6">
                   <div class="description-block border-right">
                     <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                     <h5 class="description-header">$24,813.53</h5>
                     <span class="description-text">TOTAL PROFIT</span>
                   </div>
                   <!-- /.description-block -->
                 </div>
                 <!-- /.col -->
                 <div class="col-sm-3 col-xs-6">
                   <div class="description-block">
                     <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                     <h5 class="description-header">1200</h5>
                     <span class="description-text">GOAL COMPLETIONS</span>
                   </div>
                   <!-- /.description-block -->
                 </div>
               </div>
               <!-- /.row -->
             </div>
             <!-- /.box-footer -->
           </div>
           <!-- /.box -->
         </div>
         <!-- /.col -->
       </div>
       <!-- /.row -->

       <!-- Main row -->
       <div class="row">
         <!-- Left col -->
         <div class="col-md-8">
           <!-- MAP & BOX PANE -->
           <div class="box box-success">
             <div class="box-header with-border">
               <h3 class="box-title text-center ">  أماكن العقارات </h3>

               <div class="box-tools pull-left" style="position:absolute;left:10px">

                 <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                 <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                 </button>
               </div>
             </div>
             <!-- /.box-header -->
             <div class="box-body no-padding">
               <div class="row">
                 <div class="col-md-9 col-sm-8">
                   <div class="pad">
                     <!-- Map will be created here -->
                     <div id="world-map-markers" style="height: 325px;"></div>
                   </div>
                 </div>
                 <!-- /.col -->
                 <div class="col-md-3 col-sm-4">
                   <div class="pad box-pane-right bg-green" style="min-height: 280px">
                     <div class="description-block margin-bottom">
                       <span class="description-text">  العقارات المفعلة </span>
                       <div class="sparkbar pad" data-color="#fff"> {{$buCountActive}} </div>

                     </div>
                     <!-- /.description-block -->
                     <div class="description-block margin-bottom">

                       <span class="description-text">العقارات الغير مفعلة</span>
                       <div class="sparkbar pad" data-color="#fff"> {{$buCountWaiting}} </div>
                     </div>
                     <!-- /.description-block -->
                     <div class="description-block">
                       <span class="description-text"> كل العقارات </span>
                       <div class="sparkbar pad" data-color="#fff"> {{$buCountActive+$buCountWaiting}} </div>

                     </div>
                     <!-- /.description-block -->
                   </div>
                 </div>
                 <!-- /.col -->
               </div>
               <!-- /.row -->
             </div>
             <!-- /.box-body -->
           </div>
           <!-- /.box -->
           <div class="row">

<div class="col-sm-7">


             <!-- TABLE: LATEST ORDERS -->
             <div class="box box-info">
               <div class="box-header with-border">
                 <h3 class="box-title pull-left" > اخر رسائل الموقع  </h3>

                 <div class="box-tools pull-left" style="left:10px">
                   <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                   </button>
                   <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                 </div>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="table-responsive">
                   <table class="table no-margin">
                     <thead>
                     <tr >
                       <th style="text-align:right"> رقم الرسالة </th>
                       <th style="text-align:right"> اسم المرسل </th>
                       <th style="text-align:right">البريد الإلكتروني</th>
                       <th style="text-align:right"> حالة الرسالة </th>
                        <th style="text-align:right">  نوع الرسالة </th>
                     </tr>
                     </thead>
                     <tbody>
                     <tr>
                       @foreach($latestcontactus as $contactUs)
                       <td><a href=" {{url('/adminpanel/contact/'.$contactUs->id.'/edit')}} ">{{$contactUs->id}} </a></td>
                       <td><a href=" {{url('/adminpanel/contact/'.$contactUs->id.'/edit')}} ">
{{$contactUs->contact_name}}</a>
                       </td>
                       <td><span class="label label-success">{{$contactUs->contact_email}}</span></td>
                       <td> @if($contactUs->view==0) <i class="fa fa-eye btn btn-success"></i>
@else <i class="fa fa-eye btn btn-warning"></i>
@endif
                        </td>
                       <td>
                         <div class="sparkbar" data-color="#00a65a" data-height="20">
@if($contactUs->contact_type==0)إعجاب
@elseif($contactUs->contact_type==1) إقتراح
@elseif($contactUs->contact_type==2) شكوي
@else استفسار
@endif


                         </div>
                       </td>

                     </tr>
   @endforeach
                     </tbody>
                   </table>
                 </div>
                 <!-- /.table-responsive -->
               </div>
               <!-- /.box-body -->
               <div class="box-footer clearfix">
                 <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
                 <a href="{{url('/adminpanel/contact/')}}" class="btn btn-sm btn-default btn-flat pull-right">كل الرسائل</a>
               </div>
               <!-- /.box-footer -->
             </div>
             <!-- /.box -->
           </div>
           <!-- /.col -->



             <div class="col-md-5">
               <!-- USERS LIST -->
               <div class="box box-danger">
                 <div class="box-header with-border">
                   <h3  class="box-title pull-left">  أخر الأعضاء المضافين </h3>

                   <div class="box-tools pull-left" style="left:10px">
                     <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                     </button>

                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                     </button>
                        <span class="label label-danger"> 8 أعضاء </span>
                   </div>
                 </div>
                 <!-- /.box-header -->
                 <div class="box-body no-padding">
                   <ul class="users-list clearfix">
@foreach($latestusers as $luser)
                     <li>
                       <img src="{{url('/admin/dist/img/user1-128x128.jpg')}}" alt="User Image">
                       <a class="users-list-name" href="{{url('/adminpanel/users/'.$luser->id.'/edit')}}"> {{$luser->name}} </a>
                       <span class="users-list-date">{{$luser->created_at}}</span>
                     </li>
                  @endforeach


                   </ul>
                   <!-- /.users-list -->
                 </div>
                 <!-- /.box-body -->
                 <div class="box-footer text-center">
                   <a href="{{url('/adminpanel/users/')}} " class="uppercase"> عرض كل الأعضاء </a>
                 </div>
                 <!-- /.box-footer -->
               </div>
               <!--/.box -->
             </div>
             <!-- /.col -->
           </div>
           <!-- /.row -->
   </div>


         <div class="col-md-4">


           <!-- PRODUCT LIST -->
           <div class="box box-primary">
             <div class="box-header with-border">
               <h3 class="box-title pull-left "  >   أخر العقارات المضافة  </h3>

               <div class="box-tools " style="left:10px">

                 <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                 <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                 </button>
               </div>
             </div>
             <!-- /.box-header -->
             <div class="box-body">
               <ul class="products-list product-list-in-box">
                 @foreach($latestbu as $bu)
                 <li class="item">
                   <div class="product-img">
                     <img src="{{ Request::root().'/website/bu_images/'.$bu->image}}" alt="Product Image">
                   </div>
                   <div class="product-info">
                     <a href="{{url('/adminpanel/bu/'.$bu->id.'/edit/')}}" class="product-title">{{$bu->bu_name}}
                       <span class="label label-warning pull-left"> {{$bu->bu_price}}  </span></a>
                     <span class="product-description">
                          {{$bu->bu_small_dis}}
                         </span>
                   </div>
                 </li>
              @endforeach
               </ul>
             </div>
             <!-- /.box-body -->
             <div class="box-footer text-center">
               <a href="{{url('/adminpanel/bu/')}}" class="uppercase"> أظهر كل العقارات </a>
             </div>
             <!-- /.box-footer -->
           </div>
           <!-- /.box -->
         </div>
         <!-- /.col -->
       </div>
       <!-- /.row -->
    </section>
    @endsection
@section('footer')

<script type="text/javascript">

/* ChartJS
 * -------
 * Here we will create a few charts using ChartJS
 */

// -----------------------
// - MONTHLY SALES CHART -
// -----------------------

// Get context with jQuery - using jQuery's .get() method.
var salesChartCanvas = $('#salesChart').get(0).getContext('2d');
// This will get the first returned node in the jQuery collection.
var salesChart       = new Chart(salesChartCanvas);

var salesChartData = {
  labels  : [
    'يناير'  ,
    'فبراير',
    'مارس',
    'أبريل',
    'مايو',
    'يونيو',
    'يوليه',
    'أغسطس',
    'سبتمبر',
    'أكتوبر',
    'نوفمبر',
    'ديسمبر'


     ],
  datasets: [

    {
      label               : 'Digital Goods',
      fillColor           : 'rgba(60,141,188,0.9)',
      strokeColor         : 'rgba(60,141,188,0.8)',
      pointColor          : '#3b8bba',
      pointStrokeColor    : 'rgba(60,141,188,1)',
      pointHighlightFill  : '#fff',
      pointHighlightStroke: 'rgba(60,141,188,1)',
      data                : [

        @foreach($new as $c)
        @if(is_array($c))
        {{$c['counting']}},
     @else
     @endif
     @endforeach

      ]
    }
  ]
};





// mapping

$('#world-map-markers').vectorMap({
  map              : 'world_mill_en',
  normalizeFunction: 'polynomial',
  hoverOpacity     : 0.7,
  hoverColor       : false,
  backgroundColor  : 'transparent',
  regionStyle      : {
    initial      : {
      fill            : 'rgba(210, 214, 222, 1)',
      'fill-opacity'  : 1,
      stroke          : 'none',
      'stroke-width'  : 0,
      'stroke-opacity': 1
    },
    hover        : {
      'fill-opacity': 0.7,
      cursor        : 'pointer'
    },
    selected     : {
      fill: 'yellow'
    },
    selectedHover: {}
  },
  markerStyle      : {
    initial: {
      fill  : '#00a65a',
      stroke: '#111'
    }
  },
  markers          : [
    { latLng: [41.90, 12.45], name: 'Vatican City' },


  ]
});











</script>




@endsection
