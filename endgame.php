<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Ajout des librairies CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link href="css/fonts.css" rel="stylesheet">
  <title>Workshop - Ecran de Fin</title>
</head>

<body>
  <div class="container w-50 h-100">
    <div class="col align-middle pt-5">
      <div class="row align-middle text-center">
        <h2 class="text-center my-5" style="font-family: pixelfont; color: white; text-shadow: 5px 5px #000;">La cybersécurité au quotidien</h2>
        <div class="container p-3 my-3 bg-white border border rounded w-75">
          <p style="margin-top: 2%; font-family: pixelfont;">(Message lié au score) <script></script>
          </p>
          <br>
          <p style="margin-top: 2%; font-family: pixelfont;">Votre score est : <?= $_POST["score"].'test'?></p>
          <br>
          <p style="margin-top: 2%; font-family: pixelfont;">(Description lié au score) <script></script>
            <br>
            Liens utiles :
          </p>
          <div class="d-grid gap-2 mx-auto" style="margin: 2%;">
            <button style="margin: 2%;" onclick='window.location.href="index.php"' type="button" class="btn btn-outline-primary">Retourner à l'écran d'accueil</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php print_r($_POST); ?>
</body>
<!-- Ajout des librairies JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</html>