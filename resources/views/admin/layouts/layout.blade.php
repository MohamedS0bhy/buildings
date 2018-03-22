<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
    لوحة تحكم الموقع

    |@yield('title')
  </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->


  <!-- Font Awesome -->
    {!!Html::style('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}


  <!-- Ionicons -->
    {!!Html::style('admin/bower_components/font-awesome/css/font-awesome.min.css') !!}

  <!-- Theme style -->
    {!!Html::style('admin/bower_components/Ionicons/css/ionicons.min.css') !!}

  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
         {!!Html::style('admin/dist/css/AdminLTE.min.css') !!}

  <!-- Morris chart -->
    {!!Html::style('admin/dist/css/skins/_all-skins.min.css') !!}

    {!!Html::style('admin/bower_components/morris.js/morris.css') !!}

    {!!Html::style('admin/bower_components/jvectormap/jquery-jvectormap.css') !!}

    {!!Html::style('admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') !!}

    {!!Html::style('admin/bower_components/bootstrap-daterangepicker/daterangepicker.css') !!}

  {!!Html::style('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') !!}
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
@yield('header')
</head>
<body class="hold-transition skin-blue sidebar-mini" style="direction:rtl">
  <div class="wrapper">


    <header class="main-header">
      <!-- Logo -->
      <a href="{{url('/adminpanel')}}" class="logo" style="float:right">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>لوحة تحكم الوقع </span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top" style="margin-right:230px;margin-left:0">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle"   data-toggle="push-menu" role="button" style="float:right" >
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu" style="float:left">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->

            <!-- Notifications: style can be found in dropdown.less -->
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">10</span>
              </a>
              <ul class="dropdown-menu"  style="    right: auto;left:0; ">
                <li class="header">You have 10 notifications</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                        page and may cause design problems
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-red"></i> 5 new members joined
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-user text-red"></i> You changed your username
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
            <!-- Tasks: style can be found in dropdown.less -->
            <li class="dropdown tasks-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-flag-o"></i>
                <span class="label label-danger">  {{App\ContactUs::where(['view'=>0])->count() }} </span>
              </a>
              <ul class="dropdown-menu" style="    right: auto;left:0; ">
                <li class="header">    <p class="text-center">  لديك عدد <span class="badge"> {{App\ContactUs::where(['view'=>0])->count() }}</span> من الرسائل لم يتم مشاهدتها    </p>  </li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    @foreach(App\ContactUs::where(['view'=>0])->get() as $contactUs )
                    <li><!-- Task item -->
                      <a href="{{url('/adminpanel/contact/'.$contactUs->id.'/edit')}}">
                        <h3>
                         {{$contactUs->contact_name}}
                        <span class="badge pull-right"> {{$contactUs->created_at}}</span>
                        </h3>
                        <!-- <div class="progress xs">
                          <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">

                          </div>
                        </div> -->
                      </a>
                    </li>
                    <!-- end task item -->
                   @endforeach
                  </ul>
                </li>
                <li class="footer">
                  <h4 class="text-center"><a href="{{url('adminpanel/contact/')}}"> عرض كل الرسائل </a></h4>
                </li>
              </ul>
            </li>
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{url('/admin/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                <span class="hidden-xs"> {{Auth::user()->name}} </span>
              </a>
              <ul class="dropdown-menu"  style="    right: auto;left:0; ">
                <!-- User image -->
                <li class="user-header">
                  <img src="{{url('/admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">

                  <p>
                  {{Auth::user()->name}}
                    <small>    {{Auth::user()->created_at}}</small>
                  </p>
                </li>

                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="{{url('/adminpanel/users/'.Auth::user()->id.'/edit')}}" class="btn btn-default btn-flat"> ملفي الشخصي  </a>
                  </div>
                  <div class="pull-right">
                    <a href="{{url('/logout')}}" class="btn btn-default btn-flat"> تسجيل خروج </a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>



    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar" style="right:0">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-right image">
            <img src="{{url('/admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-right info">
            <p>{{Auth::user()->name}}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> القائمة الرئيسية </a>
          </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                  <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                  </button>
                </span>
          </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">القائمة الرئيسية </li>


        @include('admin.layouts.nav')

        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>



<div class="content-wrapper" style="margin-right:230px;margin-left:0 ">


  @yield('content')
</div>






    <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="#">Abdurrahman Gad</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->




<!-- jQuery 3 -->
{!! html::script('admin/bower_components/jquery/dist/jquery.min.js')  !!}

<!-- jQuery UI 1.11.4 -->


{!! html::script('admin/bower_components/jquery-ui/jquery-ui.min.js')  !!}
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
{!! html::script('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')  !!}

<!-- Morris.js charts -->
{!! html::script('admin/bower_components/raphael/raphael.min.js')  !!}

{!! html::script('admin/bower_components/morris.js/morris.min.js')  !!}


<!-- Sparkline -->
{!! html::script('admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')  !!}
<!-- jvectormap -->
{!! html::script('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')  !!}

{!! html::script('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')  !!}

<!-- jQuery Knob Chart -->
{!! html::script('admin/bower_components/jquery-knob/dist/jquery.knob.min.js')  !!}

<!-- daterangepicker -->
{!! html::script('admin/bower_components/moment/min/moment.min.js')  !!}

{!! html::script('admin/bower_components/bootstrap-daterangepicker/daterangepicker.js')  !!}

<!-- datepicker -->
{!! html::script('admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')  !!}

<!-- Bootstrap WYSIHTML5 -->
{!! html::script('admin/plgins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')  !!}

<!-- Slimscroll -->
{!! html::script('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')  !!}

<!-- FastClick -->
{!! html::script('admin/bower_components/fastclick/lib/fastclick.js')  !!}

<!-- AdminLTE App -->
{!! html::script('admin/dist/js/adminlte.min.js')  !!}


<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

{!! html::script('admin/dist/js/pages/mydashboard2.js')  !!}

{!! html::script('admin/dist/js/demo.js')  !!}
{!! html::script('admin/bower_components/Chart.js/Chart.js')  !!}
<!-- AdminLTE for demo purposes -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>


  <script type="text/javascript">
  $("#subject").select2({
             placeholder: "Select a ...",
             allowClear: true
         });


  </script>



@yield('admin.layouts.f_message')
@yield('footer')
</body>
</html>
