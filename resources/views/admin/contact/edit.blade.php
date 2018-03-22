@extends('admin.layouts.layout')
@section('title')
 التعديل علي الرسائل
 {{$singlecontact->contact_name}}
@endsection

@section('header')
{!! Html::style('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}
@endsection

@section('content')

<section class="content-header">
      <h1 style="text-align:center">
   التعديل علي الرسائل
||   {{$singlecontact->contact_name}}
      </h1>
      <ol class="breadcrumb pull-left " style="left:10px">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i>الرئيسية</a></li>
        <li><a href="{{url('/adminpanel/users')}}">  التحكم في الرسائل</a></li>
        <li class="active" ><a href="{{url('/adminpanel/users/'.$singlecontact->id.'/edit')}}">التعديل علي الرسائل</a></li>

      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h2 class="box-title"> التعديل علي الرسائل </h2>
              <h4>   تعديل رسالة المرسل  {{$singlecontact->contact_name}} </h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                {!! Form::model($singlecontact,['route'=>['adminpanel.contact.update',$singlecontact->id],'method'=>'PATCH'])  !!}
                  @include('admin.contact.form')
               {!! Form::close() !!}
<div class="panel panel-defualt">

                  </div>
           </div>
      </div>
    </div>
  </div>
</section>




@endsection





@section('footer')
{!! Html::script('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') !!}

{!! Html::script('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}

{!! Html::script('website/js/jquery.min.js') !!}
<script type="text/javascript">

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
