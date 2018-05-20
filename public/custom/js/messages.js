var msg_cancel_btns = document.getElementsByClassName('message_cancel_btn');

for (var i=0; i<msg_cancel_btns.length; i++){
  msg_cancel_btns[i].addEventListener('click', function(){
    this.parentElement.parentElement.parentElement.style.display = 'none';
  });
}
