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
    var topPos = element.offset().top;
    var leftPos = element.offset().left;
    // var topPos = element.position().top;
    // var leftPos = element.position().left;
    // var topPos = element.position().top / $(element).parent().height() * 100;
    // var leftPos = element.position().left / $(element).parent().width() * 100;
    $('#results').text('X: ' + leftPos + ' ' + 'Y: ' + topPos);
}

function sendPos1(topPos, leftPos){
    var sendPosition = firebase.firestore().collection('pos').doc('pos');
    sendPosition.set({
        topPos1 : topPos,
        leftPos1 : leftPos,
    });
}

function sendPos2(topPos, leftPos){
    var sendPosition = firebase.firestore().collection(pos).doc(pos);
    sendPosition.set({
        topPos2 : topPos,
        leftPos2 : leftPos,
    });
}

function sendPos3(topPos, leftPos){
    var sendPosition = firebase.firestore().collection(pos).doc(pos);
    sendPosition.set({
        topPos3 : topPos,
        leftPos3 : leftPos,
    });
}

function sendPos4(topPos, leftPos){
    var sendPosition = firebase.firestore().collection(pos).doc(pos);
    sendPosition.set({
        topPos4 : topPos,
        leftPos4 : leftPos,
    });
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
            var leftPos = coordinatesLeft('#user1');
            var topPos = coordinatesTop('#user1');
            // currentPos = getBox(leftPos);
            // $('#leftPos').text(currentPos);
            // sendPos("user1", topPos, leftPos);
        },
        stop: function(leftPos) {
            coordinates('#user1');
            var leftPos = coordinatesLeft('#user1');
            var topPos = coordinatesTop('#user1');
            // $('#leftPos').text(leftPos);
            // currentPos = getBox(leftPos);
            // sendPos1(topPos, leftPos);
        }
    });
    $("#answerData1").droppable({
    //ドロップOKの要素を指定
        accept :"#user1" ,
        //ドロップ時の動作
        drop : function(event , ui){
          $('#leftPos').text("1");
        }
    });
    $("#answerData2").droppable({
    //ドロップOKの要素を指定
        accept :"#user1" ,
        //ドロップ時の動作
        drop : function(event , ui){
          $('#leftPos').text("2");
        }
    });
    $("#answerData3").droppable({
    //ドロップOKの要素を指定
        accept :"#user1" ,
        //ドロップ時の動作
        drop : function(event , ui){
          $('#leftPos').text("3");
        }
    });
    $("#answerData4").droppable({
    //ドロップOKの要素を指定
        accept :"#user1" ,
        //ドロップ時の動作
        drop : function(event , ui){
          $('#leftPos').text("4");
        }
    });
};

function draggable2(){
    $('#user2').draggable({
        start: function(leftPos) {
            coordinates('#user2');
            var topPos = coordinatesTop('#user2');
            var leftPos = coordinatesLeft('#user2');
            currentPos = getBox(leftPos);
            $('#leftPos').text(currentPos);
        },
        stop: function(leftPos) {
            coordinates('#user2');
            var topPos = coordinatesTop('#user2');
            var leftPos = coordinatesLeft('#user2');
            $('#leftPos').text(leftPos);
            currentPos = getBox(leftPos);
            // sendPos2(topPos, leftPos);
        }
    });
    
};

function draggable3(){
    $('#user3').draggable({
        start: function(leftPos) {
            coordinates('#user3');
            var topPos = coordinatesTop('#user3');
            var leftPos = coordinatesLeft('#user3');
            currentPos = getBox(leftPos);
            $('#leftPos').text(currentPos);
            // sendPos("user3", topPos, leftPos);
        },
        stop: function(leftPos) {
            coordinates('#user3');
            var topPos = coordinatesTop('#user3');
            var leftPos = coordinatesLeft('#user3');
            $('#leftPos').text(leftPos);
            currentPos = getBox(leftPos);
            // sendPos("user3", topPos, leftPos);
        }
    });
};

function draggable4(){
    $('#user4').draggable({
        start: function(leftPos) {
            coordinates('#user4');
            var topPos = coordinatesTop('#user4');
            var leftPos = coordinatesLeft('#user4');
            currentPos = getBox(leftPos);
            $('#leftPos').text(currentPos);
            // sendPos("user4", topPos, leftPos);
        },
        stop: function(leftPos) {
            coordinates('#user4');
            var topPos = coordinatesTop('#user4');
            var leftPos = coordinatesLeft('#user4');
            $('#leftPos').text(leftPos);
            currentPos = getBox(leftPos);
            // sendPos("user4", topPos, leftPos);
        }
    });
};

function sendScore(element, score){
    var scoreRef = firebase.firestore().collection('score').doc(element);
    scoreRef.set({
        element : score,
    } ,{merge: true }); 
}

function getPos1(){
    var positionRef = firebase.firestore().collection('user1');
    positionRef.onSnapshot(function(snapshot) {
    snapshot.docChanges.forEach(function(change) {
        console.log(change.doc.data().topPos);
        var topPos = change.doc.data().topPos + '%';
        var leftPos = change.doc.data().leftPos  + '%';
        document.getElementById("user1").style.top = topPos;
        document.getElementById('user1').style.left = leftPos;
        });
    });
    console.log("CHANGE")
}

// // 座標受信・移動
// var positionRef = firebase.firestore().collection('positions');
// positionRef.onSnapshot(function(snapshot) {
//     snapshot.docChanges.forEach(function(change) {
//         document.getElementById('draggable').style.top = change.doc.data().topPos;
//         document.getElementById('draggable').style.left = change.doc.data().leftPos;
//     });
// });

