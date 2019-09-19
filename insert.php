 <?php 

			$data = array();
            foreach ($_GET as $key => $value){
                if (empty($value)){
                    $data[$key] = 'null';
                }else{
                    $data[$key] = $value;
                }
            }

 			$metrazh = $data['param1'];
 			$price = $data['param2'];
 			$link = $data['param3'];
 			$comment = $data['param4'];
 			$kind = $data['param5'];
 			$geo = $data['param6'];
 			$addr = $data['param7'];
 			$floor = $data['param8'];
 			$sep_exit = $data['param9'];
 			$steps = $data['param10'];
 			$high = $data['param11'];
 			$power = $data['param12'];
 			$remont = $data['param13'];
 			$city = $data['param14'];
 			$metka_filter = $data['param15'];

 			$sverka = $data['param16'];
 			$stavka = $data['param17'];
 			$index34 = $data['param18'];
 			$kanikuly = $data['param19'];
 			$komiss = $data['param20'];

 			$lat = $geo[0];
 			$lng = $geo[1];
 			

			$mysqli = mysqli_connect("localhost", "rfb7925m_test1", "bgdhS7&j", "rfb7925m_test1"); 
			if (mysqli_connect_errno()) {
    		printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    		exit();
			}

			$query = "INSERT INTO markers(comment, metrazh, price, link, typeof, addr, lat, lng, floor, sep_exit, steps, high, power, remont, city, filter, sverka, stavka, index34, kanikuly, komiss) VALUES ('$comment', '$metrazh', '$price', '$link', '$kind', '$addr', $lat, $lng, $floor, '$sep_exit', $steps, $high, $power, '$remont', '$city', '$metka_filter', '$sverka', '$stavka', '$index34', '$kanikuly', '$komiss')";
			if (!$mysqli->query($query)) { 
				printf("Сообщение ошибки: %s\n", $mysqli->error); 
			}

			
			mysqli_close($mysqli);
?>


