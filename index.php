<!doctype html>



<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Недвижка</title>
  <link rel="stylesheet" href="index.css">
  <script src="https://api-maps.yandex.ru/2.1/?apikey=ba3532df-bdf2-4bfd-931f-7a6f2d03eaf6&lang=ru_RU" type="text/javascript"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>


<body>
	<div class="container-fluid">
		<div class="row" style="margin-top: 20px;">
			<div class="col-3 panel" id="left_panel" style="height: 900px; overflow-y: auto; overflow-x: hidden; background: #f2f8fa;">
				<div class="row" style="margin-top: 0%;">
					<div class="col-6 top-selectors" style="background: #beffa8; text-align: center; height: 50px; line-height: 50px;" onclick="visible()">
						<strong>Новая точка</strong>
					</div>
					<div class="col-6 top-selectors" style="background: #ffcd57; text-align: center; height: 50px; line-height: 50px;" onclick="show_spisok()">
						<strong>Список</strong>
					</div>
					 <div class="col-6" id="selector_left"></div>
					 <div class="col-6" id="selector_right"></div>
				</div>
				<div class="row" style="">
					<div id="forma"> 
					  <div class="form-row" style="margin-top: 20px;">
						  <div class="form-group col-12">
						  	<label for="suggest"><strong>Основное</strong></label>
						    <input type="text" class="form-control" id="suggest" placeholder="Адрес">
						  </div>
						    <div class="form-group col-md-6">
						      <input type="text" class="form-control" id="metrazh" placeholder="Метраж">
						    </div>
						    <div class="form-group col-md-6">
						      <input type="text" class="form-control" id="price" placeholder="Стоимость м/год">
						    </div>
					  </div>
					  <div class="form-group">
					    <input type="text" class="form-control" id="link" placeholder="Ссылка ЦИАН">
					  </div>
					  <div class="form-group">
					    <input type="text" class="form-control" id="comment" placeholder="Комментарий">
					  </div>
					  
					  <div class="form-group row">
					  	<div class="col-sm-6">
					  	  <label for="kindofpoint">Тип точки</label>
					      <select id="kindofpoint" class="form-control">
					       	  <option>Согласованная наша</option>
						      <option>Согласованная брокер</option>
						      <option>Отказ</option>
						      <option>На рассмотрении</option>
						      <option>Действующая</option>
						      <option>Ключевой</option>
					      </select>
					    </div>
					    <div class="col-sm-6">
					  	  <label for="kindofpoint">Метка для фильтра</label>
					      <select id="metka_filter" class="form-control">
					      	  <option>По умолчанию (...)</option>
					       	  <?php include 'metki.php'; ?>
					      </select>
					    </div>
					  </div>
					    <div class="form-group row">
					    	<div class="form-check col-6"></div>
						    <div class="form-check col-6">
						      <input class="form-check-input" type="checkbox" id="new_metka">
						      <label class="form-check-label" for="gridCheck">
						        Новая метка
						      </label>
						    </div>
						  </div>
						<div class="form-group row" style="display: none;" id="options_for_new_metka">
						  	<div class="col-12">
						  		<input type="text" class="form-control" placeholder="Введите имя новой метки" id="new_metka_value">
						  	</div>
					     </div>

					  <div class="form-row">
					  	<div class="form-group col-md-12" style="margin-top: 30px;">
					  	<label class="inputState" for="gridCheck"><strong>Техническая часть</strong></label>
					      <select id="sep_exit" class="form-control">
					       	  <option>Отельный вход - Да</option>
						      <option>Отдельный вход - Нет</option>
					      </select>
					    </div>
					    <div class="form-group col-md-6">
					      <input type="number" class="form-control" id="floor" placeholder="Этаж">
					    </div>
					    <div class="form-group col-md-6">
					      <input type="number" class="form-control" id="steps" placeholder="Кол-во ступеней">
					    </div>

					    <div class="form-group col-md-6">
					      <input type="number" class="form-control" id="high" placeholder="Высота потолка">
					    </div>
					    <div class="form-group col-md-6">
					      <input type="number" class="form-control" id="power" placeholder="Мощность">
					    </div>
					    <div class="form-group col-md-12">
					      <input type="text" class="form-control" id="remont" placeholder="Ремонт">
					    </div>
					  </div>

					  <div class="form-row">
					  	<div class="form-group col-12">
					  		<label for="sverka"><strong>Финансовая часть</strong></label>
					  		<input type="text" class="form-control" id="sverka" placeholder="ком 3 т.р./50 м2. Сверка 0.5 год">
					  	</div>
					  	<div class="form-group col-md-6">
						    <input type="text" class="form-control" id="stavka" placeholder="Ставка/мес">
					  	</div>
					  	<div class="form-group col-md-6">
						    <input type="text" class="form-control" id="index" placeholder="Индекс(3/4)">
					  	</div>
					  	<div class="form-group col-md-6">				  							 
						    <input type="text" class="form-control" id="kanikuly" placeholder="Каникулы (мес)">	  	
					  	</div>
					  	<div class="form-group col-md-6">				  							 
						    <input type="text" class="form-control" id="komiss" placeholder="Комиссия нам">	  	
					  	</div>
					  </div>
					  <button onclick="adding()" class="btn btn-success" style="margin-top: 20px; margin-bottom: 20px;">Добавить</button>
				  	</div>

					<div id="spisok" style="display: none; width: 100%;">
						  <div class="form-group">
						    <input type="text" class="form-control" id="marker_suggest" aria-describedby="emailHelp" placeholder="Поиск по точкам" style="margin-top: 30px;">
						    <small id="emailHelp" class="form-text text-muted">Ниже приведен полный список.</small>
						  </div>
				  			<?php include 'spisok.php'; ?>
				  	</div>
			  	</div>
		  	</div>


			<div class="col-7">
		  		<div id="map" style="width: 100%; height: 900px"></div>
		  	</div>


		  	<div class="col-2 panel" id="right_panel" style="overflow: auto; background: #f2f8fa;">

		  		<div class="row" style="margin-top: 10%; text-align: center;">
		  			<div class="col-2">
		  				<img src="pins/blue.png" style="width: 100%; height: 100%;">
		  			</div>
		  			<div class="col-8">
		  				<strong>Согл. наша</strong>
		  			</div>
		  			<div class="col-2">
		  				<div id="stat1"></div>
		  			</div>
			  		<div class="col-12" style="width: 30%; background: #f2f8fa; margin-top: 5px;">
			  			<div class="col-12" style="width: 1%; background: #34495E;  height: 3px;" id="diagramm1">

			  			</div>
			  		</div>
		  		</div>
		  		<div class="row" style="margin-top: 10%; text-align: center;">
		  			<div class="col-2">
		  				<img src="pins/light-blue.png" style="width: 100%; height: 100%;">
		  			</div>
		  			<div class="col-8">
		  				<strong>Согл. брокер</strong>
		  			</div>
		  			<div class="col-2">
		  				<div id="stat2"></div>
		  			</div>
			  		<div class="col-12" style="width: 30%; background: #f2f8fa; margin-top: 5px;">
			  			<div class="col-12" style="width: 1%; background: #3498DB;  height: 3px;" id="diagramm2">

			  			</div>
			  		</div>
		  		</div>
		  		<div class="row" style="margin-top: 10%; text-align: center;">
		  			<div class="col-2">
		  				<img src="pins/red.png" style="width: 100%; height: 100%;">
		  			</div>
		  			<div class="col-8">
		  				<strong>Отказ</strong>
		  			</div>
		  			<div class="col-2">
		  				<div id="stat3"></div>
		  			</div>
			  		<div class="col-12" style="width: 30%; background: #f2f8fa; margin-top: 5px;">
			  			<div class="col-12" style="width: 1%; background: #E74C3C;  height: 3px;" id="diagramm3">

			  			</div>
			  		</div>
		  		</div>
		  		<div class="row" style="margin-top: 10%; text-align: center;">
		  			<div class="col-2">
		  				<img src="pins/gray.png" style="width: 100%; height: 100%;">
		  			</div>
		  			<div class="col-8">
		  				<strong>Рассмотрение</strong>
		  			</div>
		  			<div class="col-2">
		  				<div id="stat4"></div>
		  			</div>
			  		<div class="col-12" style="width: 30%; background: #f2f8fa; margin-top: 5px;">
			  			<div class="col-12" style="width: 1%; background: #95A5A6;  height: 3px;" id="diagramm4">

			  			</div>
			  		</div>
		  		</div>
		  		<div class="row" style="margin-top: 10%; text-align: center;">
		  			<div class="col-2">
		  				<img src="pins/ozon.png" style="width: 100%; height: 100%;">
		  			</div>
		  			<div class="col-8">
		  				<strong>Действующая</strong>
		  			</div>
		  			<div class="col-2">
		  				<div id="stat5"></div>
		  			</div>
			  		<div class="col-12" style="width: 30%; background: #f2f8fa; margin-top: 5px;">
			  			<div class="col-12" style="width: 1%; background: #2ECC71;  height: 3px;" id="diagramm5">

			  			</div>
			  		</div>
		  		</div>
		  		<div class="row" style="margin-top: 10%; text-align: center;">
		  			<div class="col-2">
		  				<img src="pins/yellow.png" style="width: 100%; height: 100%;">
		  			</div>
		  			<div class="col-8">
		  				<strong>Ключевой</strong>
		  			</div>
		  			<div class="col-2">
		  				<div id="stat6"></div>
		  			</div>
			  		<div class="col-12" style="width: 30%; background: #f2f8fa; margin-top: 5px;">
			  			<div class="col-12" style="width: 1%; background: #F1C40F;  height: 3px;" id="diagramm6">

			  			</div>
			  		</div>
		  		</div>
		  		<div class="row">
		  			<div class="col-12" style="color: #737CA1; margin-top: 50px; margin-bottom: 10px; text-align: left;">
		  				<strong>Фильтр по точкам</strong>
		  			</div>
		  			<div class="col-12">
			  			<select class="form-control" id="filter_city" onchange="set_city_name_for_filter()">
			  				<option>Все города</option>
			  				<?php include 'div.php'; ?>
		    			</select>
		  			</div>
		  			<div class="col-12" id="test1" style="text-align: left; margin-top: 10px;">
		  				
		  			</div>
		  			<div class="col-12">
		  				<button onclick="execute_filter()" id="filter_button" type="button" class="btn btn-info" style="display: none; margin-top: 20px; ">Фильтр</button>
		  			</div>
		  		</div>
		  	</div>
	  	</div>
  	</div>

  	<div class="container" style="margin-top: 40px; display: none;" id="poln_info">
  		<div class="row" id="info_marker">
  			<div class="col-7">
  				<h4><div id="poln_addr" style="width: 100%; text-align: left;"></div></h4>
  			</div>
  			<div class="col-2">
  				<button onclick="modify()" type="button" class="btn btn-info" id="modif_button">Редактирование</button>
  			</div>
  			<div class="col-2">
  				<button onclick="delete_point()" class="btn btn-danger" id="delete_button">Удалить</button>
  			</div>
  			<div class="col-1">
  				<button type="button" class="close" aria-label="Close" onclick="close_poln()">
				  <span aria-hidden="true">&times;</span>
				</button>
  			</div>
  		</div>
  		<div class="row" style="background: ; margin-top: 30px;">
  			<div class="col-5"></div>
  			<div class="col-1" style="color:#737CA1;"><strong>Файл: </strong></div>
  			<div class="col-5" style="background: ; text-align: center;">  <!------------------------------------------------------------->
				<div id="nofile" style="display: none;">
					<input type="file" multiple="multiple" id="inputfile"><button class="btn btn-primary" onclick="upload_file()">Загрузить</button><div id="ajax-reply" style="display: none;"></div>
				</div>
				<div id="estfile" style="display: none;">
					
				</div>
  			</div>
  			<div class="col-1"></div>
  		</div>
  		<div class="row" style="margin-top: 40px;">
			<table class="table" style=" background: #f5f5f5">
			  <thead>
			    <tr>
			      <th scope="col" colspan="2" style="color: #737CA1; border: none;">Основная информация</th>
			      <th scope="col" colspan="2" style="color: #737CA1; border: none;">Техническая часть</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">Метраж</th>
			      <td><input type="text" id="poln_metrazh" style="width: 100%;" class="poln_input" disabled="true"></td>
			      <th scope="row">Этаж</th>
			      <td><input type="text" id="poln_floor" style="width: 100%;" class="poln_input" disabled="true"></td>
			    </tr>
			    <tr>
			      <th scope="row">Цена за кубик</th>
			      <td><input type="text" id="poln_price" style="width: 100%;" class="poln_input" disabled="true"></td>
			      <th scope="row">Отдельный вход</th>
			      <td>
					<select class="form-control" id="poln_sep_exit" disabled="true">
						      <option>Отельный вход - Да</option>
						      <option>Отдельный вход - Нет</option>
		    		</select>
				  </td>
			    </tr>
			    <tr>
			      <th scope="row">Ссылка</th>
			      <td><input type="text" id="poln_link" style="width: 100%;" class="poln_input" disabled="true"></td>
			      <th scope="row">Количество ступеней</th>
			      <td><input type="text" id="poln_steps" style="width: 100%;" class="poln_input" disabled="true"></td>
			    </tr>
			    <tr>
			      <th scope="row">Комментарий</th>
			      <td><input type="text" id="poln_comment" style="width: 100%;" class="poln_input" disabled="true"></td>
			      <th scope="row">Высота потолка</th>
			      <td><input type="text" id="poln_high" style="width: 100%;" class="poln_input" disabled="true"></td>
			    </tr>
			    <tr>
			      <th scope="row">Статус</th>
			      <td>
			      	<select class="form-control" id="poln_kindof" disabled="true">
					      <option>Согласованная наша</option>
					      <option>Согласованная брокер</option>
					      <option>Отказ</option>
					      <option>На рассмотрении</option>
					      <option>Действующая</option>
					      <option>Ключевой</option>
	    			</select>
			      </td>
			      <th scope="row">Мощность</th>
			      <td><input type="text" id="poln_power" style="width: 100%;" class="poln_input" disabled="true"></td>
			    </tr>
			    <tr>
			      <th scope="row">Метка на карте</th>
			      <td>
			      	<select class="form-control" id="poln_metka_filter" disabled="true">
			      		<?php include 'metki.php'; ?>
	    			</select>
			      </td>
			      <th scope="row">Ремонт</th>
			      <td><input type="text" id="poln_remont" style="width: 100%;" class="poln_input" disabled="true"></td>
			    </tr>
			  </tbody>
			</table>

			<table class="table" style=" background: #f5f5f5">
				<thead>
				    <tr>
				      <th scope="col" colspan="" style="color: #737CA1; border: none;">Позиция</th>
				      <th scope="col" colspan="" style="color: #737CA1; border:none;">В обьявлении</th>
				      <th scope="col" colspan="" style="color: #737CA1; border: none;">Мы предложили</th>
				      <th scope="col" colspan="" style="color: #737CA1; border:none;">Договорились</th>
				    </tr>
			  	</thead>
			  	<tbody>
			  		<tr>
				    	<th scope="row" colspan="4" style="color: gray; background: #fffafb;">Финансовая часть</th>
				    </tr> 
				    <tr>
				      <th scope="row">ком 3 т.р./50 м2. Сверка 0.5 год</th>
				      <td><input type="text" id="poln_sverka" class="poln_input" disabled="true"></td>
				      <td><input type="text" id="p_poln_sverka" class="poln_input" disabled="true"></td>
				      <td><input type="text" id="d_poln_sverka" class="poln_input" disabled="true"></td>
				    </tr>
				    <tr>
				      <th scope="row">Ставка/мес</th>
				      <td><input type="text" id="poln_stavka" class="poln_input" disabled="true"></td>
				      <td><input type="text" id="p_poln_stavka" class="poln_input" disabled="true"></td>
				      <td><input type="text" id="d_poln_stavka" class="poln_input" disabled="true"></td>
				    </tr>
				    <tr>
				      <th scope="row">Индекс (с 3го г 4%)</th>
				      <td><input type="text" id="poln_index" class="poln_input" disabled="true"></td>
				      <td><input type="text" id="p_poln_index" class="poln_input" disabled="true"></td>
				      <td><input type="text" id="d_poln_index" class="poln_input" disabled="true"></td>
				    </tr>
				    <tr>
				      <th scope="row">Каникулы, мес</th>
				      <td><input type="text" id="poln_kanikuly" class="poln_input" disabled="true"></td>
				      <td><input type="text" id="p_poln_kanikuly" class="poln_input" disabled="true"></td>
				      <td><input type="text" id="d_poln_kanikuly" class="poln_input" disabled="true"></td>
				    </tr>
				    <tr>
				      <th scope="row">Комиссия нам</th>
				      <td><input type="text" id="poln_komiss" class="poln_input" disabled="true"></td>
				      <td><input type="text" id="p_poln_komiss" class="poln_input" disabled="true"></td>
				      <td><input type="text" id="d_poln_komiss" class="poln_input" disabled="true"></td>
				    </tr>
				    <tr>
				    	<th scope="row" colspan="4" style="color: gray; background: #fffafb;">Юридическая часть</th>
				    </tr>
				    <tr>
				      <th scope="row">Наш договор</th>
				      <td><input type="text" id="poln_nash" class="poln_input" disabled="true"></td>
				      <td><input type="text" id="p_poln_nash" class="poln_input" disabled="true"></td>
				      <td><input type="text" id="d_poln_nash" class="poln_input" disabled="true"></td>
				    </tr>
				    <tr>
				      <th scope="row">Выход собств только при неопл</th>
				      <td><input type="text" id="poln_vyhod" class="poln_input" disabled="true"></td>
				      <td><input type="text" id="p_poln_vyhod" class="poln_input" disabled="true"></td>
				      <td><input type="text" id="d_poln_vyhod" class="poln_input" disabled="true"></td>
				    </tr>
				    <tr>
				      <th scope="row">Есть зарег право?</th>
				      <td><input type="text" id="poln_pravo" class="poln_input" disabled="true"></td>
				      <td><input type="text" id="p_poln_pravo" class="poln_input" disabled="true"></td>
				      <td><input type="text" id="d_poln_pravo" class="poln_input" disabled="true"></td>
				    </tr>
				    <tr>
				      <th scope="row">Длинный договор</th>
				      <td><input type="text" id="poln_dlinn" class="poln_input" disabled="true"></td>
				      <td><input type="text" id="p_poln_dlinn" class="poln_input" disabled="true"></td>
				      <td><input type="text" id="d_poln_dlinn" class="poln_input" disabled="true"></td>
				    </tr>

			  	</tbody>
			</table>
		</div>


		<div class="row" style="margin-bottom: 30px;">
			<div class="col-8"></div>
			<div class="col-2">
  				<button onclick="submit_changes()" class="btn btn-success" id="submit_button" style="display: none;">Подтвердить</button>
  			</div>
			<div class="col-2">
  				<button onclick="cancel()" class="btn btn-danger" id="cancel_button" style="display: none;">Отмена</button>
  			</div>
		</div>
		<div class="row" id="kok" style="margin-top: 80px;"></div>
  	</div>


