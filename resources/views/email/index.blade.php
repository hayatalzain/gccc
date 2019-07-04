@extends('admin')

@section("css")
    {{--<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />--}}
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <style>
        img.ui-datepicker-trigger {
            width: 20px;
            height: 20px;
            margin-top: 20px;
        }
    </style>
@endsection( )

@section("content")

    <div class="row">
        <div class="container">
            <div class="col-12">
                <div class="m-portlet m-portlet--mobile ">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Email
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <!--begin: Datatable -->

                            <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_12">

                                <thead>
                                <tr>
                                    <th scope="col">#</th>

                                    <th scope="col">email</th>

                                    <th scope="col">created_at</th>
                                    <th scope="col">updated_at</th>
                                    <th scope="col">delete</th>
                                    @if(Auth::user() && (Auth::user()->partition_id == 1 || Auth::user()->partition_id == 3))
                                    {{--<th scope="col">delete</th>--}}
                                    {{--<th scope="col">update</th>--}}
@endif
                                </tr>
                                </thead>

                                <tbody  id="hamada">
                                @foreach($items as $i)
                                <tr id="row_features{{$i->id}}">
                                    <th scope="row">{{$i->id}}</th>
                                    <td id="conference_cont_{{$i->id}}">{{$i->email}}</td>
                                    <td>{{$i->created_at}}</td>
                                    <td>{{$i->updated_at}}</td>
                                    {{--@if(Auth::user() && (Auth::user()->partition_id == 1 || Auth::user()->partition_id == 3))--}}
                                    {{--<td><a data-conference="{{$i->id}}" type="button" class="delete1 btn btn-danger"><i class="fas fa-trash-alt"></i></a> </td>--}}
                                    <td>
                                        <a data-features="{{$i->id}}" type="button" class="delete1 btn btn-danger">
                                            <i class="fas fa-trash-alt"></i></a></td>
                                        {{--@endif--}}
                                </tr>

                                @endforeach

                                </tbody>

                            </table>



                        <!--end: Datatable -->
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection()


@section("js")
    <script src="{{asset('assets/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        $('#m_table_12').DataTable({
            pageLength: 15,
            paging: true,
            searching: true,
        });
    });

    $(".delete1").click(function(event){
        event.preventDefault();
        var r = confirm("Are you sure you want to continue the process?");
        $item_features= $(this).data("features")
        if (r == true) {

            $.get('{{route('email.destroy.new')}}', {item_features: $item_features}, function (data) {
                if (data.status == true) {
                    alert("jjhjhjh");
                    $("#row_features" + $item_features).hide();
                }

            })
        }else {}
    });
</script>

@endsection()
