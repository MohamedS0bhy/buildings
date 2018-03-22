<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      {!!Html::style('website/css/bootstrap.min.css') !!}
      {!!Html::style('website/css/flexslider.css') !!}
      {!!Html::style('website/css/style.css') !!}
      {!!Html::style('website/css/font-awesome.min.css') !!}
      {!!Html::script('website/js/jquery.min.js') !!}

      <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
      <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
    <title>
موقع عقارات
|
@yield('title')


    </title>
@yield('header')

    <style type="text/css" >


    </style>
</head>
<body id="app-layout" style="direction:rtl">

  <div class="header">
    <div class="container"> <a class="navbar-brand" href="{{url('/')}}">  <i class="fa fa-building-o"></i> بناء توداي     </a>
      <div class="menu pull-left"> <a class="toggleMenu" href="#"><img src="{{Request::root()}}/website/images/nav_icon.png" alt="" /> </a>
        <ul class="nav" id="nav">
          <li class="{{setActive(['home'],'current')}}" ><a href="{{url('/home')}}">الرئيسية</a></li>
            <li class="{{setActive(['showallBuildings'],'current')}}"  ><a href="{{url('/showallBuildings')}}"> كل العقارات </a></li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                     إيجار<span class="caret"></span>
                </a>

                <ul class="dropdown-menu text-center" role="menu">

                    <li><a href="{{ url('/search?bu_rent=1&bu_type=0') }}">   شقة</a></li><br>
                    <li><a href="{{ url('/search?bu_rent=1&bu_type=1') }}">  فيلا</a></li><br>
                    <li><a href="{{ url('/search?bu_rent=1&bu_type=2') }}">  شاليه</a></li>
                </ul>
            </li>



            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  تمليك  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu text-center" role="menu">

                    <li><a href="{{ url('/search?bu_rent=0&bu_type=0') }}">   شقة</a></li><br>
                    <li><a href="{{ url('/search?bu_rent=0&bu_type=1') }}">  فيلا</a></li><br>
                    <li><a href="{{ url('/search?bu_rent=0&bu_type=2') }}">  شاليه</a></li>
                </ul>
            </li>




          <li class="{{setActive(['contact'],'current')}}" ><a href="{{url('/contact')}}">إتصل بنا </a></li>
          <!-- Authentication Links -->
          @if (Auth::guest())
              <li  class="{{setActive(['login'],'current')}}"><a href="{{ url('/login') }}">تسجيل الدخول</a></li>
              <li  class="{{setActive(['register'],'current')}}"><a href="{{ url('/register') }}">تسجيل عضوية جديدة</a></li>
          @else
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">
@if(Auth::user()->admin==1)

<li  class="{{setActive(['user','editsetting']) }}">
  <a href="{{url('/adminpanel/')}}">
  <i class="fa fa-cog"></i>
لوحة التحكم
   </a>
</li>

@endif

                    <li  class="{{setActive(['user','editsetting']) }}">
                      <a href="{{url('/user/editsetting/')}}">
                      <i class="fa fa-home"></i>
                       تعديل المعلومات الشخصية</a>
                    </li>

                  <li  class="{{setActive(['user','buildingshowall']) }}">
                  <a href="{{url('/user/buildingshowall')}}">
                  <i class="fa fa-user"></i>
                  كل العقارات   </a>
                  </li>

                    <li  class="{{setActive(['user','buildingshow']) }}">
                      <a href="{{url('/user/buildingshow/')}}">
                      <i class="glyphicon glyphicon-user"></i>
                     العقارات المفعلة  </a>
                    </li>
                    <li  class="{{setActive(['user','buildingshowwaiting']) }}">
                      <a href="{{url('/user/buildingshowwaiting/')}}">
                      <i class="glyphicon glyphicon-user"></i>
                     عقارات في انتظار التفعيل  </a>
                    </li>
                    <li  class="{{setActive(['user','create','building']) }}">
                      <a href="{{url('/user/create/building/')}}" >
                      <i class="fa fa-plus"></i>
                       أضف عقار</a>
                    </li>



                      <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>  تسجيل خروج </a></li>
                  </ul>
              </li>
          @endif
          <div class="clear"></div>
        </ul>

      </div>
    </div>
  </div>



    @yield('content')
    <div class="footer">
  <div class="footer_bottom">
    <div class="follow-us"> <a class="fa fa-facebook social-icon" href="#"></a> <a class="fa fa-twitter social-icon" href="#"></a> <a class="fa fa-linkedin social-icon" href="#"></a> <a class="fa fa-google-plus social-icon" href="#"></a> </div>
    <div class="copy">
      <p>Copyright &copy; 2015 Company Name. Design by <a href="#" rel="nofollow">Abdurrahman gad</a></p>
    </div>

  </div>
</div>



{!!Html::script('website/js/bootstrap.min.js') !!}
{!!Html::script('website/js/jquery.flexslider.js') !!}
{!!Html::script('website/js/responsive-nav.js') !!}

@yield('footer')
</body>
</html>
