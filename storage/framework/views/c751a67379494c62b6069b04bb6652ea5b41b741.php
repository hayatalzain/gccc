<?php $__env->startSection("css"); ?>
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

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

                        <form method="post" action="<?php echo e(route('sponsors.create')); ?>" class="sponsors_create"  enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group">
                                <label for="exampleInputPassword1">image</label>
                                <input value="<?php echo e(old('image')); ?>" id="image" name="image" type="file" placeholder="image">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Link</label>
                                <input type="text" value="<?php echo e(old('link_image')); ?>"  class="form-control" id="link_image" name="link_image" placeholder="link">
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

                            <table class="table">
                                <caption>List of users</caption>
                                <thead>
                                <tr>
                                    <th scope="col">#</th>

                                    <th scope="col">image</th>
                                    <th scope="col">link</th>

                                    <th scope="col">created_at</th>
                                    <th scope="col">updated_at</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr id="<?php echo e($i->id); ?>">
                                    <th scope="row"><?php echo e($i->id); ?></th>
                                    <td><img src="<?php echo e(asset('/storage/image/' . $i->image)); ?>"></td>
                                    <td><?php echo e($i->link_image); ?></td>
                                    <td><?php echo e($i->created_at); ?></td>
                                    <td><?php echo e($i->updated_at); ?></td>
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
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
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
        e.preventDefault();
        var item='';
        $action = $(this).attr("action");
        $data = $(this).serialize();
        var formMessages = $('#form-messages');
        var formMessageSuccess= $('#formMessageSuccess');
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
                if (response.status == true) {
                    formMessages.removeClass('alert-danger');
                    formMessageSuccess.addClass('alert-success').text('success create');
                    clear();
                    $(".sponsors_create")[0].reset();

                } else {

                }
            },error: function(data){
                alert("jjjjj!!!");
                formMessageSuccess.removeClass('alert-success').empty();
                formMessages.addClass('alert-danger');

                var error = data.responseJSON;
                var errors= error.errors;

                if(typeof(errors['link_image']) != "undefined"){
                    $("#link_image_msg").html(errors['link_image'][0]);
                }

                if(typeof(errors['image']) != "undefined"){
                    $("#image_msg").html(errors['image'][0]);
                }
            }
        });
        function clear() {
            $("#link_image_msg").html('');
            $("#image_msg").html('');
        }
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
