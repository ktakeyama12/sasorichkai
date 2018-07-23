// Initialize Firebase
var config = {
apiKey: "AIzaSyBXz2bkeatbZ1IbR1ZpWPFhM8-p51bQS84",
authDomain: "test-df547.firebaseapp.com",
databaseURL: "https://test-df547.firebaseio.com",
projectId: "test-df547",
storageBucket: "test-df547.appspot.com",
messagingSenderId: "1081612857750"
};
firebase.initializeApp(config);

// Global Variables
var topPos = 0;
var leftPos = 0;
var pickAnswer = 0;


// 座標所得
var coordinates = function(element) {
    element = $(element);
    var topPos = element.position().top / $(element).parent().height() * 100;
    var leftPos = element.position().left / $(element).parent().width() * 100;
    $('#results').text('X: ' + leftPos + ' ' + 'Y: ' + topPos);
    // 座標送信
    // var sendPosition = firebase.firestore().collection('positions').doc("user1");
    // sendPosition.set({
    //     topPos : topPos,
    //     leftPos : leftPos,
    // });
}

var coordinatesTop = function(element) {
    element = $(element);
    var topPos = element.position().top / $(element).parent().height() * 100;
    return topPos;
}

var coordinatesLeft = function(element) {
    element = $(element);
    var leftPos = element.position().left / $(element).parent().width() * 100;
    return leftPos;
}

// draggableにする
function draggable1(){
    $('#user1').draggable({
        start: function(leftPos) {
            coordinates('#user1');
            // coordinatesTop('#draggable');
            var leftPos = coordinatesLeft('#user1');
            currentPos = getBox(leftPos);
            $('#leftPos').text(currentPos);
            // console.log(document.getElementById('leftPos').innerHTML)
        },
        stop: function(leftPos) {
            coordinates('#user1');
            var leftPos = coordinatesLeft('#user1');
            $('#leftPos').text(leftPos);
            currentPos = getBox(leftPos);
        }
    });
};

function draggable2(){
    $('#user2').draggable({
        start: function(leftPos) {
            coordinates('#user2');
            // coordinatesTop('#draggable');
            var leftPos = coordinatesLeft('#user2');
            currentPos = getBox(leftPos);
            $('#leftPos').text(currentPos);
            // console.log(document.getElementById('leftPos').innerHTML)
        },
        stop: function(leftPos) {
            coordinates('#user2');
            var leftPos = coordinatesLeft('#user2');
            $('#leftPos').text(leftPos);
            currentPos = getBox(leftPos);
        }
    });
};

function draggable3(){
    $('#user3').draggable({
        start: function(leftPos) {
            coordinates('#user3');
            // coordinatesTop('#draggable');
            var leftPos = coordinatesLeft('#user3');
            currentPos = getBox(leftPos);
            $('#leftPos').text(currentPos);
            // console.log(document.getElementById('leftPos').innerHTML)
        },
        stop: function(leftPos) {
            coordinates('#user3');
            var leftPos = coordinatesLeft('#user3');
            $('#leftPos').text(leftPos);
            currentPos = getBox(leftPos);
        }
    });
};

function draggable4(){
    $('#user4').draggable({
        start: function(leftPos) {
            coordinates('#user4');
            // coordinatesTop('#draggable');
            var leftPos = coordinatesLeft('#user4');
            currentPos = getBox(leftPos);
            $('#leftPos').text(currentPos);
            // console.log(document.getElementById('leftPos').innerHTML)
        },
        stop: function(leftPos) {
            coordinates('#user4');
            var leftPos = coordinatesLeft('#user4');
            $('#leftPos').text(leftPos);
            currentPos = getBox(leftPos);
        }
    });
};

// // 座標受信・移動
// var positionRef = firebase.firestore().collection('positions');
// positionRef.onSnapshot(function(snapshot) {
//     snapshot.docChanges.forEach(function(change) {
//         document.getElementById('draggable').style.top = change.doc.data().topPos;
//         document.getElementById('draggable').style.left = change.doc.data().leftPos;
//     });
// });

