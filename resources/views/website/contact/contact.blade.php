@extends('layouts.app')
@section('title')
 إتصل بنا
@endsection
@section('header')
{!! Html::style('cus/buall.css') !!}
@endsection
@section('content')
<br>

<div class="container">
    <div class="row">
      <h1 class="text-center"> إتصل بنا </h1>

        <div class="col-md-8">
<br>
            <div class="well well-sm">
            {!! Form::open(['url'=>'/contact','method'=>'post'] ) !!}
                <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">
                              الرسالة</label>
                          <textarea name="contact_message" id="message" class="form-control" rows="9" cols="25" required="required"
                              placeholder="برجاء إدخال الرسالة"></textarea>
                      </div>
                  </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                              الاسم</label>
                            <input type="text" name="contact_name" class="form-control" id="name" placeholder="أدخل االاسم رجاءا" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                              البريد الإلكتروني</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email"  name="contact_email" class="form-control" id="email" placeholder="أدخل البريد الإلكتروني رجاءا" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="contact_type">
                                 عنوان الرسالة </label>
                            <select id="subject" name="contact_type" class="form-control" required="required">
                       <option value="0">  إعجاب </option>
                       <option value="1">  إقتراح </option>
                        <option value="2">  شكوي </option>
                        <option value="3">   استفسار  </option>
                                    </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="banner_btn pull-right" id="btnContactUs">
                           إرسال الرسالة  </button>
                    </div>
                </div>
            {!! Form::close() !!}
            </div>
        </div>
        <div class="col-md-4">
            <form>
              <br><br>
              <br>
            <legend class="text-center"><i class="fa fa-globe"></i>                 مكتبنا  </legend>
            <address class="text-center">
                     <span style="margin-left:30px"><a href="www.facebook.com"><i class="fa  fa-facebook fa-2x "></i> </a>  </span>
                     <span style="margin-left:30px"><a href="www.twitter.com"><i class="fa fa-twitter fa-2x"></i></a>   </span>
                     <span  style="margin-left:30px"><a href="www.google.com"> <i class="fa fa-google-plus fa-2x"></i></a>  </span>
                      <span><a href="www.linkedin.com"> <i class="fa fa-linkedin fa-2x"></i></a>  </span>
            </address>
            <address class="text-center">
                <strong>البريد الإلكتروني</strong><br>
                <a href="../../../abdelrahmangad95@gmail.com">buildings@gmail.com</a>
            </address>
            </form>
        </div>
    </div>
</div>

@endsection
