
<?php
include('header.php');
include('conec.php');
?>


    <section class="container">
      <form method="post" action="display.php">
      <input class="btn" id="btn2" type="submit" name="submit2" value="Lister les articles">
      </form>
<?php

include('upload.php');

//----------------------On défini les variables------------------------------//

      $title=$_POST['title'];
      $file=$_FILES['userfile']['name'];
      $text=$_POST['text'];


// ---------------Requete pour injecter dans la table------------------------//

      $req = $pdo->prepare("INSERT INTO article (titre, fichier, texte)
      VALUES (:titre, :fichier, :texte)");

      $req->execute(array(
          'titre' => $title,
          'fichier' => $file,
          'texte' => $text
      ));

      print_r($pdo->errorInfo());


      ?>



    </section>
  </body>
</html>