</body>


<script>
	$('input[id="new_metka"]').change(function(){
    if($(this).is(':checked')) {
        document.getElementById('options_for_new_metka').style.display = "block";
        need_new_metka = 1;
    } else {
        document.getElementById('options_for_new_metka').style.display = "none";
        need_new_metka = 0;
    }
	});
</script>


<script>
	function close_poln()
	{
		document.getElementById('poln_info').style.display = "none";
		cancel();
	}
</script>

<script>
	$(".div_spisok").click(function(){
		var n1 = document.getElementsByClassName('.div_spisok').innerHTML;
		zoom_in(this.innerHTML);
	});
</script>


<script>
	function show_spisok()
	{
		document.getElementById('forma').style.display = "none";
		document.getElementById('spisok').style.display = "block";
		document.getElementById('selector_left').style.background = "#f2f8fa";
		document.getElementById('selector_right').style.background = "#ade4ff";
	}
</script>


<script type="text/javascript">
	function clear_html()
	{
		$("#test1").html("");
	}
</script>

<script>
	function execute_filter()
	{
		var cur_city = document.getElementById('filter_city').value;
		inputs = document.getElementsByClassName('metkifilter');
  		var checked = [];

		for (let input in inputs) {
		    if (inputs[input].checked)
		    	checked.push(inputs[input].value);
		}

		

		$.get(
		  "/exec_filter.php",
		  {
		  		param1: cur_city
		  }, 
		  onAjaxSuccess
		);
		 
		function onAjaxSuccess(data)
		{
			var json = JSON.parse(data);
			clear_map();
			draw_with_checkboxes(json, checked, cur_city);
		}
	}
