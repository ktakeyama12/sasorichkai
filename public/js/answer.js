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


// document.getElementById("show").style.display = 'none';
// document.getElementById("ready2").style.display = 'none';
document.getElementById("ingame").style.display = 'none';


var quizRef = firebase.firestore().collection('quizzes');




quizRef.orderBy("date").get().then(function(querySnapshot) {
    var points = 0;
    const quizData = [];
    const answerData = [];
    querySnapshot.forEach(function(doc) {
        quizzes=[];
        quizData.push(doc.data().question);
        answerData.push(doc.data().answer);
    });
    
    
    var lastRef2 = firebase.firestore().collection('lastquiz').doc('currentQuiz');
    var userRef = firebase.firestore().collection('users');
    var lastRef = firebase.firestore().collection('lastquiz');
    var readyRef2 = firebase.firestore().collection('ready').doc('ready');
    
    var readyRef = firebase.firestore().collection('ready');
	readyRef.onSnapshot(function(snapshot) {
    	snapshot.docChanges.forEach(function(change) {
	        readykana = change.doc.data().ready
	        if(readykana==0){
	        	lastRef2.set({
		        question: quizData[0],
		        answer: answerData[0],
		        kaitousha: "",
		        bangou: "0",
	    		});
	    	}
    	});
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
            var tempnum = parseInt(number) + 1;
            document.getElementById("bangou").innerHTML = "Question " + tempnum;

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
                        console.log(kaitousha)
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
                            
                            var readyRef2 = firebase.firestore().collection('ready').doc('ready');
        
					        readyRef2.set({
					            ready: 0,
					        });
					        var userRef = firebase.firestore().collection('users');
					        var jobskill_query = userRef;
					        jobskill_query.get().then(function(querySnapshot) {
					          querySnapshot.forEach(function(doc) {
					            doc.ref.delete();
					          });
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
                                        var readyRef2 = firebase.firestore().collection('ready').doc('ready');
        
        readyRef2.set({
            ready: 0,
        });
        var userRef = firebase.firestore().collection('users');
        var jobskill_query = userRef;
        jobskill_query.get().then(function(querySnapshot) {
          querySnapshot.forEach(function(doc) {
            doc.ref.delete();
          });
        });
                            }
                            var username = document.getElementById("hello").value;
                            var userRef = firebase.firestore().collection('users').doc(username);
                            points = points + 1;
                            // console.log(points)
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
        document.getElementById("hello").innerHTML = "Welcome, " + username + "";
        document.getElementById("hello").value = username;
    }
    // document.getElementById("show").style.display = 'block';
    // document.getElementById("show2").style.display = 'none';
    // document.getElementById("ready2").style.display = 'block';
    
});


var userData= {}
var scoreData = {}
var scoreall = ""

var userRef = firebase.firestore().collection('users');


userRef.onSnapshot(function(snapshot) {
    snapshot.docChanges.forEach(function(change) {
        var username = change.doc.data().username
        username = username.toString()
         console.log(username)
        var points = change.doc.data().points
        points = points.toString()
        userData[username] = username
        scoreData[username] = points
        var scoreall = ""
        var userplay = "<u>Users</u><br/>"
        Object.keys(userData).forEach(function(element){
        	scoreall += "<li>"
            scoreall += userData[element]
            scoreall += "は"
            scoreall += scoreData[element]
            scoreall += "点</li>"
            userplay += userData[element]
            userplay += "<br />"
        })
        $("#score").fadeOut();
        // console.log(scoreData)
        document.getElementById("score").innerHTML = scoreall;
        document.getElementById("score2").innerHTML = userplay;
        $("#score").fadeIn();
    });

});


$('#reset').unbind().click(function() {
    if (confirm('進行中のゲームを中断してしまいますが、よろしいですか？')) {
        var jobskill_query = userRef;
        jobskill_query.get().then(function(querySnapshot) {
          querySnapshot.forEach(function(doc) {
            doc.ref.delete();
            console.log(doc)
          });
        });
        
        
        var readyRef2 = firebase.firestore().collection('ready').doc('ready');
        
        readyRef2.set({
            ready: 0,
        });
        
        window.location.reload(true);
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
        
        
        var readyRef2 = firebase.firestore().collection('ready').doc('ready');
        
        readyRef2.set({
            ready: 0,
        });
        window.location.reload(true);
    }
    
});

$('#ready').unbind().click(function() {
    // document.getElementById("ready2").style.display = 'none';
    var readyRef2 = firebase.firestore().collection('ready').doc('ready');
    
    readyRef2.set({
        ready: 1,
    });
});

// $('#readytochuu').unbind().click(function() {
//     // document.getElementById("ready2").style.display = 'none';
//     var readyRef2 = firebase.firestore().collection('ready').doc('ready');
    
//     readyRef2.set({
//         ready: 1,
//     });

// });

var readyRef = firebase.firestore().collection('ready');
readyRef.onSnapshot(function(snapshot) {
    snapshot.docChanges.forEach(function(change) {
        var username = document.getElementById("username").value;
        var ready = change.doc.data().ready
        if(username && ready==1){
            // document.getElementById("show").style.display = 'block';
            // document.getElementById("show2").style.display = 'none';
            // document.getElementById("ready2").style.display = 'none';
        }else if(!username && ready==1){
            document.getElementById("ingame").style.display = 'block';
            // document.getElementById("show2").style.display = 'none';
        }
    });
});



var PageTransitions = (function() {

	var $main = $( '#pt-main' ),
		$pages = $main.children( 'div.pt-page' ),
		$iterate = $( '#usertouroku' ),
		$iterate2 = $( '#ready' ),
		animcursor = 1,
		pagesCount = $pages.length,
		current = 0,
		isAnimating = false,
		endCurrPage = false,
		endNextPage = false,
		animEndEventNames = {
			'WebkitAnimation' : 'webkitAnimationEnd',
			'OAnimation' : 'oAnimationEnd',
			'msAnimation' : 'MSAnimationEnd',
			'animation' : 'animationend'
		},
		// animation end event name
		animEndEventName = animEndEventNames[ Modernizr.prefixed( 'animation' ) ],
		// support css animations
		support = Modernizr.cssanimations;
	
	function init() {

		$pages.each( function() {
			var $page = $( this );
			$page.data( 'originalClassList', $page.attr( 'class' ) );
		} );

		$pages.eq( current ).addClass( 'pt-page-current' );

		$( '#dl-menu' ).dlmenu( {
			animationClasses : { in : 'dl-animate-in-2', out : 'dl-animate-out-2' },
			onLinkClick : function( el, ev ) {
				ev.preventDefault();
				nextPage( el.data( 'animation' ) );
			}
		} );

		$iterate.on( 'click', function() {
			if( isAnimating ) {
				return false;
			}
			if( animcursor > 67 ) {
				animcursor = 1;
			}
			nextPage( animcursor );
			++animcursor;
		} );
		
		$iterate2.on( 'click', function() {
			// console.log("unchi")
			if( isAnimating ) {
				return false;
			}
			if( animcursor > 67 ) {
				animcursor = 1;
			}
			nextPage( animcursor );
			++animcursor;
		} );

	}

	function nextPage( animation ) {

		if( isAnimating ) {
			return false;
		}

		isAnimating = true;
		
		var $currPage = $pages.eq( current );

		if( current < pagesCount - 1 ) {
			++current;
		}
		else {
			current = 0;
		}

		var $nextPage = $pages.eq( current ).addClass( 'pt-page-current' ),
			outClass = '', inClass = '';

		switch( animation ) {

			case 1:
				outClass = 'pt-page-moveToLeft';
				inClass = 'pt-page-moveFromRight';
				break;
			case 2:
				outClass = 'pt-page-moveToRight';
				inClass = 'pt-page-moveFromLeft';
				break;
			case 3:
				outClass = 'pt-page-moveToTop';
				inClass = 'pt-page-moveFromBottom';
				break;
			case 4:
				outClass = 'pt-page-moveToBottom';
				inClass = 'pt-page-moveFromTop';
				break;
			case 5:
				outClass = 'pt-page-fade';
				inClass = 'pt-page-moveFromRight pt-page-ontop';
				break;
			case 6:
				outClass = 'pt-page-fade';
				inClass = 'pt-page-moveFromLeft pt-page-ontop';
				break;
			case 7:
				outClass = 'pt-page-fade';
				inClass = 'pt-page-moveFromBottom pt-page-ontop';
				break;
			case 8:
				outClass = 'pt-page-fade';
				inClass = 'pt-page-moveFromTop pt-page-ontop';
				break;
			case 9:
				outClass = 'pt-page-moveToLeftFade';
				inClass = 'pt-page-moveFromRightFade';
				break;
			case 10:
				outClass = 'pt-page-moveToRightFade';
				inClass = 'pt-page-moveFromLeftFade';
				break;
			case 11:
				outClass = 'pt-page-moveToTopFade';
				inClass = 'pt-page-moveFromBottomFade';
				break;
			case 12:
				outClass = 'pt-page-moveToBottomFade';
				inClass = 'pt-page-moveFromTopFade';
				break;
			case 13:
				outClass = 'pt-page-moveToLeftEasing pt-page-ontop';
				inClass = 'pt-page-moveFromRight';
				break;
			case 14:
				outClass = 'pt-page-moveToRightEasing pt-page-ontop';
				inClass = 'pt-page-moveFromLeft';
				break;
			case 15:
				outClass = 'pt-page-moveToTopEasing pt-page-ontop';
				inClass = 'pt-page-moveFromBottom';
				break;
			case 16:
				outClass = 'pt-page-moveToBottomEasing pt-page-ontop';
				inClass = 'pt-page-moveFromTop';
				break;
			case 17:
				outClass = 'pt-page-scaleDown';
				inClass = 'pt-page-moveFromRight pt-page-ontop';
				break;
			case 18:
				outClass = 'pt-page-scaleDown';
				inClass = 'pt-page-moveFromLeft pt-page-ontop';
				break;
			case 19:
				outClass = 'pt-page-scaleDown';
				inClass = 'pt-page-moveFromBottom pt-page-ontop';
				break;
			case 20:
				outClass = 'pt-page-scaleDown';
				inClass = 'pt-page-moveFromTop pt-page-ontop';
				break;
			case 21:
				outClass = 'pt-page-scaleDown';
				inClass = 'pt-page-scaleUpDown pt-page-delay300';
				break;
			case 22:
				outClass = 'pt-page-scaleDownUp';
				inClass = 'pt-page-scaleUp pt-page-delay300';
				break;
			case 23:
				outClass = 'pt-page-moveToLeft pt-page-ontop';
				inClass = 'pt-page-scaleUp';
				break;
			case 24:
				outClass = 'pt-page-moveToRight pt-page-ontop';
				inClass = 'pt-page-scaleUp';
				break;
			case 25:
				outClass = 'pt-page-moveToTop pt-page-ontop';
				inClass = 'pt-page-scaleUp';
				break;
			case 26:
				outClass = 'pt-page-moveToBottom pt-page-ontop';
				inClass = 'pt-page-scaleUp';
				break;
			case 27:
				outClass = 'pt-page-scaleDownCenter';
				inClass = 'pt-page-scaleUpCenter pt-page-delay400';
				break;
			case 28:
				outClass = 'pt-page-rotateRightSideFirst';
				inClass = 'pt-page-moveFromRight pt-page-delay200 pt-page-ontop';
				break;
			case 29:
				outClass = 'pt-page-rotateLeftSideFirst';
				inClass = 'pt-page-moveFromLeft pt-page-delay200 pt-page-ontop';
				break;
			case 30:
				outClass = 'pt-page-rotateTopSideFirst';
				inClass = 'pt-page-moveFromTop pt-page-delay200 pt-page-ontop';
				break;
			case 31:
				outClass = 'pt-page-rotateBottomSideFirst';
				inClass = 'pt-page-moveFromBottom pt-page-delay200 pt-page-ontop';
				break;
			case 32:
				outClass = 'pt-page-flipOutRight';
				inClass = 'pt-page-flipInLeft pt-page-delay500';
				break;
			case 33:
				outClass = 'pt-page-flipOutLeft';
				inClass = 'pt-page-flipInRight pt-page-delay500';
				break;
			case 34:
				outClass = 'pt-page-flipOutTop';
				inClass = 'pt-page-flipInBottom pt-page-delay500';
				break;
			case 35:
				outClass = 'pt-page-flipOutBottom';
				inClass = 'pt-page-flipInTop pt-page-delay500';
				break;
			case 36:
				outClass = 'pt-page-rotateFall pt-page-ontop';
				inClass = 'pt-page-scaleUp';
				break;
			case 37:
				outClass = 'pt-page-rotateOutNewspaper';
				inClass = 'pt-page-rotateInNewspaper pt-page-delay500';
				break;
			case 38:
				outClass = 'pt-page-rotatePushLeft';
				inClass = 'pt-page-moveFromRight';
				break;
			case 39:
				outClass = 'pt-page-rotatePushRight';
				inClass = 'pt-page-moveFromLeft';
				break;
			case 40:
				outClass = 'pt-page-rotatePushTop';
				inClass = 'pt-page-moveFromBottom';
				break;
			case 41:
				outClass = 'pt-page-rotatePushBottom';
				inClass = 'pt-page-moveFromTop';
				break;
			case 42:
				outClass = 'pt-page-rotatePushLeft';
				inClass = 'pt-page-rotatePullRight pt-page-delay180';
				break;
			case 43:
				outClass = 'pt-page-rotatePushRight';
				inClass = 'pt-page-rotatePullLeft pt-page-delay180';
				break;
			case 44:
				outClass = 'pt-page-rotatePushTop';
				inClass = 'pt-page-rotatePullBottom pt-page-delay180';
				break;
			case 45:
				outClass = 'pt-page-rotatePushBottom';
				inClass = 'pt-page-rotatePullTop pt-page-delay180';
				break;
			case 46:
				outClass = 'pt-page-rotateFoldLeft';
				inClass = 'pt-page-moveFromRightFade';
				break;
			case 47:
				outClass = 'pt-page-rotateFoldRight';
				inClass = 'pt-page-moveFromLeftFade';
				break;
			case 48:
				outClass = 'pt-page-rotateFoldTop';
				inClass = 'pt-page-moveFromBottomFade';
				break;
			case 49:
				outClass = 'pt-page-rotateFoldBottom';
				inClass = 'pt-page-moveFromTopFade';
				break;
			case 50:
				outClass = 'pt-page-moveToRightFade';
				inClass = 'pt-page-rotateUnfoldLeft';
				break;
			case 51:
				outClass = 'pt-page-moveToLeftFade';
				inClass = 'pt-page-rotateUnfoldRight';
				break;
			case 52:
				outClass = 'pt-page-moveToBottomFade';
				inClass = 'pt-page-rotateUnfoldTop';
				break;
			case 53:
				outClass = 'pt-page-moveToTopFade';
				inClass = 'pt-page-rotateUnfoldBottom';
				break;
			case 54:
				outClass = 'pt-page-rotateRoomLeftOut pt-page-ontop';
				inClass = 'pt-page-rotateRoomLeftIn';
				break;
			case 55:
				outClass = 'pt-page-rotateRoomRightOut pt-page-ontop';
				inClass = 'pt-page-rotateRoomRightIn';
				break;
			case 56:
				outClass = 'pt-page-rotateRoomTopOut pt-page-ontop';
				inClass = 'pt-page-rotateRoomTopIn';
				break;
			case 57:
				outClass = 'pt-page-rotateRoomBottomOut pt-page-ontop';
				inClass = 'pt-page-rotateRoomBottomIn';
				break;
			case 58:
				outClass = 'pt-page-rotateCubeLeftOut pt-page-ontop';
				inClass = 'pt-page-rotateCubeLeftIn';
				break;
			case 59:
				outClass = 'pt-page-rotateCubeRightOut pt-page-ontop';
				inClass = 'pt-page-rotateCubeRightIn';
				break;
			case 60:
				outClass = 'pt-page-rotateCubeTopOut pt-page-ontop';
				inClass = 'pt-page-rotateCubeTopIn';
				break;
			case 61:
				outClass = 'pt-page-rotateCubeBottomOut pt-page-ontop';
				inClass = 'pt-page-rotateCubeBottomIn';
				break;
			case 62:
				outClass = 'pt-page-rotateCarouselLeftOut pt-page-ontop';
				inClass = 'pt-page-rotateCarouselLeftIn';
				break;
			case 63:
				outClass = 'pt-page-rotateCarouselRightOut pt-page-ontop';
				inClass = 'pt-page-rotateCarouselRightIn';
				break;
			case 64:
				outClass = 'pt-page-rotateCarouselTopOut pt-page-ontop';
				inClass = 'pt-page-rotateCarouselTopIn';
				break;
			case 65:
				outClass = 'pt-page-rotateCarouselBottomOut pt-page-ontop';
				inClass = 'pt-page-rotateCarouselBottomIn';
				break;
			case 66:
				outClass = 'pt-page-rotateSidesOut';
				inClass = 'pt-page-rotateSidesIn pt-page-delay200';
				break;
			case 67:
				outClass = 'pt-page-rotateSlideOut';
				inClass = 'pt-page-rotateSlideIn';
				break;

		}

		$currPage.addClass( outClass ).on( animEndEventName, function() {
			$currPage.off( animEndEventName );
			endCurrPage = true;
			if( endNextPage ) {
				onEndAnimation( $currPage, $nextPage );
			}
		} );

		$nextPage.addClass( inClass ).on( animEndEventName, function() {
			$nextPage.off( animEndEventName );
			endNextPage = true;
			if( endCurrPage ) {
				onEndAnimation( $currPage, $nextPage );
			}
		} );

		if( !support ) {
			onEndAnimation( $currPage, $nextPage );
		}

	}

	function onEndAnimation( $outpage, $inpage ) {
		endCurrPage = false;
		endNextPage = false;
		resetPage( $outpage, $inpage );
		isAnimating = false;
	}

	function resetPage( $outpage, $inpage ) {
		$outpage.attr( 'class', $outpage.data( 'originalClassList' ) );
		$inpage.attr( 'class', $inpage.data( 'originalClassList' ) + ' pt-page-current' );
	}

	init();

	return { init : init };

})();