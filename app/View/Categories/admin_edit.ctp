<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование новости</h2>
	</div>
<?php 

echo $this->Form->create('Category', array('type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название:'));
?>
<div class="input select">
	<label for="CategoryParentId">Категория:</label>
	<select name="data[Category][parent_id]" id="CategoryParentId">
		<option value="0">-</option>
		<?php foreach($cat_id as $k => $v):?>
			<option <?php if($k == $data['Category']['parent_id']) echo ' selected'; ?> value="<?=$k?>"><?=$v?></option>
		<?php endforeach ?>
	</select>
</div>
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