function getBox(leftPos){
    if(leftPos>=0 && leftPos<=25){
        $('#results1').text('1');
        return 1;
    }else if(leftPos>25 && leftPos<=50){
        $('#results1').text('2');
        return 2;
    }else if(leftPos>50 && leftPos<=75){
        $('#results1').text('3');
        return 3;
    }else if(leftPos>75 && leftPos<=100){
        $('#results1').text('4');
        return 4;
    }else{
        $('#results1').text('5');
        return 5;
    }
}

function quizInterval(quizData, answerData1, answerData2, answerData3, answerData4, answerCorrect){
    var time=10;
    i = 0;
    score = 0;
    $('#score').text(score);
    var timecounter = setInterval(function(){
        $('#quizData').text(quizData[i]);
        $('#answerData1').text(answerData1[i]);
        $('#answerData2').text(answerData2[i]);
        $('#answerData3').text(answerData3[i]);
        $('#answerData4').text(answerData4[i]);
        $('#answerCorrect').text(answerCorrect[i]);
        $('#results2').text(time);
        answerSelected =  document.getElementById('results1').innerHTML;
        time--;
        if(time==0){
            time=10;
            if(checkAnswer(answerSelected, answerCorrect[i]) == true){
                score++;
                $('#score').text(score);
                storeScore(score);
                $("#seikaiorfuseikai").fadeIn();
                $('#seikaiorfuseikai').text("正解");
                $("#seikaiorfuseikai").fadeOut();
            }else{
                $("#seikaiorfuseikai").fadeIn();
                $('#seikaiorfuseikai').text("不正解");
                $("#seikaiorfuseikai").fadeOut();
            }
            i++;
        }
    }, 1000);
}

// $(function(quizData){
function runQuiz(){
    var quizRef = firebase.firestore().collection('quizzes');
    quizRef.get().then(function(querySnapshot) {
        quizData=[];
        answerData1=[];
        answerData2=[];
        answerData3=[];
        answerData4=[];
        answerCorrect=[];
        querySnapshot.forEach(function(doc) {
            quizData.push(doc.data().quiz);
            answerData1.push(doc.data().answer1);
            answerData2.push(doc.data().answer2);
            answerData3.push(doc.data().answer3);
            answerData4.push(doc.data().answer4);
            answerCorrect.push(doc.data().answer);
        });
        // draggable();
        quizInterval(quizData, answerData1, answerData2, answerData3, answerData4, answerCorrect);
    });
// });
};


function checkAnswer(answerSelected, answer){
    if(answerSelected == answer){
        return true;
    }else{
        return false;
    }
}

function storeScore(score){
    scoreRef = firebase.firestore().collection('score').doc('score');
    scoreRef.set({
        name : "test",
        score : score,
    });
}

usercount = 0;

function nyuushitsu(){
    var userRef = firebase.firestore().collection('users');
    userRef.get().then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            var usercount = doc.data().usercount;
            $('#usercount').text(usercount);
        });
        usercount =  document.getElementById('usercount').innerHTML;
        var name = document.getElementById("name").value;
        readyQuiz();
        if(usercount==0){
            usercount++;
            var userRef = firebase.firestore().collection('users').doc('users');
            userRef.set({
    		  usercount: usercount,
    		  user1 : name,
    		  ready1 : 1,
    	    }, { merge: true });
    	    usernumber=usercount;
    	    console.log(usernumber)
    	    $('#usernumber').text(usernumber);
            document.getElementById("ready").style.display = "block";
            document.getElementById("entry").style.display = "none";
            $('#welcome').text("ようこそ" + name + "さん。あなたはユーザー1です");
            draggable1();
        }else if(usercount==1){
            usercount++;
            var userRef = firebase.firestore().collection('users').doc('users');
            userRef.set({
    		  usercount: usercount,
    		  user2 : name,
    		  ready2 : 1,
    	    }, { merge: true });
    	    usernumber=usercount;
    	    $('#usernumber').text(usernumber);
    	    document.getElementById("ready").style.display = "block";
            document.getElementById("entry").style.display = "none";
            $('#welcome').text("ようこそ" + name + "さん。あなたはユーザー2です");
            draggable2();
        }else if(usercount==2){
            usercount++;
            var userRef = firebase.firestore().collection('users').doc('users');
            userRef.set({
    		  usercount: usercount,
    		  user3 : name,
    		  ready3 : 1,
    	    }, { merge: true });
    	    usernumber=usercount;
    	    $('#usernumber').text(usernumber);
    	    document.getElementById("ready").style.display = "block";
            document.getElementById("entry").style.display = "none";
            $('#welcome').text("ようこそ" + name + "さん。あなたはユーザー3です");
            draggable3();
        }else if(usercount==3){
            usercount++;
            var userRef = firebase.firestore().collection('users').doc('users');
            userRef.set({
    		  usercount: usercount,
    		  user4 : name,
    		  ready4 : 1,
    	    }, { merge: true });
    	    usernumber=usercount;
    	    $('#usernumber').text(usernumber);
    	    document.getElementById("ready").style.display = "block";
            document.getElementById("entry").style.display = "none";
            $('#welcome').text("ようこそ" + name + "さん。あなたはユーザー4です");
            draggable4();
        }else{
            $('#cantenter').text("満員です");
        }
    });
    // runQuiz();
}

