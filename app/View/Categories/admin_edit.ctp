<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование новости</h2>
	</div>
<?php 

echo $this->Form->create('Category', array('type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название:'));
?>

<?php
echo $this->Form->input('body', array('label' => 'Текст:'));
?>
<div class="edit_bot">
<img src="/img/category/thumbs/<?=$data['Category']['img']?>">
	<div class="bot_r">
	<?
	echo $this->Form->input('img', array('label' => 'Картинка:', 'type' => 'file'));
	echo $this->Form->end('Редактировать');
	?>
	</div>
</div>
</div>