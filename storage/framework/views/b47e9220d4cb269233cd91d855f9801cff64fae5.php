<?php $__env->startSection('title', 'Login'); ?>


<?php $__env->startSection('content'); ?>
    <!-- login page start-->
    <div class="authentication-main">
        <div class="row">
            <div class="col-md-12">
                <div class="auth-innerright">
                    <div class="authentication-box">
                        <div class="text-center"><img src="<?php echo e(asset('assets/images/favicon.jpg')); ?>" alt=""></div>
                        <div class="text-center mt-3"><img src="<?php echo e(asset('assets/images/logo.jpg')); ?>" alt=""></div>

                        <div class="card mt-4">
                            <div class="card-body">
                                <div class="text-center">
                                    <h4>ADMIN LOGIN</h4>
                                    <h6>Enter your Email and Password </h6>
                                </div>
                            <form class="theme-form" method="post" id="login-form" action="<?php echo e(route('admin.login.submit')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <label for="email"
                                               class="col-form-label pt-0">E-Mail Address</label>
                                        <input id="email" type="email" name="email"
                                               class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                               value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-form-label"><?php echo e(__('Password')); ?></label>
                                        <input id="password" type="password" name="password"
                                               class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                               required autocomplete="current-password">
                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="checkbox p-0">
                                        <input type="checkbox" name="remember"
                                               id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                        <label class="form-check-label" for="remember">
                                            <?php echo e(__('Remember Me')); ?>

                                        </label>
                                    </div>
                                    <div class="form-group form-row mt-3 mb-0">
                                        <button class="btn btn-primary btn-block" type="submit">Login</button>
                                        <div class="mt-3 w-100 text-center">Forgot password ? <a href="<?php echo e(route('admin.password.request')); ?>">Reset Password</a></div>
                                    <!--<div class="mt-3 w-100 text-center">Don't Have Account ? <a href="{{}}">Register Now</a></div>-->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login page end-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pigstuhq/pureoproducts.pigslhub.com/resources/views/admin/auth/login.blade.php ENDPATH**/ ?>