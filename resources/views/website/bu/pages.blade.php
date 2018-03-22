


<div class="col-md-3">
@if(Auth::user())
  <div class="row profile">
    <div class="profile-sidebar">
      <h2 class="text-center"> خيارات العضو </h2>
      <div class="profile-usermenu">
        <ul class="nav">
          <li  class="{{setActive(['user','editsetting']) }}">
            <a href="{{url('/user/editsetting/')}}">
            <i class="fa fa-edit"></i>
               تعديل المعلومات الشخصية</a>
          </li>


<li class="{{setActive(['user','buildingshowall']) }}">
  <a href="{{url('/user/buildingshowall')}}">
  <i class="fa fa-building"></i>
        كل العقارات
<span class="badge pull-left">  {{userBusCount(Auth::user()->id)}} </span>
       </a>
</li>

          <li class="{{setActive(['user','buildingshow']) }}">
            <a href="{{url('/user/buildingshow/')}}">
            <i class="fa fa-check"></i>
             العقارات المفعلة
<span class="badge pull-left">{{buForUserCount(Auth::user()->id,1)}} </span>
            </a>
          </li>
          <li class="{{setActive(['user','buildingshowwaiting']) }}">
            <a href="{{url('/user/buildingshowwaiting/')}}">
            <i class="fa fa-clock-o"></i>
           عقارات في انتظار التفعيل
<span class="badge pull-left">{{buForUserCount(Auth::user()->id,0)}} </span>
         </a>
          </li>
          <li class="{{setActive(['user','create','building']) }}">
            <a href="{{url('/user/create/building/')}}" >
            <i class="fa fa-plus"></i>
             أضف عقار</a>
          </li>

        </ul>
      </div>
      <!-- END MENU -->
    </div>


  </div>
@endif




    <div class="row profile">
      <div class="profile-sidebar">
				<h2 class="text-center"> البحث المتقدم </h2>
				<div class="profile-usermenu">
    {{Form::open(['url'=>'search','method'=>'GET'])}}
					<ul class="nav">
						<li>
            {!! Form::text('bu_price_from',null,['class'=>'form-control text-center','placeholder'=>'  سعر العقار من'])  !!}
            </li>
            <li>
            {!! Form::text('bu_price_to',null,['class'=>'form-control text-center','placeholder'=>'سعر العقار إلي'])  !!}
            </li>
            <li>
            {!! Form::select('rooms',['0'=>'1','1'=>'2','2'=>'3','3'=>'4','4'=>'5','5'=>'6','6'=>'7','7'=>'8','8'=>'9','9'=>'10','10'=>'11','11'=>'12','12'=>'13','13'=>'14','14'=>'15','15'=>'16'],null,['class'=>'form-control text-center','placeholder'=>'عدد الغرف'])  !!}
            </li>
            <li>
            {!! Form::select('bu_type',['0'=>'شقة','1'=>'فيلا','2'=>'شاليه'],null,['class'=>'form-control text-center','placeholder'=>'نوع العقار'])  !!}
            </li>
            <li>
            {!! Form::select('bu_rent',['0'=>'تمليك','1'=>'إيجار'],null,['class'=>'form-control text-center','placeholder'=>'نوع العملية'])  !!}
            </li>
            <li>
            {!! Form::text('bu_squar',null,['class'=>'form-control text-center','placeholder'=>'مساحة العقار'])  !!}
            </li>
            <li>
            {!! Form::submit('ابحث',null,['class'=>'form-control'])  !!}
            </li>
					</ul>
          {!! Form::close() !!}
				</div>
				<!-- END MENU -->
			</div>

			<div class="profile-sidebar">
				<h2 class="text-center">خيارات العقارات</h2>
				<div class="profile-usermenu">
					<ul class="nav">


						<li class="{{setActive(['showallBuildings']) }}">
							<a href="{{url('showallBuildings')}}">
							<i class="fa fa-building"></i>
							كل العقارات</a>
						</li>
						<li class="{{setActive(['forRent']) }}">
							<a href="{{url('forRent')}}">
							<i class="fa fa-calendar"></i>
							الإيجار </a>
						</li>
						<li class="{{setActive(['forBuy']) }}">
							<a href="{{url('forBuy')}}" >
							<i class="fa fa-building-o"></i>
							تمليك</a>
						</li>
            <li class="{{setActive(['type','0']) }}">
							<a href="{{url('/type/0')}}" >
							<i class="fa fa-hotel"></i>
							شقق</a>
						</li>
            <li  class="{{setActive(['type','1']) }}" >
							<a href="{{url('/type/1')}}" >
							<i class="fa fa-home "></i>
						فيلل</a>
						</li>
            <li  class="{{setActive(['type','2']) }}">
							<a href="{{url('/type/2')}}" >
							<i class="fa fa-institution"></i>
						   شاليهات</a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>


	</div>
</div>
