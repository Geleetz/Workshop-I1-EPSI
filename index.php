<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Ajout des librairies CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="css/fonts.css" rel="stylesheet">
    <title>Workshop - Accueil</title>
  </head>
  <body>
    <div class="container w-50 h-100" style="color: white;">
      <div class="col align-middle pt-5">
        <div class="row align-middle text-center">
          <h2 class="text-center my-5" style="font-family: pixelfont; text-shadow: 5px 5px #000;">La cybersécurité au quotidien</h2>
            <div class="container p-3 my-3 bg-white border rounded w-50">
            <div class="d-grid gap-2 mx-auto" style="margin: 2%;">
                <button style="margin: 2%; padding-top: 4%;" onclick='window.location.href="game.php"' type="button" class="btn btn-outline-primary">Lancer la partie</button>
                <button style="margin: 2%; padding-top: 4%;" type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#rulesmodal">Lire les règles</button>
                <button style="margin: 2%; padding-top: 4%;" type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#informationsmodal">A propos</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal pour l'onglet "Lire les règles" -->
      <div class="modal fade" id="rulesmodal" tabindex="-1" aria-labelledby="rulesmodal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
              <p style="margin-top: 2%; font-family: pixelfont;">
                Quel est le but du jeu ? 
                <hr>
              </p>
                <p style="margin-top: 2%;">
                Le but de notre jeu est de donner de bonnes pratiques de cyber-sécurité aux utilisateurs. C'est un enjeu actuel, de plus en plus de personnes disposent d'un ordinateur mais peu savent se protéger des potentielles menaces. Notre objectif est de vous montrer à travers d'un jeu comment bien s'y prendre.  
                </p>
                <br>
                <p style="margin-top: 2%; font-family: pixelfont;">
                Qui peut y jouer ? 
                <hr>
                </p>
                Le jeu est ouvert à un public très large pour que ce soit d'un côté "éducatif" et d'un autre agréable à jouer pour l'utilisateur.
              </p>
            </div>
            <div class="modal-footer">
              <button style="padding-top : 4%;" type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal pour l'onglet "A propos" -->
      <div class="modal fade" id="informationsmodal" tabindex="0" aria-labelledby="informationsmodal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-body">
              <p style="margin-top: 2%; font-family: pixelfont;">
                Qui êtes-vous ? 
                <hr>
                </p>
                <p style="margin-top: 2%;">
                Vous êtes un employé d'une entreprise d'informatique, vous serez plongé dans une de vos journées quotidiennes durant laquelle vous allez être confronté à
                différentes situations plus ou moins délicates. Celles-ci mettent en scène des aspects de la cybersécurité que vous rencontrerez lors de vos aventures dans l'entreprise. 
                
                </p>
                <br>
                <p style="margin-top: 2%; font-family: pixelfont;">
                Quel est votre objectif ? 
                <hr>
                </p>
                <p style="margin-top: 2%;">
                Votre but, répondre aux missions qui vous sont demandées tout en respectant les règles et le temps limitée de la journée pour
                la sécurité du numérique. 
                
                </p>
                <br>
                <p style="margin-top: 2%; font-family: pixelfont;">
                Ou peut-on y jouer ?
                <hr>
                </p>
                <p style="margin-top: 2%;">
                Le jeu est disponible sur tous les navigateurs et uniquement sur navigateur.
              </p>
            </div>
            <div class="modal-footer">
              <button style="padding-top : 4%;" type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <!-- Ajout des librairies JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</html>
