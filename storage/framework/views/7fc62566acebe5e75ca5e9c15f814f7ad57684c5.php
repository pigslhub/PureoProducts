<?php ($action = $action ?? ''); ?>
<?php ($form = $form ?? false); ?>
<div class="modal fade border-0" id="confirm_<?php echo e($action); ?><?php echo e($model); ?>_<?php echo e(${$model}->id); ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <p class="text-center mt-2"><?php echo e($message ?? 'Are you sure you want to perform this action ?'); ?></p>
                <div class="float-right">
                    <?php if($form): ?>
                        <form class="d-inline" action="<?php echo e($route); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('Delete'); ?>
                            <button class="btn btn-sm btn-danger">Yes</button>
                        </form>
                    <?php else: ?>
                        <a href="<?php echo e($route ?? ''); ?>" class="btn btn-sm btn-danger">Yes</a>
                    <?php endif; ?>
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\Users\shiza\Desktop\SirImran\PureoProducts\resources\views/includes/modals/confirm.blade.php ENDPATH**/ ?>