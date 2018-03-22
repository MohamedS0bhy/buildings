@extends('admin.layouts.layout')
@section('title')
التحكم في رسائل الموقع
@endsection

@section('header')
{!! Html::style('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}
<style media="screen">
  th,td
  {
    text-align: center;
  }
</style>
@endsection



@section('content')

@include('admin.layouts.message')
<section class="content-header" >
      <h1 style="text-align:center">
      التحكم في رسائل الموقع

      </h1>
    <h4>
      <ol class="breadcrumb" style="left:10px">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i>الرئيسية</a></li>
        <li><a href="{{url('/adminpanel/users')}}">التحكم في رسائل الموقع</a></li>

      </ol>
    </h4>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">الأعضاء</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead >
                <tr >
                  <th>#</th>
                  <th>الاسم</th>
                  <th>البريد الإلكتروني</th>
                  <th>أضيف في</th>

                    <th>   الحالة </th>
                    <th>التحكم </th>
                </tr>
                </thead>
                <tbody>
                  @foreach($contactUs as $contactUsinfo)
                  <tr>

                    <td><a href="{{url('/adminpanel/contact/'.$contactUsinfo->id.'/edit')}}">{{$contactUsinfo->id}}</a></td>
                    <td><a href="{{url('/adminpanel/contact/'.$contactUsinfo->id.'/edit')}}"> {{$contactUsinfo->contact_name}} </a></td>
                    <td>{{$contactUsinfo->contact_email}}</td>
                    <td>{{$contactUsinfo->created_at}}</td>
                  <td ><span class="badge" > @if( $contactUsinfo->view==0 )   لم يشاهد بعد
                              @else  تمت المشاهدة
                       @endif

                       </span>
                  </td>
                    <td>
                      <a class="btn btn-success" href="{{url('/adminpanel/contact/'.$contactUsinfo->id.'/edit')}}"> <i class="fa fa-pencil"></i>   تعديل</a>

                      <a class="btn btn-danger" href="{{url('/adminpanel/contact/'.$contactUsinfo->id.'/delete')}}">  <i class="fa fa-minus"></i> حذف </a>

                    </td>

                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>

                      <th>#</th>
                      <th>الاسم</th>
                      <th>البريد الإلكتروني</th>
                      <th>أضيف في</th>

                        <th>   الحالة </th>
                        <th>التحكم </th>

                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


      </div>
      <!-- /.row -->
        </div>
    </section>
    <!-- /.content -->

@endsection





@section('footer')
{!! Html::script('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') !!}
{!! Html::script('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}

<script type="text/javascript">

$('#example2').DataTable({
      'paging'      : true,
      'lengthChang e': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });

</script>
@endsection
