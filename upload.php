<?php 
	if( isset( $_POST['my_file_upload'] ) ){  
	// ВАЖНО! тут должны быть все проверки безопасности передавемых файлов и вывести ошибки если нужно

	$uploaddir = './uploads'; // . - текущая папка где находится submit.php

	// cоздадим папку если её нет
	if( ! is_dir( $uploaddir ) ) mkdir( $uploaddir, 0777 );

	$files      = $_FILES; // полученные файлы
	$done_files = array();
	$loc = $_POST['addr'];




	// переместим файлы из временной директории в указанную
	foreach( $files as $file ){
		$file_name = $file['name'];

		if (file_exists("uploads/$file_name")){
			printf("break");
			return ;
		}

		if( move_uploaded_file( $file['tmp_name'], "$uploaddir/$file_name" ) ){
			$done_files[] = realpath( "$uploaddir/$file_name" );
		}
	}

	$data = $done_files ? array('files' => $done_files ) : array('error' => 'Ошибка загрузки файлов.');

			$mysqli = mysqli_connect("localhost", "rfb7925m_test1", "bgdhS7&j", "rfb7925m_test1"); 
			if (mysqli_connect_errno()) {
    		printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    		exit();
			}

			$query = "UPDATE markers SET upfile = '$file_name' WHERE addr = '$loc'";
			if (!$mysqli->query($query)) { 
				printf("Сообщение ошибки: %s\n", $mysqli->error); 
			}
			mysqli_close($mysqli);

	die( json_encode( $data ) );
}
 ?>