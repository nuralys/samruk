<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование</h2>
	</div>
<?php 
// debug($service);
// debug($s_list);
echo $this->Form->create('Product', array('type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название:'));
echo $this->Form->input('short_description', array('label' => 'Короткое описание:'));
?>
<div class="input select">
	<label for="ProductCategoryId">Категория:</label>
	<select name="data[Product][category_id]" id="ProductCategoryId">
		<option value="0">-</option>
		<?php foreach($c_list as $k => $v):?>
		
			<option <?php if($k == $data['Product']['category_id']) echo ' selected'; ?> value="<?=$k?>"><?=$v?></option>
		<?php endforeach ?>
	</select>
</div>
<?php
echo $this->Form->input('body', array('id' => 'editor', 'label' => 'Текст:'));
echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));

echo $this->Form->end('Сохранить');
?>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
</div>