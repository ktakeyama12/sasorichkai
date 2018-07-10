// Initialize Firebase
var config = {
    apiKey: "AIzaSyAJadSX7j0wRK6-ryg_X8amSpKqMP1_Y4w",
    authDomain: "magicalbanana-ea115.firebaseapp.com",
    databaseURL: "https://magicalbanana-ea115.firebaseio.com",
    projectId: "magicalbanana-ea115",
    storageBucket: "magicalbanana-ea115.appspot.com",
    messagingSenderId: "474210225853"
};
firebase.initializeApp(config);


var quizRef = firebase.firestore().collection('quizzes');
quizRef.orderBy("date").get().then(function(querySnapshot) {
    const quizData = []
    const answerData = []
    querySnapshot.forEach(function(doc) {
        quizzes=[];
        quizData.push(doc.data().question)
        answerData.push(doc.data().answer)
    });
    console.log(quizData)
});


function initQuiz(){
    var number = 0;
}



console.log(quizData)
console.log(answerData)
var number = 0;
quiz = quizData[number];
answer = answerData[number];
document.getElementById("quizzes").innerHTML = quiz;

$('#send').click(function() {
    var kotaeValue = document.getElementById("kotae").value;
    if(kotaeValue == answer){
        document.getElementById("yesno").innerHTML = "正解";
    }else{
        document.getElementById("yesno").innerHTML = "違います";
    };
});
    
