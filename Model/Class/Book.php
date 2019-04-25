<?php


class Book{
	private $id;
    private $title;
    private $author;
    private $category;

	/**
	 * Book constructor.
	 * @param $id
	 * @param $title
	 * @param $author
	 * @param $category
	 */
	public function __construct($id, $title, $author, $category)
	{
		$this->id = $id;
		$this->title = $title;
		$this->author = $author;
		$this->category = $category;
	}

	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param mixed $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @return mixed
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * @param mixed $title
	 */
	public function setTitle($title)
	{
		$this->title = $title;
	}

	/**
	 * @return mixed
	 */
	public function getAuthor()
	{
		return $this->author;
	}

	/**
	 * @param mixed $author
	 */
	public function setAuthor($author)
	{
		$this->author = $author;
	}

	/**
	 * @return mixed
	 */
	public function getCategory()
	{
		return $this->category;
	}

	/**
	 * @param mixed $category
	 */
	public function setCategory($category)
	{
		$this->category = $category;
	}
}
?>