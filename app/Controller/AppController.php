<?php
class AppController extends Controller{
	
	/**
	* beforeFilter
	**/
	public function beforeFilter(){
		$prefix = $this->request->prefix;
		if (isset($prefix) && $prefix == 'admin') {
			$this->layout = 'admin';
		}
	}

}