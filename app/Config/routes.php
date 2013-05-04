<?php
	Router::connect('/', array('controller' => 'pages', 'action' => 'home'));
	Router::connect('/admin', array('controller' => 'pages', 'action' => 'admin','admin'=>true));
	Router::connect('/videos/:slug-:id',array('controller'=>'videos','action'=>'show'),array('pass'=> array('id','slug'), 'id'=>'[0-9]+','slug' =>'[a-z0-9\-]+'));
	CakePlugin::routes();
	require CAKE . 'Config' . DS . 'routes.php';