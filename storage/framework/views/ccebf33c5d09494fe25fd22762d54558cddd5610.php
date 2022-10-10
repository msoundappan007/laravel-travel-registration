<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <title>Dashboard</title>
</head>
<body>
    
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
        <a class="nav-link active" href="logout"> Logout</a>
      </li>
     
      
      
    </ul>
  </div>
</div>
</nav>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:50px">
                <h4 > welcome to dashboard</h4>
                <hr style="width:220%">
                <table class="table"style="width:220%">
                    <thead >
                        <th>Id</th>
                        <th >Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Gender</th>
                        <th>Action</th>
                        
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo e($data->id); ?></td>
                            <td><?php echo e($data->name); ?></td>
                            <td><?php echo e($data->email); ?></td>
                            <td><?php echo e($data->Address); ?></td>
                            
                            <td><?php echo e($data->phonenumber); ?></td>
                            <td><?php echo e($data->gender); ?></td>
                            <td><a href="logout">Logout</a></td>
                        </tr>
                    </tbody>
                </table>
               <a href="<?php echo e(url('add')); ?>"> <button type="button" class="btn btn-outline-primary float-right">Add</button></a>


            </div>


        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</html><?php /**PATH E:\laravelpro\laravelcrud\resources\views/layouts/dashboard.blade.php ENDPATH**/ ?>