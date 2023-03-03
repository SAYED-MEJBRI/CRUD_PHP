<?php
include 'header.php';
?>


<body>
    <br />
    <div class="container">
        <br />
        <div class="row">
            <br />
            <h2><img src="img/bootstrap.svg" alt="Bootstrap" width="32" height="32">Crud en Php</h2>

        </div>

        <br />
        <div class="row">
            <a href="add.php" class="btn btn-success">Ajouter un user</a>
            <br />
            <div class="table-responsive">
                <br />
                <table class="table table-hover table-bordered">
                    <br />
                    <thead>
                        <th>Name</th>

                        <th>Firstname</th>

                        <th>Age</th>

                        <th>Tel</th>

                        <th>Pays</th>

                        <th>Email</th>

                        <th>Comment</th>

                        <th>metier</th>

                        <th>Url</th>

                        <th>Edition</th>

                    </thead>

                    <br />
                    <tbody>
                        <?php //include 'database.php';
                        //on inclut notre fichier de connection 
                        //on se connecte à la base 
                        require_once('singletonConnexion.php');

                        $connexion = Connexion::getInstance();
                        // $requete = "SELECT * FROM commentaires ORDER BY date_creation DESC";
//$resultat = $connexion->query($requete);
                        $sql = 'SELECT * FROM crud_table ORDER BY id DESC';
                        //on formule notre requete 
                        $users = $connexion->query($sql);
                        foreach ($users as $row) {
                            echo '
<br />
<tr>';
                            echo '

<td>' . $row['name'] . '</td>

';
                            echo '

<td>' . $row['firstname'] . '</td>

';
                            echo '

<td>' . $row['age'] . '</td>

';
                            echo '

<td>' . $row['tel'] . '</td>

';
                            echo '

<td>' . $row['email'] . '</td>

';
                            echo '

<td>' . $row['pays'] . '</td>

';
                            echo '

<td>' . $row['comment'] . '</td>

';
                            echo '

<td>' . $row['metier'] . '</td>

';
                            echo '

<td>' . $row['url'] . '</td>

';
                            echo '

<td>';
                            echo '<a class="btn btn btn-info" href="edit.php?id=' . $row['id'] . '"> <img src="img/book.svg" alt="Bootstrap" width="32" height="32"></a>'; // un autre td pour le bouton d'edition
                            echo '</td>

';
                            echo '

<td>';
                            echo '<a class="btn btn-success" href="update.php?id=' . $row['id'] . '"><img src="img/pencil-square.svg" alt="Bootstrap" width="32" height="32"></a>'; // un autre td pour le bouton d'update
                            echo '</td>

';
                            echo '

<td>';
                            echo '<a class="btn btn-danger" href="delete.php?id=' . $row['id'] . ' "><img src="img/trash.svg" alt="Bootstrap" width="32" height="32"></a>'; // un autre td pour le bouton de suppression
                            echo '</td>

';
                            echo '</tr>

';

                            //     Database::disconnect(); //on se deconnecte de la base
                            ;
                        }
                        ?>
                    </tbody>


                </table>


            </div>



        </div>



    </div>

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>
<?php
include 'footer.php';
?>
</html>