
<?php $__env->startSection('content'); ?>
<?php
use Session as s;
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<body>
    <div class="container">
<table>
              <form action="<?php echo e(url ('detail-data')); ?>"method="post">
              
                           <?php if(Session::has('success')): ?>
                           <div class="alert alert-success"><?php echo e(Session::get('success')); ?> </div>
                           <?php endif; ?>

                            <?php if(Session::has('fail')): ?>
                           <div class="alert alert-danger"><?php echo e(Session::get('fail')); ?> </div>   
                            <?php endif; ?>
                           
              <?php echo e(csrf_field()); ?>

                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" placeholder="Enter your name">
                                <span class="text-danger"> <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email Id :&emsp;</label>
                                <input type="text" class="form-control" name="email" value="<?php echo e(old('email')); ?>"placeholder="Enter your Email id">
                                <span class="text-danger"> <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter your password">
                                <span class="text-danger"> <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" name="Address"value="<?php echo e(old('Address')); ?>" placeholder="Enter your address">
                                <span class="text-danger"> <?php $__errorArgs = ['Address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone Number &emsp;&emsp;&emsp;</label>
                                <input type="text" class="form-control" name="phonenumber"value="<?php echo e(old('phonenumber')); ?>" placeholder="Enter your Phone number">
                                <span class="text-danger"> <?php $__errorArgs = ['phonenumber'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
</div>
</br>
                            <div class="mb-3">
                                <label class="form-label">Gender&emsp;&emsp;&emsp;&emsp;&emsp;</label>
                                <input type="radio" name="gender"  value="Male">Male&emsp;&emsp;</input><input type="radio" name="gender" value="Female" checked>female</input>
                            </div>
                            <button type="register" class="btn btn-primary">Register</button>
                            <br>
                            <br>    
                            <a href="admin">Already  registered !! login here</a>
               </form>

</table>
</div>
</body>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravelpro\laravelcrud\resources\views/layouts/register.blade.php ENDPATH**/ ?>