function getBox(leftPos){
    console.log(leftPos);
    if(leftPos>=0 && leftPos<=21.7){
        $('#results1').text('1');
        return 1;
    }else if(leftPos>21.7 && leftPos<=47.5){
        $('#results1').text('2');
        return 2;
    }else if(leftPos>50 && leftPos<=73.5){
        $('#results1').text('3');
        return 3;
    }else if(leftPos>73.5 && leftPos<=100){
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
        answerSelected =  document.getElementById('leftPos').innerHTML;
        time--;
        if(i==8){
            clearInterval(timecounter);
            document.getElementById("game").style.display = "none";
            document.getElementById("finish").style.display = "block";
            finalscore =  document.getElementById('score').innerHTML;
            console.log(finalscore);
            $('#finalscore').text(finalscore);
        }
        if(time==-1){
            time=10;
            if(answerCorrect[i]==1){
                 $('#answerData1').fadeOut();
                 $('#answerData1').fadeIn();
            }else if(answerCorrect[i]==2){
                 $('#answerData2').fadeOut();
                 $('#answerData2').fadeIn();
            }else if(answerCorrect[i]==3){
                 $('#answerData3').fadeOut();
                 $('#answerData3').fadeIn();
            }else if(answerCorrect[i]==4){
                 $('#answerData4').fadeOut();
                 $('#answerData4').fadeIn();
            }
            if(checkAnswer(answerSelected, answerCorrect[i]) == true){
                score++;
                $('#score').text(score);
                storeScore(score);
                $("#seikaiorfuseikai").fadeIn();
                $('#seikaiorfuseikai').text("正解！");
                $("#seikaiorfuseikai").fadeOut();
            }else{
                $("#seikaiorfuseikai").fadeIn();
                $('#seikaiorfuseikai').text("残念！");
                $("#seikaiorfuseikai").fadeOut();
            }
            i++;
            // var posRef = firebase.firestore().collection('pos');
            // posRef.get().then(function(querySnapshot) {
            //     querySnapshot.forEach(function(doc) {
            //         var topPos1 = doc.data().topPos1;
            //         var leftPos1 = doc.data().leftPos1;
            //         console.log(leftPos1)
            //         $("#user1").parent().css({position: 'relative'});
            //         $("#user1").css({top: topPos1, left: leftPos1, position:'absolute'});
            //         // $("#user1").css({top: 200, left: 200, position:'absolute'});
            //         // document.getElementById('user1').style.top = topPos1 + 'px';
            //         // document.getElementById('user1').style.left = leftPos1 + 'px';
            //     });
            // });
//             var positionRef = firebase.firestore().collection('pos');
// positionRef.onSnapshot(function(snapshot) {
//     snapshot.docChanges.forEach(function(change) {
//         document.getElementById('user1').style.top = change.doc.data().topPos1 + 'px';
//         document.getElementById('user1').style.left = change.doc.data().leftPos1 + 'px';
//         console.log(change.doc.data().topPos1)
//     });
// });
        }
    }, 1000);
}

// $(function(quizData){
function runQuiz(){
    var quizRef = firebase.firestore().collection('eccquiz');
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
    		  ready1 : "NOT READY",
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
    		  ready2 : "NOT READY",
    	    }, { merge: true });
    	    usernumber=usercount;
    	    $('#usernumber').text(usernumber);
    	    document.getElementById("ready").style.display = "block";
            document.getElementById("entry").style.display = "none";
            $('#welcome').text("ようこそ" + name + "さん。あなたはユーザー2です");
            // draggable1();
            draggable2();
        }else if(usercount==2){
            usercount++;
            var userRef = firebase.firestore().collection('users').doc('users');
            userRef.set({
    		  usercount: usercount,
    		  user3 : name,
    		  ready3 : "NOT READY",
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
    		  ready4 : "NOT READY",
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

function ready(){
    var userRef = firebase.firestore().collection('users').doc('users');
    usernumber =  document.getElementById('usernumber').innerHTML;
    if(usernumber==1){
        userRef.set({
            ready1 : "READY",
        }, { merge: true });
    }else if(usernumber==2){
        userRef.set({
            ready2 : "READY",
        }, { merge: true });
    }else if(usernumber==3){
        userRef.set({
            ready3 : "READY",
        }, { merge: true });
    }else if(usernumber==4){
        userRef.set({
            ready4 : "READY",
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
            var start = change.doc.data().start;
            $('#name1').html(name1);
            $('#ready1').html(ready1);
            $('#name2').html(name2);
            $('#ready2').html(ready2);
            $('#name3').html(name3);
            $('#ready3').html(ready3);
            $('#name4').html(name4);
            $('#ready4').html(ready4);
            $('#startcheck').html(start);
            // if(ready1==2 && ready2==2 && ready3==0){
            //     document.getElementById("ready").style.display = "none";
            //     document.getElementById("game").style.display = "block";
            //     runQuiz();
            // }
            });
    });
}

function reset(){
    var userRef = firebase.firestore().collection('users').doc('users');
    userRef.set({
        ready1 : "",
        ready2 : "",
        ready3 : "",
        ready4 : "",
        usercount : 0,
        user1 : "",
        user2 : "",
        user3 : "",
        user4 : "",
        startcheck : 0,
    });
}

$(function(){
    runQuiz();
    draggable1();
});

function start(){
   var userRef = firebase.firestore().collection('users').doc('users'); 
   userRef.set({
        start : "1",
   }, {merge: true });
}