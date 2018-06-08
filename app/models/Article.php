<?php

namespace xtn\Models;

echo "ARTICLE CLASS HERE";
die();

// use 'xtn\core\Database';

class Article
{
	public $id;

	public $title;

	public $text;

	public $thumbnail;

	public $image;

	public $author;

	public $pubdate;

	public $category_id = '1';


	/**
	*@param array $title, $text, $author, $pubdate, $category
	**/
	public function __construct($data)
	{
		extract($data);

		$this->title 	= $title;
		$this->text 	= $text;
		$this->author 	= $author;
		$this->pubdate 	= $pubdate;
		$this->category = $category;
	}

	private function create() 
	{
		$db = Database::connect();

		try {
				$db->begin();

				$db->prepareQuery(
					'INSERT INTO `articles` (`id`, `title`, `text`, `thumbnail`, `image`, `author`, `pubdate`, `category_id`)
					VALUES (NULL, $title, $text, $thumbnail, $image, $author, 11, 11);', 
					['title' 		=> $this->title,	
					 'text' 		=> $this->text,
					 'thumbnail'	=> $this->thumbnail,
					 'image' 		=> $this->image,
					 'author' 		=> $this->author,
					 'pubdate' 		=> $this->pubdate,
					 'category_id' 	=> $this->category_id,
				]);

				$db->commit();

			} catch (DatabaseException $e) {
				$db->rollback();
				$db->disconnect();

				throw new errorAddingToDbException($message, 0, $e);
			}

		$db->disconnect();
	}

	private function save() 
	{
		// Updates props in the objects and uploads them
	}

	private function delete() 
	{
		// Deletes object article from DB
	}
}