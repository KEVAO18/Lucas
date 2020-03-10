<?php
	$host="localhost";
	$user="root";
	$pass="";
	$db="lucasinem";
	$conexion = new mysqli($host, $user, $pass, $db) or die('muerto');

	if (isset($_GET['op']) && $_GET['op']==1) {
		$name = $_FILES['archivo']['name'];
		$tipo = $_POST['tipo'];
		$nota = $_POST['nota'];
		$per = $_POST['per'];
		$materia = $_POST['materia'];
		if (!isset($_POST['rv']) || $_POST['rv']==0) {
			$estado = 0;
		}else if (isset($_POST['rv']) && $_POST['rv']>=1) {
			$estado = $_POST['rv'];
		}

		$sql = "INSERT INTO `registros`(`id`, `name`, `materia`, `estatus`, `fecha`, `tipo`, `nota`, `periodo`) VALUES (NULL, '$name', '$materia', '$estado', NULL, '$tipo', '$nota', '$per')";
		$exe = $conexion->query($sql);

		$dir = "../tareas/";
		opendir($dir);
		$destino = $dir.$_FILES["archivo"]["name"];
		$copy=$_FILES["archivo"]["tmp_name"];
		copy($copy,$destino);

		header("location: ../../".$materia.".php");
	}else if (isset($_GET['op']) && $_GET['op']==2) {
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$rev=$_POST['up'];
			$nota=$_POST['notau'];

			$query="UPDATE `registros` SET `estatus`='$rev',`nota`='$nota' WHERE `id` = '$id';";
			$con=$conexion->query($query);
		
		header("location: ../../index.php");
		}
		
	}else if (isset($_GET['op']) && $_GET['op']==3) {
		if (isset($_GET['doc'])) {
			$id = $_GET['doc'];

			$query="SELECT * FROM `registros` WHERE `id` = '$id'";
			$get = $conexion->query($query);
		    while ($row=$get->fetch_assoc()){
				unlink("../tareas/".$row['name']);
		    }
			$query2="DELETE FROM `registros` WHERE `id` = '$id'";
			$con=$conexion->query($query2);
		
		header("location: ../../index.php");
		}
	}

?>