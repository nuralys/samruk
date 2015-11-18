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
				<li><img src="/img/partner1.jpg"/></li>
				<li><img src="/img/ferbo.png"/></li>
				<li><img src="/img/partner4.jpg"/></li>
			</ul>
		</div>
	</div>
</aside>