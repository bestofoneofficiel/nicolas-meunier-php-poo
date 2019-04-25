<?php
class BookController{
	// INSERTION
		// Afficher le formulaire d'insertion
	    public function insertForm() {
	        require 'View/insert_form.php';
	    }

	    // Insertion d'un livre en bdd
	    public function insertBook() {
	        $book = new Book(null, $_POST['title'], $_POST['author'], $_POST['category']);
	        $bookManager = new BookManager();
	        $bookManager->insertBook($book);
	        header('Location: /nicolas-meunier-php-poo/index.php');
	    }

	// SUPPRESSION
	    // Afficher le formulaire de confirmation
		public function deleteForm() {
			require 'View/delete_form.php';
		}

		// Supprimer un livre
	    public function deleteBook($id) {
	        $bookManager = new BookManager();
	        $bookManager->deleteBook($id);
	        header('Location: /nicolas-meunier-php-poo/index.php');
	    }
}
