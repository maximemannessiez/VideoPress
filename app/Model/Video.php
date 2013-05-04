<?php
class Video extends AppModel{

	/**
	* 
	**/
	function beforeSave($options = array()){
		//Inflector::slug($word, $replacement = '_')
		return true;
	}

}