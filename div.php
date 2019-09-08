<?php

	$i = 0;
	$arr = towns();

	
	while ($i < sizeof($arr))
	{ 
		echo '<option>' . $arr[$i][city] . '</option>';
		$i++;
	}

		function towns()
		{
			$mysqli = mysqli_connect("localhost", "rfb7925m_test1", "bgdhS7&j", "rfb7925m_test1"); 
			if (mysqli_connect_errno()) {
	    		printf("Не удалось подключиться: %s\n", mysqli_connect_error());
	    		exit();
			}
			$res = mysqli_query($mysqli, "SELECT DISTINCT city FROM markers"); 

			$arr_res = array();
			while ($row = mysqli_fetch_assoc($res))
			{
				$arr_res[] = $row;
   			}
   			mysqli_close($mysqli);		
   			return $arr_res;
		}
 ?>