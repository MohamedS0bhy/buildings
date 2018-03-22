@if (Session::has('success'))
<div class="alert alert-dismissable alert-success">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    {{ Session::get('success') }}
</div>
@endif
