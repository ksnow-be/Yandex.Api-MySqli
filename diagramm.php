<?php 
			$mysqli = mysqli_connect("localhost", "rfb7925m_test1", "bgdhS7&j", "rfb7925m_test1"); 
			if (mysqli_connect_errno()) {
	    		printf("Не удалось подключиться: %s\n", mysqli_connect_error());
	    		exit();
			}
			$res = mysqli_query($mysqli, "SELECT * FROM markers"); 

			$arr_res = array();
			while ($row = mysqli_fetch_assoc($res))
			{
				$arr_res[] = $row;
   			}		
   			echo json_encode($arr_res, JSON_UNESCAPED_UNICODE);
			mysqli_close($mysqli);
 ?>
