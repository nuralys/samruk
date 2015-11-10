	<a href="/admin/categories/add">Добавить категорию</a>
	<ul>
<?php foreach($categories as $category): ?>
	<li><?=$category['Category']['title'] ?><a href="/admin/categories/edit/<?=$category['Category']['id'] ?>">Редактировать</a> <?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $category['Category']['id']), array('confirm' => 'Подтвердите удаление')); ?></li>
<?php endforeach ?>
	</ul>