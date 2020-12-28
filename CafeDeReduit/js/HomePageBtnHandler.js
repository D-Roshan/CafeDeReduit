menuCounter= 0;
orderCounter= 0;
contactCounter= 0;
$(document).ready(function(){
  $('#Btnmenu').click(function(){

    $('#menuData').delay(10).fadeToggle();
    menuCounter = menuCounter + 1;
    if(menuCounter==1){
      document.getElementById("Btnmenu").innerHTML = "Hide the menu";
    }
    else{
      document.getElementById("Btnmenu").innerHTML = "Access our menu";
      menuCounter=0;
    }
    
  });

  $('#Btnorder').click(function(){

$('#orderData').delay(10).fadeToggle();
orderCounter = orderCounter + 1;
if(orderCounter==1){
document.getElementById("Btnorder").innerHTML = "Hide order form";
}
else{
document.getElementById("Btnorder").innerHTML = "Place an order";
orderCounter=0;
}

});


$('#Btncontact').click(function(){

$('#ContactData').delay(10).fadeToggle();
contactCounter = contactCounter + 1;
if(contactCounter==1){
document.getElementById("Btncontact").innerHTML = "Hide Contact details";
}
else{
document.getElementById("Btncontact").innerHTML = "Contact us";
contactCounter=0;
}

});
 

})