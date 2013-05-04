<div class="page-header">
	<h1>Gérer les vidéos</h1>
	<a href="<?php echo Router::url(array('controller'=>'videos','action'=>'edit')); ?>" class="btn  btn-success">Ajouter</a>
</div>

	<table class="table table-hover" >
	  	<thead>
			<tr>
				<th>#</th>
				<th>Titre</th>
				<th>Description</th>
				<th>En ligne</th>
				<th>Action</th>
			</tr>
	  	</thead>
	 	<tbody>
	 		<?php foreach ($videos as $k => $v): ?>
				<tr>
					<td><?php echo $v['Video']['id'] ?></td>
					<td><?php echo $v['Video']['name'] ?></td>
					<td><?php echo  $this->Text->truncate($v['Video']['content'],140,array('ending' => '...','exact' => false));
 ?></td>
					<td><?php echo $v['Video']['online'] ?></td>
					<td>
			  			<a href="<?php echo Router::url(array('controller'=>'videos','action'=>'edit',$v['Video']['id'])); ?>" class="btn btn-info">Modifier</a>
			  			<a href="" class="btn btn-danger">Supprimer</a>
			  		</td>
				</tr>
	 		<?php endforeach ?>
	  </tbody>
	</table>