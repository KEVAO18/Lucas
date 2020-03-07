<?php

	include 'assets/backend/controller.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lucas Orrego Martínez</title>
    <!-- Font Awesome -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.8.2/css/all.css'>
    <!-- Bootstrap core CSS -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <!-- Material Design Bootstrap -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css' rel='stylesheet'>
    <!-- LESS -->
    <link rel='stylesheet/less' type='text/css' href='assets/css/style.less' />
    <script src='//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js' ></script>
</head>
<body>
	<?php

	navbar("Home");

	?>
    <header id="header" style="" class="back">
      <div class="text-center img-favicon">
      </div>
	  </header>

	  <div class="container text-center py-4">
	  	<h2>Horario</h2>
	  </div>
    <div class="container">
      <div class="row">
        <?php
        Horario();
        ?>
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <?php
    	footer();
    ?>
	<script src="assets/js"></script>
	<!-- JQuery -->
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <!-- Bootstrap tooltips -->
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js'></script>
    <!-- Bootstrap core JavaScript -->
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
    <!-- MDB core JavaScript -->
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js'></script>
</body>
</html>