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
                                    three card
                                </h3>
                            </div>
                        </div>

                        <?php if(Auth::user() && (Auth::user()->partition_id == 1 || Auth::user()->partition_id == 2)): ?>
                        <div class="m-portlet__head-tools">
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
                        </div>

<?php endif; ?>
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

                                            
                                            
                                                
                                                
                                                

                                            

                                            <form method="POST" action="<?php echo e(route('cardthree.create')); ?>" class="cardthree_create"  enctype="multipart/form-data">
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
                                                    <input type="text" value="" class="form-control" id="title" name="title" placeholder="title">
                                                </div>

                                                <div class="form-group">
                                                    <label>details</label>
                                                    <textarea value=""  class="form-control" id="details" name="details" placeholder="details">
                                                    </textarea>
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
                                            
                                            

                                                
                                                
                                                


                                            

                                            <form method="POST" action="<?php echo e(route('cardthree.edit.new')); ?>" class="cardthree_edit"  enctype="multipart/form-data">
                                                <?php echo e(csrf_field()); ?>

                                                <?php echo e(method_field('PATCH')); ?>

                                                <div class="form-group">
                                                    <input type="hidden" value=""  class="form-control" id="id1" name="card_id" placeholder="id">
                                                </div>

                                                <div class="form-group">

                                                    <label for="exampleInputPassword1">image</label>
                                                    <input value="" id="image1" name="image" type="file" placeholder="image">
                                                    <img src="" id="img_cont" class="img-responsive" width="70" height="80"/>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">title</label>
                                                    <input type="text" value=""  class="form-control" id="title1" name="title" placeholder="title">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">details</label>
                                                    <input type="text" value=""  class="form-control" id="details1" name="details" placeholder="details">
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
                        <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_12">
                            <thead>
                            <tr>
                                <th scope="col">#</th>

                                <th scope="col">image</th>
                                <th scope="col">title</th>
                                <th scope="col">details</th>

                                <th scope="col">created_at</th>
                                <th scope="col">updated_at</th>


                                <th scope="col">Action</th>


                            </tr>
                            </thead>
                            <tbody id="hamada">

                            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr id="row_cardthree<?php echo e($i->id); ?>">
                                    <th scope="row"><?php echo e($i->id); ?></th>
                                    <td><img id="img_cont1_<?php echo e($i->id); ?>" src="<?php echo e(asset('/storage/images/'. $i->image)); ?>" width="70" height="80"></td>
                                    <td id="title_cont_<?php echo e($i->id); ?>"><?php echo e($i->title); ?></td>
                                    <td id="details_cont_<?php echo e($i->id); ?>"><?php echo e($i->details); ?></td>
                                    <td><?php echo e($i->created_at); ?></td>
                                    <td><?php echo e($i->updated_at); ?></td>

                                    <?php if(Auth::user() && (Auth::user()->partition_id == 1 || Auth::user()->partition_id == 3)): ?>

                                        <td>
                                            <div class="m-btn-group m-btn-group--pill btn-group m-btn-group m-btn-group--pill btn-group-sm" role="group" aria-label="First group">
                                                <button  onclick="getCardThree(<?php echo e($i->id); ?>)"  type="button" data-toggle="modal" data-target="#slider_edit" class="m-btn btn btn-primary">
                                                    <i class="flaticon-edit-1"></i>
                                                </button>

                                                <button  data-cardthree="<?php echo e($i->id); ?>"  type="button" data-toggle="modal" data-target="#confirmModal" class="delete1 m-btn btn btn-danger">
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
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="<?php echo e(asset('assets/vendors/custom/datatables/datatables.bundle.js')); ?>" type="text/javascript"></script>

