$(document).ready(function(){
  $("#button_log").click(function(){
    var data_ob = new Object();
data_ob.username=  $("#username_log").val();    
data_ob.pass=  $("#password_log").val();
   
var url = "http://localhost/proto/api/api login.php";
var xhr = new XMLHttpRequest();
xhr.open("POST", url, true);
xhr.setRequestHeader('Content-type','application/json; charset=utf-8');
var json= JSON.stringify(data_ob);
xhr.onload = function () {
  var users = JSON.parse(xhr.responseText);
  if (xhr.readyState == 4 && xhr.status == "200") {
    alert(JSON.stringify(users.message));
     window.location.href="http://localhost/proto/php/index.php";
  } else {
      // alert(users.message);
  }
}
xhr.send(json);


})//end click query

 function logIn(){



 }//end logIn function 
})//end

