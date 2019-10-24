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
    <a href="<?php echo base_url('/pacientes/create/') ?>" class="btn btn-danger">Agregar Paciente</a>
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
          <?php if($pacientes): ?>
          <?php foreach($pacientes as $paciente): ?>
          <tr>
             <td><?php echo $paciente->idPaciente; ?></td>
             <td><?php echo $paciente->nombre; ?></td>
             <td><?php echo $paciente->direccion; ?></td>
             <td><a href="<?php echo base_url('pacientes/edit/'.$paciente->idPaciente) ?>" class="btn btn-primary">Modificar</a></td>
                 <td>
                <form action="<?php echo base_url('pacientes/delete/'.$paciente->idPaciente) ?>" method="post">
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