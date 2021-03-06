/* --------------- Query Selectors --------------- */

let quiz = document.querySelector("#quiz");
let intro = document.querySelector("#introduction");
let assesFT = document.querySelector("#assess-ft");
let progressBar = document.querySelector(".progress");
let startBtn = document.querySelector("#startBtn");
let timeSpan = document.querySelector("#timeSpan");
let questionH5 = document.querySelector("#question");
let answersDiv = document.querySelector("#answers");
let allDone = document.querySelector("#allDone");
let finalScore = document.querySelector("#finalScore");
let audioCorrect = document.querySelector("#audioCorrect");
let audioIncorrect = document.querySelector("#audioIncorrect");
let audioApplause = document.querySelector("#audioApplause");
let audioTollingBell = document.querySelector("#audioTollingBell");
let audioThunder = document.querySelector("#audioThunder");
let submit = document.querySelector("#submit");
let highScoresList = document.querySelector("#highScoresList");
let initials = document.querySelector("#initials");
let clearHighscoresBtn = document.querySelector("#clearHighscoresBtn");
let image_area = document.querySelector("#image_area");




/* ------- Global Variable Declarations ------- */

let totalSeconds = 120;
let timeRemining = totalSeconds;
let secondsElapsed = 0;
let discountSeconds = 0;
let currentQuestion = 0;
let progress = 0;
let correctAnswers = 0;
let correctScore = 0;
var localHighscoresArray = [];
let time = setInterval(timer, 1000);
let justRegistered = false;
clearInterval(time);
let bandera = false;

/* --------------- Quiz Array --------------- */

// Questions based on: laffgaff "DISNEY TRIVIA QUESTIONS AND ANSWERS": https://laffgaff.com/disney-trivia-questions-answers/

let quizArray = [
  {
    question:
      "1. Java es un lenguaje de propósito:_____",
    options: ["General", "Privado", "Indeterminado", "Maléfico", "Ninguno"],
    correct: 0,
    image: "./assets/imagenes/java/1java.png",
  },
  {
    question: "2. ¿En qué sistemas operativos es soportado Java?",
    options: [
      "Todas son correctas",
      "MacOS",
      "Unix",
      "Windows"
          ],
    correct: 0,
    image: "./assets/imagenes/java/2java.jpg",
  },
  {
    question:
      "3. ¿Qué es Java?",
    options: [
      "Lenguaje de Programación",
      "Lengua muy desconocida",
      "Soporte multifuncional",
      "Plataforma sin igual"
    ],
    correct: 0,
    image: "./assets/imagenes/java/3java.png",
  },
    {
    question: "4. ¿En cualquier Sistema Operativo se debe instalar?",
    options: [
      "Java Development kit JDK",
      "VMWare 15.0 o superior",
      "Librerias Java",
      "Eclipse",
      "Netbeans"
    ],
    correct: 0,
    image: "./assets/imagenes/java/4java.png",
  },
  {
    question:
      "5. ¿Qué es Intellij IDEA?",
    options: [
      "Integrated Development Environment IDE",
      "Ideas Inteligentes para Software",
      "Software gestor de redes",
      "Agente Inteligente",
    ],
    correct: 0,
    image: "./assets/imagenes/java/5java.png",
  },
  {
    question:
      "6. Todas los programas en Java deben ser tener un método:",
    options: [
      "Main",
      "Responsable",
      "Recursivo",
      "Getter and Setter",
    ],
    correct: 0,
    image: "./assets/imagenes/java/6java.jpg",
  },
  {
    question: "7. ¿Cuál es la estructura de una variable?",
    options: ["[privacidad] tipo_variable identificador", 
              "[public] tipo_variable identificador", 
              "[private] tipo_variable identificador", 
              "[static] tipo_variable identificador"],
    correct: 0,
    image: "./assets/imagenes/java/7java.png",
  },
  {
    question: "8. Una de las formas de leer datos por consola es:",
    options: ["System.console().readLine()", 
              "System.console().write()", 
              "System.console().printf()", 
              "System.console().toString()"],
    correct: 0,
    image: "./assets/imagenes/java/8java.png",
  },
  {
    question:
      "9. Algunos ciclos de repeteción en java son:",
    options: ["Todas son correctas", "For","Do While","While"],
    correct: 0,
    image: "./assets/imagenes/java/9java.png",
  },
  {
    question:
      "10. De las siguientes ¿Cuál es una sentencia condicional?",
    options: ["If", "for", "String", "Do While", "main"],
    correct: 0,
    image: "./assets/imagenes/java/10java.png",
  },
  {
    question: "11. Complete: Java es un lenguaje de programación orientado a _______",
    options: ["Objetos", "Módulos", "Estructuras no dinámicas","Bases de Datos"],
    correct: 0,
    image: "./assets/imagenes/java/informatica1.gif",
  },

 
];


