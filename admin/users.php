
<?php
$servername = "localhost";      //serveur
$username = "root";             //identifiant
$password = "";                 //mot de passe
$dbname = "ecommerce";               //nom de la base de données

$conn = new mysqli($servername, $username, $password, $dbname);  //connexion à MySQL

?>

<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1>Utilisateurs</h1>
                <a href="index.php/admin/user/add" class="btn btn-primary text-white">Ajouter</a>
                <a href="index.php/admin/user/import" class="btn btn-primary text-white">Import</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Email</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($users as $u) { ?>
                        <tr>
                            <th scope="row"><?= $u['id'] ?></th>
                            <td><?= $u['email'] ?></td>
                            <td>
                                <a class="btn btn-danger text-white" href="/index.php/admin/user/del?id=<?= $u['id'] ?>">Supprimer</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>