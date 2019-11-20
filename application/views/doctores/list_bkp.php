<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <style>
        .mt40{
            margin-top: 40px;
        }
    </style>
</head>
<body>
    
<div class="container">
    <div class="row mt40">
   <div class="col-md-10">
    <h2><?php echo $title; ?></h2>
   </div>
   <div class="col-md-2">
    <a href="<?php echo base_url('/doctores/create/') ?>" class="btn btn-danger">Agregar Doctor</a>
   </div>
   <br><br>
 
    <table class="table table-bordered">
       <thead>
          <tr>
             <th>Id</th>
             <th>Nombre</th>
             <th>direccion</th>
             <th>Created at</th>
             <td colspan="2">Action</td>
          </tr>
       </thead>
       <tbody>
          <?php if($doctores): ?>
          <?php foreach($doctores as $doctor): ?>
          <tr>
             <td><?php echo $doctor->idDoctor; ?></td>
             <td><?php echo $doctor->nombre; ?></td>
             <td><?php echo $doctor->direccion; ?></td>
             <td><a href="<?php echo base_url('doctores/edit/'.$doctor->idDoctor) ?>" class="btn btn-primary">Modificar</a></td>
                 <td>
                <form action="<?php echo base_url('doctores/delete/'.$doctor->idDoctor) ?>" method="post">
                  <button class="btn btn-danger" type="submit">Eliminar</button>
                </form>
            </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
    </table>
    
</div>
 
</div>
     
</body>
</html>