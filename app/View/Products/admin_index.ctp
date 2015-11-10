<a href="/admin/products/add">Добавить продукт</a>
<ul>
	<?php foreach($products as $product): ?>
		<li><?=$product['Product']['title'] ?> <a href="/admin/products/edit/<?=$product['Product']['id']?>">Редактировать</a> | 
			<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $product['Product']['id']), array('confirm' => 'Подтвердите удаление')); ?></li>
	<?php endforeach ?>
</ul>
