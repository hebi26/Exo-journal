<?php

include('header.php');
include('conec.php');



$req = $pdo->prepare('DELETE FROM article WHERE id= ?');
$req->execute(array($_GET['artid']));

?>

<section class="container">

<h3>Article supprimé</h3>
<a href="display.php">Retour aux articles</a>

</section>
</body>
</html>
