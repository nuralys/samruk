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
	echo $this->Html->script(array('jquery-1.10.1.min', 'jquery.easing-1.3', 'jquery.iosslider.min','jquery.fancybox.js?v=2.1.5','doubletaptogo.js'));
	 ?>
		<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
		
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
			<nav id="nav" role="navigation">
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