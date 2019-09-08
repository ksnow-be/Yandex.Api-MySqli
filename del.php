<?php 
			$addr = $_GET['param1'];
			$mysqli = mysqli_connect("localhost", "rfb7925m_test1", "bgdhS7&j", "rfb7925m_test1"); 
			if (mysqli_connect_errno()) {
	    		printf("Не удалось подключиться: %s\n", mysqli_connect_error());
	    		exit();
			}

			$query = "DELETE FROM markers WHERE addr = '$addr'";
			mysqli_query($mysqli, $query);
			mysqli_close($mysqli);
 ?>