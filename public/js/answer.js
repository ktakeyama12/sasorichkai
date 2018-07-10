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
        querySnapshot.forEach(function(doc) {
            quizzes=[];
            var quizData = doc.data().question
            var answerData = doc.data().answer
            console.log(quizData)
            // var kotaeValue = document.getElementById("kotae").value;
            // if(answerData == kotaeValue){
            //     document.getElementById("yesno").innerHTML = "正解";
            // }else{
            //     document.getElementById("yesno").innerHTML = "違います";
            // }
            document.getElementById("quizzes").innerHTML = quizData;
            
            $('#send').click(function() {
        var kotaeValue = document.getElementById("kotae").value;
        if(answerData == kotaeValue){
            document.getElementById("yesno").innerHTML = "正解";
        }else{
            document.getElementById("yesno").innerHTML = "違います";
        }
        document.getElementById("quizzes").innerHTML = quizData;
});
            
        });
    });
    