/* ------------- Event Management ------------- */

startBtn.addEventListener("click", startQuiz);
answersDiv.addEventListener("click", assesSelection);
submit.addEventListener("click", addToHighscores);
clearHighscoresBtn.addEventListener("click", clearHighscores);
$("#staticBackdrop").on("shown.bs.modal", function (e) {
  loadHighScores();
});
$("#staticBackdrop").on("hidden.bs.modal", function (e) {
  if (justRegistered) {
    init();
  }
});

init();

/* ------------- Functions Declaration ------------- */

function init() {

  timeSpan.textContent = timeRemining;
  quiz.style.display = "none";
  allDone.style.display = "none";
  assesFT.style.display = "none";
  intro.style.display = "block";
  startBtn.style.display = "block";
  progressBar.style.display = "none";

  totalSeconds = 150;
  timeRemining = totalSeconds;
  secondsElapsed = 0;
  discountSeconds = 0;
  currentQuestion = 0;
  progress = 0;
  correctAnswers = 0;
  correctScore = 0;
  justRegistered = false;
  timeSpan.textContent = timeRemining;

  if(bandera){ 
    //alert("Bandera");
    document.getElementById("startBtn").disabled = true;}

  if (localStorage.getItem("highscore")) {
    localHighscoresArray = localStorage.getItem("highscore").split(",");
  }
  clearInterval(time);
  updateProgress();

  allDone.firstElementChild.setAttribute("class", "alert alert-info mt-0 mb-0");
  submit.setAttribute("class", "btn btn-info");
  
  volverRendirPrueba.setAttribute("class", "btn btn-info");

  progressBar.firstElementChild.setAttribute(
    "class",
    "progress-bar bg-info progress-bar-striped progress-bar-animated"
  );

}

function startQuiz() {
  intro.style.display = "none";
  startBtn.style.display = "none";
  quiz.style.display = "block";
  time = setInterval(timer, 1000);
  progressBar.style.display = "block";
  showQuestion();
}

function timer() {
  timeRemining = totalSeconds - secondsElapsed - 1 - discountSeconds;
  timeSpan.textContent = timeRemining;
  secondsElapsed++;
  if (timeRemining <= 0) {
    clearInterval(time);
    disableQuestions();
    gameOver("time_out");
  }
}

function showQuestion() {
  questionH5.textContent = quizArray[currentQuestion].question;
  var optionsBtnsArray = [];
  var indexArray = [];
  var image = document.createElement("img");
  image.setAttribute("src", quizArray[currentQuestion].image);
  image.setAttribute("class", "movie-image rounded");
  image_area.append(image);

  for (i = 0; i < quizArray[currentQuestion].options.length; i++) {
    var questionBtn = document.createElement("button");
    questionBtn.setAttribute("type", "button");
    questionBtn.setAttribute(
      "class",
      "list-group-item list-group-item-action list-group-item-info mt-1 answerButton"
    );
    questionBtn.setAttribute("data-index", i);
    if (i === 0) {
      questionBtn.setAttribute("correct", "yes");
    } else {
      questionBtn.setAttribute("correct", "no");
    }
    questionBtn.textContent = quizArray[currentQuestion].options[i];
    answersDiv.append(questionBtn);
    indexArray.push(i);

  }

  
  answersDiv.childNodes.forEach(function (child) {
    var rndIndex = Math.floor(Math.random() * indexArray.length);
    answersDiv.append(answersDiv.children[rndIndex]);
    indexArray.splice(rndIndex, 1);
  });

  /*mostrar resp correcta*/
/*  var newLabel = document.createElement('label');

newLabel.className += "col-md-3 control-label";
newLabel.innerHTML ="Test";
//agregando el label
var contenedor = document.getElementById('contenedor');
contenedor.appendChild(newLabel);
*/

}

function disableQuestions() {
  let questionsAssed = document.querySelectorAll(".answerButton");
  questionsAssed.forEach((element) => {
    element.setAttribute(
      "class",
      "list-group-item list-group-item-action list-group-item-danger mt-1 answerButton disabled"
    );
    if (
      parseInt(element.getAttribute("data-index")) ===
      quizArray[currentQuestion].correct
    ) {
      element.setAttribute(
        "class",
        "list-group-item list-group-item-action list-group-item-success mt-1 answerButton disabled"
      );
    }
  });
}

