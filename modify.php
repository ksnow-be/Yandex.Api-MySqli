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

 			$nash = $data['param19'];
 			$vyhod = $data['param20'];
 			$pravo = $data['param21'];
 			$dlinn = $data['param22'];

 			$p_sverka = $data['param23'];
 			$p_stavka = $data['param24'];
 			$p_index34 = $data['param25'];
 			$p_kanikuly = $data['param26'];
 			$p_komiss = $data['param27'];
 			$p_nash = $data['param28'];
 			$p_vyhod = $data['param29'];
 			$p_pravo = $data['param30'];
 			$p_dlinn = $data['param31'];

 			$d_sverka = $data['param32'];
 			$d_stavka = $data['param33'];
 			$d_index34 = $data['param34'];
 			$d_kanikuly = $data['param35'];
 			$d_komiss = $data['param36'];
 			$d_nash = $data['param37'];
 			$d_vyhod = $data['param38'];
 			$d_pravo = $data['param39'];
 			$d_dlinn = $data['param40'];

			$mysqli = mysqli_connect("localhost", "rfb7925m_test1", "bgdhS7&j", "rfb7925m_test1"); 
			if (mysqli_connect_errno()) {
	    		printf("Не удалось подключиться: %s\n", mysqli_connect_error());
	    		exit();
			}

			$query1 = "UPDATE markers 
						SET metrazh = '$metrazh', 
						price = '$price',
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
						sverka = '$sverka',
						stavka = '$stavka',
						index34 = '$index34',
						kanikuly = '$kanikuly',
						komiss = '$komiss',
						nash = '$nash',
						vyhod = '$vyhod',
						pravo = '$pravo',
						dlinn = '$dlinn',
						p_sverka = '$p_sverka',
						p_stavka = '$p_stavka',
						p_index34 = '$p_index34',
						p_kanikuly = '$p_kanikuly',
						p_komiss = '$p_komiss',
						p_nash = '$p_nash',
						p_vyhod = '$p_vyhod',
						p_pravo = '$p_pravo',
						p_dlinn = '$p_dlinn',
						d_sverka = '$d_sverka',
						d_stavka = '$d_stavka',
						d_index34 = '$d_index34',
						d_kanikuly = '$d_kanikuly',
						d_komiss = '$d_komiss',
						d_nash = '$d_nash',
						d_vyhod = '$d_vyhod',
						d_pravo = '$d_pravo',
						d_dlinn = '$d_dlinn'
						WHERE addr = '$addr'";

							

			if (!mysqli_query($mysqli, $query1)){
				printf("Сообщение ошибки: %s\n", mysqli_error($mysqli));
			}
			else{
				printf("All good");
			}
			mysqli_close($mysqli);
 ?>





















