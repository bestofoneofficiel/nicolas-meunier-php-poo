<?php
class BookManager extends DbManager {
	// Recupereration de la CONNEXION à la bdd
    public function __construct() {
        parent::__construct();
    }

    // Méthodes pour SELECTIONNER TOUS les livres
    public function selectAll() {
        $books = [];
        $sql =  'SELECT * FROM book';
        foreach  ($this->bdd->query($sql) as $row) {
            $books[] = new Book($row['id'], $row['title'], $row['author'], $row['category']);
        }

        return $books;
    }

    // Méthode pour INSERER un livre en bdd
    public function insertBook(Book $book) {
        $req = $this->bdd->prepare('INSERT INTO book (title, author, category) VALUES (?, ?, ?)');
        $req->execute(array($book->getTitle(), $book->getAuthor(), $book->getCategory()));
	    print_r($req);
        $book->setId($this->bdd->lastInsertId());
	    print_r($book);
    }

    // Méthode pour SUPPRIMER un livre en bdd
    public function deleteBook($id) {
        $req = $this->bdd->prepare('DELETE FROM book where id = ?');
        $req->execute(array($id));
    }
}
?>