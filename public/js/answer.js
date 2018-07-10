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
    
    var lastRef = firebase.firestore().collection('lastquiz');
    var lastRef2 = firebase.firestore().collection('lastquiz').doc('currentQuiz');
    lastRef2.set({
        question: quizData[0],
        answer: answerData[0],
        kaitousha: "",
        bangou: "0",
    });

    lastRef.onSnapshot(function(snapshot) {
        
        snapshot.docChanges.forEach(function(change) {
            if (change.type === "modified") {
                console.log("Modified city: ");
            }
                console.log("unchis")
            var currentKaitousha = change.doc.data().kaitousha
            if(currentKaitousha){
                document.getElementById("kaitousha").innerHTML = currentKaitousha + "が正解しました！！"||"";
            }
            
            // document.getElementById("bangou").innerHTML = number;
            // console.log(number + "unchi")
            
            var lastRef = firebase.firestore().collection('lastquiz').doc('currentQuiz');

            
            var currentQuiz = change.doc.data().question
            var currentAnswer = change.doc.data().answer
            var number = change.doc.data().bangou
            document.getElementById("mondaidesu").innerHTML = currentQuiz;
            document.getElementById("bangou").value = number;
            document.getElementById("bangou").innerHTML = parseInt(number) + 1;

            $('#send').unbind().click(function() {
                var number = document.getElementById("bangou").value;
                var kotaeValue = document.getElementById("kotae").value;
                if(kotaeValue == currentAnswer){
                    console.log("kotaeValue => " + kotaeValue + " currentAnswer =>" + currentAnswer + " number => " + number )
                    document.getElementById("yesno").innerHTML = "正解";
                    if(kotaeValue == currentAnswer){
                        var number = change.doc.data().bangou
                        number = parseInt(number) + 1;
                        var kaitousha = document.getElementById("name").value;
                        lastRef.set({
                            question: quizData[number],
                            answer: answerData[number],
                            kaitousha: kaitousha,
                            bangou: number,
                        });
                    }
                }else{
                    document.getElementById("yesno").innerHTML = "違います";
                };
            });

        });
    });
    
    
});
