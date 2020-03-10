<?php
	function navbar($lugar=''){
		echo "<!-- Navbar -->
      <div class='navbar navbar-expand-md navbar-dark fixed-top azul scrolling-navbar'>
        <div class='container'>
          <a class='navbar-brand' href='index.php' data-toggle='modal' data-target='#sidebar'><i style='color: #ffffff' class='fas fa-bars'></i></a>
            <ul class='navbar-nav mr-auto'>
              <li class='nav-item'>
                <a class='nav-link' href='index.php'>Lucas Orrego Martínez - ".$lugar."</a>
              </li>
              <li class='nav-item' style='color: #ffffff'><a href='' class='nav-link' title='' data-toggle='modal' data-target='#upload'><i class='fas fa-cloud-upload-alt'></i></a></li>
            </ul>
            <ul class='navbar-nav'>
              <li class='nav-item' style='color: #ffffff'>".date('Y-m-d')."</li>
            </ul>
        </div>
      </div>
        <!-- Modal -->
        <div class='modal left fade' id='sidebar' tabindex='1' role='dialog' aria-labelledby='exampleModalLabel'
          aria-hidden='true'>
          <div class='modal-dialog modal-full-height modal-left' role='document'>
            <div class='modal-content'>
              <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalLabel'>".$lugar."</h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                  <span aria-hidden='true'><i style='color: #000000' class='fas fa-bars'></i></span>
                </button>
              </div>
              <div class='modal-body'>
                <div class='container'>
                  <div class='card' style='box-shadow: 0 0 0 #fff;'>
                    <ul class='list-group list-group-flush'>
                      <li class='list-group-item'>
                        <center>
											    <li class='list-group-item menu'><a href='materias.php' style='color: #444444cc'>materias</a>
                          <li class='list-group-item menu'><a href='Artes.php' style='color: #444444cc'>Artes</a>
                          <li class='list-group-item menu'><a href='Ciencias.php' style='color: #444444cc'>Ciencias</a>
                          <li class='list-group-item menu'><a href='EducacionF.php' style='color: #444444cc'>Educacion Fisica</a></li>
                          <li class='list-group-item menu'><a href='Emprendimiento.php' style='color: #444444cc'>Emprendimiento</a>
                          <li class='list-group-item menu'><a href='Español.php' style='color: #444444cc'>Español</a>
                          <li class='list-group-item menu'><a href='Estadistica.php' style='color: #444444cc'>Estadistica</a>
                          <li class='list-group-item menu'><a href='Geometria.php' style='color: #444444cc'>Geometria</a>
                          <li class='list-group-item menu'><a href='Ingles.php' style='color: #444444cc'>Ingles</a>
                          <li class='list-group-item menu'><a href='Matematicas.php' style='color: #444444cc'>Matematicas</a>
                          <li class='list-group-item menu'><a href='Religion.php' style='color: #444444cc'>Religion</a>
                          <li class='list-group-item menu'><a href='Rotacion.php' style='color: #444444cc'>Rotacion</a>
                          <li class='list-group-item menu'><a href='Sociales.php' style='color: #444444cc'>Sociales</a>
                          <li class='list-group-item menu'><a href='Tecnologia.php' style='color: #444444cc'>Tecnologia</a></li>
                          </li>
                        <center>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /modal -->
        <!-- Modal -->
        <div class='modal right fade' id='upload' tabindex='2' role='dialog' aria-labelledby='upload'
          aria-hidden='true'>
          <div class='modal-dialog modal-full-height modal-right' role='document'>
            <div class='modal-content'>
              <div class='modal-header bg-primary' style=''>
                <h4 style='color: #eeeeee' class='modal-title' id='upload'>Subir Archivo</h4>
              </div>
              <div class='modal-body'>
                <div class='container'>
                  <div class='card' style='box-shadow: 0 0 0 #fff;'>
                    <ul class='list-group list-group-flush'>
                      <li class='list-group-item'>
                        <center>
                          <form action='assets/backend/conexion.php?op=1' method='post' enctype='multipart/form-data'>
                            <h4>Revisado</h4>
                            <div class=''>
                              <div class='custom-control custom-radio'>
                                <input type='radio' class='custom-control-input' value='1' id='si' name='rv'>
                                <label class='custom-control-label' for='si'>Si</label>
                              </div>

                              <div class='custom-control custom-radio'>
                                <input type='radio' class='custom-control-input' value='0' id='no' name='rv'>
                                <label class='custom-control-label' for='no'>No</label>
                              </div>
                            </div>
                            <br>
                            <div class='md-form mt-3'>
                              <input type='number' id='nota' class='form-control' name='nota' value='0'>
                              <label for='nota'>Nota</label>
                            </div>
                            <select class='browser-default custom-select' name='materia'>
                              <option selected value='---'>Materia</option>
                              <option value='Artes'>Artes</option>
                              <option value='Ciencias'>Ciencias</option>
                              <option value='EducacionF'>EducacionF</option>
                              <option value='Emprendimiento'>Emprendimiento</option>
                              <option value='Español'>Español</option>
                              <option value='Estadistica'>Estadistica</option>
                              <option value='Etica'>Etica</option>
                              <option value='Geometria'>Geometria</option>
                              <option value='Ingles'>Ingles</option>
                              <option value='Matematicas'>Matematicas</option>
                              <option value='Religion'>Religion</option>
                              <option value='Rotacion'>Rotacion</option>
                              <option value='Sociales'>Sociales</option>
                              <option value='Tecnologia'>Tecnologia</option>
                            </select>
                            <br>
                            <br>
                            <h4>Periodo</h4>
                            <div class=''>
                              <div class='custom-control custom-radio'>
                                <input type='radio' class='custom-control-input' value='1' id='p1' name='per'>
                                <label class='custom-control-label' for='p1'>Periodo 1</label>
                              </div>

                              <div class='custom-control custom-radio'>
                                <input type='radio' class='custom-control-input' value='2' id='p2' name='per'>
                                <label class='custom-control-label' for='p2'>Periodo 2</label>
                              </div>

                              <div class='custom-control custom-radio'>
                                <input type='radio' class='custom-control-input' value='3' id='p3' name='per'>
                                <label class='custom-control-label' for='p3'>Periodo 3</label>
                              </div>
                              <div class='custom-control custom-radio'>
                                <input type='radio' class='custom-control-input' value='4' id='p4' name='per'>
                                <label class='custom-control-label' for='p4'>Periodo 4</label>
                              </div>
                            </div>
                            <br>
                            <br>
                            <h4>Tipo de archivo</h4>
                            <div class=''>
                              <div class='custom-control custom-radio'>
                                <input type='radio' class='custom-control-input' value='word' id='uno' name='tipo'>
                                <label class='custom-control-label' for='uno'>Word</label>
                              </div>

                              <div class='custom-control custom-radio'>
                                <input type='radio' class='custom-control-input' value='powerpoint' id='dos' name='tipo'>
                                <label class='custom-control-label' for='dos'>PowerPoint</label>
                              </div>

                              <div class='custom-control custom-radio'>
                                <input type='radio' class='custom-control-input' value='excel' id='tres' name='tipo'>
                                <label class='custom-control-label' for='tres'>excel</label>
                              </div>

                              <div class='custom-control custom-radio'>
                                <input type='radio' class='custom-control-input' value='imagen' id='cuatro' name='tipo'>
                                <label class='custom-control-label' for='cuatro'>imagen</label>
                              </div>
                            </div>
                            <br>
                            <div class='custom-file'>
                              <input type='file' name='archivo' class='custom-file-input' id='inputGroupFile01' aria-describedby='imagen'>
                              <label class='custom-file-label' for='inputGroupFile01'>Elige el archivo</label>
                            </div>
                            <div class='text-center my-3'>
                              <button type='submit' name='send' class='btn btn-indigo btn-block'>Enviar</button>
                            </div>
                            </div>
                          </form>
                        <center>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /modal -->
      <!-- /navbar -->";
	}

	function footer(){
		echo "<!-- Footer -->
      <footer class='py-3'>
        <div class='container'>
          <div class='row pb-4'>
            <div class='col-sm-12'>
              <h5>Desarrollador</h5>
              <p>Kevin Andres Orrego Martinez <br><span style='font-size: 12px;'>(FullStack web developer)</span></p>
            </div>
            <div class='col-sm-4'>
            </div>
          </div>
        </div>
        <center>
          © 2020 Copyright: Kevin Andres Orrego Martinez
          <a href='https://kevaosportafolio.000webhostapp.com/index.html' target='_blank' class='link' title='Mi pagina web'>
            <i class='fas fa-info-circle'></i>
          </a>
        </center>
      </footer>
    <!-- /Footer -->";
	}

  function targeta($materia=''){
    echo "
    <div class='col-md-6 col-sm-6 mt-5'>
      <div class='card'>
        <img src='assets/multimedia/".$materia.".jpg' class='img-card' alt='img-targeta'>
        <div class='card-body'>
          <h4 class='card-title' ><a href='".$materia.".php' title=''>".$materia."</a></h4>
        </div>
      </div>
    </div>";
  }

  function targeta2($periodo='', $materia=''){
    echo "
    <div class='col-md-6 col-sm-12 mt-5'>
      <div class='card'>
        <img src='assets/multimedia/periodo".$periodo."_".$materia.".jpg' class='img-card' alt='img-targeta'>
        <div class='card-body'>
          <hr>
          <h4 class='card-title' ><a href='periodo".$periodo.".php?mt=".$materia."' title='' style='color: #154521'>Periodo ".$periodo."</a></h4>
        </div>
      </div>
    </div>";
  }

  function tareas($materia='', $periodo=0){
    $host="localhost";
    $user="root";
    $pass="";
    $db="lucasinem";
    $conexion = new mysqli($host, $user, $pass, $db) or die('muerto');
    $query="SELECT * FROM `registros` WHERE `materia` = '$materia' AND `periodo` = '$periodo'";
    $targeta = $conexion->query($query);
    while ($row=$targeta->fetch_assoc()){
      if ($row['estatus']==0) {
        $estado="No Revisado";
        $nota = "";
      }else if ($row['estatus']>=1) {
        $estado="Revisado";
        $nota = "<h5>Nota: ".$row['nota']."</h5>";
      }
    echo "
    <div class='col-md-6 col-sm-12 mt-5'>
      <div class='card'>
        <img src='assets/multimedia/".$row['tipo'].".jpg' class='img-card' alt='img-targeta'>
        <div class='card-body'>
          <hr>
          <h4 class='card-title' ><a href='assets/tareas/".$row['name']."' title='' style='color: #154521'>".$row['name']."</a></h4>
          <h5>Estado: ".$row['fecha']."</h5>
          <h5>Estado: ".$estado."</h5>
          ".$nota."
          <a class='btn btn-indigo' href='update.php?doc=".$row['id']."' title='' style='color: #154521'>Actualizar</a>
          <a class='btn btn-danger' onclick='confirmar()' title='' style='color: #154521'>Eliminar</a>
          <script>
            function confirmar(){
              var con = confirm('Estas Seguro De Eliminarlo?');

              if (con == true) {
                window.location.href='assets/backend/conexion.php?op=3&doc=".$row['id']."';
              } else {
                alert('Cancelado');
              }
            }
          </script>
        </div>
      </div>
    </div>";
    }
  }

  function Horario(){
    $day = date('D');
    if($day == "Mon"){
      targeta("Matematicas");
      targeta("Matematicas");
      targeta("Ingles");
      targeta("Etica");
      targeta("Religion");
      targeta("Español");
    }elseif ($day == "Tue") {
      targeta("Geometria");
      targeta("Estadistica");
      targeta("EducacionF");
      targeta("Sociales");
      targeta("Español");
      targeta("Ingles");
    }elseif ($day == "Wed") {
      targeta("Ciencias");
      targeta("Emprendimiento");
      targeta("Tecnologia");
      targeta("Tecnologia");
      targeta("Español");
      targeta("Sociales");
    }elseif ($day == "Thu") {
      targeta("Ciencias");
      targeta("Ciencias");
      targeta("Artes");
      targeta("Artes");
      targeta("Sociales");
      targeta("Ingles");
    }elseif ($day == "Fri") {
      targeta("Rotacion");
      targeta("Rotacion");
      targeta("EducacionF");
      targeta("Español");
      targeta("Sociales");
      targeta("Religion");
    }else{
      targeta("Descanso");
      targeta("Descanso");
      targeta("Descanso");
      targeta("Descanso");
      targeta("Descanso");
      targeta("Descanso");
    }
  }

  function update($id=''){
    $host="localhost";
    $user="root";
    $pass="";
    $db="lucasinem";
    $conexion = new mysqli($host, $user, $pass, $db) or die('muerto');
    $query="SELECT * FROM `registros` WHERE id='$id'";
    $exe = $conexion->query($query);
     while ($row=$exe->fetch_assoc()){
      if ($row['estatus']==0) {
        $estado="No Revisado";
        $nota = "";
        $uno="checked";
        $dos="";
      }else if ($row['estatus']>=1) {
        $estado="Revisado";
        $nota = "<h5>Nota: ".$row['nota']."</h5>";
        $uno="";
        $dos="checked";
      }
    echo "
      <div class='container-fluid'>
        <div class='row my-5 py-5'>
          <div class='col-md-3'>
            <div class='card p-2'>
              <h5>Estado: ".$estado."</h5>
              ".$nota."

            </div>
          </div>
          <div class='col-md-6'>
            <div class='card mb-4'>
              <img src='assets/multimedia/".$row['tipo'].".jpg' class='img-card' alt='img-targeta'>
              <div class='card-title p-2'>
                <h5>Estado: ".$row['name']."</h5>
              </div>
            </div>
          </div>
          <div class='col-md-3'>
            <div class='card p-2'>
              <h4>Actualizar</h4>
              <form action='assets/backend/conexion.php?op=2&id=".$id."' method='post'>
                <div class='md-form mt-3'>
                  <input type='number' id='notaU' class='form-control' name='notau' value='0'>
                  <label for='notaU'>Nota</label>
                </div>
                <div class=''>
                  <h5>Revision</h5>
                  <div class='custom-control custom-radio'>
                    <input type='radio' class='custom-control-input' value='1' id='yes' name='up' ".$dos.">
                    <label class='custom-control-label' for='yes'>Si</label>
                  </div>

                  <div class='custom-control custom-radio'>
                    <input type='radio' class='custom-control-input' value='0' id='not' name='up' ".$uno.">
                    <label class='custom-control-label' for='not'>No</label>
                  </div>
                </div>
                <br>
                <div class='text-center my-3'>
                  <button type='submit' name='send' class='btn btn-indigo btn-block'>Enviar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    ";
    }
  }

?>