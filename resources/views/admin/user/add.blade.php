@extends('admin.layouts.layout')
@section('title')
لوحة التحكم بالأعضاء
@endsection

@section('header')
{!! Html::style('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}
@endsection

@section('content')

<section class="content-header">
      <h1 style="text-align:center">
    إضافة الأعضاء
      </h1>
      <ol class="breadcrumb pull-left " style="left:10px">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i>الرئيسية</a></li>
        <li><a href="{{url('/adminpanel/users')}}">التحكم في الأعضاء</a></li>
        <li class="active" ><a href="{{url('/adminpanel/users/create')}}">إضافة عضو جديد</a></li>

      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">أضف عضو جديد</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ url('/adminpanel/users/') }}">
                  @include('admin.user.form')
               </form>
           </div>
      </div>
    </div>
  </div>
</section>




@endsection





@section('footer')
{!! Html::script('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') !!}
{!! Html::script('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}

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
