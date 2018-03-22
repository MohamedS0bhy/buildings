



    <div class="form-group{{ $errors->has('bu_name') ? ' has-error' : '' }}" style="padding-bottom:20px">

        <div class="col-md-offset-3 col-md-6 ">
            {!! Form::text('bu_name',null,['class'=>'form-control']) !!}
            @if ($errors->has('bu_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('bu_name') }}</strong>
                </span>
            @endif
        </div>
        <label for="bu_name" class="col-md-1">اسم العقار</label>

    </div>
    <div class="clear-fix">
    </div>



        <div class="form-group{{ $errors->has('rooms') ? ' has-error' : '' }}" style="padding-bottom:20px">

            <div class="col-md-offset-3 col-md-6 ">
                {!! Form::text('rooms',null,['class'=>'form-control']) !!}
                @if ($errors->has('rooms'))
                    <span class="help-block">
                        <strong>{{ $errors->first('rooms') }}</strong>
                    </span>
                @endif
            </div>
            <label for="rooms" class="col-md-1">عدد الغرف</label>

        </div>
        <div class="clear-fix">
        </div>
        <div class="form-group{{ $errors->has('bu_price') ? ' has-error' : '' }}" style="padding-bottom:20px">

            <div class="col-md-offset-3 col-md-6 ">
                {!! Form::text('bu_price',null,['class'=>'form-control']) !!}
                @if ($errors->has('bu_price'))
                    <span class="help-block">
                        <strong>{{ $errors->first('bu_price') }}</strong>
                    </span>
                @endif
            </div>
            <label for="bu_price" class="col-md-1"> سعر العقار </label>

        </div>
        <div class="clear-fix">
        </div>

        <div class="form-group{{ $errors->has('bu_rent') ? ' has-error' : '' }}" style="padding-bottom:20px">

            <div class="col-md-offset-3 col-md-6 ">

                  {!! Form::select('bu_rent',['0'=>'تمليك','1'=>'إيجار'],null,['class'=>'form-control']) !!}
                @if ($errors->has('bu_rent'))
                    <span class="help-block">
                        <strong>{{ $errors->first('bu_rent') }}</strong>
                    </span>
                @endif
            </div>
            <label for="bu_rent" class="col-md-1"> نوع العملية </label>

        </div>
        <div class="clear-fix">
        </div>
        <div class="form-group{{ $errors->has('bu_squar') ? ' has-error' : '' }}" style="padding-bottom:20px">

            <div class="col-md-offset-3 col-md-6 ">
                {!! Form::text('bu_squar',null,['class'=>'form-control']) !!}
                @if ($errors->has('bu_squar'))
                    <span class="help-block">
                        <strong>{{ $errors->first('bu_squar') }}</strong>
                    </span>
                @endif
            </div>
            <label for="bu_squar" class="col-md-1"> مساحة العقار </label>

        </div>
        <div class="clear-fix">
        </div>
        <div class="form-group{{ $errors->has('bu_place') ? ' has-error' : '' }}" style="padding-bottom:20px">

            <div class="col-md-offset-3 col-md-6">
                {!! Form::select('bu_place',bu_place(),null,['class'=>'form-control select2']) !!}
                @if ($errors->has('bu_place'))
                    <span class="help-block">
                        <strong>{{ $errors->first('bu_place') }}</strong>
                    </span>
                @endif
            </div>
            <label for="bu_place" class="col-md-1"> مكان العقار </label>

        </div>
        <div class="clear-fix">
        </div>

        <div class="form-group{{ $errors->has('bu_type') ? ' has-error' : '' }}" style="padding-bottom:20px">

            <div class="col-md-offset-3 col-md-6 ">

                  {!! Form::select('bu_type',['0'=>'شقة','1'=>'فيلا','2'=>'شاليه'],null,['class'=>'form-control']) !!}
                @if ($errors->has('bu_type'))
                    <span class="help-block">
                        <strong>{{ $errors->first('bu_type') }}</strong>
                    </span>
                @endif
            </div>
            <label for="bu_type" class="col-md-1"> نوع العقار</label>

        </div>
        <div class="clear-fix">
        </div>
@if(!Isset($user))
        <div class="form-group{{ $errors->has('bu_status') ? ' has-error' : '' }}" style="padding-bottom:20px">

            <div class="col-md-offset-3 col-md-6 ">

                  {!! Form::select('bu_status',['0'=>'غير مفعل','1'=>'مفعل'],null,['class'=>'form-control']) !!}
                @if ($errors->has('bu_status'))
                    <span class="help-block">
                        <strong>{{ $errors->first('bu_status') }}</strong>
                    </span>
                @endif
            </div>
            <label for="bu_status" class="col-md-1"> حالة العقار</label>

        </div>

    @endif
        <div class="clear-fix">
        </div>
        <div class="form-group{{ $errors->has('bu_meta') ? ' has-error' : '' }}" style="padding-bottom:20px">

            <div class="col-md-offset-3 col-md-6 ">
                {!! Form::text('bu_meta',null,['class'=>'form-control']) !!}
                @if ($errors->has('bu_meta'))
                    <span class="help-block">
                        <strong>{{ $errors->first('bu_meta') }}</strong>
                    </span>
                @endif
            </div>
            <label for="bu_meta" class="col-md-1"> الكلمات الدلالية </label>

        </div>
        <div class="clear-fix">
        </div>
@if(!Isset($user))
        <div class="form-group{{ $errors->has('bu_small_dis') ? ' has-error' : '' }}" style="padding-bottom:20px">

            <div class="col-md-offset-3 col-md-6 ">
                {!! Form::textarea('bu_small_dis',null,['class'=>'form-control']) !!}
                @if ($errors->has('bu_small_dis'))
                    <span class="help-block">
                        <strong>{{ $errors->first('bu_small_dis') }}</strong>
                    </span>
                @endif
                <br>
                <div class="alert alert-danger">
                  لايمكن إدخال أكثر من 140 حرف حسب معايير جوجل
                </div>
            </div>
            <label for="bu_small_dis" class="col-md-1">  وصف العقار لمحركات البحث </label>

        </div>
        <div class="clear-fix">
        </div>

@endif
        <div class="form-group{{ $errors->has('langitude') ? ' has-error' : '' }}" style="padding-bottom:20px">

            <div class="col-md-offset-3 col-md-6 ">
                {!! Form::text('bu_langitude',null,['class'=>'form-control']) !!}
                @if ($errors->has('bu_langitude'))
                    <span class="help-block">
                        <strong>{{ $errors->first('bu_langitude') }}</strong>
                    </span>
                @endif
            </div>
            <label for="bu_langitude" class="col-md-1"> خط الطول </label>

        </div>
        <div class="clear-fix">
        </div>

        <div class="form-group{{ $errors->has('bu_latitude') ? ' has-error' : '' }}" style="padding-bottom:20px">

            <div class="col-md-offset-3 col-md-6 ">
                {!! Form::text('bu_latitude',null,['class'=>'form-control']) !!}
                @if ($errors->has('bu_latitude'))
                    <span class="help-block">
                        <strong>{{ $errors->first('bu_latitude') }}</strong>
                    </span>
                @endif
            </div>
            <label for="bu_latitude" class="col-md-1"> خط العرض </label>

        </div>
        <div class="clear-fix">
        </div>

        <div class="form-group{{ $errors->has('bu_large_dis') ? ' has-error' : '' }}" style="padding-bottom:20px">

            <div class="col-md-offset-3 col-md-6 ">
                {!! Form::textarea('bu_larg_dis',null,['class'=>'form-control']) !!}
                @if ($errors->has('bu_larg_dis'))
                    <span class="help-block">
                        <strong>{{ $errors->first('bu_larg_dis') }}</strong>
                    </span>
                @endif
            </div>
            <label for="bu_larg_dis" class="col-md-1"> الوصف المطول  للعقار </label>

        </div>
        <div class="clear-fix">
        </div>

        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}" style="padding-bottom:20px">

            <div class="col-md-offset-3 col-md-6 ">
             @if(Isset($bu))
               @if($bu->image !=' ')
                <img src="{{ Request::root().'/website/bu_images/'.$bu->image}}"  width="100px">
               @endif
             @endif


                {!! Form::file('image',null,['class'=>'form-control']) !!}
                @if ($errors->has('image'))
                    <span class="help-block">
                        <strong>{{ $errors->first('image') }}</strong>
                    </span>
                @endif
            </div>
            <label for="bu_larg_dis" class="col-md-1"> صورة العقار  </label>

        </div>
        <div class="clear-fix">
        </div>




    <div class="form-group">
        <div class="col-md-offset-8 col-md-2">
            <button type="submit" class="btn btn-warning">
          تنفيذ
            </button>
        </div>



    </div>
