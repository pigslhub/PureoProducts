<?php $__env->startSection('title', 'Customer'); ?>
<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/datatables.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb-title', 'Customer Management'); ?>

<?php $__env->startSection('breadcrumb-item'); ?>
    <li class="breadcrumb-item active">Customer</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="pull-left">All Customers List</h5>

                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="hover" id="example-style-4">
                                        <thead>
                                        <tr>
                                            <td>#</td>
                                            <th>Status</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Zip Code</th>
                                            <th>Address</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                          <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <tr>
                                                <th scope="row"><?php echo e($loop->iteration); ?></th>
                                               <td>
                                                <?php if($customer->status==1): ?>
                                                <a href="<?php echo e(route('adminCustomer.changeStatus', ['adminCustomer' => $customer->id])); ?>"
                                                    class="btn btn-success btn-sm mb-1 px-2" title="Change Status">Active</a>
                                                <?php else: ?>
                                                    <a href="<?php echo e(route('adminCustomer.changeStatus', ['adminCustomer' => $customer->id])); ?>"
                                                        class="btn btn-danger btn-sm mb-1 px-2" title="Change Status">Deactive</a>

                                                <?php endif; ?>
                                               </td>
                                                  <td><?php echo e($customer->name); ?></td>
                                                  <td><?php echo e($customer->email); ?></td>
                                                  <td><?php echo e($customer->phone); ?></td>
                                                  <td><?php echo e($customer->zip_code); ?></td>
                                                  <td><?php echo e($customer->address); ?></td>

                                              </tr>

                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/datatable.custom.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\shiza\Desktop\SirImran\PureoProducts\resources\views/admin/customer/viewEarning.blade.php ENDPATH**/ ?>
