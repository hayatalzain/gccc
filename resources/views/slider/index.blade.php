@extends('admin')

@section("css")
    {{--<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />--}}
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/at.js/1.4.0/css/jquery.atwho.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
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
                                    Slider
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

                    {{--modal create--}}
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
                                {{--<p id="title_msg"></p>--}}
                                {{--<p id="date_msg"></p>--}}
                                {{--<p id="image_msg"></p>--}}
                                {{--<p id="details_msg"></p>--}}
                                {{--<p id="type_msg"></p>--}}
                                {{--<p id="read_more_msg"></p>--}}
                            {{--</div>--}}

                        <form method="POST" action="{{route('slider.create')}}" class="slider_create"  enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="form-group">
                                <input type="text" value="" hidden class="form-control" id="id" name="id" placeholder="id">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" value=""  class="form-control" id="title" name="title" placeholder="title">
                            </div>

                            <div class="form-group">
                                <label for="Date">date</label>
                                <input type="text" readonly name="date" id="date" value="" data-date-format="Y-m-d" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">image</label>
                                <input value="" id="image" name="image" type="file" placeholder="image">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">details</label>
                                <textarea value="" class="form-control" id="details" name="details" placeholder="details">
                                </textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">type</label>
                                <select class="form-control" name="type" id="type">
                                    <option value="">Select type</option>
                                    <option selected value="1" >min</option>
                                    <option value="2">sub</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="read_more">read more</label>
                                <input type="text"  value="" class="form-control" id="read_more" name="read_more" placeholder="read more">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

                    {{--modal edit--}}
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
                                                {{--<p id="title_msg1"></p>--}}
                                                {{--<p id="date_msg1"></p>--}}
                                                {{--<p id="image_msg1"></p>--}}
                                                {{--<p id="details_msg1"></p>--}}
                                                {{--<p id="type_msg1"></p>--}}
                                                {{--<p id="read_more_msg1"></p>--}}
                                            {{--</div>--}}

                                            <form method="POST" action="{{route('slider.edit.new')}}" class="slider_edit"  enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                {{method_field('PATCH')}}
                                                <div class="form-group">
                                                    <input type="text" value="" hidden class="form-control" id="id1" name="slider_id" placeholder="id">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Title</label>
                                                    <input type="text" value=""  class="form-control" id="title1" name="title" placeholder="title">
                                                </div>

                                                <div class="form-group">
                                                    <label for="Date">date</label>
                                                    <input type="text" readonly name="date" id="date1" value="" data-date-format="Y-m-d" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">image</label>
                                                    <input value="" id="image1" name="image" type="file" placeholder="image">
                                                    <img src="" id="img_cont" class="img-responsive" width="70" height="80"/>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">details</label>
                                                    <textarea value="" class="form-control" id="details1" name="details" placeholder="details">
                                </textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">type</label>
                                                    <select class="form-control" name="type" id="type1">
                                                        <option value="">Select type</option>
                                                        <option selected value="1" >min</option>
                                                        <option value="2">sub</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="read_more">read more</label>
                                                    <input type="text"  value="" class="form-control" id="read_more1" name="read_more" placeholder="read more">
                                                </div>

                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


        <div class="m-portlet__body">
            <!--begin: Datatable -->
            <div class="m_datatable m-datatable m-datatable--default m-datatable--error m-datatable--scroll m-datatable--loaded" id="m_datatable_latest_orders" style="position: static; zoom: 1;">

                <table class="table table-striped- table-bordered table-hover table-checkable"  id="m_table_12">
                    <thead>
                    <tr>
                        <th scope="col">#</th>

                        <th scope="col">title</th>
                        <th scope="col">date</th>
                        <th scope="col">image</th>

                        <th scope="col">details</th>
                        <th scope="col">type</th>
                        <th scope="col">read_more</th>

                        <th scope="col">created_at</th>
                        <th scope="col">updated_at</th>

                        @if(Auth::user() && (Auth::user()->partition_id == 1 || Auth::user()->partition_id == 3))
                            <th scope="col">action</th>
                            {{--<th scope="col">update</th>--}}
                        @endif

                    </tr>
                    </thead>
                    <tbody  id="hamada">
                    @foreach($items as $i)
                        <tr id="row_slider{{$i->id}}">
                            <th scope="row">{{$i->id}}</th>
                            <td id="title_cont_{{$i->id}}">{{$i->title}}</td>
                            <td id="date_cont_{{$i->id}}">{{$i->date}}</td>
                            <td><img id="img_cont1_{{$i->id}}" src="{{asset('/storage/images/'. $i->image)}}" width="70" height="80"></td>
                            <td id="details_cont_{{$i->id}}">{{$i->details}}</td>
                            <td id="type_cont_{{$i->id}}">{{$i->type}}</td>
                            <td id="read_more_cont_{{$i->id}}">{{$i->read_more}}</td>

                            <td>{{$i->created_at}}</td>
                            <td>{{$i->updated_at}}</td>

                            @if(Auth::user() && (Auth::user()->partition_id == 1 || Auth::user()->partition_id == 3))
                            <td>
                                <div class="m-btn-group m-btn-group--pill btn-group m-btn-group m-btn-group--pill btn-group-sm" role="group" aria-label="First group">
                                    <button onclick="getSlider({{$i->id}})" type="button" data-toggle="modal" data-target="#slider_edit" class="m-btn btn btn-primary">
                                        <i class="flaticon-edit-1"></i>
                                    </button>

                                    <button data-slider="{{$i->id}}" type="button" data-toggle="modal" data-target="#confirmModal" class="delete1 m-btn btn btn-danger">
                                        <i class="flaticon-delete-1"></i>
                                    </button>
                                </div>
                            </td>
                                {{--<a data-slider="{{$i->id}}" type="button" class="delete1 btn btn-danger"><i class="fas fa-trash-alt"></i></a> </td>--}}
                            {{--<td><a onclick="getSlider({{$i->id}})" type="button" class="btn btn-info" data-toggle="modal" data-target="#slider_edit">--}}
                                    {{--<i class="fas fa-edit"></i></a></td>--}}
                                @endif
                        </tr>

                    @endforeach

                    </tbody>
                </table>


            </div>
            <!--end: Datatable -->
        </div>
