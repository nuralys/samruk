<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title><?php echo $title_for_layout ?> - Samruk</title>
		<link rel="shortcut icon" href="/favicon.png" type="image/x-icon">
		<?php 
	echo $this->fetch('css');
	echo $this->fetch('script');
	echo $this->Html->css(array('style','jquery.fancybox'));
	echo $this->Html->script(array('jquery-1.10.1.min', 'jquery.easing-1.3', 'jquery.iosslider.min','jquery.fancybox.js?v=2.1.5','script.js'));
	 ?>
	</head>
	<body>
		<header>
			<div class="cr">
				<div class="h_up">
					<div class="left_h">
						<a href="/"><img src="/img/logo.png"/ alt="Samruk" title="Логотип"></a>
						<p>Современные технологии для качественного</br> и надежного электроснабжения</p>
					</div>
					<div class="right_h">
						<a class="fancybox" href="#callback">Обратиться к нам</a>
						<span>+7 707 742 97 12</span>
						<span>+7 701 742 97 12</span>
						<div id="callback" style="display: none;">
							<div class="modal_div">
								<span class="title_z">Обратный звонок</span>
									
								<form action="services/sendmail" method="post" accept-charset="utf-8">
									<input type="text" class="modal_f" placeholder="Имя..." name="data[Service][fio]">
									<div class="help-block">Необходимо заполнить «Имя».</div>
									<input type="text" class="modal_f" placeholder="Номер..." name="data[Service][phone]">
									<div class="help-block">Необходимо заполнить «Номер».</div>
									<div class="submit"><input type="submit" value="Заказать"></div>
								</form>
							</div>
						</div>
					</div>
				</div>				
			</div>
			<nav id="nav" class="nav" role="navigation">
				<a href="#nav" title="Show navigation">Меню</a>
				<a href="#" title="Hide navigation">Скрыть меню</a>
				<ul>
					<li <?php if($_SERVER['REQUEST_URI'] =='/') echo 'class="active"'; ?>><a href="/">Главная</a></li>
					<li <?php if($_SERVER['REQUEST_URI'] =='/pages/about') echo 'class="active"'; ?>><a href="/pages/about">О компании</a></li>
					<li <?php if($_SERVER['REQUEST_URI'] =='/categories') echo 'class="active"'; ?>><a href="/categories">Продукция</a></li>
					<li <?php if($_SERVER['REQUEST_URI'] =='/news') echo 'class="active"'; ?>><a href="/news">Новости</a></li>
					<li <?php if($_SERVER['REQUEST_URI'] =='/pages/contacts') echo 'class="active"'; ?>><a href="/pages/contacts">Контакты</a></li>
				</ul>
			</nav>
		</header>
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->Session->flash('good'); ?>
		<?php echo $this->Session->flash('bad'); ?>
		<?php echo $this->fetch('content') ?>
		<footer>
			<div class="cr">
				<a class="fl_l" href="/pages/vacancies">Вакансии</a>
				<div class="center">
					<p>Разработано в <a>Астана Креатив</a></p>
					<span>Copyright © 2015, Все права защищены </span>
					
				</div>
			</div>
		</footer>
		<script>
			$( function()
			{
				$( '#nav li:has(ul)' ).doubleTapToGo();
			});
		</script>
	</body>
</html>