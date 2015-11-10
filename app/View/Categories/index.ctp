<div class="g_line"></div>
<div class="cr content">
			<div class="main">
				<div class="production">
				<?php foreach($categories as $category): ?>
					<div class="prod">
						<div class="wr">
							<div class="pr_img"><img src="/img/category/thumbs/<?=$category['Category']['img'] ?>"></div>
							<a href="/category/<?=$category['Category']['id'] ?>"><?=$category['Category']['title'] ?></a>
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