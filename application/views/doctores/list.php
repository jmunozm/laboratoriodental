            <div class="content-inner">
                <!-- Page Header-->
                <header class="page-header">
                  <div class="container-fluid">
                    <h2 class="no-margin-bottom">Dashboard</h2>
                  </div>
                </header>
                <div></br></div>
                <div class="col-lg">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard3" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a><a href="<?php echo base_url('/doctores/create/') ?>" class="dropdown-item edit"> <i class="fa fa-gear"></i>Agregar</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4"><?php echo $title; ?></h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Nombre</th>
                              <th>email</th>
                              <th>Teléfono</th>
                              <th colspan="2">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php if($doctores): ?>
                            <?php foreach($doctores as $doctor): ?>
                            <tr>
                              <td><?php echo $doctor->idDoctor; ?></td>
                              <td><?php echo $doctor->nombre; echo " "; echo $doctor->apellidoPaterno; ?></td>
                              <td><?php echo $doctor->email; ?></td>
                              <td><?php echo $doctor->telefono; ?></td>
                              <td>
                              <a href="<?php echo base_url('doctores/edit/'.$doctor->idDoctor) ?>" class="btn btn-primary">Modificar</a>
                              <a href="<?php echo base_url('doctores/delete/'.$doctor->idDoctor) ?>" class="btn btn-danger">Eliminar</a></td><!--jml-->
                              <!--
                              <td>
                                  <form action="<?php echo base_url('doctores/delete/'.$doctor->idDoctor) ?>" method="post">
                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                  </form>
                              </td>
                              -->
                            </tr>
                          <?php endforeach; ?>
                          <?php endif; ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>