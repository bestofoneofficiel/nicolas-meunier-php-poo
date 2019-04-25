<h1 class="text-center mb-3">Ajout d'un nouveau livre</h1>

<!-- Affichage du formulaire sous forme de tableau -->
<form method="post" action="index.php?controller=book&action=insertBook">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Nom du livre</th>
            <th scope="col">Auteur du livre</th>
            <th scope="col">Catégorie</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">
                    <input name="title" type="text" class="form-control" id="input1" placeholder="Ecrivez le nom de du livre ici ...">
                </th>
                <td>
                    <input name="author" type="text" class="form-control" placeholder="Ecrivez le nom de l'auteur ici ...">
                </td>
                <td>
                    <select class="form-control" id="select1" name="category">
                        <option disabled selected>Selectionner une catégorie ici ...</option>
                        <option value="Roman">Roman</option>
                        <option value="compte">Compte</option>
                        <option value="Nouvelle ou autre">Nouvelle ou autre</option>
                    </select>
                </td>
            </tr>
        </tbody>
    </table>

    <p class="text-center">
        <input class="btn btn-primary m-2" type="submit" value="Ajouter ce livre">
        <a href="../nicolas-meunier-php-poo/index.php" class="btn btn-secondary m-2">Annuler</a>
    </p>
</form>
