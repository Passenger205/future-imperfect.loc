<?php

namespace 'xtn\Models';

class Articles
{
	public static function findById($id) {}
	public static function findByCat($category = null) {}
	public static function deleteById($id) {}
	
	public static function createNew($data) 
	{
		$article = new Article($data);

		$article->create();
	}
}