var msg_cancel_btns = document.getElementsByClassName('message_cancel_btn');

for (var i=0; i<msg_cancel_btns.length; i++){
  msg_cancel_btns[i].addEventListener('click', function(){
    this.parentElement.parentElement.parentElement.style.display = 'none';
  });
}

var checkoutForm = document.getElementById('checkoutForm');
var checkoutErrorDiv = document.getElementById('checkoutError');
var formSubmitBtn = document.getElementById('formSubmitBtn');
var errorPTag = document.getElementById('frontendError');

checkoutForm.addEventListener('submit', function(event){
  event.preventDefault();
  checkoutErrorDiv.classList.add("hide");
  formSubmitBtn.disabled = true;

  Stripe.setPublishableKey('pk_test_OvHcW4iV4rYhVcRvdSbBAfz3');

  Stripe.card.createToken({
    name: $("#card-holdername").val(),
    number: $('#card-number').val(),
    cvc: $('#card-cvc').val(),
    exp_month: $('#card-expiry-month').val(),
    exp_year: $('#card-expiry-year').val()
  }, stripeResponseHandler);
  return false;
});

function stripeResponseHandler(status, response){
  if(response.error){
    checkoutErrorDiv.classList.remove("hide");
    errorPTag.innerText = response.error.message;
    formSubmitBtn.disabled = false;
  } else {
    var token = response.id;
    var stripeInputElem = document.createElement("input");
    stripeInputElem.type = "hidden";
    stripeInputElem.name = "stripeToken";
    stripeInputElem.value = token;
    checkoutForm.appendChild(stripeInputElem);
    checkoutForm.submit();
  }
}
