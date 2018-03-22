@extends('admin.layouts.layout')
@section('title')
تعديل الأعضاء
 {{$user->name}}
@endsection

@section('header')
{!! Html::style('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}
@endsection

@section('content')

<section class="content-header">
      <h1 style="text-align:center">
   تعديل الأعضاء
   {{$user->name}}
      </h1>
      <ol class="breadcrumb pull-left " style="left:10px">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i>الرئيسية</a></li>
        <li><a href="{{url('/adminpanel/users')}}">التحكم في الأعضاء</a></li>
        <li class="active" ><a href="{{url('/adminpanel/users/'.$user->id.'/edit')}}">تعديل العضو</a></li>

      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h2 class="box-title"> تعديل الأعضاء </h2>
              <h4>  تعديل العضو   {{$user->name}} </h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                {!! Form::model($user,['route'=>['adminpanel.users.update',$user->id],'method'=>'PATCH'])  !!}
                  @include('admin.user.form')
               {!! Form::close() !!}
<div class="panel panel-defualt">



<div class="panel-body">


               {!! Form::open(['url'=>'/adminpanel/users/changepassword','method'=>'post'])  !!}
               <input type="hidden" name="user_id" value="{{$user->id}}">
               <br>
               <br>
               <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" >
                   <label for="password" class="col-md-4 control-label">Password</label>

                   <div class="col-md-4">
                       <input id="password" type="password" class="form-control" name="password" required>

                       @if ($errors->has('password'))
                           <span class="help-block">
                               <strong>{{ $errors->first('password') }}</strong>
                           </span>
                       @endif
                   </div>
                   <div class="col-md-2">
                       <button type="submit" class="btn btn-primary">
                        <i class="fa fa-pencil"></i> غير كلمة المرور
                       </button>
                   </div>

               </div>
               <br>
               <br>
               <div class="form-group">
                 <div class="form-group">


                 </div>
               </div>
                  {!! Form::close() !!}
                  </div>
                  </div>
           </div>
      </div>
    </div>
  </div>
</section>
<section class="content">
<div class="row">
 <h2 class="text-center" > العقارات التي قام العميل
{{$user->name}}
بإضافتها
</h2>
</div>
<div class="content">

<div class="row">


<div class="col-md-12">
         <div class="nav-tabs-custom">
           <ul class="nav nav-tabs" style="float:right">
             <li class="active"><a href="#activity" data-toggle="tab">     عقارات مفعلة  </a></li>
             <li><a href="#timeline" data-toggle="tab"> عقارت في انتظار التفعيل </a></li>

           </ul>
           <br><br>
           <div class="tab-content">
             <div class="active tab-pane" id="activity">
               <br>
<h3 class="text-center">  عقارات مفعلة  </h3>
<table  class="table table-bordered" >
  <thead>
    <tr>
      <td>اسم العقار</td>
      <td> أضيف في  </td>
        <td>نوع العقار  </td>
      <td> نوع العملية  </td>
          <td> مساحة العقار  </td>
          <td>سعر العقار </td>


      <td> تغيير حالة العقار </td>
    </tr>
  </thead>
  <tbody>
  @foreach($buenabled as $enabled)
<tr>


  <td><a href="{{url('/adminpanel/bu/'.$enabled->id.'/edit')}}"> {{$enabled->bu_name}}</a> </td>
  <td>{{$enabled->created_at}}  </td>
<td>
  <span class="badge">
    @if($enabled->bu_type==0)شقة
      @elseif($enabled->bu_type==1)فيلا
    @else($enabled->bu_type==2)شاليه
    @endif
  </span>

</td>
<td>{{$enabled->bu_rent==0? "تمليك" :"إيجار"}} </td>


  <td>{{$enabled->bu_squar}}  </td>

    <td>{{$enabled->bu_price}}  </td>






  <td> <a href="{{url('/adminpanel/bu/'.$enabled->id).'/0'}}">   إلغاء التفعيل </a> </td>
</tr>
  @endforeach
  </tbody>

  <tfoot>
    <tr>
      <td>اسم العقار</td>
      <td> أضيف في  </td>
      <td>نوع العقار  </td>
        <td> نوع العملية  </td>
        <td> مساحة العقار  </td>
        <td>سعر العقار </td>

      <td> تغيير حالة العقار </td>
    </tr>
  </tfoot>
</table>

<div class="text-center">

  {{$buenabled->appends(Request::except('page'))->render()}}

</div>






             </div>
             <!-- /.tab-pane -->
             <div class="tab-pane" id="timeline">
               <br>
               <h3 class="text-center">  عقارات في انتظار التفعيل  </h3>
               <table   class="table table-bordered" >
                 <thead>
                   <tr>
                     <td>اسم العقار</td>
                     <td> أضيف في  </td>
                     <td>نوع العقار  </td>
                       <td> نوع العملية  </td>
                       <td> مساحة العقار  </td>
                       <td>سعر العقار </td>
                     <td> تغيير حالة العقار </td>
                   </tr>
                 </thead>
                 <tbody>
                   @foreach($buwaiting as $waiting)
                   <tr>


                     <td><a href="{{url('/adminpanel/bu/'.$waiting->id.'/edit')}}"> {{$waiting->bu_name}}</a> </td>
                     <td>{{$waiting->created_at}}  </td>
                   <td>
                     <span class="badge">
                       @if($waiting->bu_type==0)شقة
                         @elseif($waiting->bu_type==1)فيلا
                       @else($waiting->bu_type==2)شاليه
                       @endif
                     </span>

                   </td>
                   <td>{{$waiting->bu_rent==0? "تمليك" :"إيجار"}} </td>


                     <td>{{$waiting->bu_squar}}  </td>

                       <td>{{$waiting->bu_price}}  </td>






                     <td> <a href="{{url('/adminpanel/bu/'.$waiting->id).'/1'}}">  تفعيل  </a> </td>
                   </tr>
               @endforeach
                 </tbody>

                 <tfoot>
                   <tr>
                     <td>اسم العقار</td>
                     <td> أضيف في  </td>
                     <td>نوع العقار  </td>
                       <td> نوع العملية  </td>
                       <td> مساحة العقار  </td>
                       <td>سعر العقار </td>
                     <td> تغيير حالة العقار </td>
                   </tr>
                 </tfoot>
               </table>


               <div class="text-center">

                 {{$buwaiting->appends(Request::except('page'))->render()}}

               </div>



             </div>
             <!-- /.tab-pane -->


           </div>
           <!-- /.tab-content -->
         </div>
         <!-- /.nav-tabs-custom -->
       </div>
       <!-- /.col -->
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
