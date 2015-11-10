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
						<img src="/img/category/thumbs/<?=$parent_cat[0]['Category']['img'] ?>">
						<ul>
						<?php foreach($child_cats as $cat): ?>
							<li><a href=""><?=$cat['Category']['title'] ?></a></li>
						<?php endforeach ?>
						</ul>
					</div>
				</div>
				<div class="item_part">
				<?php //foreach(): ?>
					<div class="p_item">
						<div class="wr">
							<span>NETYS PL</span>
							<p>от 600 до 800 
							многорозеточный ИБП для 
							быстрого подключения 
							различного оборудования</p>
							<ul>
								<li>от 600 до 800 </li>
								<li>многорозеточный ИБП для </li>
								<li>быстрого подключения </li>
								<li>различного оборудования</li>
							</ul>
							<img src="img/item.jpg">
						</div>
					</div>
					<?php //endforeach ?>

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
