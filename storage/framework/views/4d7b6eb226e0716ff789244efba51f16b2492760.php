<?php $__env->startSection("css"); ?>
    
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>

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
                            <?php if(Auth::user() && (Auth::user()->partition_id == 1 || Auth::user()->partition_id == 2)): ?>
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
                                <?php endif; ?>
                        </div>
                    </div>
  
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

                        <div class="alert" id="formMessageSuccess"></div>
                        <div class="alert" id="form-messages" role="alert">
                            <p id="link_image_msg"></p>
                            <p id="image_msg"></p>

                        </div>

                        <form method="POST" action="<?php echo e(route('sponsors.create')); ?>" class="sponsors_create"  enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group">
                                <input type="text" value="" hidden class="form-control" id="id" name="id" placeholder="id">
                            </div>

                            <div class="form-group">
                                <label >image</label>
                                <input value="" id="image" name="image" type="file" placeholder="image">
                            </div>

                            <div class="form-group">
                                <label>Link</label>
                                <input type="text" value=""  class="form-control" id="link_image" name="link_image" placeholder="link">
                            </div>
                            <div class="form-group">
                                
                            <button type="submit" class="loader btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-secondary text-right" data-dismiss="modal">Close</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

                    
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
                                            <div class="alert" id="formMessageSuccess1"></div>
                                            <div class="alert" id="form-messages1" role="alert">

                                                <p id="link_image_msg1"></p>
                                                <p id="image_msg1"></p>

                                            </div>

                                            <form method="POST" action="<?php echo e(route('sponsors.edit.new')); ?>" class="sponsors_edit"  enctype="multipart/form-data">
                                                <?php echo e(csrf_field()); ?>

                                                <?php echo e(method_field('PATCH')); ?>

                                                <div class="form-group">
                                                    <input type="hidden" value=""  class="form-control" id="id1" name="spon_id" placeholder="id">
                                                </div>

                                                <div class="form-group">

                                                    <label for="exampleInputPassword1">image</label>
                                                    <input value="" id="image1" name="image" type="file" placeholder="image">
                                                    <img src="" id="img_cont" class="img-responsive" width="70" height="80"/>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Link</label>
                                                    <input type="text" value=""  class="form-control" id="link_image1" name="link_image" placeholder="link">
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
                        <div class="m_datatable m-datatable m-datatable--default m-datatable--error m-datatable--scroll m-datatable--loaded" id="m_datatable_latest_orders" style="position: static; zoom: 1;">

                            <table class="table table-striped- table-bordered table-hover table-checkable"  id="m_table_12">

                                <thead>
                                <tr>
                                    <th scope="col">#</th>

                                    <th scope="col">image</th>
                                    <th scope="col">link</th>

                                    <th scope="col">created_at</th>
                                    <th scope="col">updated_at</th>

                                    <?php if(Auth::user() && (Auth::user()->partition_id == 1 || Auth::user()->partition_id == 3)): ?>
                                        <th scope="col">action</th>

<?php endif; ?>
                                </tr>
                                </thead>

                                <tbody id="hamada">
                                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr id="row_sponsors<?php echo e($i->id); ?>">
                                    <th scope="row"><?php echo e($i->id); ?></th>
                                    <td><img id="img_cont1_<?php echo e($i->id); ?>" src="<?php echo e(asset('/storage/images/'. $i->image)); ?>" width="70" height="80"></td>
                                    <td id="link_img_cont_<?php echo e($i->id); ?>"><?php echo e($i->link_image); ?></td>
                                    <td><?php echo e($i->created_at); ?></td>
                                    <td><?php echo e($i->updated_at); ?></td>

                                    <?php if(Auth::user() && (Auth::user()->partition_id == 1 || Auth::user()->partition_id == 3)): ?>
                                        <td>
                                            <div class="m-btn-group m-btn-group--pill btn-group m-btn-group m-btn-group--pill btn-group-sm" role="group" aria-label="First group">
                                                <button onclick="getSponsors(<?php echo e($i->id); ?>)" type="button" data-toggle="modal" data-target="#slider_edit" class="m-btn btn btn-primary">
                                                    <i class="flaticon-edit-1"></i>
                                                </button>

                                                <button data-sponsor="<?php echo e($i->id); ?>" type="button" data-toggle="modal" data-target="#confirmModal" class="delete1 m-btn btn btn-danger">
                                                    <i class="flaticon-delete-1"></i>
                                                </button>
                                            </div>
                                        </td>

                                        <?php endif; ?>
                                </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>

                            </table>


                        </div>
                        <!--end: Datatable -->
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection("js"); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="<?php echo e(asset('assets/vendors/custom/datatables/datatables.bundle.js')); ?>" type="text/javascript"></script>
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
    $("#Date").datepicker({
        dateFormat: "yy-mm-dd",
        showOn: "button",
        buttonImage: "https://cdn4.iconfinder.com/data/icons/small-n-flat/24/calendar-512.png",
        buttonImageOnly: true,
        buttonText: "Select date"
    });
</script>