<script>

    // $('#slider_create').on('hidden.bs.modal', function () {
    //
    //
    // });
    $(document).ready(function () {
        $('#m_table_12').DataTable({
            pageLength: 15,
            paging: true,
            searching: true,
        });
    });

    $("#slider_create").on("hidden", function () {
        // alert('sdfsdfsdf333333');
        $('#details_msg').text('');
        $('#title_msg').text('');
        $('#image_msg').text('');
        $('#form-messages').css('display','none');
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
        $('body').on('submit',".cardthree_create",function (e) {
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
                    tosterSuccess('Success create three card');
                    if (response.status == true) {
                        // formMessages.removeClass('alert-danger');
                        // formMessageSuccess.addClass('alert-success').text('success create');
                        var img_path='<?php echo e(url('/storage/images')); ?>';
                        $item='  <tr id="row_sponsors '+response.item.id+'">\n' +
                            '     <th scope="row">'+response.item.id+'</th>' +
                            '     <td><img src="'+img_path+'/'+response.item.image+'" width="70" height="80"></td>' +
                            '     <td>'+response.item.title+'</td>' +
                            '     <td>'+response.item.details+'</td>'+
                            '     <td>'+response.item.created_at+'</td>' +
                            '     <td>'+response.item.updated_at+'</td>' +
                            '  <td>' +
                            '<div class="m-btn-group m-btn-group--pill btn-group m-btn-group m-btn-group--pill btn-group-sm" role="group" aria-label="First group">\n' +
                            '     <button onclick="getCardThree('+response.item.id+')" type="button" data-toggle="modal" data-target="#slider_edit" class="m-btn btn btn-primary">\n' +
                            '         <i class="flaticon-edit-1"></i>\n' +
                            '     </button>\n' +
                            '\n' +
                            '     <button data-sponsor="'+response.item.id+'" type="button" data-toggle="modal" data-target="#confirmModal" class="delete1 m-btn btn btn-danger">\n' +
                            '         <i class="flaticon-delete-1"></i>\n' +
                            '     </button>\n' +
                            ' </div>' +
                            '</td>' +
                            ' </tr>'
                        $('#hamada').append($item);

                        $(".cardthree_create")[0].reset();


                        setTimeout(function(){
                            $('#slider_create').modal('toggle');
                            // $("#formMessageSuccess").html('').removeClass('alert-success');

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

                    // $('#form-messages').css('display','block');
                    //
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

                }
            });

            function clear() {
                $("#image_msg").html('');
                $("#title_msg").html('');
                $("#details_msg").html('');
            }
        });

        //edit//
        function getCardThree($id) {
            $item_card=$id;
            $.get('<?php echo e(route('cardthree.edit.new')); ?>',{item_card:$item_card},function(data){
                var base_url='<?php echo e(url('storage/images/')); ?>';
                $("#id1").val(data.item.id);
                $("#title1").val(data.item.title);
                $("#details1").val(data.item.details);
                $("#img_cont").attr('src',base_url+'/'+data.item.image);

            });
        }
        //update
        $('body').on('submit',".cardthree_edit",function (e) {
            loader();
            // clear1();
            e.preventDefault();
            var item='';
            $action = $(this).attr("action");
            // var formMessages = $('#form-messages1');
            // var formMessageSuccess= $('#formMessageSuccess1');
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
                    tosterSuccess('Success update three card');
                    if (response.status == true) {

                        // formMessages.removeClass('alert-danger');
                        // formMessageSuccess.addClass('alert-success').text('success create');
                        var base_url='<?php echo e(url('/storage/images')); ?>';
                        $("#img_cont").attr('src',base_url+'/'+response.new_img);
                        $('#img_cont1_'+response.id_new).attr('src',base_url+'/'+response.new_img);
                        $('#title_cont_'+response.id_new).text(response.new_title);
                        $('#details_cont_'+response.id_new).text(response.new_details);

                        setTimeout(function(){
                            $('#slider_edit').modal('toggle');
                            // $("#formMessageSuccess1").html('').removeClass('alert-success');

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
                    //     $("#image_msg1").html(errors['image'][0]);
                    // }
                    //
                    // if(typeof(errors['title']) != "undefined"){
                    //     $("#title_msg1").html(errors['title'][0]);
                    // }
                    // if(typeof(errors['details']) != "undefined"){
                    //     $("#details_msg1").html(errors['details'][0]);
                    //
                    // }
                }


            });

            function clear1() {
                $("#image_msg1").html('');
                $("#title_msg1").html('');
                $("#details_msg1").html('');
            }

        });

        //delete
        $(".delete1").click(function(event){
            event.preventDefault();
            var r = confirm("Are you sure you want to continue the process?");
            $item_card= $(this).data("cardthree")
            if (r == true) {
                $.get('<?php echo e(route('cardthree.destroy.new')); ?>', {item_card: $item_card}, function (data) {
                    if (data.status == true) {
                        alert("jjhjhjh");
                        $("#row_cardthree" + $item_card).hide();
                    }

                })
            }else {}
        });



    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>