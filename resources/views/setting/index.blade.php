@extends('admin')

@section("css")

    {{--ckeditor--}}


    <link rel="stylesheet" href="{{asset('css/neo.css')}}">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/at.js/1.4.0/css/jquery.atwho.min.css">

    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">


    <style>
        img.ui-datepicker-trigger {
            width: 20px;
            height: 20px;
            margin-top: 20px;
        }
        body {
            text-align: center;
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
                                    setting
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
                            {{--<p id="key_msg"></p>--}}
                            {{--<p id="value_msg"></p>--}}

                        {{--</div>--}}

                        <form method="POST" action="{{route('setting.create')}}" class="setting_create">
                            {{csrf_field()}}
                            <div class="form-group">
                                <input type="text" value=" " hidden class="form-control" id="id" name="id" placeholder="id">
                            </div>

                            <div class="form-group">
                                <label>conference</label>
                                <input type="text" value=""  class="form-control" id="key" name="key" placeholder="key">
                            </div>


                            <div class="adjoined-bottom">
                                <div class="grid-container">
                                    <div class="grid-width-100">
                                        <div id="editor">

                                    </div>
                                </div>
                            </div>

                      </div>
                            <input type="text" value="" hidden name="value" id="value" >
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
                                                {{--<p id="key_msg1"></p>--}}
                                                {{--<p id="value_msg1"></p>--}}
                                            {{--</div>--}}

                                            <form method="POST" action="{{route('setting.edit.new')}}" class="setting_edit" >
                                                {{csrf_field()}}
                                                {{method_field('PATCH')}}
                                                <div class="form-group">
                                                    <input type="hidden" value=""  class="form-control" id="id1" name="setting_id" placeholder="id">
                                                </div>


                                                <div class="form-group">
                                                    <label>key</label>
                                                    <input type="text" value=""  class="form-control" id="key1" name="key" placeholder="key">
                                                </div>

                                                <div class="adjoined-bottom">
                                                    <div class="grid-container">
                                                        <div class="grid-width-100">
                                                            <div id="editor1">

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <input type="text" value="" hidden name="value" id="value1" >

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

                                <th scope="col">key</th>
                                <th scope="col">value</th>

                                <th scope="col">created_at</th>
                                <th scope="col">updated_at</th>


                                    <th scope="col">Action</th>


                            </tr>
                            </thead>
                            <tbody id="hamada">

                                @foreach($items as $i)
                                    <tr id="row_setting{{$i->id}}">
                                        <th scope="row">{{$i->id}}</th>
                                        <td id="key_cont_{{$i->id}}">{{$i->key}}</td>
                                        <td id="value_cont_{{$i->id}}">{!!$i->value!!}</td>
                                        <td>{{$i->created_at}}</td>
                                        <td>{{$i->updated_at}}</td>

                                        @if(Auth::user() && (Auth::user()->partition_id == 1 || Auth::user()->partition_id == 3))

                                            <td>
                                                <div class="m-btn-group m-btn-group--pill btn-group m-btn-group m-btn-group--pill btn-group-sm" role="group" aria-label="First group">
                                                    <button  onclick="getSetting({{$i->id}})"  type="button" data-toggle="modal" data-target="#slider_edit" class="m-btn btn btn-primary">
                                                        <i class="flaticon-edit-1"></i>
                                                    </button>

                                                    <button data-setting="{{$i->id}}" type="button" data-toggle="modal" data-target="#confirmModal" class="delete1 m-btn btn btn-danger">
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
                        {{--<div class="table table-striped- table-bordered table-hover table-checkable" id="m_table_12">--}}

                            {{--<table class="table">--}}

                                {{--<thead>--}}
                                {{--<tr>--}}
                                    {{--<th scope="col">#</th>--}}

                                    {{--<th scope="col">key</th>--}}
                                    {{--<th scope="col">value</th>--}}

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
                                {{--<tr id="row_setting{{$i->id}}">--}}
                                    {{--<th scope="row">{{$i->id}}</th>--}}
                                    {{--<td id="key_cont_{{$i->id}}">{{$i->key}}</td>--}}
                                    {{--<td id="value_cont_{{$i->id}}">{!!$i->value!!}</td>--}}
                                    {{--<td>{{$i->created_at}}</td>--}}
                                    {{--<td>{{$i->updated_at}}</td>--}}

                                    {{--@if(Auth::user() && (Auth::user()->partition_id == 1 || Auth::user()->partition_id == 3))--}}

                                    {{--<td><a data-setting="{{$i->id}}" type="button" class="delete1 btn btn-danger"><i class="fas fa-trash-alt"></i></a> </td>--}}
                                    {{--<td><a onclick="getSetting({{$i->id}})" type="button" class="btn btn-info" data-toggle="modal" data-target="#slider_edit">--}}
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
    {{--<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">--}}
        {{--<div class="modal-dialog modal-dialog-centered" role="document">--}}
            {{--<div class="modal-content">--}}
                {{--<div class="modal-header">--}}
                    {{--<h5 class="modal-title" id="exampleModalCenterTitle">confirmation</h5>--}}
                    {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                        {{--<span aria-hidden="true">&times;</span>--}}
                    {{--</button>--}}
                {{--</div>--}}
                {{--<div class="modal-body">--}}
                    {{--Are you sure you want to continue the process?--}}
                {{--</div>--}}
                {{--<div class="modal-footer">--}}
                    {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>--}}
                    {{--<a href="#"  onclick="getDelete({{$i->id}})" id="delete" class="delete1 btn btn-danger">Yes, sure</a>--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection()


@section("js")

    {{--ckeditor--}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{asset('assets/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/ckeditor.js')}}"></script>
    <script src="{{asset('js/sample.js')}}"></script>

    <script>
        $(document).ready(function () {
            $('#m_table_12').DataTable({
                pageLength: 15,
                paging: true,
                searching: true,
            });
        });
        initSample();
        CKEDITOR.replace( 'editor1' );
        CKEDITOR.add
    </script>

    <script>

    // create
    $('body').on('submit',".setting_create",function (e) {
        loader();
        e.preventDefault();
        var item='';
        // var val=$('#editor').html();
        // var new_val = $.trim(val);
        var new_val =CKEDITOR.instances["editor"].getData();
        $('#value').val(new_val);
        // CKEDITOR.instances["editor"].setData(new_val);
        $action = $(this).attr("action");
        $data = $(this).serialize();
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
                    tosterSuccess('Success create setting');
                    $item='<tr id="row_sitting '+response.item.id+'">\n' +
                        '     <th scope="row">'+response.item.id+'</th>' +
                        '     <td>'+response.item.key+'</td>' +
                        '     <td>'+response.item.value+'</td>' +
                        '     <td>'+response.item.created_at+'</td>' +
                        '     <td>'+response.item.updated_at+'</td>' +
                        '  <td>' +
                            '<div class="m-btn-group m-btn-group--pill btn-group m-btn-group m-btn-group--pill btn-group-sm" role="group" aria-label="First group">\n' +
                        '     <button onclick="getSetting('+response.item.id+')" type="button" data-toggle="modal" data-target="#slider_edit" class="m-btn btn btn-primary">\n' +
                        '         <i class="flaticon-edit-1"></i>\n' +
                        '     </button>\n' +
                        '\n' +
                        '     <button data-setting="'+response.item.id+'" type="button" data-toggle="modal" data-target="#confirmModal" class="delete1 m-btn btn btn-danger">\n' +
                        '         <i class="flaticon-delete-1"></i>\n' +
                        '     </button>\n' +
                        ' </div>' +
                        '</td>' +
                        ' </tr>'
                    $('#hamada').append($item);
                    CKEDITOR.instances["editor"].getData();
                    $(".setting_create")[0].reset();

                    setTimeout(function(){
                        $('#slider_create').modal('toggle');

                    }, 3000);

                } else {

                }
                clear_loader();
            },error: function(data){
                clear_loader();

                var error = data.responseJSON;
                var errors= error.errors;

                $.each(errors, function( k, v ) {
                    tosterError(v);

                });

            }
        });

        // function clear() {
        //     $("#key_msg").html('');
        //     $("#value_msg").html('');
        // }
    });

    //edit
    function getSetting($id) {
        $item_setting=$id;
        $.get('{{route('setting.edit.new')}}',{item_setting:$item_setting},function(data){
            $("#id1").val(data.item.id);
            $("#key1").val(data.item.key);
            $("#value1").text(data.item.value);
            CKEDITOR.instances["editor1"].setData(data.item.value);

        });
    }

    //update
    $('body').on('submit',".setting_edit",function (e) {
        loader();
        e.preventDefault();
        // var item='';
        var new_val =CKEDITOR.instances["editor1"].getData();
        $('#value1').val(new_val);
        $action = $(this).attr("action");
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
                    tosterSuccess('Success update setting');
                    $('#key_cont_'+response.id_new).text(response.new_key);
                    $('#value_cont_'+response.id_new).text(response.new_value);

                } else {
                }
            },error: function(data){
                var error = data.responseJSON;
                var errors= error.errors;
                $.each(errors, function( k, v ) {
                    tosterError(v);

                });
            }
        });

    });

    // $(function(){
    //     $(".confirm").click(function(){
    //         $("#confirmModal .btn-danger").attr("href", $(this).attr("href"));
    //         $("#confirmModal").modal("show");
    //         return false;
    //     });


    //delete
    // .on('click', '#delete', function(e) {
    //     $form.trigger('submit');
    // });

    // function getDelete($id) {
    //     $item_setting=$id;
    //
    // }
    $(".delete1").click(function(event){
        event.preventDefault();
        var r = confirm("Are you sure you want to continue the process?");
            $item_setting = $(this).data("setting");
        if (r == true) {
            $.get('{{route('setting.destroy.new')}}', {item_setting: $item_setting}, function (data) {
                if (data.status == true) {
                    $("#row_setting" + $item_setting).hide();
                }

            })

        }else {}
    });



</script>

@endsection()
