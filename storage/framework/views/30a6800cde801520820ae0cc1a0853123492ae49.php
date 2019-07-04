<?php $__env->startSection("css"); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
    <!--slider-->
    <section class="section-home-slider" id="">
        <div class="owl-carousel" id="homeSlider">
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($i->type==1): ?>
            <div class="item">
                <div class="item-homeSlider" style="background-image:url(<?php echo e(url('/storage/images/'. $i->image)); ?>)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="caption-txt clearfix to-animate">
                                    <span><?php echo e($i->date); ?></span>
                                    <h2><?php echo e($i->title); ?></h2>
                                    <p><?php echo e($i->details); ?></p>
                                    <a href="<?php echo e($i->read_more); ?>" class="more-read">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <?php else: ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    <!--section-home-slider-->
    <section class="section-about">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="goals-gcc wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <?php echo getVal('hay'); ?>

                    </div>
                </div>
                <div class="col-sm-offset-1 col-sm-5">
                    <div class="about-img clearfix wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                        <span>   <?php echo getVal('image'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--section-about-->

    <section class="section-content-home">
        <div class="container">
            <div class="sequential-block">
                <div class="block-head wow fadeInUp"  data-wow-duration="1s" data-wow-delay="0.3s">
                    <h2>Sequential GCC Quality Conferences</h2>
                </div>
                <div class="sequential-content">
                    <div class="row">
                        <div class="col-md-offset-5 col-md-7">
                            <div class="sequential-img">
                                <div class="owl-carousel" id="sequential-slider">

                                    <?php $__currentLoopData = $feat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="item">
                                        <div class="sequential-thumb">
                                            <img src="<?php echo e(url('/storage/images/'. $i->image)); ?>" alt="" class="img-responsive">
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                            <div class="feature-sponsoring">

                                <?php echo getVal('features'); ?>

                            </div>
                        </div>
                    </div>
                    <div class="sequential-table wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="0.5s">
                        <table class="table">
                            <thead class="thead-inverse">
                            <tr>
                                <th width="20%">Conference</th>
                                <th width="40%">Conference topics</th>
                                <th width="30%">Date</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php $__currentLoopData = $conf; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th><?php echo e($i->conference); ?></th>
                                <th><?php echo e($i->conference_title); ?></th>
                                <th><?php echo e($i->date); ?></th>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!--sequential-block-->

            <div class="issues-block">
                <div class="block-head wow fadeInUp"  data-wow-duration="1s" data-wow-delay="0.3s">
                    <h2>Issues, Attendance and Media Coverage</h2>
                </div>
                <div class="issues-list">
                    <div class="row">
                        <?php $__currentLoopData = $card; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-sm-4">
                            <div class="issues-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                                <div class="issues-thumb">
                                    <img src="<?php echo e(url('/storage/images/'. $i->image)); ?>" alt="" class="img-responsive">
                                </div>
                                <div class="issues-txt">
                                    <h2><?php echo e($i->title); ?></h2>
                                    <p><?php echo e($i->details); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>

            <!--issues-block-->
            <div class="gallary-block">
                <div class="block-head wow fadeInUp"  data-wow-duration="1s" data-wow-delay="0.3s">
                    <h2>GALLARY of 9th conference </h2>
                </div>

                <div class="owl-carousel" id="gallary-slider">
                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($i->type==2): ?>
                    <div class="item">
                        <div class="gallary-item">
                            <a href="<?php echo e($i->read_more); ?>" class="gallary-link"></a>
                            <div class="ga-img">
                                <img src="<?php echo e(url('/storage/images/'. $i->image)); ?>" alt="" class="img-responsive" style="min-height:400px;">
                            </div>
                            <div class="ga-txt">
                                <h2><?php echo e($i->details); ?>..</h2>
                                <p><span><i class="fa fa-calendar" aria-hidden="true"></i></span><?php echo e($i->date); ?></p>
                            </div>
                        </div>
                    </div>

                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            </div>
            <!--gallary-block-->

            <div class="sponsors-block">
                <div class="block-head wow fadeInUp"  data-wow-duration="1s" data-wow-delay="0.3s">
                    <h2>SPONSORS of 9th conference </h2>
                </div>


                <div class="owl-carousel" id="sponsoer-slider">
                    <?php $__currentLoopData = $spon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item">
                            <a href="<?php echo e($i->link_image); ?>" class="sponsoer-img">
                            <img src="<?php echo e(url('/storage/images/'. $i->image)); ?>" alt="" class="img-responsive">
                        </a>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>


            </div><!--sponsors-block-->
        </div>
    </section><!--section-content-home-->

<?php $__env->stopSection(); ?>


<?php $__env->startSection("js"); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("_layout", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>