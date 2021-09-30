<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Ajout des librairies CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link href="css/fonts.css" rel="stylesheet">
  <title>Workshop - Ecran de Fin</title>
</head>
<body>
  <div class="container w-50 h-100">
    <div class="col align-middle pt-5">
      <div class="row align-middle">
        <h2 class="text-center my-5" style="font-family: pixelfont; color: white; text-shadow: 5px 5px #000;">La cybersécurité au quotidien</h2>
        <div class="container p-3 my-3 bg-white border border rounded w-75">
          <?= 
          $score = $_POST["score"];
          ?>
          <div class="d-grid gap-2 mx-auto" style="margin: 2%;">
            <button style="margin: 2%;" onclick='window.location.href="index.php"' type="button" class="btn btn-outline-primary">Retourner à l'écran d'accueil</button>
          </div>
          <div id="questionsreponses">
            <?php
              $numquestion = 0;

              $questions = $_POST["questions"];
              $answers = $_POST["answers"];
              $answer = $_POST["answer"];

              foreach ($questions as $question) {
                echo "<ul><li><h1>Question".$numquestion.": ".$question."</h1></li>";
                $numanswer = 0;
                foreach ($answers as $answer) {
                  echo "<li><h2>Réponse ".$numanswer.": ".$question."</h2></li>";
                  $numanswer++;
                }
                echo "<li><h2>Réponse donnée: ".$answer."</h2></li>"
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<!-- Ajout des librairies JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</html>