@extends('admin.layouts.layout')
@section('title')
|| إحصائيات إضافة العقار من السنة
{{$year}}

@endsection

@section('header')
{!! Html::style('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}
@endsection

@section('content')

<section class="content-header">
      <h1 style="text-align:center">
إحصائيات إضافة العقار من السنة
{{$year}}

      </h1>
      <ol class="breadcrumb pull-left " style="left:10px">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i>الرئيسية</a></li>
        <li><a href="{{url('/adminpanel/buYear/statics')}}"><i class="fa fa-dashboard"></i>
 إحصائيات إضافة العقار من السنة
 {{$year}}
  </a></li>

      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          {!! Form::open(['url'=>'/adminpanel/buYear/statics','method'=>'post']) !!}
<select class="select" id="subject" name="year" style="width:120px; text-align:center">
  @for($i=2016; $i<=2100; $i++)
  <option style="text-align:center" value="{{$i}}">{{$i}}</option>
  @endfor
</select>
<input type="submit" name="submit" value=" أظهر الإحصائيات " class="btn btn-warning">
{!! Form::close() !!}
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


</section>




@endsection





@section('footer')






{!! Html::script('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') !!}
{!! Html::script('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}
{!! Html::script('cus/js/select2.full.js') !!}
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














$('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });

</script>
@endsection
