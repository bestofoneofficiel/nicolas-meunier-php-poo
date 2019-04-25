<?php
class DefaultController{

    public function home()
    {
        $bookManager = new BookManager();
        $books = $bookManager->selectAll();
        require 'View/home_view.php';
    }
}