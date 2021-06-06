<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5><?php echo $__env->yieldContent('form-heading', 'Form'); ?></h5>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" id="<?php echo $__env->yieldContent('form_id'); ?>" method="POST" action="<?php echo $__env->yieldContent('route'); ?>" enctype="multipart/form-data">
                            <?php echo $__env->yieldContent('form-fields'); ?>
                            <button class="btn btn-primary" type="submit"><?php echo $__env->yieldContent('submit-text', 'Submit'); ?></button>
                        </form>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php /**PATH /home/pigstuhq/pureoproducts.pigslhub.com/resources/views/layouts/form.blade.php ENDPATH**/ ?>