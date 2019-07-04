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
                                    conference
                                </h3>
                            </div>
                        </div>

                        <div class="m-portlet__head-tools">
                            @if(Auth::user() && (Auth::user()->partition_id == 1 || Auth::user()->partition_id == 2))
                            <div>
                                <a href="#"  data-toggle="modal" data-target="#slider_create" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air">
														<span>
															<i class="la la-plus"></i>
															<span>
																Create
															</span>
														</span>
                                </a>
                            </div>
                                @endif
                        </div>
                    </div>
  {{--create modal--}}
<div class="row">
    <div class="container">
        <div class="modal fade bd-example-modal-lg" id="slider_create" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Modal Header</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body">

                        {{--<div class="alert" id="formMessageSuccess"></div>--}}
                        {{--<div class="alert" id="form-messages" role="alert">--}}
                            {{--<p id="conference_title_msg"></p>--}}
                            {{--<p id="conference_msg"></p>--}}
                            {{--<p id="date_msg"></p>--}}

                        {{--</div>--}}

                        <form method="POST" action="{{route('conference.create')}}" class="conference_create"  enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <input type="text" value="" hidden class="form-control" id="id" name="id" placeholder="id">
                            </div>

                            <div class="form-group">
                                <label>conference</label>
                                <input type="text" value=""  class="form-control" id="conference" name="conference" placeholder="conference">
                            </div>

                            <div class="form-group">
                                <label>conference title</label>
                                <input type="text" value=""  class="form-control" id="conference_title" name="conference_title" placeholder="conference title">
                            </div>

                            <div class="form-group">
                                <label for="date">date</label>
                                <input type="date" value="" readonly  name='date' data-date-format="Y-m-d" class="form-control" id="date">

                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


                    {{--edit modal--}}
                    <div class="row">
                        <div class="container">
                            <div class="modal fade bd-example-modal-lg" id="slider_edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Modal Header</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>

                                        </div>
                                        <div class="modal-body">
                                            {{--<div class="alert" id="formMessageSuccess1"></div>--}}
                                            {{--<div class="alert" id="form-messages1" role="alert">--}}
                                                {{--<p id="conference_title_msg1"></p>--}}
                                                {{--<p id="conference_msg1"></p>--}}
                                                {{--<p id="date_msg1"></p>--}}

                                            {{--</div>--}}

                                            <form method="POST" action="{{route('conference.edit.new')}}" class="conference_edit"  enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                {{method_field('PATCH')}}
                                                <div class="form-group">
                                                    <input type="hidden" value=""  class="form-control" id="id1" name="conference_id" placeholder="id">
                                                </div>


                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">conference title</label>
                                                    <input type="text" value=""  class="form-control" id="conference_title1" name="conference_title" placeholder="conference title">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">conference</label>
                                                    <input type="text" value=""  class="form-control" id="conference1" name="conference" placeholder="conference">
                                                </div>

                                                <div class="form-group">
                                                    <label for="date">date</label>
                                                    <input type="date" value="" readonly  name='date' data-date-format="Y-m-d" class="form-control" id="date1">
                                                </div>

                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="m-portlet__body">
                        <!--begin: Datatable -->
                        <table class="table table-striped- table-bordered table-hover table-checkable"  id="m_table_12">
                            <thead>
                            <tr>
                                <th scope="col">#</th>

                                <th scope="col">conference</th>
                                <th scope="col">conference title</th>
                                <th scope="col">date</th>

                                <th scope="col">created_at</th>
                                <th scope="col">updated_at</th>


                                <th scope="col">Action</th>


                            </tr>
                            </thead>
                            <tbody id="hamada">

                            @foreach($items as $i)
                                <tr id="row_conference{{$i->id}}">
                                    <th scope="row">{{$i->id}}</th>
                                    <td id="conference_cont_{{$i->id}}">{{$i->conference}}</td>
                                    <td id="conference_title_cont_{{$i->id}}">{{$i->conference_title}}</td>
                                    <td id="date_cont_{{$i->id}}">{{$i->date}}</td>
                                    <td>{{$i->created_at}}</td>
                                    <td>{{$i->updated_at}}</td>

                                    @if(Auth::user() && (Auth::user()->partition_id == 1 || Auth::user()->partition_id == 3))

                                        <td>
                                            <div class="m-btn-group m-btn-group--pill btn-group m-btn-group m-btn-group--pill btn-group-sm" role="group" aria-label="First group">
                                                <button  onclick="getConference({{$i->id}})"  type="button" data-toggle="modal" data-target="#slider_edit" class="m-btn btn btn-primary">
                                                    <i class="flaticon-edit-1"></i>
                                                </button>

                                                <button  data-conference="{{$i->id}}" type="button" data-toggle="modal" data-target="#confirmModal" class="delete1 m-btn btn btn-danger">
                                                    <i class="flaticon-delete-1"></i>
                                                </button>
                                            </div>
                                        </td>
                                    @endif
                                </tr>

                            @endforeach


                            </tbody>
                        </table>
                    </div>
                    {{--<div class="m-portlet__body">--}}
                        {{--<!--begin: Datatable -->--}}
                        {{--<div class="m_datatable m-datatable m-datatable--default m-datatable--error m-datatable--scroll m-datatable--loaded" id="m_datatable_latest_orders" style="position: static; zoom: 1;">--}}

                            {{--<table class="table">--}}
                                {{--<caption>List of users</caption>--}}
                                {{--<thead>--}}
                                {{--<tr>--}}
                                    {{--<th scope="col">#</th>--}}

                                    {{--<th scope="col">conference</th>--}}
                                    {{--<th scope="col">conference title</th>--}}
                                    {{--<th scope="col">date</th>--}}

                                    {{--<th scope="col">created_at</th>--}}
                                    {{--<th scope="col">updated_at</th>--}}
                                    {{--@if(Auth::user() && (Auth::user()->partition_id == 1 || Auth::user()->partition_id == 3))--}}
                                    {{--<th scope="col">delete</th>--}}
                                    {{--<th scope="col">update</th>--}}
{{--@endif--}}
                                {{--</tr>--}}
                                {{--</thead>--}}

                                {{--<tbody  id="hamada">--}}
                                {{--@foreach($items as $i)--}}
                                {{--<tr id="row_conference{{$i->id}}">--}}
                                    {{--<th scope="row">{{$i->id}}</th>--}}
                                    {{--<td id="conference_cont_{{$i->id}}">{{$i->conference}}</td>--}}
                                    {{--<td id="conference_title_cont_{{$i->id}}">{{$i->conference_title}}</td>--}}
                                    {{--<td id="date_cont_{{$i->id}}">{{$i->date}}</td>--}}
                                    {{--<td>{{$i->created_at}}</td>--}}
                                    {{--<td>{{$i->updated_at}}</td>--}}

                                    {{--@if(Auth::user() && (Auth::user()->partition_id == 1 || Auth::user()->partition_id == 3))--}}
                                    {{--<td><a data-conference="{{$i->id}}" type="button" class="delete1 btn btn-danger"><i class="fas fa-trash-alt"></i></a> </td>--}}
                                    {{--<td><a onclick="getConference({{$i->id}})" type="button" class="btn btn-info" data-toggle="modal" data-target="#slider_edit">--}}
                                            {{--<i class="fas fa-edit"></i></a></td>--}}
                                        {{--@endif--}}
                                {{--</tr>--}}

                                {{--@endforeach--}}

                                {{--</tbody>--}}

                            {{--</table>--}}


                        {{--</div>--}}
                        {{--<!--end: Datatable -->--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>

    </div>

@endsection()


@section("js")

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="{{asset('assets/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

    <script>

        $(document).ready(function () {
            $('#m_table_12').DataTable({
                pageLength: 15,
                paging: true,
                searching: true,
            });
        });
    $("#date").datepicker({
        dateFormat: "yy-mm-dd",
        showOn: "button",
        buttonImage: "https://cdn4.iconfinder.com/data/icons/small-n-flat/24/calendar-512.png",
        buttonImageOnly: true,
        buttonText: "Select date"
    });
    $("#date1").datepicker({
        dateFormat: "yy-mm-dd",
        showOn: "button",
        buttonImage: "https://cdn4.iconfinder.com/data/icons/small-n-flat/24/calendar-512.png",
        buttonImageOnly: true,
        buttonText: "Select date"
    });
</script>

<script>

    // create
    $('body').on('submit',".conference_create",function (e) {
        loader();
        // clear();
        e.preventDefault();
        var item='';
        $action = $(this).attr("action");
        $data = $(this).serialize();
        // var formMessages = $('#form-messages');
        // var formMessageSuccess= $('#formMessageSuccess');
        var formData = new FormData($(this)[0]);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN':'{{csrf_token()}}'
            }
        });
        $.ajax({
            url: $action,
            type: "POST",
            data: formData,
            async: true,
            processData: false,
            contentType: false,
            dataType: "json",
            cache  : false,

            success: function (response) {
                if (response.status == true) {
                    tosterSuccess('Success create conference');
                    $item='  <tr id="row_conference '+response.item.id+'">\n' +
                        '     <th scope="row">'+response.item.id+'</th>' +
                        '     <td>'+response.item.conference+'</td>' +
                        '     <td>'+response.item.conference_title+'</td>' +
                        '     <td>'+response.item.date+'</td>' +
                        '     <td>'+response.item.created_at+'</td>' +
                        '     <td>'+response.item.updated_at+'</td>' +
                        '  <td>' +
                        '<div class="m-btn-group m-btn-group--pill btn-group m-btn-group m-btn-group--pill btn-group-sm" role="group" aria-label="First group">\n' +
                        '     <button onclick="getConference('+response.item.id+')" type="button" data-toggle="modal" data-target="#slider_edit" class="m-btn btn btn-primary">\n' +
                        '         <i class="flaticon-edit-1"></i>\n' +
                        '     </button>\n' +
                        '\n' +
                        '     <button data-conference="'+response.item.id+'" type="button" data-toggle="modal" data-target="#confirmModal" class="delete1 m-btn btn btn-danger">\n' +
                        '         <i class="flaticon-delete-1"></i>\n' +
                        '     </button>\n' +
                        ' </div>' +
                        '</td>' +
                        ' </tr>'
                    $('#hamada').append($item);
                    $(".conference_create")[0].reset();


                    setTimeout(function(){
                        $('#slider_create').modal('toggle');

                    }, 3000);

                } else {

                }
                clear_loader();
            },error: function(data){
                clear_loader();
                // formMessageSuccess.removeClass('alert-success').empty();
                //
                // formMessages.addClass('alert-danger');

                var error = data.responseJSON;
                var errors= error.errors;
                $.each(errors, function( k, v ) {
                    tosterError(v);

                });
                // if(typeof(errors['conference']) != "undefined"){
                //     $("#conference_msg").html(errors['conference'][0]);
                // }
                //
                // if(typeof(errors['conference_title']) != "undefined"){
                //     $("#conference_title_msg").html(errors['conference_title'][0]);
                // }
                //
                // if(typeof(errors['date']) != "undefined"){
                //     $("#date_msg").html(errors['date'][0]);
                // }
            }
        });

        function clear() {
            $("#conference_msg").html('');
            $("#conference_title_msg").html('');
            $("#date_msg").html('');
        }
    });


    //edit
    function getConference($id) {
        $item_conference=$id;
        $.get('{{route('conference.edit.new')}}',{item_conference:$item_conference},function(data){
            $("#id1").val(data.item.id);
            $("#conference1").val(data.item.conference);
            $("#conference_title1").val(data.item.conference_title);
            $("#date1").val(data.item.date);
        });
    }

    //update
    $('body').on('submit',".conference_edit",function (e) {
        loader();
        // clear1()
        e.preventDefault();
        var item='';
        $action = $(this).attr("action");


        // var formMessages = $('#form-messages1');
        // var formMessageSuccess= $('#formMessageSuccess1');
        var formData = new FormData($(this)[0]);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN':'{{csrf_token()}}'
            }
        });
        $.ajax({
            url: $action,
            type: "Post",
            data: formData,
            async: true,
            processData: false,
            contentType: false,
            dataType: "json",
            cache    : false,

            success: function (response) {
                if (response.status == true) {
                    tosterSuccess('Success update conference');

                    // formMessages.removeClass('alert-danger');
                    // formMessageSuccess.addClass('alert-success').text('success create');

                    // $old =$('#conference1').val();
                   $('#conference_cont_'+response.id_new).text($('#conference1').val());
                    // alert($('#conference_cont_'+response.id_new).text());
                    // alert($old);
                    // $('#conference_cont_'+response.id_new).text(response.new_conference);
                    $('#conference_title_cont_'+response.id_new).text($('#conference_title1').val());
                    $('#date_cont_'+response.id_new).text($('#date1').val());

                } else {
                }
                clear_loader();
            },error: function(data){
                clear_loader();
                // formMessageSuccess.removeClass('alert-success').empty();
                // formMessages.addClass('alert-danger');
                var error = data.responseJSON;
                var errors= error.errors;
                $.each(errors, function( k, v ) {
                    tosterError(v);

                });
                // if(typeof(errors['conference']) != "undefined"){
                //     $("#conference_msg1").html(errors['conference'][0]);
                // }
                // if(typeof(errors['conference_title']) != "undefined"){
                //     $("#conference_title_msg1").html(errors['conference_title'][0]);
                // }
                // if(typeof(errors['date']) != "undefined"){
                //     $("#date_msg1").html(errors['date'][0]);
                // }
            }
        });
        function clear1() {
            $("#conference_msg1").html('');
            $("#conference_title_msg1").html('');
            $("#date_msg1").html('');
        }
    });

    //delet
    $(".delete1").click(function(event){
        event.preventDefault();
        var r = confirm("Are you sure you want to continue the process?");
        $item_conference= $(this).data("conference")
        if (r == true) {
            $.get('{{route('conference.destroy.new')}}', {item_conference: $item_conference}, function (data) {
                if (data.status == true) {

                    $("#row_conference" + $item_conference).hide();
                }

            })
        }else {}
    });
</script>
@endsection()
