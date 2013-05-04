<div class="page-header">
	<h1><?php echo $video['Video']['name'] ?>
	<small>Posté le <?php echo h($video['Video']['date']); ?> par <?php echo h($video['Video']['user_id']); ?> dans <?php echo h($video['Video']['category_id']); ?></small>
	</h1>
</div>
<div class="well">
	<p><?php echo h($video['Video']['content']); ?></p>
</div>
<hr>