function disableEnviar(){
  document.getElementById("submit").disabled = true;
}
function assesSelection(event) {
  if (event.target.matches("button")) {
    var index = parseInt(event.target.getAttribute("data-index"));
    var timeInterval = 1000;
    disableQuestions();
    if (event.target.getAttribute("correct") === "yes") {
      displayFTAlert(true);
      correctAnswers++;
      
      
    } else {
      discountSeconds += 3;
      clearInterval(time);
      time = setInterval(timer, 1000);
      displayFTAlert(false);
    }
   
    currentQuestion++;
    updateProgress();

    if (currentQuestion === quizArray.length) {
      timeInterval = 5000;
      gameOver("questions_done");
    } else {
      setTimeout(removeQuestionsButtons, 1000);
      setTimeout(showQuestion, 1001);
    }

    setTimeout(function () {
      assesFT.style.display = "none";
    }, timeInterval);
  }
}
/*EDUARDO AQUI ESTA EL CODIGO DE LA BARRA DE PROGRESO*/
function updateProgress() {
  progress = Math.floor((currentQuestion / quizArray.length) * 100);
  var styleStr = String("width: " + progress + "%; height: 100%;");
  progressBar.firstElementChild.setAttribute("style", styleStr);
  progressBar.firstElementChild.textContent = progress + " %";
  correctScore = Math.floor((correctAnswers / quizArray.length) * 100);
}

function displayFTAlert(correct) {
  if (correct) {
   /* audioCorrect.play();*/
  //document.getElementById("Respuesta").innerHTML = "Correcta";  
    assesFT.setAttribute(
      "class",
      "alert alert-success mt-0 mb-0 pt-0 pb-0 text-center"
    );
    assesFT.innerHTML = "<strong>Correcto</strong>";
    assesFT.style.display = "block";
    
  } else {
    /*audioIncorrect.play();*/
    //document.getElementById("Respuesta").innerHTML = "Incorrecta";

    assesFT.setAttribute(
      "class",
      "alert alert-danger mt-0 mb-0 pt-0 pb-0 text-center"
    );
    assesFT.innerHTML =
      "<strong>Incorrecto: </strong> 3 seg descontados";
    assesFT.style.display = "block";
    timeSpan.style.color = "red";
    setTimeout(function () {
      timeSpan.style.color = "black";
    }, 1000);
  }
}

function removeQuestionsButtons() {
  questionH5.textContent = "";
 // document.getElementById("Respuesta").innerHTML = ""; 
  var child = answersDiv.lastElementChild;
  while (child) {
    answersDiv.removeChild(child);
    child = answersDiv.lastElementChild;
  }
  while (image_area.hasChildNodes()) {
    image_area.removeChild(image_area.childNodes[0]);
  }
}

function gameOver(cause) {
  /*
  if(correctScore < 51 ){
    disableEnviar();
  }*/
  if (cause === "questions_done") {
    console.log("QUESTIONS DONE");
    setTimeout(() => {
      assesFT.setAttribute(
        "class",
        "alert alert-dark mt-0 mb-0 pt-0 pb-0 text-center"
      );
      assesFT.innerHTML = "<strong>Cuestionario completado</strong>";
    }, 1500);
    clearInterval(time);
  } else if (cause === "time_out") {
    console.log("TIME OUT");
    disableQuestions();
    /*audioTollingBell.play(); */
    disableEnviar();
    setTimeout(() => {
     /* audioTollingBell.pause();*/
    }, 4000);
    assesFT.setAttribute(
      "class",
      "alert alert-info mt-0 mb-0 pt-0 pb-0 text-center"
    );
    assesFT.innerHTML = "<strong>Tiempo Finalizado</strong>";
  } else {
    return false;
  }
  assesFT.style.display = "block";
  if (correctScore >= 70) {
    setTimeout(() => {
      /*audioApplause.play();*/
    }, 5000);
  } else {
    setTimeout(() => {
      /*audioThunder.play(); */
      allDone.firstElementChild.setAttribute(
        "class",
        "alert alert-danger mt-0 mb-0"
      );
      progressBar.firstElementChild.setAttribute(
        "class",
        "progress-bar bg-danger progress-bar-striped progress-bar-animated"
      );
      submit.setAttribute("class", "btn btn-danger");
      volverRendirPrueba.setAttribute("class", "btn btn-danger");
    }, 5000);
  }
  setTimeout(function () {
    finalScore.textContent = correctScore;
    quiz.style.display = "none";
    allDone.style.display = "block";
    assesFT.style.display = "none";
    removeQuestionsButtons();
  }, 5000);

}

/* GILMAR AQUI ESTA GUARDADO EL VALOR DEL TEST */
/* correctScore es una variable golobal que tiene el valor del test */
/* GILMAR AQUI ESTA GUARDADO EL VALOR DEL TEST */
/*Cuando presiona el boton enviar llama a la funcion addToHighscores()*/

