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
			<?php echo $this->element('links') ?>
		</div>
