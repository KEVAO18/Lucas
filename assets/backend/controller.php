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
              <li class='nav-item' style='color: #ffffff'><a href='' class='nav-link' title=''><i class='fas fa-cloud-upload-alt'></i></a></li>
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

  function targeta2($periodo=''){
    echo "
    <div class='col-md-6 col-sm-6 mt-5'>
      <div class='card'>
        <img src='assets/multimedia/periodo".$periodo.".jpg' class='img-card' alt='img-targeta'>
        <div class='card-body'>
          <hr>
          <h4 class='card-title' ><a href='periodo".$periodo.".php' title='' style='color: #154521'>Periodo ".$periodo."</a></h4>
        </div>
      </div>
    </div>";
  }

  function Horario(){
    $day = date('D');
    if($day == "Mon"){
      targeta("Matematicas");
      targeta("Matematicas");
      targeta("Español");
      targeta("Ingles");
      targeta("Sociales");
      targeta("Sociales");
    }elseif ($day == "Tue") {
      targeta("Religion");
      targeta("Español");
      targeta("EducacionF");
      targeta("Emprendimiento");
      targeta("Religion");
      targeta("Ingles");
    }elseif ($day == "Wed") {
      targeta("Ingles");
      targeta("Ciencias");
      targeta("Español");
      targeta("Sociales");
      targeta("Tecnologia");
      targeta("Tecnologia");
    }elseif ($day == "Thu") {
      targeta("Artes");
      targeta("Artes");
      targeta("Español");
      targeta("Sociales");
      targeta("Rotacion");
      targeta("Rotacion");
    }elseif ($day == "Fri") {
      targeta("Geometria");
      targeta("Estadistica");
      targeta("Ciencias");
      targeta("Ciencias");
      targeta("EducacionF");
      targeta("Etica");
    }
  }

?>