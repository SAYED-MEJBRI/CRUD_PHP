<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Crud en php</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
        data-wp-preserve="%3Cscript%20src%3D%22js%2Fbootstrap.js%22%3E%3C%2Fscript%3E" data-mce-resize="false"
        data-mce-placeholder="1" class="mce-object" width="20" height="20" alt="<script>" title="<script>" />
            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="css/bootstrap.min.css">


</head>

<body>
    <br />
    <div class="container">
        <br />
        <div class="row">
            <br />
            <h2>Crud en Php</h2>
            <p>
        </div>
        <p>
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
                        <p>
                            <th>Firstname</th>
                        <p>
                            <th>Age</th>
                        <p>
                            <th>Tel</th>
                        <p>
                            <th>Pays</th>
                        <p>
                            <th>Email</th>
                        <p>
                          <th>Comment</th>
                        <p>
                           <th>metier</th>
                        <p>
                            <th>Url</th>
                        <p>
                            <th>Edition</th>
                        <p>
                    </thead>
                    <p>
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
                            foreach ($users  as $row) {
                                echo '
<br />
<tr>';
                                echo '

<td>' . $row['name'] . '</td>
<p>
';
                                echo '

<td>' . $row['firstname'] . '</td>
<p>
';
                                echo '

<td>' . $row['age'] . '</td>
<p>
';
                                echo '

<td>' . $row['tel'] . '</td>
<p>
';
                                echo '

<td>' . $row['email'] . '</td>
<p>
';
                                echo '

<td>' . $row['pays'] . '</td>
<p>
';
                                echo '

<td>' . $row['comment'] . '</td>
<p>
';
                                echo '

<td>' . $row['metier'] . '</td>
<p>
';
                                echo '

<td>' . $row['url'] . '</td>
<p>
';
                                echo '

<td>';
                                echo '<a class="btn" href="edit.php?id=' . $row['id'] . '">Read</a>'; // un autre td pour le bouton d'edition
                                echo '</td>
<p>
';
                                echo '

<td>';
                                echo '<a class="btn btn-success" href="update.php?id=' . $row['id'] . '">Update</a>'; // un autre td pour le bouton d'update
                                echo '</td>
<p>
';
                                echo '

<td>';
                                echo '<a class="btn btn-danger" href="delete.php?id=' . $row['id'] . ' ">Delete</a>'; // un autre td pour le bouton de suppression
                                echo '</td>
<p>
';
                                echo '</tr>
<p>
';

                           //     Database::disconnect(); //on se deconnecte de la base
                                ;
                            }
                            ?>
                        </tbody>
                    <p>

                </table>
                <p>

            </div>
            <p>


        </div>
        <p>


    </div>
    <p>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>