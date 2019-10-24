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
  
<div class="row">
    <div class="col-lg-12 mt40">
        <div class="pull-left">
            <h2><?php echo $title; ?></h2>
        </div>
    </div>
</div>
     
     
<form action="<?php echo base_url('pacientes/store') ?>" method="POST" name="edit_paciente">
   <input type="hidden" name="id" value="<?php echo $paciente->idPaciente ?>">
     <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Nombre</strong>
                <input type="text" name="nombre" class="form-control" value="<?php echo $paciente->nombre ?>" placeholder="Enter Paciente">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Dirección</strong>
                <textarea class="form-control" col="4" name="direccion"
                 placeholder="Enter Direccion"><?php echo $paciente->direccion ?></textarea>
            </div>
        </div>
        <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
     
 
</div>
     
</body>
</html>