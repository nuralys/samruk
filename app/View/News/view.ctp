<div class="g_line"></div>
		<div class="cr content">
			<div class="main">
				<div class="news_part">
					<img src="/img/news/thumbs/<?=$post['News']['img'] ?>"/>
					<h3><?php echo $post['News']['title'] ?></h3>
					<?php echo $post['News']['body'] ?>
				</div>
			</div>
			<?php echo $this->element('links') ?>
		</div>