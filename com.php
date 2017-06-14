<?php
include('header.php');
include('conec.php');
?>

<section class="container">

<?php

$display = $pdo->query('SELECT * FROM article');
$list = $display->fetch();



    echo '<h3>'.$list->titre.'</h3><img src="uploads/'.$list->fichier.'"><p>'.$list->texte.'</p><p>Ecrit le : '.$list->date.'</p>
    <form method="post" action="com.php">
    <div class="form-group">
    <input type="text" class="form-control" name="name" id="Name" placeholder="Pseudo">
    </div>
    <div class="form-group">
    <textarea class="form-control" rows="5" name="comm" id="Comm" placeholder="Votre commentaire"></textarea>
    </div>
    <input class="btn" id="btn4" type="submit" name="submit4" value="Envoyer">
    </form><hr>';

 ?>
</section>
</body>
</html>
