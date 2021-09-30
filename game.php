<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Ajout des librairies CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link href="css/game.css" rel="stylesheet">
  <title>Workshop - Jeu</title>
</head>

<body>
  <div id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
    <div class="accordion" id="accordionMissions">
      <div class="accordion-item">
        <h2 class="accordion-header" id="firstMission" style="font-family: pixelfont;">
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
  <button class="ignorer" onclick="answerB_clicked()" style="font-family: pixelfont;">Ignorer</button>
  <div class='pc'>
    <button id="cleUSB" class='cleUSB' hidden onclick="answerC_clicked()"></button>
    <button id="portable" class='portable' hidden onclick="answerA_clicked()"></button>
    <button id="coffee" class='coffee' hidden onclick="answerC_clicked()"></button>
    <!--hidden="hidden"-->
    <div class='ecran'>
      <button id="sleepscreen-button" class="ecranveille" hidden onclick="sleep('off')">
        <h1 class="text-light" style="font-family: pixelfont;" style="font-family: pixelfont;">Revenir sur le PC</h1>
      </button>
      <div id='outlook-window' class="outlook" hidden>
        <div class="maillist">
          <button class="mails newmail" onclick="patronMail()" style="font-family: pixelfont;">Patron Officiel
            <!--<label class="expediteurPatron">patron@mail.fr</label>-->
          </button>
          <button class="mails opennedmail" onclick="sylvieMail()" style="font-family: pixelfont;">Sylvie Compta
            <!--<label class="expediteurSylvie">sylvie@mail.fr</label>-->
          </button>
          <button class="mails opennedmail"></button>
          <button class="mails opennedmail"></button>
          <button class="mails opennedmail"></button>
          <button class="mails opennedmail"></button>
        </div>
        <button class="fishing"></button>
        <label class="expediteur" style="font-family: pixelfont; margin-top: 1%;">Expéditeur :
          <label id="expediteurValue"></label>
        </label>
        <label class="objet" style="font-family: pixelfont; margin-top: 1%;">Objet :
          <label id="objetValue"></label>
        </label>
        <label class="contenue" id="contenue" style="font-family: pixelfont; margin-top: 1%;">
        </label>
        <button id="lien" style="font-family: pixelfont;" onclick="if(document.getElementById('current-mission').value==quiz[2].question){answerC_clicked();}"></button>

        <button class="exitbutton" onclick="hideWindow('outlook-window')"></button>
        <h2 id="mailcontent" class="mailcontent"></h2>
      </div>
      <div id="chrome-window" class="chrome" hidden>
        <button class="chromeexit" onclick="hideWindow('chrome-window')"></button>
        <label class="url">https://www.amazoun.fr</label>
        <div class="amazoun">
          <button class="crayon" onclick="showWindow('amazoun-achat')"></button>
        </div>
        <div id="amazoun-achat" class="amazounachat" hidden>
          <button class="achat" onclick="if(document.getElementById('current-mission').value==quiz[3].question){answerA_clicked();}"></button>
        </div>
      </div>
      <button class='veille' onclick="sleep('on'); if(document.getElementById('current-mission').value==quiz[1].question){answerA_clicked();}"></button>
      <button class='mail' onclick="showWindow('outlook-window')"></button>
      <button class='chromeicon' onclick="showWindow('chrome-window')"></button>
      <div class='horloge'></div>
    </div>
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
  </div>
</body>
<!-- Ajout des librairies JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/functions.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" crossorigin="anonymous"></script>

</html>