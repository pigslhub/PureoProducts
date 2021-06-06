<?php echo csrf_field(); ?>
<div class="form-row">
    <div class="col-md-6">
        <label for="name" class="col-form-label"><?php echo e(__("Name")); ?></label>
        <input
            type="text"
            name="name"
            id="name"
            class="form-control"
            value="<?php echo e(old('name', isset($adminCategory) ? $adminCategory->name : '' )); ?>"
        />
        <input
            type="hidden"
            name=""
            id=""
            class="form-control"
            value="<?php echo e(old('name', isset($adminCategory) ? $adminCategory->id : '' )); ?>"
        />
    </div>

    <div class="col-md-6">
        <label for="icon" class="col-form-label"><?php echo e(__("Icon")); ?></label>
        <input type="file" name="icon" id="icon" class="form-control" /><br />
        <?php if(isset($adminCategory)): ?>
        <img
            src="<?php echo e(asset('storage/'.$adminCategory->icon)); ?>"
            style="height: 80px; width: 80px; border-radius: 50%"
        />
        <?php endif; ?>
    </div>










</div>
<?php /**PATH /home/pigstuhq/pureoproducts.pigslhub.com/resources/views/admin/category/fields.blade.php ENDPATH**/ ?>