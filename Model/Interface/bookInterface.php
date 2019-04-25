<?php


interface bookInterface {
	public function  __construct($id, $title, $author, $category);

	public function getId();
	public function setId($id);

	public function getTitle();
	public function setTitle($id);

	public function getAuthor();
	public function setAuthor($id);

	public function getCategory();
	public function setCategory($id);
}