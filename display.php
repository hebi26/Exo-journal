
<?php
include('header.php');
include('conec.php');
?>


<section class="container">
<h1>Liste des Articles</h1>

<?php
//-----------------Requete pour lire l'ensemble des articles---------------//

$display = $pdo->query('SELECT * FROM article');
$list = $display->fetchAll();

foreach ($list as $value) {
    echo '<h3>'.$value->titre.'</h3><img src="uploads/'.$value->fichier.'"><p>'.$value->texte.'</p><p>Ecrit le : '.$value->date.'</p>
    <form method="post" action="com.php"><input class="btn" id="btn3" type="submit" name="submit4" value="commentaires"></form><hr>';
}
?>
</section>
</body>
</html>
