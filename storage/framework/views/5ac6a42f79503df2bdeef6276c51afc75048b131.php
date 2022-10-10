
<nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <a class="navbar-brand" href="#">Navbar</a>
  <div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item ">
        <a class="nav-link active " aria-current="page" href="<?php echo e(url('/')); ?>">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="<?php echo e(url('add')); ?>">Add data</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link active" href="<?php echo e(url('admin')); ?>"> Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="<?php echo e(url('register' )); ?>"> Register</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</div>
</nav>

<?php /**PATH E:\laravelpro\laravelcrud\resources\views/includes/navbar.blade.php ENDPATH**/ ?>