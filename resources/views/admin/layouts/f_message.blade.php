@if(Session::has('message'))
<script type="text/javascript">
  swal("{{Session::get('flash_message')}}", "رسالة إعلامية", "success");
</script>
@endif
