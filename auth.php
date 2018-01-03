<?php include 'header.php' ?>

<section id="auth">
<div class="container">
<div class="row text-center">
<div class="auth_pl">
	<h1>Войти в систему</h1>
	
	<h3>Выберите один из способов входа.</h3>
	<button class="fb">
		<img src="img/fb_button.png" alt="" />
		With Facebook
	</button>
	<button class="ga">
		<img src="img/g_button.png" alt="" />
		With Google +
	</button>
	<h3 style="padding: 55px 0 25px;">или войдите в со своей электронной почты</h3>
	<form action="mail.php">
		<input type="text" placeholder="Email адрес">
		<input type="password" placeholder="Пароль">
		<div class="col-xs-6 text-left npd">
		<input type="checkbox">
		<span>Запомнить меня</span>
		</div>
		<div class="col-xs-6 text-right npd">
		<a href="javascript:void(0);">Забыли пароль?</a>
		</div>
		<input type="submit" class="aqua" value="Вход">
		<h4>
			У вас нет учетной записи? 
			<a href="#">Зарегистрируйтесь сейчас!</a>
		</h4>
	</form>
</div>
</div>
</div>
</section>



<?php include 'footer.php' ?>