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
          if ($score <= 0) {
            echo "<p style='margin-top: 2%; font-family: pixelfont;'>Vous avez peu d'expériences en sécurité, mais vous ne pouvez que vous améliorer !</p>
            <br><p style='margin-top: 2%; font-family: pixelfont;'>Votre score est :". $score ."</p><br>
            <p style='margin-top: 2%; font-family: pixelfont;'>Selon vos réponses, on peut voir que vous possédez des lacunes et il faudra faire attention à vous pour ne pas vous faire pièger. Voici quelques liens qui vous serons utiles pour poursuivre des formations ou avoir des conseilles ou règles concernant la cybersécurité :
            <br><br>https://pix.fr<br>https://www.cnil.fr/professionnel<br>https://www.ssi.gouv.fr</p>";
          } elseif ($score == 1) {
            echo "<p style='margin-top: 2%; font-family: pixelfont;'>Vous avez encore quelques lacunes mais vous êtes sur la bonne voie !</p>
            <br><p style='margin-top: 2%; font-family: pixelfont;'>Votre score est :". $score ."</p><br>
            <p style='margin-top: 2%; font-family: pixelfont;'>A partir de vos réponses, on peut en déduire que vous avez encore quelques lacunes. Vous êtes sur la bonne voie alors poursuivez vos efforts ! Voici quelques liens qui vous serons utiles pour poursuivre des formations ou avoir des conseilles ou règles concernant la cybersécurité :
            <br><br>https://pix.fr<br>https://www.cnil.fr/professionnel<br>https://www.ssi.gouv.fr</p>";
          } elseif ($score >= 2) {
            echo "<p style='margin-top: 2%; font-family: pixelfont;'>Félicitations ! Vous êtes un expert en cybersécurité !</p>
            <br><p style='margin-top: 2%; font-family: pixelfont;'>Votre score est :". $score ."</p><br>
            <p style='margin-top: 2%; font-family: pixelfont;'>On voit très vite que vous entrenez très bien votre poste de travail, continuez comme ça ! Cependant, si vous voulez approndir vos connaissances, vous pouvez consulter les liens suivants :
            <br><br>https://pix.fr<br>https://www.cnil.fr/professionnel<br>https://www.ssi.gouv.fr</p>";
          }
          ?>
          <div class="d-grid gap-2 mx-auto" style="margin: 2%;">
            <button style="margin: 2%;" onclick='window.location.href="index.php"' type="button" class="btn btn-outline-primary">Retourner à l'écran d'accueil</button>
          </div>
          <div id="questionsreponses">
            <?php
              echo print_r($_POST);
              $nbquestion = $_POST["nbQuestions"];
              for ($i=0; $i < $nbquestion; $i++) { 
                echo "<ul><li><h1>Question ".$i.": ".$_POST["question".$i]."</h1></li>";
                echo "<li><h2>Bonne réponse ".$i.": ".$_POST["rightanswer".$i]."</h2></li>";
                echo "<li><h2>Réponse neutre ".$i.": ".$_POST["neutralanswer".$i]."</h2></li>";
                echo "<li><h2>Mauvaise réponse ".$i.": ".$_POST["wronganswer".$i]."</h2></li>";
                echo "<li><h2>Réponse donnée ".$i.": ".$_POST["answer".$i]."</h2></li>";
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