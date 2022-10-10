
<?php $__env->startSection('content'); ?>
<div    >
  <section class="my-5">
      <div class="container" >
          <div class="row">
              <div class="col-md-12">
              <?php if(session()->has('status')): ?>
    <div class="alert alert-success">
        <?php echo e(session()->get('status')); ?>

    </div>
<?php endif; ?>
                  <div class="card"style="background-color:#A9A9A9">
                      <div class="card-header text-center">
                          <h2>Details   </h2>
                      </div>
                      <div class="card-body">
                        <table class="table">
                             <thead>
                                 <tr>
                                     <th>id</th>
                                     <th>Travel Id</th>
                                     <th>Request Raised date</th>
                                     <th>Source</th>
                                     <th>Destination</th>
                                     
                                     <th>Mode Of Travel</th>
                                     <th>Travel Date</th>
                                     <th>Roundtrip</th>
                                     <th>Action</th>
                                 </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stud): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                <td><?php echo e($stud->id); ?>  </td>
                                   <td><?php echo e($stud->TravelId); ?>  </td>
                                   <td> <?php echo e($stud->RequestRaiseddate); ?> </td>
                                   <td> <?php echo e($stud->Source); ?> </td>
                                   <td> <?php echo e($stud->Destination); ?> </td>
                                   <td> <?php echo e($stud->ModeOfTravel); ?> </td>
                                   <td> <?php echo e($stud->TravelDate); ?> </td>
                                   <td> <?php echo e($stud->Roundtrip); ?> </td>
                                   <td>
                                       <a href="<?php echo e(url('edit/'.$stud->id)); ?>" class="btn btn-success">Edit</a>
                                       <a href="<?php echo e(url('delete/'.$stud->id)); ?>" class="btn btn-danger">Delete</a>
                                   </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                      </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravelpro\laravelcrud\resources\views/layouts/index.blade.php ENDPATH**/ ?>