<script>

    // create
    $('body').on('submit',".sponsors_create",function (e) {
        loader();
        // clear();
        // clearClose();
        e.preventDefault();
        var item='';
        $action = $(this).attr("action");
        $data = $(this).serialize();

        var formData = new FormData($(this)[0]);
         // $('#slider_create').modal('toggle');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN':'<?php echo e(csrf_token()); ?>'
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
                    var img_path='<?php echo e(url('/storage/images')); ?>';
                    $item='  <tr id="row_sponsors '+response.item.id+'">\n' +
                        '     <th scope="row">'+response.item.id+'</th>' +
                        '     <td><img src="'+img_path+'/'+response.item.image+'" width="70" height="80"></td>' +
                        '     <td>'+response.item.link_image+'</td>' +
                        '     <td>'+response.item.created_at+'</td>' +
                        '     <td>'+response.item.updated_at+'</td>' +
                        '  <td>' +
                        '<div class="m-btn-group m-btn-group--pill btn-group m-btn-group m-btn-group--pill btn-group-sm" role="group" aria-label="First group">\n' +
                        '     <button onclick="getSponsors('+response.item.id+')"  type="button" data-toggle="modal" data-target="#slider_edit" class="m-btn btn btn-primary">\n' +
                        '         <i class="flaticon-edit-1"></i>\n' +
                        '     </button>\n' +
                        '     <button data-sponsor="'+response.item.id+'"   type="button" data-toggle="modal" data-target="#confirmModal" class="delete1 m-btn btn btn-danger">\n' +
                        '         <i class="flaticon-delete-1"></i>\n' +
                        '     </button>\n' +
                        ' </div>' +

                        ' </td>' +

                        ' </tr>'
                    $('#hamada').append($item);
                    $(".sponsors_create")[0].reset();
                    // var qqq = $(this).closest('.modal');
                    // $(qqq).modal('hide');

                    setTimeout(function(){

                        $('#slider_create').modal('toggle');

                        $("#formMessageSuccess").html('').removeClass('alert-success');

                    }, 3000);

                } else {

                }
                // $('.btn-primary').children('img').remove();

                clear_loader();
            },error: function(data){
                clear_loader();

                // formMessages.removeAttr("style");
                var error = data.responseJSON;
                var errors= error.errors;
                $.each(errors, function( k, v ) {
                    tosterError(v);

                });
                // if(typeof(errors['image']) != "undefined"){
                //     $("#image_msg").html(errors['image'][0]);
                // }
                // if(typeof(errors['link_image']) != "undefined"){
                //     $("#link_image_msg").html(errors['link_image'][0]);
                // }

                // $('#slider_create').click(function(){
                //     $("#form-messages").attr('style','display:none');
                //  // $('.loader').attr('style','display:none');
                // });
                // $('.btn-primary').children('img').remove();
            }

        });

        function clear() {
            $("#link_image_msg").html('');
            $("#image_msg").html('');
// $("#link_image_msg").html('').attr('style','display:none');
//             $("#image_msg").html('').attr('style','display:none');

        }
        // function clearClose() {
        //
        //     $('#slider_create').click().closest('.modal').removeClass('alert-danger').empty();
        //     // $('#modal').modal('toggle');
        // }

    });

    //edit
    function getSponsors($id) {
        $item_sponsor=$id;
        $.get('<?php echo e(route('sponsors.edit.new')); ?>',{item_sponsor:$item_sponsor},function(data){
            var base_url='<?php echo e(url('storage/images/')); ?>';
            $("#id1").val(data.item.id);
            $("#link_image1").val(data.item.link_image);
           $("#img_cont").attr('src',base_url+'/'+data.item.image);

        });
    }

    //update
    $('body').on('submit',".sponsors_edit",function (e) {
        loader();
        // clear1();
        e.preventDefault();
        var item='';
        $action = $(this).attr("action");

        var formData = new FormData($(this)[0]);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN':'<?php echo e(csrf_token()); ?>'
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
                    tosterSuccess('Success update sponser');
                    // formMessages.removeClass('alert-danger');
                    // formMessageSuccess.addClass('alert-success').text('success create');
                    var base_url='<?php echo e(url('/storage/images')); ?>';
                    $("#img_cont").attr('src',base_url+'/'+response.new_img);
                    $('#img_cont1_'+response.id_new).attr('src',base_url+'/'+response.new_img);
                    $('#link_img_cont_'+response.id_new).text(response.new_link_img);

                    setTimeout(function(){

                        $('#slider_edit').modal('toggle');

                        // $("#formMessageSuccess1").html('').removeClass('alert-success');

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
        function clear1() {
            $("#link_image_msg1").html('');
            $("#image_msg1").html('');

        }

    });

    //delet
    $(".delete1").click(function(event){
        event.preventDefault();
        var r = confirm("Are you sure you want to continue the process?");

        $item_sponsor= $(this).data("sponsor")
        if (r == true) {
            $.get('<?php echo e(route('sponsors.destroy.new')); ?>', {item_sponsor: $item_sponsor}, function (data) {
                if (data.status == true) {

                    $("#row_sponsors" + $item_sponsor).hide();
                }

            })
        }
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>