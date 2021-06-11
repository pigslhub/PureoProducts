<?php $__env->startSection('title', 'Admin'); ?>
<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/datatables.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb-title', 'Admin Management'); ?>

<?php $__env->startSection('breadcrumb-item'); ?>
    <li class="breadcrumb-item active">Admin</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="pull-left">All Sub Admins List</h5>
                        <div class=" pull-right">
                            <?php if(auth()->user('admin')->type == 0): ?>
                        <a href="<?php echo e(route('adminAdmins.create')); ?>"class="btn btn-primary btn-sm px-2" title=""><i
                                    class="fa fa-plus"></i> Add New Admin</a>
                        </div>
                    </div>


                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>All Sub Admins Data </h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="hover" id="example-style-4">
                                        <thead>
                                        <tr>
                                            <td>#</td>
                                            <th>Action</th>
                                            <th>Status</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Type</th>
                                            <th>Avatar</th>


                                        </tr>
                                        </thead>
                                        <tbody>



                                                <?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <tr>
                                                <th scope="row"><?php echo e($loop->iteration); ?></th>
                                                  <td>
                                                  <a href="<?php echo e(route('adminAdmins.edit' , ['adminAdmin' => $admin->id])); ?>"
                                                       class="btn btn-primary btn-sm mb-1 px-2" title="Edit Driver"><i
                                                            class="fa fa-pencil"></i></a>


                                                    <button data-toggle="modal"
                                                            data-target="#confirm_admin_<?php echo e($admin->id); ?>"
                                                            class="btn btn-danger btn-sm mb-1 px-2" title="Delete Admin">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    <?php echo $__env->make('includes.modals.confirm', ['model' => 'admin', 'route' => route('adminAdmins.destroy', ['adminAdmin' => $admin->id]), 'form' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                               </td>
                                               <td>
                                                <?php if($admin->status==1): ?>
                                                <a href="<?php echo e(route('adminAdmin.changeStatus', ['adminAdmin' => $admin->id])); ?>"
                                                    class="btn btn-success btn-sm mb-1 px-2" title="Change Status">Active</a>
                                                <?php else: ?>
                                                    <a href="<?php echo e(route('adminAdmin.changeStatus', ['adminAdmin' => $admin->id])); ?>"
                                                        class="btn btn-danger btn-sm mb-1 px-2" title="Change Status">Deactive</a>

                                                <?php endif; ?>
                                               </td>
                                                  <td><?php echo e($admin->name); ?></td>
                                                  <td><?php echo e($admin->email); ?></td>
                                                  <td><?php echo e($admin->type); ?></td>
                                                  <td><?php echo e($admin->avatar); ?></td>

                                              </tr>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                                            <?php else: ?>

                                               <h1>Only Super Admin Access This Table</h1>

                                            <?php endif; ?>







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

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\shiza\Desktop\SirImran\PureoProducts\resources\views/admin/admin/viewEarning.blade.php ENDPATH**/ ?>
