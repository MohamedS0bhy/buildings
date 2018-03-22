



@extends('admin.layouts.layout')
@section('title')
 العقار
 {{$bu->bu_name}}
@endsection

@section('header')
{!! Html::style('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}
{!! Html::style('cus/css/select2.css') !!}
@endsection

@section('content')

<section class="content-header">
      <h1 style="text-align:center">
      تعديل العقار
   {{$bu->bu_name}}
      </h1>
      <ol class="breadcrumb pull-left " style="left:10px">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i>الرئيسية</a></li>
        <li><a href="{{url('/adminpanel/bu')}}"> التحكم في العقارات</a></li>
        <li class="active" ><a href="{{url('/adminpanel/bu/'.$bu->id.'/edit')}}">   تعديل العقار </a></li>

      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="box">

          <!-- /.box-header -->
          <div class="box-body">
    <div class="col-sm-offset-3 col-sm-5 ">


@if($user==' ')
<p> تمت إضافة  العقار بواسطة زائر </p>
@else
<p>
اسم صاحب العقار
:
{{$user->name}}

 </p>
 <p>
لبريد الإلكتروني لصاحب العقار
:
 {{$user->email}}
  </p>
  <p>
الصلاحيات:

{{$user->admin==0?"مدير":"عضو"}}

   </p>

  <p> للمزيد
<a href="{{url('/adminpanel/users/'.$user->id.'/edit')}}">  عن العضو {{$user->name}} </a>
   </p>


@endif
</div>
  <label  class="pull-left">  معلومات عن صاحب العقار  </label>
          </div>

          </div>


        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h2 class="box-title">  تعديل العقارات </h2>
              <h4> تعديل العقار  {{$bu->bu_name}} </h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {!! Form::model($bu,['route'=>['adminpanel.bu.update',$bu->id],'method'=>'PATCH' ,'files'=>'true' ])  !!}
                  @include('admin.bu.form')
               {!! Form::close() !!}

           </div>
      </div>
    </div>
  </div>
</section>




@endsection





@section('footer')
{!! Html::script('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') !!}
{!! Html::script('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}
{!! Html::script('cus/js/select2.full.js') !!}
<script type="text/javascript">

$('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });

$('.select2').select2();

</script>
@endsection
