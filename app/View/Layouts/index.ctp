<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title><?php echo $title_for_layout ?> - Samruk</title>
		<?php 
	echo $this->fetch('css');
	echo $this->fetch('script');
	echo $this->Html->css(array('style'));
	echo $this->Html->script(array('jquery-1.4.min', 'jquery.easing-1.3', 'jquery.iosslider.min'));
	 ?>
		
		<script type="text/javascript">
			$(document).ready(function() {
			
				$('.iosSlider').iosSlider({
					autoSlide:true,
					autoSlide:true,
					scrollbar: true,
					snapToChildren: true,
					desktopClickDrag: true,
					scrollbarLocation: 'top',
					scrollbarMargin: '10px 10px 0 10px',
					scrollbarBorderRadius: '0',
					responsiveSlideWidth: true,
					navSlideSelector: $('.iosSliderButtons .button'),
					infiniteSlider: true,
					startAtSlide: '1',
					onSlideChange: slideContentChange,
					onSlideComplete: slideContentComplete,
					onSliderLoaded: slideContentLoaded
				});
				
				function slideContentChange(args) {
					
					/* indicator */
					$(args.sliderObject).parent().find('.iosSliderButtons .button').removeClass('selected');
					$(args.sliderObject).parent().find('.iosSliderButtons .button:eq(' + (args.currentSlideNumber - 1) + ')').addClass('selected');
					
				}
				
				function slideContentComplete(args) {
					
					if(!args.slideChanged) return false;
					
					/* animation */
					$(args.sliderObject).find('.text1, .text2').attr('style', '');
					
					$(args.currentSlideObject).children('.text1').animate({
						right: '100px',
						opacity: '1'
					}, 400, 'easeOutQuint');
					
					$(args.currentSlideObject).children('.text2').delay(200).animate({
						right: '50px',
						opacity: '1'
					}, 400, 'easeOutQuint');
					
				}
				
				function slideContentLoaded(args) {
					
					/* animation */
					$(args.sliderObject).find('.text1, .text2').attr('style', '');
					
					$(args.currentSlideObject).children('.text1').animate({
						right: '50%',
						opacity: '1'
					}, 400, 'easeOutQuint');
					
					$(args.currentSlideObject).children('.text2').delay(200).animate({
						right: '50px',
						opacity: '1'
					}, 400, 'easeOutQuint');
					
					/* indicator */
					$(args.sliderObject).parent().find('.iosSliderButtons .button').removeClass('selected');
					$(args.sliderObject).parent().find('.iosSliderButtons .button:eq(' + (args.currentSlideNumber - 1) + ')').addClass('selected');
					
				}
				
			});
		</script>
	</head>
	<body>
		<header>
			<div class="cr">
				<div class="h_up">
					<div class="left_h">
						<img src="/img/logo.png"/ alt="Samruk" title="Логотип">
						<p>Современные технологии для качественного</br> и надежного электроснабжения</p>
					</div>
					<div class="right_h">
						<a href="#">Обратиться к нам</a>
						<span>+7 707 742 97 12</span>
						<span>+7 701 742 97 12</span>
					</div>
				</div>
				<nav class="nav">
					<div class="menu">
						Меню
					</div>
					<ul>
						<li <?php if($_SERVER['REQUEST_URI'] =='/') echo 'class="active"'; ?>><a href="/">Главная</a></li>
						<li <?php if($_SERVER['REQUEST_URI'] =='/pages/about') echo 'class="active"'; ?>><a href="/pages/about">О компании</a></li>
						<li <?php if($_SERVER['REQUEST_URI'] =='/categories') echo 'class="active"'; ?>><a href="/categories">Продукция</a></li>
						<li <?php if($_SERVER['REQUEST_URI'] =='/news') echo 'class="active"'; ?>><a href="/news">Новости</a></li>
						<li <?php if($_SERVER['REQUEST_URI'] =='/pages/contacts') echo 'class="active"'; ?>><a href="/pages/contacts">Контакты</a></li>
					</ul>
				</nav>
			</div>
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
	</body>
</html>