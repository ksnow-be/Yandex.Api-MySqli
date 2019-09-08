<?php 
			$city_select = $_GET['param1'];
			$mysqli = mysqli_connect("localhost", "rfb7925m_test1", "bgdhS7&j", "rfb7925m_test1"); // Грубо говоря открыли дескриптор
			if (mysqli_connect_errno()) {
    		printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    		exit();
			}
			$res = mysqli_query($mysqli, "SELECT * FROM markers WHERE city = '$city_select'"); // послали запрос в дескриптор

			$arr_res = array();
			while ($row = mysqli_fetch_assoc($res))
			{
      			// printf ("%s\n%d\n%d\n%s\n%s\n%s\n%f\n%f\n\n\n", $row["addr"],$row["metrazh"],$row["price"],$row["link"],$row["typeof"],$row["comment"],$row["lat"],$row["lng"]);
				$arr_res[] = $row;
   			}		
   			echo json_encode($arr_res, JSON_UNESCAPED_UNICODE);
			mysqli_close($mysqli);
 ?>