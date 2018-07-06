  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyDpIjgw-8yHTIpOo-xiMMzaqtmz8ET0zXA",
    authDomain: "magical-banana.firebaseapp.com",
    databaseURL: "https://magical-banana.firebaseio.com",
    projectId: "magical-banana",
    storageBucket: "magical-banana.appspot.com",
    messagingSenderId: "517488892965"
  };
  firebase.initializeApp(config);

var messagesRef = firebase.database().ref();


var messageField = $('#messageInput');
var nameField = $('#nameInput');
var messageList = $('#messages');
var last = $('#last');

// ENTERキーを押した時に発動する
messageField.keypress(function (e) {
    if (e.keyCode == 13) {
        //フォームに入力された情報
        var username = nameField.val();
        var message = messageField.val();


        //データベースに保存する
        messagesRef.push({name:username, text:message});
        messageField.val('');

        $('#scroller').scrollTop($('#messages').height());
    }
});

// データベースにデータが追加されたときに発動する
messagesRef.limitToLast(10).on('child_added', function (snapshot) {
    //取得したデータ
    var data = snapshot.val();
    var username = data.name || "anonymous";
    var message = data.text;

    //取得したデータの名前が自分の名前なら右側に吹き出しを出す
    if ( username == nameField.val() ) {

        var messageElement = $("<il><p class='sender_name me'>" + username + "</p><p class='right_balloon'>" + message + "</p><p class='clear_balloon'></p></il>");

    } else {

        var messageElement = $("<il><p class='sender_name'>" + username + "</p><p class='left_balloon'>" + message + "</p><p class='clear_balloon'></p></il>");

    }
    //HTMLに取得したデータを追加する
    messageList.append(messageElement)

    //一番下にスクロールする
    messageList[0].scrollTop = messageList[0].scrollHeight;
    $('#scroller').animate({scrollTop: $('#scroller')[0].scrollHeight}, 'fast');
    // $(window).scrollTop(target.offset().top);
});


messagesRef.limitToLast(2).on('child_added', function (snapshot) {
    var data2 = snapshot.val();
    var lastmessage = data2.text;
    
    last.append(lastmessage)
});