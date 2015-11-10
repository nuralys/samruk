<a href="/admin/links/add">Добавить ссылку</a>
<ul>
	<?php foreach($links as $link): ?>
		<li><?=$link['Link']['title'] ?> <a href="/admin/links/edit/<?=$link['Link']['id']?>">Редактировать</a> | 
			<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $link['Link']['id']), array('confirm' => 'Подтвердите удаление')); ?></li>
	<?php endforeach ?>
</ul>