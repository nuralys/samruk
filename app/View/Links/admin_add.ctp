<div class="admin_add">
	<div class="ad_up">
		<h2>Добавление быстрой ссылки</h2>
	</div>
<?php 

echo $this->Form->create('Link');
echo $this->Form->input('title', array('label' => 'Название:'));
echo $this->Form->input('link', array('label' => 'Ссылка:', 'placeholder' => 'http://astanacreative.kz', 'type' => 'text'));
echo $this->Form->end('Создать');
?>
</div>