</script>

<script>
	function draw_with_checkboxes(obj, checked, cur_city)
	{

		if (checked.length == 0)
		{
			for (var k in obj)
			{
				  	if (obj[k].city == cur_city)
					{
						var addr = obj[k].addr;
						var metrazh = obj[k].metrazh;
						var price = obj[k].price;
						var link = obj[k].link;
						var comment = obj[k].comment;
						var kind = obj[k].typeof;

						if (metrazh == "null" || metrazh == null)
								metrazh = "";
						if (price == "null" || price == null)
								price = "";
						if (link == "null" || link == null)
								link = "";
						if (comment == "null" || comment == null)
								comment = "";			


						var pictire = set_pic(kind);
						

						var baloon = "<strong>Метраж: </strong>" + metrazh + "<br>"
									+ "<strong>Цена за кубик: </strong>" + price + "<br>"
									+ "<strong>Ссылка: </strong>" + "<a href='" + link + "'>" + link + "</a>" + "<br>"
									+ "<strong>Комментраий: </strong>" + comment + "<br";


								myPlacemark = new ymaps.Placemark([obj[k].lat, obj[k].lng], {
									balloonContentHeader: addr,
									balloonContentBody: baloon,
									balloonContentFooter: "<div><button onclick='details()' style='border: 1px solid black; background: #737CA1;'>Подробная информация</button></div>"
							}, {
								iconLayout: 'default#image',
								iconImageHref: pictire,
							});

							myMap.geoObjects.add(myPlacemark);
					}
			}
		}
		else
		{
			for (var k in obj)
			{
				for (var i in checked)
				{
					if (obj[k].filter == checked[i])
					{
						var addr = obj[k].addr;
					  	var metrazh = obj[k].metrazh;
						var price = obj[k].price;
						var link = obj[k].link;
						var comment = obj[k].comment;
						var kind = obj[k].typeof;

						if (metrazh == "null" || metrazh == null)
							metrazh = "";
						if (price == "null" || price == null)
								price = "";
						if (link == "null" || link == null)
								link = "";
						if (comment == "null" || comment == null)
								comment = "";


						var pictire = set_pic(kind);
						

						var baloon = "<strong>Метраж: </strong>" + metrazh + "<br>"
									+ "<strong>Цена за кубик: </strong>" + price + "<br>"
									+ "<strong>Ссылка: </strong>" + "<a href='" + link + "'>" + link + "</a>" + "<br>"
									+ "<strong>Комментраий: </strong>" + comment + "<br";


								myPlacemark = new ymaps.Placemark([obj[k].lat, obj[k].lng], {
							 		balloonContentHeader: addr,
					 				balloonContentBody: baloon,
					 				balloonContentFooter: "<div><button onclick='details()' style='border: 1px solid black; background: #737CA1;'>Подробная информация</button></div>"
							 }, {
							 	iconLayout: 'default#image',
							 	iconImageHref: pictire,
							 });

							myMap.geoObjects.add(myPlacemark);
					}
				}
			}
		}
	}
