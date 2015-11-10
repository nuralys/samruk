<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование</h2>
	</div>
<?php 

echo $this->Form->create('Link');
echo $this->Form->input('title', array('label' => 'Название:'));
echo $this->Form->input('link', array('label' => 'Ссылка:', 'placeholder' => 'http://astanacreative.kz'));
echo $this->Form->end('Сохранить');
?>

</div>