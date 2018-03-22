@extends('admin.layouts.layout')
@section('title')
لوحة التحكم بالأعضاء
@endsection

@section('header')
{!! Html::style('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}
<style media="screen">
  th,td
  {
    text-align: center;
  }
</style>
@endsection



@section('content')

@include('admin.layouts.message')
<section class="content-header" >
      <h1 style="text-align:center">
      التحكم في الأعضاء

      </h1>
    <h4>
      <ol class="breadcrumb" style="left:10px">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i>الرئيسية</a></li>
        <li><a href="{{url('/adminpanel/users')}}">التحكم في الأعضاء</a></li>

      </ol>
    </h4>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">الأعضاء</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead >
                <tr >
                  <th>#</th>
                  <th>الاسم</th>
                  <th>البريد الإلكتروني</th>
                  <th>أضيف في</th>
                  <th>عقاراتي</th>
                    <th>الصلاحيات</th>
                    <th>التحكم </th>
                </tr>
                </thead>
                <tbody>
                  @foreach($user as $userinfo)
                  <tr>

                    <td><a href="{{url('/adminpanel/users/'.$userinfo->id.'/edit')}}">{{$userinfo->id}}</a></td>
                    <td><a href="{{url('/adminpanel/users/'.$userinfo->id.'/edit')}}"> {{$userinfo->name}} </a></td>
                    <td>{{$userinfo->email}}</td>
                    <td>{{$userinfo->created_at}}</td>
                 <td> <a  class="btn btn-circle" href="{{url('/adminpanel/bu/'.$userinfo->id)}}"><i class="fa fa-link"></i>  </a> </td>

                    <td>
                      <!-- 1=admin directions of arabic and english make some confusion  -->
                {{$userinfo->admin==1?"مدير":"عضو"}}
                    </td>
                    <td>
                      <a class="btn btn-success" href="{{url('/adminpanel/users/'.$userinfo->id.'/edit')}}"> <i class="fa fa-pencil"></i>   تعديل</a>
@if($userinfo->id !=1)
                      <a class="btn btn-danger" href="{{url('/adminpanel/users/'.$userinfo->id.'/delete')}}">  <i class="fa fa-minus"></i> حذف </a>
@endif
                    </td>

                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>#</th>
                    <th>الاسم</th>
                    <th>البريد الإلكتروني</th>
                    <th>أضيف في</th>
                     <th>عقاراتي </th>
                      <th>الصلاحيات</th>
                      <th>التحكم </th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


      </div>
      <!-- /.row -->
        </div>
    </section>
    <!-- /.content -->

@endsection





@section('footer')
{!! Html::script('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') !!}
{!! Html::script('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}

<script type="text/javascript">

$('#example2').DataTable({
      'paging'      : true,
      'lengthChang e': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });

</script>


{{--

  <script type="text/javascript">


        var lastIdx = null;

    $('#data thead th').each( function () {
        if($(this).index()  < 4 ){
            var classname = $(this).index() == 6  ?  'date' : 'dateslash';
            var title = $(this).html();
            $(this).html( '<input type="text" class="' + classname + '" data-value="'+ $(this).index() +'" placeholder=" البحث '+title+'" />' );
        }else if($(this).index() == 4){
            $(this).html( '<select><option value="0"> عضو </option><option value="1"> مدير الموقع </option></select>' );
        }

    } );

    var table = $('#data').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ url('/adminpanel/users/data') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'created_at', name: 'created_at'},
            {data: 'admin', name: 'admin'},

            {data: 'control', name: ''}
        ],
        "language": {
            "url": "{{ Request::root()  }}/admin/cus/Arabic.json"
        },
        "stateSave": false,
        "responsive": true,
        "order": [[0, 'desc']],
        "pagingType": "full_numbers",
        aLengthMenu: [
            [25, 50, 100, 200, -1],
            [25, 50, 100, 200, "All"]
        ],
        iDisplayLength: 25,
        fixedHeader: true,

        "oTableTools": {
            "aButtons": [


                {
                    "sExtends": "csv",
                    "sButtonText": "ملف اكسل",
                    "sCharSet": "utf16le"
                },
                {
                    "sExtends": "copy",
                    "sButtonText": "نسخ المعلومات",
                },
                {
                    "sExtends": "print",
                    "sButtonText": "طباعة",
                    "mColumns": "visible",


                }
            ],

            "sSwfPath": "{{ Request::root()  }}/admin/cus/copy_csv_xls_pdf.swf"
        },

        "dom": '<"pull-left text-left" T><"pullright" i><"clearfix"><"pull-right text-right col-lg-6" f > <"pull-left text-left" l><"clearfix">rt<"pull-right text-right col-lg-6" pi > <"pull-left text-left" l><"clearfix"> '
        ,initComplete: function ()
        {
            var r = $('#data tfoot tr');
            r.find('th').each(function(){
                $(this).css('padding', 8);
            });
            $('#data thead').append(r);
            $('#search_0').css('text-align', 'center');
        }

    });

    table.columns().eq(0).each(function(colIdx) {
        $('input', table.column(colIdx).header()).on('keyup change', function() {
            table
                    .column(colIdx)
                    .search(this.value)
                    .draw();
        });




    });



    table.columns().eq(0).each(function(colIdx) {
        $('select', table.column(colIdx).header()).on('change', function() {
            table
                    .column(colIdx)
                    .search(this.value)
                    .draw();
        });

        $('select', table.column(colIdx).header()).on('click', function(e) {
            e.stopPropagation();
        });
    });


    $('#data tbody')
            .on( 'mouseover', 'td', function () {
                var colIdx = table.cell(this).index().column;

                if ( colIdx !== lastIdx ) {
                    $( table.cells().nodes() ).removeClass( 'highlight' );
                    $( table.column( colIdx ).nodes() ).addClass( 'highlight' );
                }
            } )
            .on( 'mouseleave', function () {
                $( table.cells().nodes() ).removeClass( 'highlight' );
            } );




    </script>

  --}}

@endsection
