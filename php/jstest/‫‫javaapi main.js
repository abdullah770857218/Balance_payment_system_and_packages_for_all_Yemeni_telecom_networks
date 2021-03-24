$(document).ready(function(){
// alert("nas");
  show();
  // same_jaj();
  get_data_users();
  get_data_companys();
function get_data_users(){
  $.ajax({
    url: "http://localhost/proto/api/ManUsers/ManUsers.php",
    method: 'GET',
    dataType:'json',
    data:{get_param:'value'},
    serverSide:true,

    success:function(emp ,_ms){
      $.each(emp, function(index){
      $("select").append("<option value="+emp[index].id+" onSelect=>"+emp[index].name+"</option>");
       })
      // alert();
    }
  });
}//end function get_data_users
function get_data_companys(){
  $.ajax({
    url: "http://localhost/proto/api/Companies/Companies.php",
    method: 'GET',
    dataType:'json',
    data:{get_param:'value'},
    serverSide:true,
    
    success:function(emp ,_ms){
      var max=0;
      $.each(emp, function(index){
      //  max +=parseInt();
      max+=parseInt(emp[index].balence,10); 
       })
       $("#total_money_company").html(max);
       
    }
  });
}//end function get_data_users
  //-- end------ (show table data)------------------------------- 
 function show (){
  //-- start------ (ajax_get)-------------------------------
  // $("#dataTable").onload(function(){
    

  $.ajax({
    url: "http://localhost/proto/api/Clients/Clients.php",
    method: 'GET',
    dataType:'json',
    data:{get_param:'value'},
    serverSide:true,

    success:function(emp ,_ms){
      var array_tr = new Array;
      var n_tr_td = new Array;
$("#total_clients").html(emp.length);
var n_tbody = document.getElementById("tbodydata");

 $.each(emp, function(index){

    array_tr[index] =document.createElement("tr");
    array_tr[index].setAttribute("id","tr"+index);
    n_tbody.appendChild(array_tr[index]);


        n_tr_td[index]=document.createElement("input");
        n_tr_td[index].setAttribute("type","hidden");
        n_tr_td[index].setAttribute("id",emp[index].id);
      n_tr_td[index].innerHTML=emp[index].id;
      array_tr[index].appendChild(n_tr_td[index]);

        n_tr_td[index]=document.createElement("td");
      n_tr_td[index].innerHTML=emp[index].name;
      array_tr[index].appendChild(n_tr_td[index]);

      n_tr_td[index]=document.createElement("td");
      n_tr_td[index].innerHTML=emp[index].phone;
      array_tr[index].appendChild(n_tr_td[index]);
   
      n_tr_td[index]=document.createElement("td");
      n_tr_td[index].innerHTML=emp[index].balence;
      array_tr[index].appendChild(n_tr_td[index]);
   
      n_tr_td[index]=document.createElement("td");
      n_tr_td[index].innerHTML=emp[index].user_name;
      array_tr[index].appendChild(n_tr_td[index]);
   
      var new_td =document.createElement("td");
      new_td.setAttribute("id","tr_bu"+index);
      array_tr[index].appendChild(new_td);
      
      var td_news = document.getElementById("tr_bu"+index);
      var new_dv = document.createElement("div");
      new_dv.setAttribute("class","custom-control custom-checkbox small");
      new_dv.setAttribute("id","div_"+index);
      td_news.appendChild(new_dv);
      var nes_div = document.getElementById("div_"+index);
      var new_inp = document.createElement("input");
      new_inp.setAttribute("class","custom-control-input");
      new_inp.setAttribute("type","checkbox");
      
      
      new_inp.setAttribute("id","in_"+index);
      nes_div.appendChild(new_inp);
       var new_labs=document.createElement("label");
       new_labs.setAttribute("class","custom-control-label");
       new_labs.setAttribute("for","in_"+index);
        var inps = document.getElementById("in_"+index);
       new_labs.innerHTML="خامل";
       nes_div.appendChild(new_labs);
       if(emp[index].status == 1)
       {
       
         new_inp.setAttribute("checked","checked");
         new_labs.innerHTML="ناشط";
       }

       var new_buttons = document.createElement("button");
       new_buttons.setAttribute("class","btn btn-primary");
       new_buttons.setAttribute("data-toggle","modal");
       new_buttons.setAttribute("Onclick","edit_clients("+emp[index].id+","+emp[index].user_id+","+JSON.stringify(emp[index].name)+","+emp[index].phone+","+JSON.stringify(emp[index].city) +","+JSON.stringify(emp[index].address)+","+JSON.stringify(emp[index].password)+","+emp[index].status+","+emp[index].balence+","+JSON.stringify(emp[index].last_login)+","+JSON.stringify(emp[index].token)+","+JSON.stringify(emp[index].creat_date)+")");
       new_buttons.setAttribute("data-target","#exampleModal2");
       new_buttons.innerHTML="اضافة رصيد";
       array_tr[index].appendChild(new_buttons);

       var new_buttons = document.createElement("button");
       new_buttons.setAttribute("class","btn btn-dark");
       new_buttons.setAttribute("data-toggle","modal");
       new_buttons.setAttribute("Onclick","edit_clients("+emp[index].id+","+emp[index].user_id+","+JSON.stringify(emp[index].name)+","+emp[index].phone+","+JSON.stringify(emp[index].city) +","+JSON.stringify(emp[index].address)+","+JSON.stringify(emp[index].password)+","+emp[index].status+","+emp[index].balence+","+JSON.stringify(emp[index].last_login)+","+JSON.stringify(emp[index].token)+","+JSON.stringify(emp[index].creat_date)+")");
      //  new_buttons.addEventListener('onclick');
       new_buttons.setAttribute("data-target","#exampleModal3");
       new_buttons.innerHTML="تعديل";
       array_tr[index].appendChild(new_buttons);
      

   
   


                //-- end------ (loop each )------------------------------- 
          });
    //-- end------ (ajax_get)------------------------------- 
      }})
    // }) 
    }

  //-- end------ (show table data)------------------------------- 


//button save edit____________
     $("#B_edit").click(function(){
      var data_ob = {};
      data_ob.id=       $("#e_id").val(); 
      data_ob.user_id=$("#e_user_id").val();
      data_ob.name=$("#e_name").val();
      data_ob.phone=$("#e_phone").val();
      data_ob.city=$("#e_city").val();
      data_ob.address=$("#e_address").val();
      data_ob.password=$("#e_password").val();
      data_ob.status=$("#e_status").val();
      data_ob.balence=$("#e_balence").val();
      data_ob.last_login=$("#e_last_login").val();
      data_ob.token=$("#e_token").val();
      data_ob.creat_date=$("#e_creat_date").val();
// alert(data_ob);
 var url = "http://localhost/proto/api/Clients/Update.php";
var xhr = new XMLHttpRequest();
xhr.open("PUT", url, true);
xhr.setRequestHeader('Content-type','application/json; charset=utf-8');
var json= JSON.stringify(data_ob);
xhr.onload = function () {
  var users = JSON.parse(xhr.responseText);
  if (xhr.readyState == 4 && xhr.status == "200") {
      alert(users.message);
      window.location.reload();
           

      // }
    //  alert(s);
  } else {
      alert(users.message);
  }
}
xhr.send(json);
//--------------end save edit    
     }); 
     //update the balance of payment prossecssing
     $("#pay_balance_B").click(function(){
      var max_2 = 0;
       var data_ob={};
      data_ob.id=       $("#e_id").val(); 
      data_ob.user_id=$("#e_user_id").val();
      data_ob.name=$("#e_name").val();
      data_ob.phone=$("#e_phone").val();
      data_ob.city=$("#e_city").val();
      data_ob.address=$("#e_address").val();
      data_ob.password=$("#e_password").val();
      data_ob.status=$("#e_status").val();
      max_2+=parseInt($("#e_balence").val(),10);
      max_2+=parseInt($("#payment").val(),10);
      data_ob.balence=max_2;
      data_ob.last_login=$("#e_last_login").val();
      data_ob.token=$("#e_token").val();
      data_ob.creat_date=$("#e_creat_date").val();
// alert(max_2);
 var url = "http://localhost/proto/api/Clients/Update.php";
var xhr = new XMLHttpRequest();
xhr.open("PUT", url, true);
xhr.setRequestHeader('Content-type','application/json; charset=utf-8');
var json= JSON.stringify(data_ob);
xhr.onload = function () {
  var users = JSON.parse(xhr.responseText);
  if (xhr.readyState == 4 && xhr.status == "200") {
      alert(users.message);
      window.location.reload();
           

      // }
    //  alert(s);
  } else {
      alert(users.message);
  }
}
xhr.send(json);
// --------------end save edit    
     }); 
    
//------start ---add comp

      $("#add_b").click(function(){

        var data_ob = {};
        data_ob.name=$("#a_name").val();
        data_ob.user_id=$("#user_id").val();
        data_ob.phone=$("#a_phone").val();
        data_ob.password=$("#a_password").val();
        data_ob.address=$("#a_address").val();
        data_ob.activety=$("#a_activety").val();
        data_ob.city=$("#a_city").val();
        data_ob.status=$("#a_status").val();
        data_ob.balence=$("#a_balance").val();
        data_ob.token=$("#a_token").val();
        data_ob.last_update=$("#a_last_update").val();
        data_ob.last_login=$("#a_last_login").val();
        // data_ob.access_token=$("#a_access_token").val();
        data_ob.creat_date=$("#a_date_creat").val();
        var url = "http://localhost/proto/api/Clients/Create.php";
var xhr = new XMLHttpRequest();
xhr.open("POST", url, true);
xhr.setRequestHeader('Content-type','application/json; charset=utf-8');
var json= JSON.stringify(data_ob);
xhr.onload = function () {
  var users = JSON.parse(xhr.responseText);
  if (xhr.readyState == 4 && xhr.status == "200") {
      alert(users.message);
      window.location.reload();
      // same_jaj();
  } else {
      alert(users.message);
  }
}
xhr.send(json);
// same_jaj();
      })//end add comp
       
     
      function same_jaj(){
        $("#tbodydata").prepend("<tr id= hhh></tr>");
        var data_ob = new Object();
         data_ob.name           =$("#a_name").val();
          data_ob.phone         =$("#a_phone").val();
          data_ob.address       =$("#a_address").val();
          data_ob.api_url       =$("#a_api").val();
          data_ob.status        =$("#a_status").val();
          data_ob.balence       =$("#a_balance").val();
          data_ob.promotian     =$("#a_promotion").val();
          data_ob.access_token  =$("#a_access_token").val();
          data_ob.creat_at=$("#a_date_creat").val();
          $("#hhh").append("<td>"+data_ob.name+"</td");
          $("#hhh").append("<td>"+data_ob.phone  +"</td");
          $("#hhh").append("<td>"+data_ob.balence  +"</td");
          $("#hhh").append("<td>"+data_ob.address +"</td");
          $("#hhh").append("<td>"+data_ob.creat_at +"</td");
          $("#hhh").append("<td>"+data_ob.api_url +"</td");
          $("#hhh").append("<td>"+data_ob.access_token +"</td");
          // $("#hhh").append("<td>"+data_ob.status +"</td");
          $("#hhh").append("<td>"+data_ob.promotian +"</td");
          $("#hhh").append("<button id=ee class='btn btn-primary' data-toggle='modal'  data-target='#exampleModal'>تعديل</button>");

        // alert("hellow");
        
        }
        


})//end
function edit_clients(c_id,c_user_id,c_name,c_phone,c_city,c_address,c_password,c_status,c_balence,c_last_login,c_token, c_creat_date)
{
  // edit_clients("+emp[index].id+","+emp[index].status+","+emp[index].phone+","+emp[index].name+","+JSON.stringify( emp[index].address)+","+emp[index].user_id+","+JSON.stringify(emp[index].creat_at)+","+JSON.stringify(emp[index].c_city)+")
$("#e_id").val(c_id); 
$("#e_user_id").val(c_user_id);
$("#e_name").val(c_name);
$("#e_phone").val(c_phone);
$("#e_city").val(c_city);
$("#e_address").val(c_address);
$("#e_password").val(c_password);
$("#e_status").val(c_status);
$("#e_balence").val(c_balence);
$("#e_last_login").val(c_last_login);
$("#e_token").val(c_token);
$("#e_creat_date").val(c_creat_date);
// (emp[index].id+","+emp[index].user_id+","+emp[index].name+","+emp[index].phone+","+emp[index].city+","+emp[index].address+","+emp[index].password+","+emp[index].status+","+emp[index].balence+","+emp[index].last_login+","+emp[index].token+","+emp[index].creat_date

$.ajax({
url: 'http://localhost/proto/api/Companies/Update.php',
type: 'GET',


})

}


