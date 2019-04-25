<h1 class="text-center">Ma bibliothèque de livre</h1>
<p class="text-center"><i>Ma super bibliothèque créé en MVC</i></p>
<p class="text-center"><a href="../nicolas-meunier-php-poo/index.php?controller=book&action=insertForm" class="btn btn-primary">Ajouter un nouveau livre</a></p>

<!-- Affichage du tableau -->
<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Nom du livre</th>
        <th scope="col">Auteur du livre</th>
        <th scope="col">Catégorie</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        <?php
        // Affichage de chaque livre
        foreach ($books as $book) {
            require 'Parts/book.php' ;
        }?>
    </tbody>
</table>
