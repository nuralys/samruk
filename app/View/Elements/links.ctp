<aside>
	<div class="as_row">
		<div class="wr">
			<a class="t_heading" href="#">Быстрые ссылки</a>
			<ul class="as_list">
				<?php foreach($links as $link): ?>
					<li><a href="<?=$link['Link']['link'] ?>"><?=$link['Link']['title'] ?></a></li>
				<?php endforeach ?>
			</ul>
		</div>
	</div>
	<div class="as_row">
		<div class="wr">
			<a class="t_heading" href="#">Производители</br>(партнеры)</a>
			<ul class="as_img">
				<li><a href="http://samruk-t.kz/category/1"><img src="/img/partner1.jpg"/></a></li>
				<li><a href="http://samruk-t.kz/category/2"><img src="/img/ferbo.png"/></a></li>
				<li><a href="http://samruk-t.kz/category/4"><img src="/img/partner4.jpg"/></a></li>
			</ul>
		</div>
	</div>
</aside>