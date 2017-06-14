
<?php
include('header.php');
include('conec.php');
?>


<section class="container">
<h1>Liste des Articles</h1>

<?php
//-----------------Requete pour lire l'ensemble des articles---------------//

$req = $pdo->query('SELECT * FROM article');

while ($data = $req->fetch()){

    ?>
      <h3><?php echo htmlspecialchars($data->titre); ?></h3>

      <?php echo '<img src="uploads/'.$data->fichier.'">' ?>

      <p><?php echo htmlspecialchars($data->texte); ?></p>

      <em>le <?php echo $data->date; ?></em><hr>


<!-- - - - - - - - - -boutons choix- - - - - - - - - - - - - - - - - - -->

      <a href="com.php?artid=<?php echo ($data->id); ?>">Commentaires</a></em>
      <a href="edit.php?artid=<?php echo ($data->id); ?>">
      <span class="glyphicon glyphicon-edit"></span> Edit</a>
      <a href="delete.php?artid=<?php echo ($data->id); ?>">
      <span class="glyphicon glyphicon-remove-circle"></span> Delete</a><hr><br>

    <?php

}
    $req->closeCursor();




    ?>

</section>
</body>
</html>
