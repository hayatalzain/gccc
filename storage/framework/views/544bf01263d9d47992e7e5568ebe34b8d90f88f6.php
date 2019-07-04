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
                                    <?php if(Auth::user() && (Auth::user()->partition_id == 1 || Auth::user()->partition_id == 3)): ?>
                                    
                                    
<?php endif; ?>
                                </tr>
                                </thead>

                                <tbody  id="hamada">
                                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr id="row_features<?php echo e($i->id); ?>">
                                    <th scope="row"><?php echo e($i->id); ?></th>
                                    <td id="conference_cont_<?php echo e($i->id); ?>"><?php echo e($i->email); ?></td>
                                    <td><?php echo e($i->created_at); ?></td>
                                    <td><?php echo e($i->updated_at); ?></td>
                                    
                                    
                                    <td>
                                        <a data-features="<?php echo e($i->id); ?>" type="button" class="delete1 btn btn-danger">
                                            <i class="fas fa-trash-alt"></i></a></td>
                                        
                                </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>

                            </table>



                        <!--end: Datatable -->
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection("js"); ?>
    <script src="<?php echo e(asset('assets/vendors/custom/datatables/datatables.bundle.js')); ?>" type="text/javascript"></script>
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

            $.get('<?php echo e(route('email.destroy.new')); ?>', {item_features: $item_features}, function (data) {
                if (data.status == true) {
                    alert("jjhjhjh");
                    $("#row_features" + $item_features).hide();
                }

            })
        }else {}
    });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>