<?php 
			$addr = $_GET['param1'];
			$mysqli = mysqli_connect("localhost", "rfb7925m_test1", "bgdhS7&j", "rfb7925m_test1"); 
			if (mysqli_connect_errno()) {
	    		printf("Не удалось подключиться: %s\n", mysqli_connect_error());
	    		exit();
			}

			$file = mysqli_query($mysqli, "SELECT upfile FROM markers WHERE addr = '$addr'");
			$arr_res = array();
			while ($row = mysqli_fetch_assoc($file))
			{
      			$arr_res[] = $row;
   			}
   			$res = $arr_res[0]['upfile'];
   			print_r($res);
   			unlink("uploads/" . $res);

			$query2 = "DELETE FROM markers WHERE addr = '$addr'";
			mysqli_query($mysqli, $query2);
			mysqli_close($mysqli);
 ?>