var $cont = document.querySelector('.cont');
var $elsArr = [].slice.call(document.querySelectorAll('.el'));
var $closeBtnsArr = [].slice.call(document.querySelectorAll('.el__close-btn'));

setTimeout(function() {
  $cont.classList.remove('s--inactive');
}, 200);

$elsArr.forEach(function($el) {
  $el.addEventListener('click', function() {
    if (this.classList.contains('s--active')) return;
    $cont.classList.add('s--el-active');
    this.classList.add('s--active');
  });
});

$closeBtnsArr.forEach(function($btn) {
  $btn.addEventListener('click', function(e) {
    e.stopPropagation();
    $cont.classList.remove('s--el-active');
    document.querySelector('.el.s--active').classList.remove('s--active');
  });
});

// BOTAN
function image1() {
    window.location.href = "game";
}
function image2() {
    window.location.href = "answer";
}
function image3() {
    window.location.href = "banana";
}
function image4() {
    window.location.href = "shooting";
}

// ログインしていないならはじく
function WhichButton(event) {
    alert("まずはログインしてね")
}

$('#chat').draggable();