</script>

<script>
	function draw_filter()
	{
		$.get(
		  "/checkboxes.php",
		  {
		  		param1: city_filter
		  },
		  onAjaxSuccess
		);
		 
		function onAjaxSuccess(data)
		{
			var json = JSON.parse(data);
			for (var k in json)
			{
				if (json[k].filter != "" && json[k].filter != null && json[k].filter != "null")
				{
					$("#test1").append('<div class="form-check"><input class="form-check-input metkifilter" type="checkbox" value="' + json[k].filter + '" id="defaultCheck1"><labelclass="form-check-label" for="defaultCheck1">' + json[k].filter + '</label></div>');
				}
			}
		   	
		}
	}
</script>

<script>
	function set_city_name_for_filter()
	{
		city_filter = document.getElementById('filter_city').value;
		clear_html();
		if (city_filter != "Все города")
		{
			draw_filter();
			document.getElementById('filter_button').style.display = "block";
		}
		else
		{
			document.getElementById('filter_button').style.display = "none";
			clear_map();
			draw_from_base();
		}
	}
</script>


<script>
	function submit_changes()
	{

		$.get(
		  "/modify.php",
		  {
			 param1: document.getElementById('poln_addr').innerHTML,
			 param2: document.getElementById('poln_metrazh').value,
			 param3: document.getElementById('poln_price').value,
			 param4: document.getElementById('poln_link').value,
			 param5: document.getElementById('poln_comment').value,
			 param6: document.getElementById('poln_kindof').value,
			 param7: document.getElementById('poln_floor').value,
			 param8: document.getElementById('poln_sep_exit').value,
			 param9: document.getElementById('poln_steps').value,
			 param10: document.getElementById('poln_high').value,
			 param11: document.getElementById('poln_power').value,
			 param12: document.getElementById('poln_remont').value,
			 param13: document.getElementById('poln_metka_filter').value,
			 param14: document.getElementById('poln_sverka').value,
			 param15: document.getElementById('poln_stavka').value,
			 param16: document.getElementById('poln_index').value,
			 param17: document.getElementById('poln_kanikuly').value,
			 param18: document.getElementById('poln_komiss').value,
			 param19: document.getElementById('poln_nash').value,
			 param20: document.getElementById('poln_vyhod').value,
			 param21: document.getElementById('poln_pravo').value,
			 param22: document.getElementById('poln_dlinn').value,
			 param23: document.getElementById('p_poln_sverka').value,
			 param24: document.getElementById('p_poln_stavka').value,
			 param25: document.getElementById('p_poln_index').value,
			 param26: document.getElementById('p_poln_kanikuly').value,
			 param27: document.getElementById('p_poln_komiss').value,
			 param28: document.getElementById('p_poln_nash').value,
			 param29: document.getElementById('p_poln_vyhod').value,
			 param30: document.getElementById('p_poln_pravo').value,
			 param31: document.getElementById('p_poln_dlinn').value,
			 param32: document.getElementById('d_poln_sverka').value,
			 param33: document.getElementById('d_poln_stavka').value,
			 param34: document.getElementById('d_poln_index').value,
			 param35: document.getElementById('d_poln_kanikuly').value,
			 param36: document.getElementById('d_poln_komiss').value,
			 param37: document.getElementById('d_poln_nash').value,
			 param38: document.getElementById('d_poln_vyhod').value,
			 param39: document.getElementById('d_poln_pravo').value,
			 param40: document.getElementById('d_poln_dlinn').value
		  },
		  onAjaxSuccess
		);
		 
		function onAjaxSuccess(data)
		{
			cancel();
			clear_map();
			draw_from_base();
			math();
		}
	}
