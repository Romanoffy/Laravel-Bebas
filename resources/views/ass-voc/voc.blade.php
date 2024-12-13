<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Latihan Soal</title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/x-icon" href="../sejarah.jpg">
  <style>
    *{
  box-sizing:border-box;
  margin:0;
  padding:0;
}
body{
  font-family: 'Poppins', sans-serif;
  display:flex;
  height:100vh;
  width:100%;
  padding:10px;
  justify-content: center;
  align-items: center;
  background:linear-gradient(45deg,#4A52AF,#10133D,#04061D);
}
.start-btn{
  width:100%;
  text-align:center;
  transform:scale(1);
  overflow:hidden;
  
}
.start-btn button{
  padding:10px 20px;
  border:none;
  background:lightgray;
  border-radius:6px;
  color:black;
  font-size:18px;
  font-weight:700;
  width:30%;
  box-shadow: 0px 2px 10px #2F2F2F;
  
}
.start-btn button:active{
  transform:scale(0.9);
}
.wrapper{
  width:0;
  background:#fff;
  transform: scale(0);
  overflow: hidden;
  border-radius:5px;
}
.instruction{
  transform:scale(0);
  width:0;
  overflow:hidden;
  background:#fff;
  border-radius:8px;
  opacity:0;
}
.instruction header{
  padding:15px 12px;
  border-bottom:1px solid #9D9D9E;
}
.instruction header p{
  font-size:16px;
  font-weight:600;
  color:#414141;
}
.rules{
  display: flex;
  flex-direction: column;
  gap:5px;
  padding:10px 12px;
}
.rules p{
  font-size:13px;
  font-weight:450;
  color:#6B6B6B;
}
.rules p span{
  color:#5B80FF;
}
.instruction-btn{
  padding:10px 12px;
  display:flex;
  justify-content: right;
  width:100%;
  border-top:1px solid #9A9A9B;
  gap:10px;
  
}
.instruction-btn button{
  padding:7px 10px;
  border:none;
  font-size:14px;
  font-weight:500;
  border-radius:4px;
  background:none;
}
.instruction-btn button:first-child{
  border:1px solid #5B80FF;
  color:#5B80FF;
}
.instruction-btn button:last-child{
  background:#5B80FF;
  color:#fff;
}
.wrapper header{
  padding:5px 12px;
  display:flex;
  width:100%;
  align-items: center;
  justify-content:space-between;
  border-bottom:1px solid #9B9B9B;
  
}
.wrapper header .Timer{
  display: flex;
  gap:6px;
  padding:5px;
  background:#E7E7E9;
  border-radius:3px;
  align-items: center;
  font-size:15px;
  font-weight: 500;
}
.Timer p:last-child{
  background:black;
  color:#fff;
  padding:3px;
  font-weight:800;
}
.timer-progress{
  width:100%;
  height:4px;
  background:#fff;
  margin-bottom: 5px;
  
}
.inner{
  width:0;
  height:4px;
  background:#6184FA;
  transition: 0.7s all ease;
}
.question-container{
  padding:10px 12px;
  font-size:16px;
  font-weight:800;
  width:100%;
}
.option-container{
  padding:10px 12px;
  width:100%;
  display: flex;
  flex-direction: column;
  gap:8px;
  cursor: pointer;
}
.option-container option{
  padding:0 10px;
  font-size:15.5px;
  font-weight:450;
  width:100%;
  height:40px;
  border:1px solid #6184FA;
  background:#6184FA59;
  border-radius:4px;
  display:flex;
  align-items: center;
  font-size:14px;
  color:#606060;
}
.status{
  padding:8px 12px;
  display:flex;
  justify-content: space-between;
  align-items: center;
  border-top:1px solid #C5C5C5;
}
.status .question-num{
  display:flex;
  align-items: center;
  gap:4px;
  font-size:14px;
  font-weight:550;
}
.btn button{
  padding:8px 18px;
  background:#5F84FF;
  border:none;
  font-size:14px;
  color:#fff;
  font-weight:600;
  border-radius:4px;
  cursor: pointer;
}
.btn button:active{
  background:#3462FF;
}
.result-card{
  overflow:hidden;
  transform:scale(0);
  width:0%;
  display:flex;
  flex-direction: column;
  background: #fff;
  border-radius: 5px;
}
.image{
  padding:10px 12px;
  text-align: center;
}
.image img{
  width:100px;
}
.score{
  padding:10px 12px;
  display: grid;
  grid-template-columns: auto auto;
  font-weight: 500;
  gap:10px;
}
.score div{
  width:100%;
  text-align:center;
  border:1px solid blue;
  padding:20px 10px;
  font-size:13px;
  border-radius:5px;
}
.score .value{
  font-size:25px;
  font-weight:900;
}
.total-score{
 background:#6572FF57;
}
.total-score .value{
  color:#6572FF;
}
.attempted{
  background:#0E943F3D;
  border:1px solid #0E943F !important;
}
.attempted .value{
  color:#0E943F;
}
.wrong{
  background:#FF101047;
  border:1px solid #FF1010 !important;
}
.wrong .value{
  color:#FF1010;
}
.score span:first-child{
  color:#9754FF;
}
.score span:nth-child(3){
  color:#40B462;
}
.score span:last-child{
  color:#5060EC;
}
.user-score{
  width:100px;
  height:100px;
  margin:0 auto;
  background:#108FFF54;
  display:flex;
  justify-content:center;
  align-items:center;
  flex-direction: column;
  border-radius:50%;
  border:2px solid #108FFF;
}
.user-score .value{
  font-size:30px;
  font-weight:900;
  color:#108FFF;
}
.user-score p{
  font-size:13px;
  font-weight:700;
}
.score-btn{
  padding:10px 12px;
  display:flex;
  justify-content: right;
  width:100%;
  gap:10px;
  border-top: 1px solid #909090;
}

.result-card header{
  padding:10px 12px;
  border-bottom:1px solid #909090;
  font-weight:600;
}
.score-btn button{
  padding: 6px 12px;
  background: none;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
.score-btn button:first-child{
  border:1px solid #5E6CE7;
  color:#5E6CE7;
}
.score-btn button:last-child{
  background: #5E6CE7;
  color:#fff;
}

option:hover{
  background:#646FF0;
  color:#fff;
}

  </style>
</head>
<body>
  <header style="position: absolute; top: 0; left: 0; padding: 10px; margin-top: 15px; color:azure;">
    <h1>Latihan soal (VOC)</h1>
  </header>
  
  <div class="instruction">
    <header>
      <p>Peraturan Dari Latihan soal Ini</p>
    </header>
    <div class="rules">
      <p>1.Anda hanya memiliki waktu <span>15 detik </span>untuk menjawab setiap pertanyaan</p>
      <p>2.Setelah Anda memilih opsi apa pun maka jawaban akhir Anda akan dipertimbangkan</p>
      <p>3.Setelah Anda memilih opsi apa pun, hal itu tidak dapat dibatalkan</p>
      <p>4.Untuk setiap jawaban yang benar, Anda akan diberi poin
      </p>
      <p>5.Total score akan muncul di akhir</p>
    </div>
    <div class="instruction-btn">
      <button><a href="/assesment" style="text-decoration: none; color: inherit;">Kembali</a></button>
      <button style="cursor: pointer;">Start</button>
    </div>
  </div>
  
  <div class="wrapper">
    <header>
      <h4>Latihan Soal (VOC)</h4>
      <div class="Timer">
        <p>Waktu Tersisa</p>
        <p>15</p>
      </div>
    </header>
    <div class="timer-progress">
      <div class="inner"></div>
    </div>
    <div class="question-container">
      What does HTML stand for ?
    </div>
    <div class="option-container">
    </div>
    <div class="status">
      <p class="question-num">
        <span class="current-question">1</span>
        <span>of</span>
        <span class="total-question">8 </span>
        <span>Questions</span>
      </p>
      <div class="btn">
        <button>Next</button>
      </div>
    </div>
  </div>
  <div class="result-card">
    <header>
      <p>Hasil</p>
    </header>
    <div class="image">
      <div class="user-score">
        <p class="value">30</p>
        <p>Benar</p>
      </div>
    </div>
    <div class="score">
      <div class="total-score">
        <p class="value">50</p>
        <p>Total Pertanyaan</p>
      </div>
      <div class="attempted">
        <p class="value">27</p>
        <p>Terisi</p>
      </div>
      <div class="unattempted">
        <p class="value">23</p>
        <p>Tidak Terisi</p>
      </div>
      <div class="wrong">
        <p class="value">10</p>
        <p>Salah</p>
      </div>
    </div>
    <div class="score-btn">
      <button>Ulang Soal</button>
      <button><a href="/" style="text-decoration: none; color: inherit;">Menuju Beranda</a></button>
    </div>
  </div>
  <script>
    let startBtn = document.querySelector(".start-btn"),
instructionCard = document.querySelector(".instruction"),
instructionExit = document.querySelectorAll(".instruction button")[0],
startQuizBtn = document.querySelectorAll(".instruction button")[1],
wrapper = document.querySelector(".wrapper"),
nxtBtn = document.querySelector(".btn button"),
resultCard = document.querySelector(".result-card"),
time = document.querySelectorAll(".Timer p")[1],
progressBar = document.querySelector(".inner"),
questionEl = document.querySelector(".question-container"),
answerContainer = document.querySelector(".option-container"),
currentQuestionNum = document.querySelector(".current-question"),
totalQuestion = document.querySelector(".total-question"),
totalScore = document.querySelector(".total-score .value"),
yourScore = document.querySelector(".user-score .value"),
unattempted = document.querySelector(".unattempted .value"),
attempted = document.querySelector(".attempted .value"),
wrong = document.querySelector(".wrong .value"),
replayQuiz = document.querySelectorAll(".score-btn button")[0]

let currentQuestion = 0;
let userAnswers = [];
let timer,
  progressInterval,
  width = 1,
  score = 0,
  attemptQuestion = 0,
  unattemptedQuestion = 0,
  wrongQuestion = 0;





replayQuiz.addEventListener("click",()=>{
  resultCard.style.width = "0"
  resultCard.style.transform = "scale(0)"
  wrapper.style.transform = "scale(1)"
  wrapper.style.width = "100%"
  currentQuestion = 0
  score = 0,
    attemptQuestion = 0,
    unattemptedQuestion = 0,
    wrongQuestion = 0;
  startQuiz();
})
// exitQuiz.addEventListener("click",()=>{
//   resultCard.style.width = "0"
//   resultCard.style.transform = "scale(0)"
//   currentQuestion = 0
//   score = 0,
//     attemptQuestion = 0,
//     unattemptedQuestion = 0,
//     wrongQuestion = 0;
//     startBtn.style.transform = "scale(1)"
//     startBtn.style.width = "100%"
// })





// Hapus event listener untuk startBtn
// startBtn.addEventListener("click",()=>{
//   instructionCard.style.transform="scale(1)"
//   instructionCard.style.width="100%"
//   instructionCard.style.opacity="1"
//   startBtn.style.transform="scale(0)"
//   startBtn.style.width="0"
// })



startQuizBtn.addEventListener("click",()=>{
  
  wrapper.style.transform="scale(1)"
  wrapper.style.width="100%"
  instructionCard.style.transform = "scale(0)"
  instructionCard.style.width = "0%"
  startQuiz()
})
// Langsung tampilkan halaman rules saat halaman dimuat
document.addEventListener("DOMContentLoaded", () => {
  instructionCard.style.transform = "scale(1)";
  instructionCard.style.width = "100%";
  instructionCard.style.opacity = "1";
});




const questions = [  
  {   
    question: "Apa kepanjangan dari VOC?",    
    options: ["Vereenigde Oost-Indische Compagnie", "Verenigde Oost-Indische Compagnie", "Vernigde Oost-Indische Compagnie", "Vereningde Oost-Indische Compagnie"],
    answer: "0"
  },
  {
    question: "Kapan VOC didirikan?",
    options: ["1610", "1599", "1602", "1650"],
    answer: "2"
  },
  {
    question: "Siapa yang menjadi Gubernur Jenderal pertama VOC?",
    options: ["Jan Pieterszoon Coen", "Pieter Both", "Antonio van Diemen", "Hendrik Brouwer"],
    answer: "1"
  },
  {
    question: "Apa tujuan utama VOC didirikan?",
    options: ["Untuk menjual barang-barang di Eropa", "Untuk menguasai perdagangan rempah-rempah di Asia", "Untuk mendirikan koloni di Amerika", "uk menjalin hubungan diplomatik dengan negara-negara Eropa"],
    answer: "1"
  },
  {
    question: "Di kota mana VOC memiliki markas besar pertamanya di Hindia Belanda?",
    options: ["Surabaya", "Banda Aceh", "Makassar", "Jakarta"],
    answer: "3"
  },
 
];




function startQuiz() {
    // Display the first question and its options
    displayQuestion(currentQuestion);

    // Start the timer
    timer = setInterval(updateTimer, 1000);

    // Update the progress bar
    updateProgress();
}


function displayQuestion(questionIndex) {
  updateProgress()
    // Get the question and options from the questions array
    let question = questions[questionIndex].question;
    let options = questions[questionIndex].options;

    // Display the question and options in their respective containers
    questionEl.innerHTML = question;

    for (let i = 0; i < options.length; i++) {
        let option = `<option onclick = checkAnswer(${i})>${options[i]} </option>`
        
        answerContainer.insertAdjacentHTML("beforeend",option)
    }
}


function checkAnswer(selectedIndex) {
    // Get the selected answer from the user
    attemptQuestion++;
    answerContainer.style.pointerEvents="none"
    clearInterval(timer);
    let selectedAnswer = questions[currentQuestion].options[selectedIndex];

    // Get the correct answer from the questions array
    let correctAnswer = questions[currentQuestion].options[questions[currentQuestion].answer];

    // Compare the selected answer to the correct answer
    if (selectedAnswer === correctAnswer) {
      score++;
     setTimeout(()=>{
       document.querySelectorAll("option")[selectedIndex].style.backgroundColor = "#37BB1169"
       document.querySelectorAll("option")[selectedIndex].style.color = "#fff"
       document.querySelectorAll("option")[selectedIndex].style.borderColor = "green"
     },100)
      

        userAnswers[currentQuestion] = selectedIndex;

        // Display the correct answer and highlight it in green
        
    } else {
      wrongQuestion++;
       setTimeout(()=>{
       document.querySelectorAll("option")[selectedIndex].style.backgroundColor = "#B6141469"
       document.querySelectorAll("option")[selectedIndex].style.color = "#fff"
       document.querySelectorAll("option")[selectedIndex].style.borderColor = "red"
      document.querySelectorAll("option")[questions[currentQuestion].answer].style.backgroundColor="#37BB1169"
      document.querySelectorAll("option")[questions[currentQuestion].answer].style.color="#fff"
      document.querySelectorAll("option")[questions[currentQuestion].answer].style.borderColor="green"
     },100)
    }
}


function nextQuestion() {
    // Check if the user has answered all questions
    
    answerContainer.style.pointerEvents="initial"
    time.innerHTML="15"
    updateProgress()
    timer = setInterval(updateTimer, 1000);
    answerContainer.innerHTML=""
    if (currentQuestion === questions.length - 1) {
      resultCard.style.width="300px"
      resultCard.style.transform="scale(1)"
      totalScore.innerHTML = questions.length
      yourScore.innerHTML = score
      attempted.innerHTML = attemptQuestion
      unattempted.innerHTML = unattemptedQuestion
      wrong.innerHTML = wrongQuestion
      wrapper.style.width="0"
      wrapper.style.transform="scale(0)"
        endQuiz();
    } else {
        // If there are more questions, update the currentQuestion variable and display the next question and its options
        currentQuestion++;
        currentQuestionNum.innerHTML=currentQuestion + 1
        displayQuestion(currentQuestion);
    }
}

function updateTimer() {
    // Decrement the timer by 1 second
    let remainingTime = parseInt(time.innerHTML) - 1;

    // Update the timer display
    time.innerHTML = remainingTime > 15 ? remainingTime : "" + remainingTime;

    // Update the progress bar
    

    // If the timer reaches 0, end the quiz
    if (remainingTime === 0) {
      unattemptedQuestion++;
      document.querySelectorAll("option")[questions[currentQuestion].answer].style.backgroundColor = "#37BB1169"
      document.querySelectorAll("option")[questions[currentQuestion].answer].style.color = "#fff"
      document.querySelectorAll("option")[questions[currentQuestion].answer].style.borderColor = "green"
      answerContainer.style.pointerEvents="none"
        endQuiz();
    }
}

function updateProgress() {
 progressBar.style.width = (currentQuestion + 1)/questions.length * 100 + "%";
 
 ;
}

function endQuiz() {
    // Stop the timer
    clearInterval(timer);
    
    // Hide the question and option containers
    
}

nxtBtn.addEventListener("click",nextQuestion);



totalQuestion.innerHTML = questions.length
currentQuestionNum.innerHTML=currentQuestion + 1


  </script>
</body>
</html>