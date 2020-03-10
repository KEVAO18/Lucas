<?php

	include 'assets/backend/controller.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="assets/multimedia/favicon.png">
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
    <?php
$date=date('G');
  if ($date>12) {
    ?>
  <style>
    body{
      margin: 0;
      padding: 0;
      background: #fab1a0;
    }
    .cuenca{
      border: 1px solid;
      border-radius: 12px;
      position: absolute;
      left: 26%;
      top: 50%;
      transform: translateY(-50%);
      widows: 100%;
      text-align: center;
    }
    .ojo{
      width: 240px;
      height: 120px;
      background: #ecf0f1;
      display: inline-block;
      margin: 40px;
      border-radius: 50%;
      position: relative;
      overflow: hidden;
    }
    .bolita{
      width: 80px;
      height: 80px;
      background: #3d3d3d;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      border-radius: 50%;
      border: 15px solid slategrey;
    }
    @media (width:900px){
      body{
        margin: 0;
        padding: 0;
        background: #fab1a0;
      }
      .cuenca{
        border: 0px solid;
        border-radius: 0px;
        position: absolute;
        left: 0%;
        top: 0%;
        transform: translateY(0%);
        widows: 0%;
        text-align: center;
      }
      .ojo{
        width: 0px;
        height: 0px;
        background: #ecf0f1;
        display: inline-block;
        margin: 0px;
        border-radius: 0%;
        position: relative;
        overflow: hidden;
      }
      .bolita{
        width: 0px;
        height: 0px;
        background: #3d3d3d;
        position: absolute;
        top: 0%;
        left: 0%;
        transform: translate(-0%,-0%);
        border-radius: 0%;
        border: 0px solid slategrey;
      }
    }
  </style>

    <?php
  }else{
    ?>
  <style>
  body{
    margin: 0;
    padding: 0;
    background: #23233b;
  }
  .cuenca{
    border: 1px solid;
    border-radius: 12px;
    position: absolute;
    left: 26%;
    top: 50%;
    transform: translateY(-50%);
    widows: 100%;
    text-align: center;
  }
  .ojo{
    width: 240px;
    height: 120px;
    background: #ecf0f1;
    display: inline-block;
    margin: 40px;
    border-radius: 50%;
    position: relative;
    overflow: hidden;
  }
  .bolita{
    width: 80px;
    height: 80px;
    background: #3d3d3d;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    border-radius: 50%;
    border: 15px solid slategrey;
  }
  @media (width:900px){
    body{
      margin: 0;
      padding: 0;
      background: #fab1a0;
    }
    .cuenca{
      border: 0px solid;
      border-radius: 0px;
      position: absolute;
      left: 0%;
      top: 0%;
      transform: translateY(0%);
      widows: 0%;
      text-align: center;
    }
    .ojo{
      width: 0px;
      height: 0px;
      background: #ecf0f1;
      display: inline-block;
      margin: 0px;
      border-radius: 0%;
      position: relative;
      overflow: hidden;
    }
    .bolita{
      width: 0px;
      height: 0px;
      background: #3d3d3d;
      position: absolute;
      top: 0%;
      left: 0%;
      transform: translate(-0%,-0%);
      border-radius: 0%;
      border: 0px solid slategrey;
    }
  }
  </style>
  <?php
  }

?>
</head>
<body>
	<?php

	navbar("Descanso");

  echo "Hora: ".$date;

	?>
<div class="cuenca">
      <div class="ojo">
      <div class="bolita"></div>
      </div>
      <div class="ojo">
      <div class="bolita"></div>
      </div>
    </div>
    <script>
      var ojos = document.getElementsByClassName("bolita");
      document.onmousemove = function(){
        var x = event.clientX * 100 / window.innerWidth + "%";
        var y = event.clientY * 100 / window.innerHeight + "%";

        for(var i = 0; i < 2 ;i++){
          ojos[i].style.left = x;
          ojos[i].style.top = y;
        }
      }
    </script>
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