</script>

<script>
	function cancel()
	{
		document.getElementById('modif_button').style.display = "block";
		document.getElementById('delete_button').style.display = "block";
		document.getElementById('submit_button').style.display = "none";
		document.getElementById('cancel_button').style.display = "none";

		document.getElementById('poln_metrazh').style.background = "none";
		document.getElementById('poln_metrazh').disabled = true;

		document.getElementById('poln_price').style.background = "none";
		document.getElementById('poln_price').disabled = true;

		document.getElementById('poln_link').style.background = "none";
		document.getElementById('poln_link').disabled = true;

		document.getElementById('poln_comment').style.background = "none";
		document.getElementById('poln_comment').disabled = true;

		document.getElementById('poln_kindof').disabled = true;

		document.getElementById('poln_floor').style.background = "none";
		document.getElementById('poln_floor').disabled = true;

		document.getElementById('poln_sep_exit').disabled = true;

		document.getElementById('poln_steps').style.background = "none";
		document.getElementById('poln_steps').disabled = true;

		document.getElementById('poln_high').style.background = "none";
		document.getElementById('poln_high').disabled = true;

		document.getElementById('poln_power').style.background = "none";
		document.getElementById('poln_power').disabled = true;

		document.getElementById('poln_remont').style.background = "none";
		document.getElementById('poln_remont').disabled = true;

		document.getElementById('poln_sverka').style.background = "none";
		document.getElementById('poln_sverka').disabled = true;

		document.getElementById('poln_stavka').style.background = "none";
		document.getElementById('poln_stavka').disabled = true;

		document.getElementById('poln_index').style.background = "none";
		document.getElementById('poln_index').disabled = true;

		document.getElementById('poln_kanikuly').style.background = "none";
		document.getElementById('poln_kanikuly').disabled = true;

		document.getElementById('poln_komiss').style.background = "none";
		document.getElementById('poln_komiss').disabled = true;
		
		document.getElementById('poln_metka_filter').disabled = true;




		document.getElementById('poln_nash').style.background = "none";
		document.getElementById('poln_nash').disabled = true;

		document.getElementById('poln_vyhod').style.background = "none";
		document.getElementById('poln_vyhod').disabled = true;

		document.getElementById('poln_pravo').style.background = "none";
		document.getElementById('poln_pravo').disabled = true;

		document.getElementById('poln_dlinn').style.background = "none";
		document.getElementById('poln_dlinn').disabled = true;

		document.getElementById('p_poln_sverka').style.background = "none";
		document.getElementById('p_poln_sverka').disabled = true;

		document.getElementById('p_poln_stavka').style.background = "none";
		document.getElementById('p_poln_stavka').disabled = true;

		document.getElementById('p_poln_index').style.background = "none";
		document.getElementById('p_poln_index').disabled = true;

		document.getElementById('p_poln_kanikuly').style.background = "none";
		document.getElementById('p_poln_kanikuly').disabled = true;

		document.getElementById('p_poln_komiss').style.background = "none";
		document.getElementById('p_poln_komiss').disabled = true;

		document.getElementById('p_poln_nash').style.background = "none";
		document.getElementById('p_poln_nash').disabled = true;

		document.getElementById('p_poln_vyhod').style.background = "none";
		document.getElementById('p_poln_vyhod').disabled = true;

		document.getElementById('p_poln_pravo').style.background = "none";
		document.getElementById('p_poln_pravo').disabled = true;

		document.getElementById('p_poln_dlinn').style.background = "none";
		document.getElementById('p_poln_dlinn').disabled = true;

		document.getElementById('d_poln_sverka').style.background = "none";
		document.getElementById('d_poln_sverka').disabled = true;

		document.getElementById('d_poln_stavka').style.background = "none";
		document.getElementById('d_poln_stavka').disabled = true;

		document.getElementById('d_poln_index').style.background = "none";
		document.getElementById('d_poln_index').disabled = true;

		document.getElementById('d_poln_kanikuly').style.background = "none";
		document.getElementById('d_poln_kanikuly').disabled = true;

		document.getElementById('d_poln_komiss').style.background = "none";
		document.getElementById('d_poln_komiss').disabled = true;

		document.getElementById('d_poln_nash').style.background = "none";
		document.getElementById('d_poln_nash').disabled = true;

		document.getElementById('d_poln_vyhod').style.background = "none";
		document.getElementById('d_poln_vyhod').disabled = true;

		document.getElementById('d_poln_pravo').style.background = "none";
		document.getElementById('d_poln_pravo').disabled = true;

		document.getElementById('d_poln_dlinn').style.background = "none";
		document.getElementById('d_poln_dlinn').disabled = true;
	}
</script>

