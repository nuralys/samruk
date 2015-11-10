<div class="g_line"></div>
<div class="cr content">
			<div class="main">
				<div class="prod_sec">
					<!-- <ul class="b_nav">
						<li><a href="#">Главная</a></li>
						<li><a href="#">Продукция</a></li>
						<li><a href="#">Socomec</a></li>
						<li><a href="#">ИБП Одно/Одно-фазные</a></li>
					</ul> -->
					<div class="prod_list">
					<?php //debug($parent_cat) ?>
						<img src="/img/category/thumbs/<?=$parent_cat_data[0]['Category']['img'] ?>">
						<ul>
						<?php foreach($neighbour_cats as $cat): ?>
							<li><a href="/product/<?=$cat['Category']['id'] ?>"><?=$cat['Category']['title'] ?></a></li>
						<?php endforeach ?>
						</ul>
					</div>
				</div>
				<div class="item_part">
				<?php foreach($products as $product): ?>
					<div class="p_item">
						<div class="wr">
							<span><?=$product['Product']['title'] ?></span>
							<p><?=$product['Product']['short_description'] ?></p>
							<p><?=$product['Product']['body'] ?></p>
							<img src="/img/product/thumbs/<?=$product['Product']['img'] ?>">
						</div>
					</div>
					<?php endforeach ?>

				</div>
			</div>
			<aside>
				<div class="as_row">
					<div class="wr">
						<a class="t_heading" href="#">Быстрые ссылки</a>
						<ul class="as_list">
							<li><a href="#">Выбор ИБП</a></li>
							<li><a href="#">Инструкции по эксплуатации Диаграммы для CAD</a></li>
							<li><a href="#">Руководство по применению и техническое руководство</a></li>
							<li><a href="#">Программное обеспечение для ИБП</a></li>
						</ul>
					</div>
				</div>
				<div class="as_row">
					<div class="wr">
						<a class="t_heading" href="#">Производители<br>(партнеры)</a>
						<ul class="as_img">
							<li><img src="img/partner1.jpg"></li>
							<li><img src="img/partner2.jpg"></li>
							<li><img src="img/partner3.jpg"></li>
						</ul>
					</div>
				</div>
			</aside>
		</div>
