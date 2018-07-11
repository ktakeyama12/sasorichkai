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


document.getElementById("show").style.display = 'none';
document.getElementById("ready").style.display = 'none';

var quizRef = firebase.firestore().collection('quizzes');




quizRef.orderBy("date").get().then(function(querySnapshot) {
    var points = 0;
    const quizData = []
    const answerData = []
    querySnapshot.forEach(function(doc) {
        quizzes=[];
        quizData.push(doc.data().question)
        answerData.push(doc.data().answer)
    });
    
    var lastRef = firebase.firestore().collection('lastquiz');
    var lastRef2 = firebase.firestore().collection('lastquiz').doc('currentQuiz');
    var userRef = firebase.firestore().collection('users');
    
    lastRef2.set({
        question: quizData[0],
        answer: answerData[0],
        kaitousha: "",
        bangou: "0",
    });


    lastRef.onSnapshot(function(snapshot) {
        snapshot.docChanges.forEach(function(change) {
            var currentKaitousha = change.doc.data().kaitousha
            var oldanswer = change.doc.data().oldanswer
            if(currentKaitousha){
                document.getElementById("kaitousha").innerHTML = currentKaitousha + "が正解しました！！"||"";
            }
            if(oldanswer){
                document.getElementById("answer").innerHTML = "答えは" + oldanswer + "でした！"||"";
            }

            
            var lastRef = firebase.firestore().collection('lastquiz').doc('currentQuiz');

            
            var currentQuiz = change.doc.data().question
            var currentAnswer = change.doc.data().answer
            var number = change.doc.data().bangou
            document.getElementById("mondaidesu").innerHTML = currentQuiz;
            document.getElementById("bangou").value = number;
            document.getElementById("bangou").innerHTML = parseInt(number) + 1 + "問目";

            $('#send').unbind().click(function() {
                var number = document.getElementById("bangou").value;
                var kotaeValue = document.getElementById("kotae").value;
                if(kotaeValue == currentAnswer){
                    // console.log("kotaeValue => " + kotaeValue + " currentAnswer =>" + currentAnswer + " number => " + number )
                    document.getElementById("yesno").innerHTML = "正解";
                    if(kotaeValue == currentAnswer){
                        var number = change.doc.data().bangou
                        number = parseInt(number) + 1;
                        var kaitousha = document.getElementById("hello").value;
                        lastRef.set({
                            question: quizData[number],
                            answer: answerData[number],
                            oldanswer: answerData[number-1],
                            kaitousha: kaitousha,
                            bangou: number,
                        });
                        var username = document.getElementById("hello").value;
                        var userRef = firebase.firestore().collection('users').doc(username);
                        points = points + 1;
                        console.log(points)
                            userRef.set({
                                username : username,
                                points : parseInt(points),
                            });
                    }
                }else{
                    document.getElementById("yesno").innerHTML = "違います";
                };
            });

        });
    });
});

$('#usertouroku').unbind().click(function() {
    var username = document.getElementById("username").value;
    var userRef = firebase.firestore().collection('users').doc(username);
    var points = 0;
    userRef.set({
        username : username,
        points : 0,
    });
    if(username){
        document.getElementById("hello").innerHTML = "ようこそ、" + username + "さん";
        document.getElementById("hello").value = username;
    }
    // document.getElementById("show").style.display = 'block';
    document.getElementById("show2").style.display = 'none';
    document.getElementById("ready").style.display = 'block';
});


var userData= {}
var scoreData = {}
var scoreall = ""
var userRef = firebase.firestore().collection('users');
userRef.onSnapshot(function(snapshot) {
    snapshot.docChanges.forEach(function(change) {
        var username = change.doc.data().username
        username = username.toString()
        // console.log(username)
        var points = change.doc.data().points
        points = points.toString()
        userData[username] = username
        scoreData[username] = points
        var scoreall = ""
        Object.keys(userData).forEach(function(element){
            scoreall += userData[element]
            scoreall += "は"
            scoreall += scoreData[element]
            scoreall += "点<br />"
        })
        console.log(scoreData)
        document.getElementById("score").innerHTML = scoreall;
        
    });
    console.log(userData["kazu"] + "unchi")
});


$('#reset').unbind().click(function() {
    var jobskill_query = userRef;
    jobskill_query.get().then(function(querySnapshot) {
      querySnapshot.forEach(function(doc) {
        doc.ref.delete();
      });
    });
    window.location.reload(true);
    
    var readyRef2 = firebase.firestore().collection('ready').doc('ready');
    
    readyRef2.set({
        ready: 0,
    });
    
});

$('#ready').unbind().click(function() {
    document.getElementById("ready").style.display = 'none';
    // document.getElementById("show").style.display = 'block';
    
    var readyRef2 = firebase.firestore().collection('ready').doc('ready');
    
    readyRef2.set({
        ready: 1,
    });
    
});

var readyRef = firebase.firestore().collection('ready');
readyRef.onSnapshot(function(snapshot) {
    snapshot.docChanges.forEach(function(change) {
        var ready = change.doc.data().ready
        if(ready==1){
            document.getElementById("show").style.display = 'block';
        }
    });
});

// var userRef = firebase.firestore().collection('users');
// userRef.get().then(function(querySnapshot) {
//     const userData= []
//     const scoreData = []
//     querySnapshot.forEach(function(doc) {
//         var username = doc.data().username
//         var points = doc.data().points
//         // // $('<li>').text(username + ': ' + points).prependTo('#score');
//         // $('<li><div class="prependto">').text(username).prependTo('#score');
//         // $(".prependto").eq(1).remove()
//     });
//     console.log("unchi")
// });

// var userRef = firebase.firestore().collection('users');
// userRef.onSnapshot(function(snapshot) {
//     const userData= []
//     const scoreData = []
//     snapshot.docChanges.forEach(function(change) {
        
//         userRef.get().then(function(querySnapshot) {
//             querySnapshot.forEach(function(doc) {
//                 var username = change.doc.data().username
//                 var points = change.doc.data().points
//                 // $('<li>').text(username + ': ' + points).prependTo('#score');
//                 $('<li><div class="prependto">').text(username).prependTo('#score');
//                 $(".prependto").eq(1).remove()
                
//                 // $('<li><div class="prepended"> + username + ': ' + points').prependTo('#score');
//         });
//             // console.log("username => " + username + " points => " + points)
//         });
//         // userData.push(change.doc.data().username)
//         // scoreData.push(change.doc.data().points)
        
//     //   var username = change.doc.data().username
//     //   console.log(username)
//     //   var points = change.doc.data().points
//     //   $('<li>').text(username + ': ' + points).prependTo('#score');
//     });
//     console.log(userData)
//     console.log(scoreData)
    
// });