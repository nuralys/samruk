<div class="admin_add">
	<div class="ad_up">
		<h2>Добавление продукта</h2>
	</div>
<?php 

echo $this->Form->create('Product', array('type' => 'file'));?>
<div class="input select">
	<label for="ProductCategoryId">Категория:</label>
	<select name="data[Product][category_id]" id="ProductCategoryId">
		<option value="0">-</option>
		<?php foreach($c_list as $k => $v):?>
			<option value="<?=$k?>"><?=$v?></option>
		<?php endforeach ?>
	</select>
</div>
<?php
echo $this->Form->input('title', array('label' => 'Название:'));
echo $this->Form->input('short_description', array('label' => 'Короткое описание:'));
echo $this->Form->input('body', array('label' => 'Текст:', 'id' => 'editor'));

echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
echo $this->Form->end('Создать');
?>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
</div>