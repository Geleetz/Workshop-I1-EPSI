var quiz = [];
quiz[0] = new Question(
  "Vous trouvez une clé USB, que faites-vous avec ?",
  "Je la laisse ou je l'ai trouvé",
  "Je la ramène aux objets perdus",
  "Je regarde son contenu"
);
quiz[1] = new Question(
  "Vous voulez prendre votre pause café ...",
  "Vous mettez en veille votre poste puis vous prenez votre pause",
  "Vous demandez à un collègue de vous ramener un café",
  "Vous partez prendre votre pause"
);
quiz[2] = new Question(
  "Vous recevez un mail de votre patron demandant de lui verser x euros à travers un lien internet",
  "J'appelle mon patron pour demander confirmation",
  "J'ignore le mail",
  "Vous cliquez sur le lien et lui versez x euros"
);
var randomQuestion;
var answers = [];
var currentScore = 0;

document.addEventListener("DOMContentLoaded", function (event) {
  btnProvideQuestion();
});

function Question(
  question,
  rightAnswer,
  wrongAnswer1,
  wrongAnswer2,
  alreadyAsked
) {
  this.question = question;
  this.rightAnswer = rightAnswer;
  this.wrongAnswer1 = wrongAnswer1;
  this.wrongAnswer2 = wrongAnswer2;
  this.alreadyAsked = false;
}

function shuffle(o) {
  for (
    var j, x, i = o.length;
    i;
    j = parseInt(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x
  );
  return o;
}

function isGameFinished() {
  var cpt = 0;
  quiz.forEach((Question) => {
    if (Question.alreadyAsked == true) {
      cpt += 1;
    }
  });
  if (cpt == quiz.length) {
    return true;
  }
  return false;
}

function gameReset() {
  quiz.forEach((Question) => {
    Question.alreadyAsked = false;
  });
  currentScore = 0;
}

function btnProvideQuestion() {
  if(isGameFinished()){
    gameReset();
    //$.post("endgame.php",{ score: currentScore});
    window.location.href="endgame.php";
  }

  var randomNumber = Math.floor(Math.random() * quiz.length);
  randomQuestion = quiz[randomNumber];
  while (randomQuestion.alreadyAsked == true) {
    randomNumber = Math.floor(Math.random() * quiz.length);
    randomQuestion = quiz[randomNumber];
  }
  answers = [
    randomQuestion.rightAnswer,
    randomQuestion.wrongAnswer1,
    randomQuestion.wrongAnswer2,
  ];
  switch(randomNumber){
    case 0:
      showButton("cleUSB");
      hideButton("coffee");
      break;
    case 1:
      showButton("coffee");
      hideButton("cleUSB");
      break;
    default:
      hideButton("coffee");
      hideButton("cleUSB");
      break;
  }
  shuffle(answers);

  document.getElementById("current-mission").innerHTML = randomQuestion.question;
  document.getElementById("first-answer").innerHTML = answers[0];
  document.getElementById("second-answer").innerHTML = answers[1];
  document.getElementById("third-answer").innerHTML = answers[2];

  document.getElementById("question").innerHTML = randomQuestion.question;
  document.getElementById("answerA").value = answers[0];
  document.getElementById("answerA").innerHTML = answers[0];
  document.getElementById("answerB").value = answers[1];
  document.getElementById("answerB").innerHTML = answers[1];
  document.getElementById("answerC").value = answers[2];
  document.getElementById("answerC").innerHTML = answers[2];

  quiz[randomNumber].alreadyAsked = true;
}

function answerA_clicked() {
  var answerA = document.getElementById("answerA").value;
  checkAnswer(answerA);
}
function answerB_clicked() {
  var answerB = document.getElementById("answerB").value;
  checkAnswer(answerB);
}
function answerC_clicked() {
  var answerC = document.getElementById("answerC").value;
  checkAnswer(answerC);
}

function adjustScore(value) {
  currentScore+=value;
  document.getElementById("score").innerHTML = currentScore;
}

function checkAnswer(answer) {
  if (answer == randomQuestion.rightAnswer) {
    adjustScore(1);
    btnProvideQuestion();
  } else if (answer == randomQuestion.wrongAnswer1){
    adjustScore(0);
    btnProvideQuestion();
  } else {
    adjustScore(-1);
    btnProvideQuestion();
  }
}

function hideWindow(divToHide){
  document.getElementById(divToHide).style.display="none";
}

function showWindow(divToShow){
  var element=document.getElementById(divToShow);
  if (element.style.display != "block"){
    element.style.display="block";
  }else{
    element.style.display="none";
  }
}

function hideButton(buttonToHide){
  document.getElementById(buttonToHide).style.visibility = 'hidden';
}

function showButton(buttonToShow){
  document.getElementById(buttonToShow).style.visibility = 'visible';
}

function sleep(onOrOff){
  if(onOrOff=="on"){
    document.getElementById("sleepscreen-button").style.visibility='visible';
  }else if(onOrOff=="off"){
    document.getElementById("sleepscreen-button").style.visibility='hidden';
  }
}