<div class = 'iosSlider'>
			<div class = 'slider'>	
				<div class = 'item' id = 'item1'>			
					<div class="cr">
						<div class = 'text1'>
							<span>Мы работаем с мировыми брэндами как SOCOMEC</span>
							<img src="img/socomec.png"/>
						</div>				
						<div class = 'text2'>
							<a href="#">Перейти к продукциям</a>
						</div>	
					</div>	
				</div>			
				<div class = 'item' id = 'item1'>			
					<div class="cr">
						<div class = 'text1'>
							<span>Мы работаем с мировыми брэндами как SOCOMEC</span>
							<img src="img/socomec.png"/>
						</div>				
						<div class = 'text2'>
							<a href="#">Перейти к продукциям</a>
						</div>	
					</div>	
				</div>				
				<div class = 'item' id = 'item1'>			
					<div class="cr">
						<div class = 'text1'>
							<span>Мы работаем с мировыми брэндами как SOCOMEC</span>
							<img src="img/socomec.png"/>
						</div>				
						<div class = 'text2'>
							<a href="#">Перейти к продукциям</a>
						</div>	
					</div>	
				</div>			
				<div class = 'item' id = 'item1'>			
					<div class="cr">
						<div class = 'text1'>
							<span>Мы работаем с мировыми брэндами как SOCOMEC</span>
							<img src="img/socomec.png"/>
						</div>				
						<div class = 'text2'>
							<a href="#">Перейти к продукциям</a>
						</div>	
					</div>	
				</div>			
			</div>		
			<div class = 'iosSliderButtons'>
				<div class = 'button'></div>
				<div class = 'button'></div>
				<div class = 'button'></div>
				<div class = 'button'></div>
			</div>		
		</div>
		<div class="cr content">
			<div class="main">
				<?php foreach($news as $item): ?>
				<div class="i_row">
					<img src="/img/news/thumbs/<?=$item['News']['img'] ?>"/>
					<div class="i_text">
						<div class="wr">
							<div class="i_top">
							<a class="heading" href="/news/<?=$item['News']['id'] ?>"><?=$item['News']['title'] ?></a>
							<p class="des"><?= $this->Text->truncate(strip_tags($item['News']['body']), 250, array('ellipsis' => '...', 'exact' => true)) ?></p>
							</div>
							<div class="i_bot">
								<span>Дата: <?=$item['News']['date'] ?></span>
								<a href="/news/<?=$item['News']['id'] ?>">Читать полностью</a>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach ?>
			</div>
			<?php echo $this->element('links') ?>
			
		</div>