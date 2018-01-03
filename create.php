<?php include 'header_logged.php' ?>

<section id="my_dv">
<div class="container">
<div class="row">
<div class="col-sm-8 col-sm-offset-2 npd">
	<h2>Создать заказ</h2>
	<div class="row">
		<div class="col-sm-6">
			<h3>Выберите тип автомобиля</h3>
			<select>
				<option>Бюджетный вариант</option>
				<option>Бюджетный вариант</option>
				<option>Бюджетный вариант</option>
			</select>
		</div>
		<div class="col-sm-6">
			<h3>Выберите ваш бюджет</h3>
			<select>
				<option>По договоренности</option>
				<option>По договоренности</option>
				<option>По договоренности</option>
			</select>
		</div>
	<div style="clear:both;"></div>
<div class="col-xs-12">
	<h3>Напишите в каком городе хотите арендовать транспорт</h3>
		<select>
			<option>Пхукет</option>
			<option>Пхукет</option>
			<option>Пхукет</option>
		</select>
	<h3>Впишите даты планируемой аренды?</h3>
	<div class="col-sm-11 npd">
	<div class='input-group date' id='datestart'>
		<input type='text' class="form-control" />
		<span class="input-group-addon">
		</span>
	</div>
	<div class='input-group date' id='dateend'>
		<input type='text' class="form-control" />
		<span class="input-group-addon">
		</span>
	</div>
	<style>
		.date{float:left; width:50%; margin:0;}
			.date input{width:95% !important;}
			.input-group-addon{display:none;}
	</style>
	</div>
	<div class="col-sm-1 npd" id="date">
	<input type="text" style="text-align:center; padding:0;">
	</div>
	
	<h3>Куда доставить автомобиль?</h3>
	<input type="text">
	<button class="aqua">Начать поиск</button>
	<button class="white">Отмена</button>
</div>
</div>
</div>
</div>
</section>

<script type="text/javascript">
$(function () {
	$('#datestart, #dateend').datepicker({
		format: 'dd/mm/yyyy',
		language: 'ru'
	});
});
$('input').change(function(){
	var datestart = parseInt($('#datestart input').val());
	var dateend = parseInt($('#dateend input').val());
	var dayslays = dateend - datestart;
	if(!dayslays || dayslays<0){$('#date input').val('');}
	else{
	$('#date input').val(dayslays+' дней');
	}
});
</script>

<?php include 'footer.php' ?>