<script>
	function modify()
	{
		document.getElementById('kok').scrollIntoView({block: "center", behavior: "smooth"});

		document.getElementById('modif_button').style.display = "none";
		document.getElementById('delete_button').style.display = "none";
		document.getElementById('submit_button').style.display = "block";
		document.getElementById('cancel_button').style.display = "block";

		document.getElementById('poln_metrazh').style.background = "#e6ecf5";
		document.getElementById('poln_metrazh').disabled = false;

		document.getElementById('poln_price').style.background = "#e6ecf5";
		document.getElementById('poln_price').disabled = false;

		document.getElementById('poln_link').style.background = "#e6ecf5";
		document.getElementById('poln_link').disabled = false;

		document.getElementById('poln_comment').style.background = "#e6ecf5";
		document.getElementById('poln_comment').disabled = false;

		document.getElementById('poln_kindof').disabled = false;

		document.getElementById('poln_floor').style.background = "#e6ecf5";
		document.getElementById('poln_floor').disabled = false;

		document.getElementById('poln_sep_exit').disabled = false;

		document.getElementById('poln_steps').style.background = "#e6ecf5";
		document.getElementById('poln_steps').disabled = false;

		document.getElementById('poln_high').style.background = "#e6ecf5";
		document.getElementById('poln_high').disabled = false;

		document.getElementById('poln_power').style.background = "#e6ecf5";
		document.getElementById('poln_power').disabled = false;

		document.getElementById('poln_remont').style.background = "#e6ecf5";
		document.getElementById('poln_remont').disabled = false;

		document.getElementById('poln_sverka').style.background = "#e6ecf5";
		document.getElementById('poln_sverka').disabled = false;

		document.getElementById('poln_stavka').style.background = "#e6ecf5";
		document.getElementById('poln_stavka').disabled = false;

		document.getElementById('poln_index').style.background = "#e6ecf5";
		document.getElementById('poln_index').disabled = false;

		document.getElementById('poln_kanikuly').style.background = "#e6ecf5";
		document.getElementById('poln_kanikuly').disabled = false;

		document.getElementById('poln_komiss').style.background = "#e6ecf5";
		document.getElementById('poln_komiss').disabled = false;

		document.getElementById('poln_nash').style.background = "#e6ecf5";
		document.getElementById('poln_nash').disabled = false;

		document.getElementById('poln_vyhod').style.background = "#e6ecf5";
		document.getElementById('poln_vyhod').disabled = false;

		document.getElementById('poln_pravo').style.background = "#e6ecf5";
		document.getElementById('poln_pravo').disabled = false;

		document.getElementById('poln_dlinn').style.background = "#e6ecf5";
		document.getElementById('poln_dlinn').disabled = false;

		document.getElementById('p_poln_sverka').style.background = "#e6ecf5";
		document.getElementById('p_poln_sverka').disabled = false;

		document.getElementById('p_poln_stavka').style.background = "#e6ecf5";
		document.getElementById('p_poln_stavka').disabled = false;

		document.getElementById('p_poln_index').style.background = "#e6ecf5";
		document.getElementById('p_poln_index').disabled = false;

		document.getElementById('p_poln_kanikuly').style.background = "#e6ecf5";
		document.getElementById('p_poln_kanikuly').disabled = false;

		document.getElementById('p_poln_komiss').style.background = "#e6ecf5";
		document.getElementById('p_poln_komiss').disabled = false;

		document.getElementById('p_poln_nash').style.background = "#e6ecf5";
		document.getElementById('p_poln_nash').disabled = false;

		document.getElementById('p_poln_vyhod').style.background = "#e6ecf5";
		document.getElementById('p_poln_vyhod').disabled = false;

		document.getElementById('p_poln_pravo').style.background = "#e6ecf5";
		document.getElementById('p_poln_pravo').disabled = false;

		document.getElementById('p_poln_dlinn').style.background = "#e6ecf5";
		document.getElementById('p_poln_dlinn').disabled = false;

		document.getElementById('d_poln_sverka').style.background = "#e6ecf5";
		document.getElementById('d_poln_sverka').disabled = false;

		document.getElementById('d_poln_stavka').style.background = "#e6ecf5";
		document.getElementById('d_poln_stavka').disabled = false;

		document.getElementById('d_poln_index').style.background = "#e6ecf5";
		document.getElementById('d_poln_index').disabled = false;

		document.getElementById('d_poln_kanikuly').style.background = "#e6ecf5";
		document.getElementById('d_poln_kanikuly').disabled = false;

		document.getElementById('d_poln_komiss').style.background = "#e6ecf5";
		document.getElementById('d_poln_komiss').disabled = false;

		document.getElementById('d_poln_nash').style.background = "#e6ecf5";
		document.getElementById('d_poln_nash').disabled = false;

		document.getElementById('d_poln_vyhod').style.background = "#e6ecf5";
		document.getElementById('d_poln_vyhod').disabled = false;

		document.getElementById('d_poln_pravo').style.background = "#e6ecf5";
		document.getElementById('d_poln_pravo').disabled = false;

		document.getElementById('d_poln_dlinn').style.background = "#e6ecf5";
		document.getElementById('d_poln_dlinn').disabled = false;

		
	}
</script>

<script>
	function delete_point()
	{
		$.get(
		  "/del.php",
		  {
			 param1: document.getElementById('poln_addr').innerHTML   	
		  },
		  onAjaxSuccess
		);
		 
		function onAjaxSuccess(data)
		{
			myMap.geoObjects.remove(del_marker_tmp);
			document.getElementById('poln_info').style.display = "none";
			math();
			alert("Point deleted");
		}
	}
</script>

<script>
	function math()
	{
		$.get(
		  "/diagramm.php",
		  {
		    
		  },
		  onAjaxSuccess
		);
		 
		function onAjaxSuccess(data)
		{
			var json = JSON.parse(data);

			var sogl_nash = 0;
			var sogl_brok = 0;
			var otkaz = 0;
			var na_ras = 0;
			var deyst = 0;
			var kluch = 0;

			for(var k in json) {
				if (json[k].typeof == 'Согласованная наша')
			   		sogl_nash++;
			   	if (json[k].typeof == 'Согласованная брокер')
			   		sogl_brok++;
			   	if (json[k].typeof == 'Отказ')
			   		otkaz++;
			   	if (json[k].typeof == 'На рассмотрении')
			   		na_ras++;
			   	if (json[k].typeof == 'Действующая')
			   		deyst++;
			   	if (json[k].typeof == 'Ключевой')
			   		kluch++;
			}
			calculate_percent(sogl_nash, sogl_brok, otkaz, na_ras, deyst, kluch);
		}
	}

	function calculate_percent(sogl_nash, sogl_brok, otkaz, na_ras, deyst, kluch)
	{
		let arr = [sogl_nash, sogl_brok, otkaz, na_ras, deyst, kluch];
		let ids = ["diagramm1","diagramm2","diagramm3","diagramm4","diagramm5","diagramm6"];
		let stat = ["stat1","stat2","stat3","stat4","stat5","stat6"];

		var max = arr[0];

		for (var k in arr)
		{
			if (arr[k] > max)
				max = arr[k];
		}

		var one = 100/max;

		for (var i in arr)
		{
			var val = (arr[i]*one).toFixed(0);
			document.getElementById(ids[i]).style.width = val.toString() + "%";
			document.getElementById(stat[i]).innerHTML = arr[i];
		}

	}
</script>

<script>
	math();
</script>

