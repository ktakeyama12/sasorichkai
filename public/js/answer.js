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



var firstloop = 0;
var number=0;
quizRef.orderBy("date").get().then(function(querySnapshot) {
    const quizData = []
    const answerData = []
    querySnapshot.forEach(function(doc) {
        quizzes=[];
        quizData.push(doc.data().question)
        answerData.push(doc.data().answer)
    });
    // var lastRef = firebase.firestore().collection('lastquiz').doc('currentQuiz');
    // lastRef.set({
    //     question: quizData[0],
    //     answer: answerData[0],
    // });
    // console.log(quizData)
    // console.log(answerData)
    // console.log(quizData.length)
    // document.getElementById("quizzes").innerHTML = quizData;
    var i=1;
    
    // 解答送信フォーム

    
   
    
    var lastRef = firebase.firestore().collection('lastquiz');
    var lastRef2 = firebase.firestore().collection('lastquiz').doc('currentQuiz');
                lastRef2.set({
                question: quizData[number],
                answer: answerData[number],
            });
    
    lastRef.onSnapshot(function(snapshot) {
        snapshot.docChanges.forEach(function(change) {
            var lastRef = firebase.firestore().collection('lastquiz').doc('currentQuiz');

            
            var currentQuiz = change.doc.data().question
            var currentAnswer = change.doc.data().answer
            document.getElementById("mondaidesu").innerHTML = currentQuiz;
            // console.log(number)
            // console.log(currentAnswer)
            // console.log(quizData[1])

            $('#send').click(function() {
                var kotaeValue = document.getElementById("kotae").value;
                // console.log(currentAnswer)
                if(kotaeValue == currentAnswer && firstloop == 0){
                    document.getElementById("yesno").innerHTML = "正解";
                    number = number + 1;
                    lastRef.set({
                        question: quizData[number],
                        answer: answerData[number],
                    });
                    firstloop = 1;
                    // console.log(number)
                }else if(firstloop == 1){
                    document.getElementById("yesno").innerHTML = "正解w";
                    console.log("kotaeValue => " + kotaeValue + "currentAnswer =>" + currentAnswer + number)
                    if(kotaeValue != currentAnswer){
                        firstloop = 0;
                    }
                }else{
                    document.getElementById("yesno").innerHTML = "違います";
                };
            });
    
            // console.log(quizData[number])
            // lastRef.doc('currentQuiz').set({
            //     question: quizData[number],
            //     answer: answerData[number],
            // });
        });
    });
    
    
});



function initQuiz(){
    var number = 0;
}



// console.log(quizData)
// console.log(answerData)

// var number = 0;

// foreach(quizd)
// quiz = quizData[number];
// answer = answerData[number];
// document.getElementById("quizzes").innerHTML = quiz;

// $('#send').click(function() {
//     var kotaeValue = document.getElementById("kotae").value;
//     if(kotaeValue == answer){
//         document.getElementById("yesno").innerHTML = "正解";
//     }else{
//         document.getElementById("yesno").innerHTML = "違います";
//     };
// });
    
