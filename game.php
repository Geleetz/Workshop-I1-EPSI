<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Ajout des librairies CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link href="css/game.css" rel="stylesheet">
  <title>Workshop - Jeu</title>

</head>

<body>
  <div id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
    <div class="accordion" id="accordionMissions">
      <div class="accordion-item">
        <h2 class="accordion-header" id="firstMission">
          <button id="current-mission" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionMissions">
          <div class="accordion-body responsivepadding">
            <ul>
              <li id="first-answer"></li>
              <li id="second-answer"></li>
              <li id="third-answer"></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class='pc'>
    <div class='ecran'>
      <div class="outlook">
        <div class="maillist">
          <button class="mails newmail"></button>
          <button class="mails opennedmail"></button>
          <button class="mails opennedmail"></button>
          <button class="mails opennedmail"></button>
          <button class="mails opennedmail"></button>
          <button class="mails opennedmail"></button>
        </div>
        <button class="fishing"></button>
        <button class="exitbutton"></button>
        <h2 id="mailcontent" class="mailcontent"></h2>
      </div>
      <button class='veille'></button>
      <button class='mail'></button>
      <button class='chrome'></button>
    </div>
  </div>
</body>
<!-- Ajout des librairies JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/functions.js"></script>
<div class="flex">
  <div class="field">Question</div>
  <div id="question" class="field"></div>
</div>
<div class="flex">
  <button id="answerA" onclick="answerA_clicked()"></button>
</div>
<br>
<div class="flex">
  <button id="answerB" onclick="answerB_clicked()"></button>
</div>
<br>
<div class="flex">
  <button id="answerC" onclick="answerC_clicked()"></button>
</div>
<div class="flex">
  <div class="field">Score</div>
  <div id="score" class="field">0</div>
</div>

</html>