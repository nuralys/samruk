<div class="g_line"></div>
		<div class="cr content">
			<div class="main">

			<?php foreach($news as $news_item): ?>
				<div class="i_row">
					<img src="/img/news/thumbs/<?=$news_item['News']['img']?>"/>
					<div class="i_text">
						<div class="wr">
							<div class="i_top">
							<a class="heading" href="/news/<?=$news_item['News']['id'] ?>"><?=$news_item['News']['title'] ?></a>
							<p class="des"><?= $this->Text->truncate(strip_tags($news_item['News']['body']), 420, array('ellipsis' => '...', 'exact' => true)) ?>
							</p>
							</div>
							<div class="i_bot">
								<span>Дата: <?=$news_item['News']['date'] ?></span>
								<a href="/news/<?=$news_item['News']['id'] ?>">Читать полностью</a>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
				
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
						<a class="t_heading" href="#">Производители</br>(партнеры)</a>
						<ul class="as_img">
							<li><img src="img/partner1.jpg"/></li>
							<li><img src="img/partner2.jpg"/></li>
							<li><img src="img/partner3.jpg"/></li>
						</ul>
					</div>
				</div>
			</aside>
		</div>
