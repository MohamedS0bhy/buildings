@extends('admin.layouts.layout')
@section('title')
لوحة التحكم في العقارات

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


      <h1 style="text-align:center">
    التحكم في العقارات

      </h1>
    <h4>
      <ol class="breadcrumb" style="left:10px">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i>الرئيسية</a></li>
        <li><a href="{{url('/adminpanel/bu')}}"> التحكم في العقارات </a></li>

      </ol>
    </h4>
    </section>


    <!-- Main content -->
    <section class="content">
      @if (session()->has('success'))

      <div class="alert alert-dismissable alert-success">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
          <strong>
          {!! session()->get('success') !!}
          </strong>
      </div>
  @endif

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">العقارات</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>اسم العغفار</th>
                  <th>  السعر</th>
                  <th>  النوع</th>
                  <th>أضيف في</th>

                    <th> الحالة </th>
                    <th>التحكم </th>
                </tr>
                </thead>
                <tbody>
                  @foreach($bu as $buinfo)
                  <tr>

                    <td><a href="{{url('/adminpanel/bu/'.$buinfo->id.'/edit')}}">{{$buinfo->id}}</a></td>
                    <td>{{$buinfo->bu_name}}</td>
                    <td>{{$buinfo->bu_price}}</td>
                    <td>
<span class="badge">
  @if($buinfo->bu_type==0)شقة
    @elseif($buinfo->bu_type==1)فيلا
  @else($buinfo->bu_type==2)شاليه
  @endif
</span>

                    </td>
                    <td>{{$buinfo->created_at}}</td>
                    <td>
                      <span class="badge">   {{$buinfo->bu_status==0?"غير مفعل":"مفعل"   }}</span>

                    </td>
                    <td>
                      <a class="btn btn-success" href="{{url('/adminpanel/bu/'.$buinfo->id.'/edit')}}"> <i class="fa fa-pencil"></i>   تعديل</a>

                      <a class="btn btn-danger" href="{{url('/adminpanel/bu/'.$buinfo->id.'/delete')}}">  <i class="fa fa-minus"></i> حذف </a>

                    </td>

                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>#</th>
                    <th>  اسم العقار </th>
                    <th>  السعر</th>
                   <th> النوع </th>
                    <th>أضيف في</th>

                      <th> الحالة </th>
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
