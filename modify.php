<?php 


			$data = array();
            foreach ($_GET as $key => $value){
                if (empty($value)){
                    $data[$key] = 'null';
                }else{
                    $data[$key] = $value;
                }
            }

			$addr = $data['param1'];
			$metrazh = $data['param2'];
			$price = $data['param3'];
			$link = $data['param4'];
			$comment = $data['param5'];
			$kindof = $data['param6'];
			$floor = $data['param7'];
			$sep_exit = $data['param8'];
			$steps = $data['param9'];
			$high = $data['param10'];
			$power = $data['param11'];
			$remont = $data['param12'];
			$filter = $data['param13'];

			$sverka = $data['param14'];
 			$stavka = $data['param15'];
 			$index34 = $data['param16'];
 			$kanikuly = $data['param17'];
 			$komiss = $data['param18'];

			$mysqli = mysqli_connect("localhost", "rfb7925m_test1", "bgdhS7&j", "rfb7925m_test1"); 
			if (mysqli_connect_errno()) {
	    		printf("Не удалось подключиться: %s\n", mysqli_connect_error());
	    		exit();
			}

			$query1 = "UPDATE markers 
						SET metrazh = $metrazh, 
						price = $price,
						link = '$link',
						comment = '$comment',
						typeof = '$kindof',
						floor = $floor,
						sep_exit = '$sep_exit',
						steps = '$steps',
						high = $high,
						power = $power,
						remont = '$remont',
						filter = '$filter',
						sverka = $sverka,
						stavka = $stavka,
						index34 = $index34,
						kanikuly = $kanikuly,
						komiss = $komiss
						WHERE addr = '$addr'";

			mysqli_query($mysqli, $query1);
			mysqli_close($mysqli);
 ?>