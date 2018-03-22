{{--  site settings --}}

<li class=""><a href="{{url('/adminpanel')}}"><i class="fa fa-cog"></i>  رئيسية التحكم </a>  </li>

<li class=""><a href="{{url('/adminpanel/sitesetting')}}"><i class="fa fa-gears"></i>  الاإعدادات الرئيسية </a>  </li>


{{--users --}}

<li class="treeview">
  <a href="#">
    <i class="fa fa-users pull-right"></i>
    <span style="margin-right:25px">  التحكم في الأعضاء </span>
    <span class="pull-right-container" >
      <i class="fa fa-angle-right pull-left"></i>
      <div class="clear-fix">  </div>


    </span>
  </a>
  <ul class="treeview-menu">
    <li class="active"><a href="{{url('/adminpanel/users/create')}}"><i class="fa fa-plus"></i>  أضف عضو </a></li>
    <li><a href="{{url('/adminpanel/users')}}"><i class="fa fa-user"></i>  كل الأعضاء  </a></li>
  </ul>
</li>

{{--bu--}}


<li class="treeview">
  <a href="#">
    <i class="fa fa-building pull-right"></i>
    <span style="margin-right:25px"> التحكم في العقارات  </span>
    <span class="pull-right-container" >
      <i class="fa fa-angle-right pull-left"></i>
      <div class="clear-fix">  </div>


    </span>
  </a>
  <ul class="treeview-menu">
    <li class="active"><a href="{{url('/adminpanel/bu/create')}}"><i class="fa fa-plus"></i> أضف عقار </a></li>
    <li><a href="{{url('/adminpanel/bu')}}"><i class="fa fa-building-o"></i>  كل العقارات  </a></li>
  </ul>
</li>

{{--contacts --}}
<li class=""><a href="{{url('/adminpanel/contact')}}"><i class="fa fa-envelope"></i>  الرسائل </a></li>

<li class=""><a href="{{url('/adminpanel/buYear/statics')}}"><i class="fa fa-bar-chart"></i> إحصائيات إضافة العقارات  </a></li>