function addToHighscores() {
  
 /* alert(correctScore);*/
  //window.alert("Su puntuación es :"+correctScore);
  window.location = './php/registrarNotajava.php?nota='+correctScore;
 
  //if(correctScore >= 5 ){ //document.getElementById("startBtn").aria-pressed ="false" ;
  //alert(startBtn);
  //startBtn.disable.setAttribute(false);
  // }
 // bandera = true; 
  //init();
 // window.location.href = 'pantalla1TestJava.html';

  /*
  var highScoreElement = document.createElement("li");
  var highscoreStr = initials.value + " - " + correctScore;
  localHighscoresArray.push(highscoreStr);
  var highscoreArrayStr = localHighscoresArray.toString();
  highScoreElement.textContent = highscoreStr;
  highScoresList.append(highScoreElement);
  localStorage.setItem("highscore", localHighscoresArray);
  justRegistered = true;
  initials.value = "";
  */

  // Modal
 /* $("#staticBackdrop").modal("show");*/

}

function loadHighScores() {
 /*
  var tempHighscoresArray = [];
  var tempHighscoresObject = {};
  var tempHighscoresObjectsArray = [];
  var tempLocalSCoreArray = [];
  while (highScoresList.hasChildNodes()) {
    highScoresList.removeChild(highScoresList.childNodes[0]);
  }
  var lastPos;
  var lastChar = "";
  var localScore = 0;
  var localStrScore = "";
  var tempHighscore = "";
  for (i = 0; i < localHighscoresArray.length; i++) {
    for (j = localHighscoresArray[i].length - 1; j >= 0; j--) {
      lastPos = localHighscoresArray[i].length - 1;
      lastChar = localHighscoresArray[i][lastPos - j];
      if (lastChar && lastChar >= 0 && lastChar <= 9) {
        localScore += lastChar;
      }
      if (j > 1) {
        if (j === 2 && lastChar === "1") {
        }
        localStrScore += lastChar;
      }

      localScore = parseInt(localScore);
    }

    tempHighscore = localScore + localStrScore;
    tempHighscoresArray.push(tempHighscore);
    tempHighscoresObject.score = localScore;
    tempHighscoresObject.scoreStr = localStrScore;

    tempHighscoresObjectsArray.push(tempHighscoresObject);
    tempLocalSCoreArray.push(localScore);
    localScore = 0;
    localStrScore = "";
    tempHighscoresObject = {};
  }
  tempLocalSCoreArray.sort(function (a, b) {
    return b - a;
  });
  var sortedScoresCompleteArray = [];
  var flagged = [];
  tempLocalSCoreArray.forEach(function (element) {
    tempHighscoresObjectsArray.forEach(function (object, index) {
      if (element === object.score && !flagged.includes(index)) {
        flagged.push(index);

        var tempScoreString = object.scoreStr + " " + object.score;
        sortedScoresCompleteArray.push(tempScoreString);
      }
    });
  });
  for (i = 0; i < sortedScoresCompleteArray.length; i++) {
    var highScoreElement = document.createElement("li");
    highScoreElement.textContent = sortedScoresCompleteArray[i];
    for (j = sortedScoresCompleteArray[i].length - 1; j >= 0; j--) {
      lastPos = sortedScoresCompleteArray[i].length - 1;
      lastChar = sortedScoresCompleteArray[i][lastPos - j];
      if (lastChar && lastChar >= 0 && lastChar <= 9) {
        localScore += lastChar;
      }
      if (j > 1) {
        localStrScore += lastChar;
      }

      localScore = parseInt(localScore);
    }

    tempHighscore = localScore + localStrScore;

    if (localScore > 80 && localScore <= 100) {
      highScoreElement.setAttribute(
        "class",
        "list-group-item list-group-item-success"
      );
    } else if (localScore > 70 && localScore <= 80) {
      highScoreElement.setAttribute(
        "class",
        "list-group-item list-group-item-info"
      );
    } else if (localScore > 60 && localScore <= 70) {
      highScoreElement.setAttribute(
        "class",
        "list-group-item list-group-item-primary"
      );
    } else if (localScore > 50 && localScore <= 60) {
      highScoreElement.setAttribute(
        "class",
        "list-group-item list-group-item-warning"
      );
    } else if (localScore <= 50) {
      highScoreElement.setAttribute(
        "class",
        "list-group-item list-group-item-danger"
      );
    }

    highScoresList.append(highScoreElement);
    tempHighscoresArray.push(tempHighscore);
    tempHighscoresObject.score = localScore;
    tempHighscoresObject.scoreStr = localStrScore;
    tempHighscoresObjectsArray.push(tempHighscoresObject);
    tempLocalSCoreArray.push(localScore);
    localScore = 0;
    localStrScore = "";
    tempHighscoresObject = {};
  }
*/
}

function clearHighscores() {
  /*
  localHighscoresArray = [];
  localStorage.setItem("highscore", localHighscoresArray);
  loadHighScores(); */
}
