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


// データベースの参照を準備
var messagesRef = firebase.firestore().collection('messages');
var lastRef = firebase.firestore().collection('last').doc('lastbanana');


// function deleteButton(change){
//     var button = document.createElement("button");
//     button.innerHTML = "削除";
//     var body = document.getElementsByTagName("li")[0];
//     body.appendChild(button);
//     button.onclick = function(){
//         var jobskill_query = firebase.firestore().collection('messages').where('timestamp','==',change.doc.data().timestamp);
//         var kesu = change.doc.data().body;
//         jobskill_query.get().then(function(querySnapshot) {
//             querySnapshot.forEach(function(doc) {
//                 doc.ref.delete();
//             });
//         });
//     $("#messages").find('li').remove()
//     } 
// }
//  documentReference.get().then(function(documentSnapshot) {
//     var documentReference = firebase.firestore().collection('last').doc('lastbanana');
//     documentReference.get().then(function(documentSnapshot) {
//       var data = documentSnapshot.data().timestamp;
//       var current = firebase.firestore.FieldValue.serverTimestamp();



// lastRef.orderBy("data").limit(1).get().then(function(prevSnapshot){
//     var lastmessage = prevSnapshot.data().body;
//     $('#bananashow').empty().append(
//     $(lastmessage).clone()
//     );
// });




// メッセージを表示
messagesRef.orderBy("date").onSnapshot(function(snapshot) {
    
    firebase.firestore().collection("messages").orderBy("date").get().then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            console.log(doc.id, " => ", doc.data());
            var userData = doc.data().body
            var userId = doc.id
            document.getElementById("bananashow").innerHTML = userData;
            // $('#bananashow').empty().append(
            //     $(userData).clone()
            // );
        });

})

    
    snapshot.docChanges.forEach(function(change) {
        if (change.type === 'added') {
            $('<li>').text(change.doc.data().name + ': ' + change.doc.data().body).prependTo('#messages');
            var button = document.createElement("button");
            button.innerHTML = "削除";
            var body = document.getElementsByTagName("li")[0];
            body.appendChild(button);
            button.onclick = function(){
                var jobskill_query = firebase.firestore().collection('messages').where('timestamp','==',change.doc.data().timestamp);
                jobskill_query.get().then(function(querySnapshot) {
                  querySnapshot.forEach(function(doc) {
                    doc.ref.delete();
                  });
                });
                $("#messages").find('li').remove()
            }

            
        }
        if (change.type === 'removed') {
            console.log(`User ${change.doc.id} has gone offline.`);
            firebase.firestore().collection("messages").orderBy("date").get().then(function(querySnapshot) {
                querySnapshot.forEach(function(doc) {
                    $('<li>').text(doc.data().name + ': ' + doc.data().body).prependTo('#messages');
                    console.log(doc.id, " => ", doc.data());
                
                
                var button = document.createElement("button");
                            button.innerHTML = "削除";
                            var body = document.getElementsByTagName("li")[0];
                            body.appendChild(button);
                            button.onclick = function(){
                                var jobskill_query = firebase.firestore().collection('messages').where('timestamp','==',doc.data().timestamp);
                                jobskill_query.get().then(function(querySnapshot) {
                                  querySnapshot.forEach(function(doc) {
                                    doc.ref.delete();
                                  });
                                });
                                $("#messages").find('li').remove()
                                
                            }
            
            
                });
                
                });
            
        }
    });
    
});

$('#send').click(function() {
    // 新規メッセージを投稿
    const date = Date.now();
    messagesRef.add({
        name: $('#name').val(),
        body: $('#message').val(),
        timestamp: firebase.firestore.FieldValue.serverTimestamp(),
        date: date
    });
    lastRef.set({
    name: $('#name').val(),
    body: $('#message').val(),
    timestamp: firebase.firestore.FieldValue.serverTimestamp()
    });
    
    var documentReference = firebase.firestore().collection('last').doc('lastbanana');
    documentReference.get().then(function(documentSnapshot) {
      var data = documentSnapshot.data().timestamp;
      var current = firebase.firestore.FieldValue.serverTimestamp();
      
   
    });
    
});

$('#message').keypress(function (e){
    if (e.keyCode == 13) {
        const date = Date.now();
        messagesRef.add({
        name: $('#name').val(),
        body: $('#message').val(),
        timestamp: firebase.firestore.FieldValue.serverTimestamp(),
        date: date
    });
    lastRef.set({
        name: $('#name').val(),
        body: $('#message').val(),
        timestamp: firebase.firestore.FieldValue.serverTimestamp()
    });
 
   
    
    var documentReference = firebase.firestore().collection('last').doc('lastbanana');
    documentReference.get().then(function(documentSnapshot) {
      var data = documentSnapshot.data().timestamp;
      var current = firebase.firestore.FieldValue.serverTimestamp();
      
   
    });
    }
});






