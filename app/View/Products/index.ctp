<div class="g_line"></div>
<div class="cr content">
			<div class="main">
				<div class="production">
				<?php foreach($categories as $category): ?>
					<div class="prod">
						<div class="wr">
							<div class="pr_img"><img src="/img/category/<?=$category['Category']['img'] ?>"></div>
							<a href="/products/<?=$category['Category']['id'] ?>"><?=$category['Category']['title'] ?></a>
						</div>
					</div>
					<?php endforeach ?>
				</div>
			</div>
			<?php echo $this->element('links') ?>
		</div>