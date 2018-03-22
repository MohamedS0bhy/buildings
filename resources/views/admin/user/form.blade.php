
    {{ csrf_field() }}
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" style="padding-bottom:20px">
        <label for="name" class="col-md-4 control-label">Name</label>

        <div class="col-md-6">
            {!! Form::text('name',null,['class'=>'form-control']) !!}
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <br>
    <br>
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

        <div class="col-md-6">
          {!! Form::text('email',null,['class'=>'form-control']) !!}
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>
<div class="clearfix">

</div>
<br>
<br>
@if(!Isset($showforuser))
    <div class="form-group{{ $errors->has('admin') ? ' has-error' : '' }}">
        <label for="admin" class="col-md-4 control-label">autherity</label>

        <div class="col-md-6">
            {!! Form::select('admin',['0'=>'user','1'=>'admin'],null,['class'=>'form-control']) !!}
            @if ($errors->has('admin'))
                <span class="help-block">
                    <strong>{{ $errors->first('admin') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="clearfix">

    </div>
    @endif

@if(!Isset($user))
<br>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password" class="col-md-4 control-label">Password</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control" name="password" required>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div>
    </div>
@endif
<br>

    <div class="form-group">
        <div class="col-md-offset-8 col-md-2">
            <button type="submit" class="btn btn-warning">
          تنفيذ
            </button>
        </div>



    </div>
