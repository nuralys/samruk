<div class="admin_add">
	<div class="ad_up">
		<h2>Добавление категории</h2>
	</div>
<?php 

echo $this->Form->create('Category', array('type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название:'));?>
<div class="input select">
	<label for="CategoryParentId">Категория:</label>
	<select name="data[Category][parent_id]" id="CategoryParentId">
		<option value="0">-</option>
		<option value="1">Socomec</option>
		<option value="2">Ferbo Energy</option>
		<option value="3">Frebo Rain</option>
		<option value="4">Tesar</option>
	</select>
</div>
<?php
echo $this->Form->input('body', array('label' => 'Текст:'));
?>

<?php
echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
echo $this->Form->end('Создать');
?>

</div>