<script>
	function details()
	{
		document.getElementById('poln_info').style.display = "block";
		document.getElementById('poln_info').scrollIntoView({block: "center", behavior: "smooth"});

		$.get(
		  "/details.php",
		  {
		    param1: marker_tmp
		  },
		  onAjaxSuccess
		);
		 
		function onAjaxSuccess(data)
		{
		   var json = JSON.parse(data);

		  
			for(var key in json[0]){
			  if (json[0][key] == "null" || json[0][key] == null)
			  	json[0][key] = "";
			}


		   var link1 = json[0].link;
		   var comment1 = json[0].comment;
		   var filter1 = json[0].filter;
		   var remont1 = json[0].remont;
		   var metrazh1 = json[0].metrazh;
		   var price1 = json[0].price;
		   var steps1 = json[0].steps;

		   if (link1 == "null")
		   		link1 = "";
		   	if (comment1 == "null")
		   		comment1 = "";
		   	if (filter1 == "null")
		   		filter1 = "";
		   	if (remont1 == "null")
		   		remont1 = "";
			if (metrazh1 == "null")
				metrazh1 = "";
			if (price1 == "null")
				price1 = "";
			if (steps1 == 0 || steps1 == null)
				steps1 = "";

			cancel();

		   document.getElementById('poln_metrazh').value = metrazh1;
		   document.getElementById('poln_price').value = price1;
		   document.getElementById('poln_link').value = link1;
		   document.getElementById('poln_addr').innerHTML = json[0].addr;
		   document.getElementById('poln_comment').value = comment1;
		   document.getElementById('poln_floor').value = json[0].floor;
		   document.getElementById('poln_sep_exit').value = json[0].sep_exit;
		   document.getElementById('poln_steps').value = steps1;
		   document.getElementById('poln_high').value = json[0].high;
		   document.getElementById('poln_power').value = json[0].power;
		   document.getElementById('poln_remont').value = remont1;
		   document.getElementById('poln_kindof').value = json[0].typeof;
		   document.getElementById('poln_metka_filter').value = filter1;

		   document.getElementById('poln_stavka').value = json[0].stavka;
		   document.getElementById('poln_sverka').value = json[0].sverka;
		   document.getElementById('poln_index').value = json[0].index34;
		   document.getElementById('poln_kanikuly').value = json[0].kanikuly;
		   document.getElementById('poln_komiss').value = json[0].komiss;
		   document.getElementById('poln_nash').value = json[0].nash;
		   document.getElementById('poln_vyhod').value = json[0].vyhod;
		   document.getElementById('poln_pravo').value = json[0].pravo;
		   document.getElementById('poln_dlinn').value = json[0].dlinn;

		   document.getElementById('p_poln_stavka').value = json[0].p_stavka;
		   document.getElementById('p_poln_sverka').value = json[0].p_sverka;
		   document.getElementById('p_poln_index').value = json[0].p_index34;
		   document.getElementById('p_poln_kanikuly').value = json[0].p_kanikuly;
		   document.getElementById('p_poln_komiss').value = json[0].p_komiss;
		   document.getElementById('p_poln_nash').value = json[0].p_nash;
		   document.getElementById('p_poln_vyhod').value = json[0].p_vyhod;
		   document.getElementById('p_poln_pravo').value = json[0].p_pravo;
		   document.getElementById('p_poln_dlinn').value = json[0].p_dlinn;

		   document.getElementById('d_poln_stavka').value = json[0].d_stavka;
		   document.getElementById('d_poln_sverka').value = json[0].d_sverka;
		   document.getElementById('d_poln_index').value = json[0].d_index34;
		   document.getElementById('d_poln_kanikuly').value = json[0].d_kanikuly;
		   document.getElementById('d_poln_komiss').value = json[0].d_komiss;
		   document.getElementById('d_poln_nash').value = json[0].d_nash;
		   document.getElementById('d_poln_vyhod').value = json[0].d_vyhod;
		   document.getElementById('d_poln_pravo').value = json[0].d_pravo;
		   document.getElementById('d_poln_dlinn').value = json[0].d_dlinn;

		   if (json[0].upfile == ""){
		   	  document.getElementById('nofile').style.display = "block";
		   	  document.getElementById('estfile').style.display = "none";
		   	  document.getElementById('ajax-reply').style.display = "none";
		   }
		   	else{
		   	  document.getElementById('estfile').style.display = "block";
		   	  $('#estfile').html('<p><a href="uploads/' + json[0].upfile  + '" download>Скачать файл</a>');
		   	  document.getElementById('nofile').style.display = "none";
		   	  document.getElementById('ajax-reply').style.display = "none";
		   	}

		}
	}
</script>

<script type="text/javascript">
	$('input[type=file]').on('change', function(){
	files = this.files;
	console.log(files);
});
</script>

<script>
	function upload_file(){
		if( typeof files == 'undefined' ){
			 alert("Файл не найден.");
			 return;
		}

		var data = new FormData();

		$.each( files, function( key, value ){
			data.append( key, value );
		});

		data.append( 'my_file_upload', 1 );
		data.append( 'addr', document.getElementById('poln_addr').innerHTML );
		
		
		var html;



		$.ajax({
		url         : '/upload.php',
		type        : 'POST', // важно!
		data        : data,
		cache       : false,
		dataType    : 'json',
		// отключаем обработку передаваемых данных, пусть передаются как есть
		processData : false,
		// отключаем установку заголовка типа запроса. Так jQuery скажет серверу что это строковой запрос/////////////////////////////////////////////////////////////////////
		contentType : false, 
		// функция успешного ответа сервера
		success     : function( respond, status, jqXHR ){

			// ОК - файлы загружены
			if( typeof respond.error === 'undefined' ){
				html = '<p style="color:green">Файл загружен</p>';
				document.getElementById('ajax-reply').style.display = "block";
				$('#ajax-reply').html( html );
				document.getElementById('inputfile').value = "";
			}
			// ошибка
			else {
				html = "ERROR";
				$('#ajax-reply').html( html );
			}
		},
		// функция ошибки ответа сервера
		error: function( jqXHR, status, errorThrown ){
			console.log( 'ОШИБКА AJAX запроса: ' + status + " gggg " + errorThrown);
			alert("Файл с таким именем уже существует.");
			document.getElementById('inputfile').value = "";
		}

	});
		
	}
</script>

<script>
	var myMap;
	var myGeocoder;
	var myPlacemark;
	var suggestView1;
	var suggestView2;
	var address_tmp;
	var marker_tmp;
	var del_marker_tmp;
	var city;
	var city_filter = document.getElementById('filter_city').value;
	var suggest_adrrs = [];
	var need_new_metka = 0;
	var files;
</script>


<script>
	function clear_map()
	{
		myMap.geoObjects.removeAll();
	}
</script>


<script>
	function draw_from_base()
	{
		$.get(
		  "/test.php",
		  {

		  },
		  onAjaxSuccess
		);
		 
		function onAjaxSuccess(data)
		{
		  var obj = JSON.parse(data);
		  for (var k in obj)
		  {
			  	suggest_adrrs[k] = obj[k].addr; //добавляем в массив по поиску своих обьектов 

		  		var addr = obj[k].addr;
			  	var metrazh = obj[k].metrazh;
				var price = obj[k].price;
				var link = obj[k].link;
				var comment = obj[k].comment;
				var kind = obj[k].typeof;
				var pictire = set_pic(kind);

				if (metrazh == null || metrazh == "null")
					metrazh = "";
				if (price == null || price == "null")
					price = "";
				if (link == "null")
					link = "";
				if (comment == "null")
					comment = "";

				var baloon = "<strong>Метраж: </strong>" + metrazh + "<br>"
							+ "<strong>Цена за кубик: </strong>" + price + "<br>"
							+ "<strong>Ссылка: </strong>" + "<a target='_blank' href='" + link + "'>" + link + "</a>" + "<br>"
							+ "<strong>Комментраий: </strong>" + comment + "<br";


						myPlacemark = new ymaps.Placemark([obj[k].lat, obj[k].lng], {
					 		balloonContentHeader: addr,
			 				balloonContentBody: baloon,
			 				balloonContentFooter: "<div><button onclick='details()' style='border: 1px solid black; background: #737CA1;'>Подробная информация</button></div>"
					 }, {
					 	iconLayout: 'default#image',
					 	iconImageHref: pictire,
					 });

					myMap.geoObjects.add(myPlacemark);
			} 
		}
	}