function start(){
    var userRef = firebase.firestore().collection('users').doc('users');
    usernumber =  document.getElementById('usernumber').innerHTML;
    if(usernumber==1){
        userRef.set({
            ready1 : 2,
        }, { merge: true });
    }else if(usernumber==2){
        userRef.set({
            ready2 : 2,
        }, { merge: true });
    }else if(usernumber==3){
        userRef.set({
            ready3 : 2,
        }, { merge: true });
    }else if(usernumber==4){
        userRef.set({
            ready4 : 2,
        }, { merge: true });
    };
    
    // document.getElementById("ready").style.display = "none";
    // document.getElementById("game").style.display = "block";
    
}

function readyQuiz(){
    var userRef = firebase.firestore().collection('users');
    userRef.onSnapshot(function(snapshot) {
        snapshot.docChanges.forEach(function(change) {
            var ready1 = change.doc.data().ready1;
            var name1 = change.doc.data().user1;
            var ready2 = change.doc.data().ready2;
            var name2 = change.doc.data().user2;
            var ready3 = change.doc.data().ready3;
            var name3 = change.doc.data().user3;
            var ready4 = change.doc.data().ready4;
            var name4 = change.doc.data().user4;
            console.log(ready1);
            if(ready1==1){
                $('#name1').text(name1);
                $('#ready1').text("NOT READY");
                $('#ready1').replaceWith("unchi");
                document.getElementById("name1").style.display = "block";
                document.getElementById("ready1").style.display = "block";
            }
            if(ready2==1){
                $('#name2').text(name2);
                $('#ready2').text("NOT READY");
                document.getElementById("name2").style.display = "block";
                document.getElementById("ready2").style.display = "block";
            }
            if(ready3==1){
                $('#name3').text(name3);
                $('#ready3').text("NOT READY");
                document.getElementById("name3").style.display = "block";
                document.getElementById("ready3").style.display = "block";
            }
            if(ready4==1){
                $('#name4').text(name4);
                $('#ready4').text("NOT READY");
                document.getElementById("name4").style.display = "block";
                document.getElementById("ready4").style.display = "block";
            if(ready1==2){
                console.log("unchi");
                $('#name1').text(name1);
                $('#ready1').text("READY");
                document.getElementById("name1").style.display = "block";
                document.getElementById("ready1").style.display = "block";
            }
            if(ready2==2){
                $('#name2').text(name2);
                $('#ready2').text("READY");
                document.getElementById("name2").style.display = "block";
                document.getElementById("ready2").style.display = "block";
            }
            if(ready3==2){
                $('#name3').text(name3);
                $('#ready3').text("READY");
                document.getElementById("name3").style.display = "block";
                document.getElementById("ready3").style.display = "block";
            }
            if(ready4==2){
                $('#name4').text(name4);
                $('#ready4').text("READY");
                document.getElementById("name4").style.display = "block";
                document.getElementById("ready4").style.display = "block";
            }
            if(ready1==2 && ready2==2 && ready3==0){
                document.getElementById("ready").style.display = "none";
                document.getElementById("game").style.display = "block";
                runQuiz();
            }
            }
        });
    });
}

function reset(){
    var userRef = firebase.firestore().collection('users').doc('users');
    userRef.set({
        ready1 : 0,
        ready2 : 0,
        ready3 : 0,
        ready4 : 0,
        usercount : 0,
        user1 : "",
        user2 : "",
        user3 : "",
        user4 : "",
    });
        
}

