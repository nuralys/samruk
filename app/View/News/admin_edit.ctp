<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование новости</h2>
	</div>
<?php 

echo $this->Form->create('News', array('type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название:'));
echo $this->Form->input('keywords', array('label' => 'Ключевые слова(для поисковиков):'));
echo $this->Form->input('description', array('label' => 'Описание(для поисковиков):'));
echo $this->Form->input('date', array('label' => 'Дата:'));?>

<?php
echo $this->Form->input('body', array('label' => 'Текст:', 'id' => 'editor'));
?>
<div class="edit_bot">
<img src="/img/news/thumbs/<?=$data['News']['img']?>">
	<div class="bot_r">
	<?
	echo $this->Form->input('img', array('label' => 'Картинка:', 'type' => 'file'));
	echo $this->Form->end('Редактировать');
	?>
	</div>
</div>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
</div>