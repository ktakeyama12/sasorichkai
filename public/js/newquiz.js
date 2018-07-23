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
// $(function() {
function draggable(leftPos){
    $('#draggable').draggable({
        start: function(leftPos) {
            coordinates('#draggable');
            // coordinatesTop('#draggable');
            var leftPos = coordinatesLeft('#draggable');
            currentPos = getBox(leftPos);
            $('#leftPos').text(currentPos);
            // console.log(document.getElementById('leftPos').innerHTML)
        },
        stop: function(leftPos) {
            coordinates('#draggable');
            var leftPos = coordinatesLeft('#draggable');
            $('#leftPos').text(leftPos);
            currentPos = getBox(leftPos);
        }
    });
// });
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
                $('#seikaiorfuseikai').text("seikai");
            }else{
                $('#seikaiorfuseikai').text("fuseikai");  
            }
            i++;
        }
    }, 1000);
}

$(function(quizData){
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
        draggable();
        quizInterval(quizData, answerData1, answerData2, answerData3, answerData4, answerCorrect);
    });
});


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

// function ready