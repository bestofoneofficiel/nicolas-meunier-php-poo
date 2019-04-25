<!-- Affichage d'un livre -->
<tr>
    <th scope="row"><?=$book->getId()?></th>
    <td><?=$book->getTitle()?></td>
    <td><?=$book->getAuthor()?></td>
    <td><?=$book->getCategory()?></td>
    <td><a href="/nicolas-meunier-php-poo/index.php?controller=book&action=deleteForm&id=<?=$book->getId()?>" class="btn btn-danger">Supprimer</a></td>
</tr>