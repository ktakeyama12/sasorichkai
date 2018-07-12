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
document.getElementById("ready2").style.display = 'none';
document.getElementById("ingame").style.display = 'none';

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
            $("#kaitousha").fadeOut();
            $("#answer").fadeOut();
            var currentKaitousha = change.doc.data().kaitousha
            var oldanswer = change.doc.data().oldanswer
            if(currentKaitousha){
                document.getElementById("kaitousha").innerHTML = currentKaitousha + "が正解しました！！"||"";
            }
            if(oldanswer){
                document.getElementById("answer").innerHTML = "答えは" + oldanswer + "でした！"||"";
            }
            $("#kaitousha").fadeIn();
            $("#answer").fadeIn();

            
            var lastRef = firebase.firestore().collection('lastquiz').doc('currentQuiz');
            var currentQuiz = change.doc.data().question
            var currentAnswer = change.doc.data().answer
            var number = change.doc.data().bangou
            $("#mondaidesu").fadeOut();
            document.getElementById("mondaidesu").innerHTML = currentQuiz;
            $("#mondaidesu").fadeIn();
            document.getElementById("bangou").value = number;
            if(number=="finish"){
                document.getElementById("bangou").innerHTML = "";
            }
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
                        if(quizData[number]){
                            lastRef.set({
                                question: quizData[number],
                                answer: answerData[number],
                                oldanswer: answerData[number-1],
                                kaitousha: kaitousha,
                                bangou: number,
                            });
                        }else{
                            lastRef.set({
                                question: "おわり",
                                answer: "",
                                oldanswer: answerData[number-1],
                                kaitousha: kaitousha,
                                bangou: "owari",
                            });
                        }
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
            
            
            $('#kotae').keypress(function (e){
                if (e.keyCode == 13) {
                    var number = document.getElementById("bangou").value;
                    var kotaeValue = document.getElementById("kotae").value;
                    if(kotaeValue == currentAnswer){
                        // console.log("kotaeValue => " + kotaeValue + " currentAnswer =>" + currentAnswer + " number => " + number )
                        document.getElementById("yesno").innerHTML = "正解";
                        if(kotaeValue == currentAnswer){
                            var number = change.doc.data().bangou
                            number = parseInt(number) + 1;
                            var kaitousha = document.getElementById("hello").value;
                            if(quizData[number]){
                                lastRef.set({
                                    question: quizData[number],
                                    answer: answerData[number],
                                    oldanswer: answerData[number-1],
                                    kaitousha: kaitousha,
                                    bangou: number,
                                });
                            }else{
                                lastRef.set({
                                    question: "おわり",
                                    answer: "",
                                    oldanswer: answerData[number-1],
                                    kaitousha: kaitousha,
                                    bangou: "owari",
                                });
                            }
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
                }
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
    document.getElementById("ready2").style.display = 'block';
    
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
        var userplay = ""
        Object.keys(userData).forEach(function(element){
            scoreall += userData[element]
            scoreall += "は"
            scoreall += scoreData[element]
            scoreall += "点<br />"
            userplay += userData[element]
            userplay += "<br />"
        })
        $("#score").fadeOut();
        console.log(scoreData)
        document.getElementById("score").innerHTML = scoreall;
        document.getElementById("score2").innerHTML = userplay;
        $("#score").fadeIn();
    });
    console.log(userData["kazu"] + "unchi")
});


$('#reset').unbind().click(function() {
    if (confirm('進行中のゲームを中断してしまいますが、よろしいですか？')) {
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
    }
});

$('#reset2').unbind().click(function() {
    if (confirm('進行中のゲームを中断してしまいますが、よろしいですか？')) {
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
    }
});

$('#ready').unbind().click(function() {
    document.getElementById("ready2").style.display = 'none';
    var readyRef2 = firebase.firestore().collection('ready').doc('ready');
    
    readyRef2.set({
        ready: 1,
    });
    
});

var readyRef = firebase.firestore().collection('ready');
readyRef.onSnapshot(function(snapshot) {
    snapshot.docChanges.forEach(function(change) {
        var username = document.getElementById("username").value;
        var ready = change.doc.data().ready
        if(username && ready==1){
            document.getElementById("show").style.display = 'block';
            document.getElementById("show2").style.display = 'none';
            document.getElementById("ready2").style.display = 'none';
        }else if(!username && ready==1){
            document.getElementById("ingame").style.display = 'block';
            document.getElementById("show2").style.display = 'none';
        }
    });
});



