
<br>
@if(count($bu)>0)

@foreach($bu as $key=> $b)

<div class="col-sm-3 ">
    <article class="col-item">
      <div class="photo">
      <div class="options-cart-round">
        <button class="btn btn-default" title="Add to cart">
          <span class="fa fa-shopping-cart"></span>
        </button>
      </div>
      <a href="{{url('/SingleBuilding/'.$b->id)}}"> <img src="{{ Request::root().'/website/bu_images/'.$b->image}}" class="img-responsive"  width="100px"> </a>
    </div>
    <div class="info">
      <div class="row">
        <div class="price-details col-md-6">
          <p class="details">
            {{str_limit($b->bu_small_dis,50)}}
          </p>
          <h1>{{$b->bu_name}}</h1>
          <span>{{$b->bu_squar}} متر</span><br>
          <span class="price-new">{{$b->bu_price}} جنيه</span>
        @if($b->bu_status==0)
  <a  class="btn  btn-warning btn-sm" href="{{url('/user/building/edit/'.$b->id)}}"> تعديل العقار </a>
          <a  class="btn btn-danger" href="{{url('/SingleBuilding/'.$b->id)}}">  في انتظار التفعيل </a><br>

@else
<a  class="btn btn-primary" href="{{url('/SingleBuilding/'.$b->id)}}">أظهر التفاصيل</a>

@endif
        </div>
      </div>
    </div>
  </article>
    <p class="text-center">Hover over image</p>
</div>
@if($key%3 ==0 && $key!=0 )
<div class="clearfix">

</div>
@endif
@endforeach
<div class="clearfix">
</div>
<br>
@else
<div class="alert alert-danger">
  لايوجد عقارات حاليا
</div>
@endif
