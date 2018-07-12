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

$('#send').click(function() {
    // 新規メッセージを投稿
    const date = Date.now();
    quizRef.add({
        question: $('#question').val(),
        answer: $('#answer').val(),
        timestamp: firebase.firestore.FieldValue.serverTimestamp(),
        date: date
    });
});