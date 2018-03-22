@extends('admin.layouts.layout')
@section('title')
تعديل إعدادات الموقع


@endsection

@section('header')
{!! Html::style('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}
@endsection

@section('content')

<section class="content-header">
      <h1 style="float:left;margin-left:350px">
    تعديل إعدادات الموقع
      </h1>
      <ol class="breadcrumb pull-left " style="left:10px">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i>الرئيسية</a></li>
        <li><a class="active" href="{{url('/adminpanel/sitesetting')}}">   تعديل إعدادات الموفع </a></li>

      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">   تعديل إعدادات الموفع </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <form action="{{url('adminpanel/sitesetting')}}" method="post">
                     {{ csrf_field() }}
                @foreach($siteSetting as $setting)




                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" style="padding-bottom:20px">


                    <div class="col-md-6 col-md-offset-2">
                      @if($setting->type==0)
                        {!! Form::text($setting->namesetting,$setting->value,['class'=>'form-control']) !!}
                        @else
                          {!! Form::textarea($setting->namesetting,$setting->value,['class'=>'form-control']) !!}
                       @endif

                        @if ($errors->has($setting->namesetting))
                            <span class="help-block">
                                <strong>{{ $errors->first($setting->namesetting) }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-md-2">
                      {{$setting->slug}}
                    </div>
                </div>
                <br>

                @endforeach
<br>
<br>
<br>
<br>
<br>
<br>
                <button type="submit" name="submit">
                  <i class="fa fa-save"></i>
                حفظ إعدادات الموقع
                </button>

</form>
           </div>
      </div>
    </div>
  </div>
</section>




@endsection





@section('footer')

<div class="footer">
  <div class="footer_bottom">
    <div class="follow-us"> <a class="fa fa-facebook social-icon" href="#"></a> <a class="fa fa-twitter social-icon" href="#"></a> <a class="fa fa-linkedin social-icon" href="#"></a> <a class="fa fa-google-plus social-icon" href="#"></a> </div>
    <div class="copy">
      <p>Copyright &copy; 2015 Company Name. Design by <a href="http://www.templategarden.com" rel="nofollow">TemplateGarden</a></p>
    </div>
  </div>
</div>

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
