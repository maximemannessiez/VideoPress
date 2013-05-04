<div class="page-header">
	<h1>Éditer une vidéo</h1>
</div>

<?php echo $this->Form->create('Video') ?>
	<?php echo $this->Form->input('name',array('label'=>'name')) ?>
	<?php echo $this->Form->input('content',array('label'=>'content')) ?>
	<?php echo $this->Form->input('online',array('label'=>"En ligne ?",'type'=>'checkbox')); ?>	
	<?php echo $this->Form->input('id'); ?>
<?php echo $this->Form->end('Envoyer') ?>