</script>

<script>
	function visible()
	{
		document.getElementById('selector_left').style.background = "#ade4ff";
		document.getElementById('selector_right').style.background = "#f2f8fa";
		document.getElementById('forma').style.display = "block";
		document.getElementById('spisok').style.display = "none";
	}
</script>

<script type="text/javascript">
    ymaps.ready(init);
    function init(){ 
           
        myMap = new ymaps.Map("map", {
            center: [55.76, 37.64],
            zoom: 10
        });


		myMap.geoObjects.events.add('click', function (e) {
		    marker_tmp = e.get('target').properties._data.balloonContentHeader;
		    del_marker_tmp = e.get('target');
		    console.log(marker_tmp);
		});


		var arr = suggest_adrrs, find = function (arr, find) {
	        return arr.filter(function (value) {
	            return (value + "").toLowerCase().indexOf(find.toLowerCase()) != -1;
	        });
	    };

		var provider = { suggest: function (request, options) {
	        var res = find(arr, request),
	            arrayResult = [],
	            results = Math.min(options.results, res.length);
	        for (var i = 0; i < results; i++) {
	            arrayResult.push({displayName: res[i], value: res[i]})
	        }
	        return ymaps.vow.resolve(arrayResult);
	   		}
		};
	        
	    suggestView2 = new ymaps.SuggestView('marker_suggest', {provider: provider, results: 3});
		suggestView2.events.add('select', function (event) {
	    	zoom_in(event.get('item').value);
			});

	    suggestView1 = new ymaps.SuggestView('suggest');
		suggestView1.events.add('select', function (event) {
	    	zoom_in(event.get('item').value);
	    	address_tmp = event.get('item').value;
			});

		draw_from_base();
    }
</script>

<script>
	function set_pic(value)
	{
		if (value == "Согласованная наша")
			return "pins/blue.png";
		if (value == "Согласованная брокер")
			return "pins/light-blue.png";
		if (value == "Отказ")
			return "pins/red.png";
		if (value == "На рассмотрении")
			return "pins/gray.png";
		if (value == "Действующая")
			return "pins/ozon.png";
		if (value == "Ключевой")
			return "pins/yellow.png";
	}
</script>

<script>
	function clear_all()
	{
		document.getElementById('metrazh').value = "";
		document.getElementById('price').value = "";
	    document.getElementById('link').value = "";
		document.getElementById('comment').value = "";
		document.getElementById('suggest').value = "";

		document.getElementById('floor').value = "";
		document.getElementById('steps').value = "";
	    document.getElementById('high').value = "";
		document.getElementById('power').value = "";
		document.getElementById('remont').value = "";
		document.getElementById('metka_filter').value = "По умолчанию (...)";
		document.getElementById('new_metka').checked = false;
		document.getElementById('options_for_new_metka').style.display = "none";

		document.getElementById('sverka').value = "";
		document.getElementById('stavka').value = "";
		document.getElementById('index').value = "";
		document.getElementById('kanikuly').value = "";
		document.getElementById('komiss').value = "";
	}
</script>

<script>
	function add_to_table(metrazh, price, link, comment, kind, geo, floor, sep_exit, steps, high, power, remont, city, metka_filter, sverka, stavka, index, kanikuly, komiss)
	{
		
		$.get(
		  "/insert.php",
		  {
		    param1: metrazh,
		    param2: price,
		    param3: link,
		    param4: comment,
		    param5: kind,
		    param6: geo,
		    param7: address_tmp,
		    param8: floor,
		    param9: sep_exit,
		    param10: steps,
		    param11: high,
		    param12: power,
		    param13: remont,
		    param14: city,
		    param15: metka_filter,
		    param16: sverka,
		    param17: stavka,
		    param18: index,
		    param19: kanikuly,
		    param20: komiss
		  },
		  onAjaxSuccess
		);
		 
		function onAjaxSuccess(data)
		{
		   math();
		}
	}
</script>



<script>
	function adding()
	{
		var metrazh = document.getElementById('metrazh').value;
		var price = document.getElementById('price').value;
		var link = document.getElementById('link').value;
		var comment = document.getElementById('comment').value;
		var kind = document.getElementById('kindofpoint').value;

		var floor = document.getElementById('floor').value;
		var sep_exit = document.getElementById('sep_exit').value;
		var steps = document.getElementById('steps').value;
		var high = document.getElementById('high').value;
		var power = document.getElementById('power').value;
		var remont = document.getElementById('remont').value;

		var sverka = document.getElementById('sverka').value;
		var stavka = document.getElementById('stavka').value;
		var index = document.getElementById('index').value;
		var kanikuly = document.getElementById('kanikuly').value;
		var komiss = document.getElementById('komiss').value;
		
 
		var pictire = set_pic(kind);

		var baloon = "<strong>Метраж: </strong>" + metrazh + "<br>"
					+ "<strong>Цена за кубик: </strong>" + price + "<br>"
					+ "<strong>Ссылка: </strong>" + "<a target='_blank' href='" + link + "'>" + link + "</a>" + "<br>"
					+ "<strong>Комментраий: </strong>" + comment;

		var metka_filter;
		if (need_new_metka == 1)
			metka_filter = document.getElementById('new_metka_value').value;
		else
			metka_filter = document.getElementById('metka_filter').value;
		if (metka_filter == "По умолчанию (...)")
			metka_filter = "";
		
		

		var dest = document.getElementById('suggest').value;
		myGeocoder = ymaps.geocode(dest);
		myGeocoder.then(function (res) {

			 myMap.setCenter(res.geoObjects.get(0).geometry._coordinates);

			 city = res.geoObjects.get(0).getLocalities();//поймали город!!!!
			 city = city[0];
			 console.log(city);

			 myMap.setZoom(16);
			 myPlacemark = new ymaps.Placemark(res.geoObjects.get(0).geometry._coordinates, {
			 	balloonContentHeader: dest,
			 	balloonContentBody: baloon,
			 	balloonContentFooter: "<div><button onclick='details()' style='border: 1px solid black; background: #737CA1;'>Подробная информация</button></div>"

			 }, {
			 	iconLayout: 'default#image',
			 	iconImageHref: pictire,
			 });
 
			myMap.geoObjects.add(myPlacemark);
			add_to_table(metrazh, price, link, comment, kind, res.geoObjects.get(0).geometry._coordinates, floor, sep_exit, steps, high, power, remont, city, metka_filter, sverka, stavka, index, kanikuly, komiss);
			clear_all();
			document.getElementById('forma').style.display = "none";
		}, function (err)
		{
			alert("Введи нормальный адрес");
		});
	}
</script>


<script>
	function zoom_in(street)
	{
		myGeocoder = ymaps.geocode(street);
		myGeocoder.then(function (res) {
			myMap.setCenter(res.geoObjects.get(0).geometry._coordinates);
			myMap.setZoom(16);
		});
	}
</script>



</html>