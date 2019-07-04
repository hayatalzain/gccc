<?php $__env->startSection("css"); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>

    <section class="section-headInnerpage" style="background-image:url(<?php echo getVal('imgeAbout'); ?> );">
        <div class="container">
            <h2 class="title-headPage">Aboute<span>CONFERENCE</span></h2>
        </div>
    </section><!--section-headInnerpage-->
    <section class="section-content-innerPage">
        <div class="container">
            <div class="content-aboutPage">
                <div class="row">
                    <div class="col-sm-8">
                        <?php echo getVal('quality'); ?>


                    </div>
                    <div class="col-sm-4">
                        <div class="download-final">

                            <?php echo getVal('imgDownload'); ?>

                            <?php echo getVal('linkImgDownload'); ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--section-content-innerPage-->


<?php $__env->stopSection(); ?>


<?php $__env->startSection("js"); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("_layout", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>