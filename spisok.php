<?php 
	
			$mysqli = mysqli_connect("localhost", "rfb7925m_test1", "bgdhS7&j", "rfb7925m_test1"); // Грубо говоря открыли дескриптор
			if (mysqli_connect_errno()) {
    		printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    		exit();
			}
			$res = mysqli_query($mysqli, "SELECT * FROM markers"); // послали запрос в дескриптор

			$arr_res = array();
			while ($row = mysqli_fetch_assoc($res))
			{
				$arr_res[] = $row;
   			}

   			$color = 0;
   			foreach ($arr_res as $key) {
   				if ($color % 2 == 0)
   					echo "<strong><div style='background:#f2f2f2;' class='div_spisok'>" . $key["addr"] . "</div></strong>";
   				else
   					echo "<strong><div style='background:white;' class='div_spisok'>" . $key["addr"] . "</div></strong>";
   				$color++;
   			}
			mysqli_close($mysqli);
 ?>