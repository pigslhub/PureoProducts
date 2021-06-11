<?php echo csrf_field(); ?>
<div class="form-row">
    <div class="col-md-6">
        <label for="name" class="col-form-label"><?php echo e(__('Product Name')); ?></label>
        <input type="text" name="name" id="name" class="form-control"
               value="<?php echo e(isset($product) ? $product->name : ''); ?>" autofocus>
    </div>
    <div class="col-md-6">
        <label for="purchase_price" class="col-form-label"><?php echo e(__('Purchase Price')); ?></label>
        <input type="text" name="purchase_price" id="purchase_price" class="form-control"
               value="<?php echo e(isset($product) ? $product->purchase_price : ''); ?>">
    </div>
    <div class="col-md-6">
        <label for="selling_price" class="col-form-label"><?php echo e(__('Selling Price')); ?></label>
        <input type="text" name="selling_price" id="selling_price" class="form-control"
               value="<?php echo e(isset($product) ? $product->selling_price : ''); ?>">
    </div>
    <div class="col-md-6">
        <label for="wholesalePrice" class="col-form-label"><?php echo e(__('Wholesale Price')); ?></label>
        <input type="text" name="wholesalePrice" id="wholesalePrice" class="form-control"
               value="<?php echo e(isset($product) ? $product->price : ''); ?>">
    </div>
    <div class="col-md-6">
        <label for="min_price" class="col-form-label"><?php echo e(__('Minimum Price')); ?></label>
        <input type="text" name="min_price" id="min_price" class="form-control" value="<?php echo e(isset($product) ? $product->min_price : ''); ?>">
    </div>
    <div class="col-md-6">
        <label for="product_code" class="col-form-label"><?php echo e(__('Product Code')); ?></label><br>
        <input type="text" name="product_code" id="product_code" class="form-control"
               value="<?php echo e(isset($product) ? $product->product_code : ''); ?>">
    </div>
    <div class="col-md-6">
        <label for="product_name" class="col-form-label"><?php echo e(__('Available in stock')); ?></label>
        <input type="text" name="in_stock" id="product_name" class="form-control"
               value="<?php echo e(isset($product) ? $product->in_stock : ''); ?>">
    </div>
    <div class="col-md-6">
        <label for="description" class="col-form-label"><?php echo e(__('Description')); ?></label>
        <textarea type="text" name="description" id="description" class="form-control"

        ><?php echo e(isset($product) ? $product->description : ''); ?></textarea>
    </div>
    <div class="col-md-6">
        <label for="icon" class="col-form-label"><?php echo e(__('Icon')); ?></label>
        <input type="file" name="icon" id="icon" class="form-control">
        <br><br><br>
    </div>
</div>
<?php /**PATH C:\Users\shiza\Desktop\SirImran\PureoProducts\resources\views/admin/newproduct/fields.blade.php ENDPATH**/ ?>