</div>
</div>
                </div>
            </div>
        </div>

    </div>




@endsection()


@section("js")
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="{{asset('assets/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
</script>
    <script>
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
        $('body').on('submit',".slider_create",function (e) {
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
                cache    : false,

                success: function (response) {
                    if (response.status == true) {
                        tosterSuccess('Success create slider');
                        // formMessages.removeClass('alert-danger');
                        // formMessageSuccess.addClass('alert-success').text('success create');
                        var img_path='{{url('/storage/images')}}';
                        $item='  <tr id="row_sponsors '+response.item.id+'">\n' +
                            '     <th scope="row">'+response.item.id+'</th>' +
                            '     <td>'+response.item.title+'</td>' +
                            '     <td>'+response.item.date+'</td>'+
                            '     <td><img src="'+img_path+'/'+response.item.image+'" width="70" height="80"></td>' +
                            '     <td>'+response.item.details+'</td>'+
                            '     <td>'+response.item.type+'</td>'+
                            '     <td>'+response.item.read_more+'</td>'+
                            '     <td>'+response.item.created_at+'</td>' +
                            '     <td>'+response.item.updated_at+'</td>' +
                            '  <td>' +
                            '<div class="m-btn-group m-btn-group--pill btn-group m-btn-group m-btn-group--pill btn-group-sm" role="group" aria-label="First group">\n' +
                            '     <button onclick="getSlider('+response.item.id+')" type="button" data-toggle="modal" data-target="#slider_edit" class="m-btn btn btn-primary">\n' +
                            '         <i class="flaticon-edit-1"></i>\n' +
                            '     </button>\n' +
                            '     <button data-slider="'+response.item.id+'"  type="button" data-toggle="modal" data-target="#confirmModal" class="delete1 m-btn btn btn-danger">\n' +
                            '         <i class="flaticon-delete-1"></i>\n' +
                            '     </button>\n' +
                            ' </div>' +
                            '</td>' +
                            ' </tr>'
                        $('#hamada').append($item);

                        $(".slider_create")[0].reset();


                        setTimeout(function(){
                            $('#slider_create').modal('toggle');

                        }, 3000);

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

                    // if(typeof(errors['image']) != "undefined"){
                    //     $("#image_msg").html(errors['image'][0]);
                    // }
                    //
                    // if(typeof(errors['title']) != "undefined"){
                    //     $("#title_msg").html(errors['title'][0]);
                    // }
                    // if(typeof(errors['details']) != "undefined"){
                    //     $("#details_msg").html(errors['details'][0]);
                    //
                    // }
                    //
                    // if(typeof(errors['date']) != "undefined"){
                    //     $("#date_msg").html(errors['date'][0]);
                    //
                    // }
                    // if(typeof(errors['type']) != "undefined"){
                    //     $("#type_msg").html(errors['type'][0]);
                    //
                    // }
                    // if(typeof(errors['read_more']) != "undefined"){
                    //     $("#read_more_msg").html(errors['read_more'][0]);
                    //
                    // }
                }

            });

            function clear() {
                $("#image_msg").html('');
                $("#title_msg").html('');
                $("#details_msg").html('');
                $("#date_msg").html('');
                $("#type_msg").html('');
                $("#read_more_msg").html('');
            }
        });

        //edit
        function getSlider($id) {
            $item_slider=$id;
            $.get('{{route('slider.edit.new')}}',{item_slider:$item_slider},function(data){
                var base_url='{{url('storage/images/')}}';
                $("#id1").val(data.item.id);
                $("#title1").val(data.item.title);
                $("#details1").val(data.item.details);
                $("#date1").val(data.item.date);
                $("#type1").val(data.item.type);
                $("#read_more1").val(data.item.read_more);
                $("#img_cont").attr('src',base_url+'/'+data.item.image);

            });
        }
        //update
        $('body').on('submit',".slider_edit",function (e) {
            loader();
            e.preventDefault();
            var item='';
            $action = $(this).attr("action");

            // var formMessages = $('#form-messages1');
            // var formMessageSuccess= $('#formMessageSuccess1').empty();
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
                        // formMessages.removeClass('alert-danger');
                        // formMessageSuccess.addClass('alert-success').text('success create');
                        tosterSuccess('Success update slider');
                        var base_url='{{url('/storage/images')}}';
                        $("#img_cont").attr('src',base_url+'/'+response.new_img);
                        $('#img_cont1_'+response.id_new).attr('src',base_url+'/'+response.new_img);
                        $('#title_cont_'+response.id_new).text(response.new_title);
                        $('#date_cont_'+response.id_new).text(response.new_date);
                        $('#details_cont_'+response.id_new).text(response.new_details);
                        $('#type_cont_'+response.id_new).text(response.new_type);
                        $('#read_more_cont_'+response.id_new).text(response.new_read_more);


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

                    // if(typeof(errors['image']) != "undefined") {
                    //     $("#image_msg1").html(errors['image'][0]);
                    // }
                    // if(typeof(errors['title']) != "undefined"){
                    //     $("#title_msg1").html(errors['title'][0]);
                    // }
                    // if(typeof(errors['details']) != "undefined"){
                    //     $("#details_msg1").html(errors['details'][0]);
                    // }
                    // if(typeof(errors['date']) != "undefined"){
                    //     $("#date_msg1").html(errors['date'][0]);
                    //
                    // }
                    // if(typeof(errors['type']) != "undefined"){
                    //     $("#type_msg1").html(errors['type'][0]);
                    //
                    // }
                    // if(typeof(errors['read_more']) != "undefined"){
                    //     $("#read_more_msg1").html(errors['read_more'][0]);
                    //
                    // }
                }
            });

        });


        //delet
        $(".delete1").click(function(event){
            event.preventDefault();
            var r = confirm("Are you sure you want to continue the process?");
            $item_slider= $(this).data("slider")
            if (r == true) {
                $.get('{{route('slider.destroy.new')}}', {item_slider: $item_slider}, function (data) {
                    if (data.status == true) {
                        $("#row_slider" + $item_slider).hide();
                    }

                })
            }else {}
        });
    </script>


@endsection()
