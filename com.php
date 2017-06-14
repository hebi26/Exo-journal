<?php
include('header.php');
include('conec.php');
?>

<section class="container">

<?php

$req = $pdo->prepare('SELECT * FROM article WHERE id=?');
$req->execute(array($_GET['artid']));
$data=$req->fetch();

 ?>
 <h3><?php echo htmlspecialchars($data->titre); ?></h3>

 <?php echo '<img src="uploads/'.$data->fichier.'">' ?>

 <p><?php echo htmlspecialchars($data->texte); ?></p>

 <em>le <?php echo $data->date; ?></em>


</section>
</body>
</html>
