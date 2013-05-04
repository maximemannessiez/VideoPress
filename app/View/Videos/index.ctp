<div class="page-header">
	<h1>Dernières vidéos</h1>
</div>
	<?php foreach ($videos as $k => $v): ?>
		<div class="well">
			<h2><?php echo h($v['Video']['name']); ?></h2>
			<small>Posté le <?php echo h($v['Video']['created']); ?> par <?php echo h($v['Video']['user_id']); ?> dans <?php echo h($v['Video']['category_id']); ?></small>
			<p><?php echo h($v['Video']['content']); ?></p>
			<a href="<?php echo Router::url(array('controller'=>'videos','action'=>'show','id'=>$v['Video']['id'],'slug'=>$v['Video']['slug'])); ?>" class="btn btn-primary">Voir la vidéo <i class="icon-arrow-right icon-white"></i></a>
		</div>
		<hr>
	<?php endforeach ?>