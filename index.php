<?php
require 'include.php';
require 'View/Parts/page_top.php';

// Se le controleur et l'action sont présent
if(!empty($_GET['controller']) && !empty($_GET['action'])) {

    // Si on demande un livre
    if ($_GET['controller'] === 'book') {
	    // AJOUT
	        // Formulaire d'ajout
		    if ($_GET['action'] === 'insertForm') {
			    $bookController = new BookController();
			    $bookController->insertForm();
		    }
		    // Insertion en bdd
		    else if ($_GET['action'] === 'insertBook') {
			    $bookController = new BookController();
			    $bookController->insertBook();
		    }
	    // SUPPRESSION
		    // Formulaire de confirmation
		    else if ($_GET['action'] === 'deleteForm' && !empty($_GET['id'])) {
			    $bookController = new BookController();
			    $bookController->deleteForm($_GET['id']);
		    }
		    // Suppression en bdd
		    else if ($_GET['action'] === 'deleteBook' && !empty($_GET['id'])) {
			    $bookController = new BookController();
			    $bookController->deleteBook($_GET['id']);
		    }
	    // ERREUR
		    // Sinon, action mal formulé ou non demandé, on affiche une erreur
		    else {
			    throw new Exception('La page demandée n\'existe pas', 404);
		    }
    }
    // Sinon, on a pas demandé un article, on affiche une erreur
    else {
	    throw new Exception('La page demandée n\'existe pas', 404);
    }
}
// Sinon, le controleur et/ou l'action sont absent, on affiche la page d'acceuil
else {
	$defaultController = new DefaultController();
	$defaultController->home();
}

require 'View/Parts/page_bottom.php';
?>