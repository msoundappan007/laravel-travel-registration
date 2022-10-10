

<?php $__env->startSection('content'); ?>

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('cssfile/app.css')); ?>">
   
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;1,100&display=swap" rel="stylesheet">
    <title> Login</title>
</head>
<body>
    <form class="box" action="<?php echo e(url('login-data')); ?>" method="post">
                          <?php if(Session::has('success')): ?>
                           <div class="alert alert-success"><?php echo e(Session::get('success')); ?> </div>
                           <?php endif; ?>

                            <?php if(Session::has('fail')): ?>
                           <div class="alert alert-danger"><?php echo e(Session::get('fail')); ?> </div>   
                            <?php endif; ?>
    <?php echo e(csrf_field()); ?>

    <h1 >login</h1>
      
      <input type="text" name="email" value="<?php echo e(old('email')); ?>"placeholder="username">
      <span class="text-danger" style="color:red"> <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
      <input type="password" name="" placeholder="password">
      <span class="text-danger"style="color:red"> <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
      <input type="submit" name="" value="login">
      <div class="pass">forget password</div>
      <br>
      <a href="register">New register register here</a>
    </form>
   
</body>
</html>-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <div class="container">
<table >
              <form action="<?php echo e(url ('login-data')); ?>"method="post">
              
                           <?php if(Session::has('success')): ?>
                           <div class="alert alert-success"><?php echo e(Session::get('success')); ?> </div>
                           <?php endif; ?>

                            <?php if(Session::has('fail')): ?>
                           <div class="alert alert-danger"><?php echo e(Session::get('fail')); ?> </div>   
                            <?php endif; ?>
                           
              <?php echo e(csrf_field()); ?>

                            
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
                           
                            <button type="login" class="btn btn-primary">login</button>
                            <br>
                            <br>    
                         <a href="admin">New register   !! Register here</a>
               </form>

</table>
</div>
</body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravelpro\laravelcrud\resources\views/layouts/admin.blade.php ENDPATH**/ ?>