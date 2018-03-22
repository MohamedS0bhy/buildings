<div class="form-group{{ $errors->has('contact_name') ? ' has-error' : '' }}" style="padding-bottom:20px">


    <div class="col-md-6 col-md-offset-2">

        {!! Form::text('contact_name',null,['class'=>'form-control']) !!}

        @if ($errors->has('contact_name'))
            <span class="help-block">
                <strong>{{ $errors->first('contact_name') }}</strong>
            </span>
        @endif
    </div>
    <div class="col-md-2">
اسم المرسل
    </div>
</div>
<div class="clear-fix">
  </div>
  <br>

  <div class="form-group{{ $errors->has('contact_email') ? ' has-error' : '' }}" style="padding-bottom:20px">


      <div class="col-md-6 col-md-offset-2">

          {!! Form::text('contact_email',null,['class'=>'form-control']) !!}

          @if ($errors->has('contact_email'))
              <span class="help-block">
                  <strong>{{ $errors->first('contact_email') }}</strong>
              </span>
          @endif
      </div>
      <div class="col-md-2">
   البريد الإلكتروني للمرسل
      </div>
  </div>
  <div class="clear-fix">
    </div>
      <br>
    <!-- <div class="form-group{{ $errors->has('contac_subject') ? ' has-error' : '' }}" style="padding-bottom:20px">


        <div class="col-md-6 col-md-offset-2">

            {!! Form::text('contact_subject',null,['class'=>'form-control']) !!}

            @if ($errors->has('contact_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('contact_subject') }}</strong>
                </span>
            @endif
        </div>
        <div class="col-md-2">
    موضوع الرسالة
        </div>
    </div>
    <div class="clear-fix">
      </div> -->


      <div class="form-group{{ $errors->has('contact_message') ? ' has-error' : '' }}" style="padding-bottom:20px">


          <div class="col-md-6 col-md-offset-2">

              {!! Form::textarea('contact_message',null,['class'=>'form-control']) !!}

              @if ($errors->has('contact_message'))
                  <span class="help-block">
                      <strong>{{ $errors->first('contact_message') }}</strong>
                  </span>
              @endif
          </div>
          <div class="col-md-2">
       الرسالة
          </div>
      </div>
      <div class="clear-fix">
        </div>

  <br>
        <div class="form-group{{ $errors->has('contact_type') ? ' has-error' : '' }}" style="padding-bottom:20px">


            <div class="col-md-6 col-md-offset-2">

                {!! Form::select('contact_type',['0'=>'إعجاب','1'=>'إقتراح','2'=>'شكوي','3'=>'استفسار'],null,['class'=>'form-control']) !!}

                @if ($errors->has('contact_type'))
                    <span class="help-block">
                        <strong>{{ $errors->first('contact_type') }}</strong>
                    </span>
                @endif
            </div>
            <div class="col-md-2">
         نوع الرسالة
            </div>
        </div>
        <div class="clear-fix">
          </div>
  <br>
    <br>
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" style="padding-bottom:20px">

  <br>
              <div class="col-md-6 col-md-offset-2">

                  {!! Form::submit('تنفيذ',['class'=>'form-control btn btn-primary']) !!}

              </div>
            
          </div>
