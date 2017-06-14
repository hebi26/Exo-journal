
<?php
include('header.php');
?>

  <section class="container">

  <h3>-Ajouter un article-</h3>

  <form method="post" action="script.php" enctype="multipart/form-data">

    <div class="form-group">
      <label for="Title">Titre de l'article</label>
      <input type="text" class="form-control" name="title" id="Title" >
    </div>
    <div class="form-group">
      <input type="file" name="userfile" size="50" value="" id="File">
      </div>
    <div  class="form-group">
      <label for="Text">Texte de l'article</label>
      <textarea class="form-control" rows="5" name="text" id="Text"></textarea>
    </div>
    <input class="btn" id="btn1" type="submit" name="submit" value="Soumettre">
  </form>

    </section>
  </body>
</html>
