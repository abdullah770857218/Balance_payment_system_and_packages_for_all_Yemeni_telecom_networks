$(document).ready(function(){
   
  show();
  // same_jaj();
 alert("hi");
  //-- end------ (show table data)------------------------------- 
 function show (){
  //-- start------ (ajax_get)-------------------------------
  // $("#dataTable").onload(function(){
    

  $.ajax({
    url: "http://localhost/proto/api/Proccesses/Proccesses.php",
    method: 'GET',
    dataType:'json',
    data:{get_param:'value'},
    serverSide:true,

    success:function(emp ,_ms){
      var array_tr = new Array;
      var n_tr_td = new Array;

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
      n_tr_td[index].innerHTML=emp[index].id;
      array_tr[index].appendChild(n_tr_td[index]);
      n_tr_td[index]=document.createElement("td");
      n_tr_td[index].innerHTML=emp[index].company_name;
      array_tr[index].appendChild(n_tr_td[index]);
   
      n_tr_td[index]=document.createElement("td");
      n_tr_td[index].innerHTML=emp[index].offer_name;
      array_tr[index].appendChild(n_tr_td[index]);
   
      n_tr_td[index]=document.createElement("td");
      n_tr_td[index].innerHTML=emp[index].client_phone;
      array_tr[index].appendChild(n_tr_td[index]);
   
      n_tr_td[index]=document.createElement("td");
      n_tr_td[index].innerHTML=emp[index].price;
      array_tr[index].appendChild(n_tr_td[index]);
   
      n_tr_td[index]=document.createElement("td");
      n_tr_td[index].innerHTML=emp[index].phone_customer;
      array_tr[index].appendChild(n_tr_td[index]);
   
      n_tr_td[index]=document.createElement("td");
      n_tr_td[index].innerHTML=emp[index].creat_at;
      array_tr[index].appendChild(n_tr_td[index]);
   
      n_tr_td[index]=document.createElement("td");
      n_tr_td[index].innerHTML=emp[index].creat_at;
      array_tr[index].appendChild(n_tr_td[index]);

      n_tr_td[index]=document.createElement("td");

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
       new_labs.innerHTML="فشل";
       nes_div.appendChild(new_labs);
       if(emp[index].status == 1)
       {
       
         new_inp.setAttribute("checked","checked");
         new_labs.innerHTML="نجاح";
       }


   
   


                //-- end------ (loop each )------------------------------- 
          });
    //-- end------ (ajax_get)------------------------------- 
      }})
    // }) 
    }

  //-- end------ (show table data)------------------------------- 


//button save edit____________
     $("#save_b").click(function(){
      var data_ob = {};
      data_ob.id=$("#e_id").val();
      data_ob.name=$("#e_name").val();
      data_ob.phone=$("#e_phone").val();
      data_ob.address=$("#e_address").val();
      data_ob.api_url=$("#e_api").val();
      data_ob.status=$("#e_status").val();
      data_ob.balence=$("#e_balance").val();
      data_ob.promotian=$("#e_promotion").val();
      data_ob.access_token=$("#e_access_token").val();
      data_ob.creat_at=$("#e_date_creat").val();
// alert(data_ob);
 var url = "http://localhost/proto/api/Companies/Update.php";
var xhr = new XMLHttpRequest();
xhr.open("PUT", url, true);
xhr.setRequestHeader('Content-type','application/json; charset=utf-8');
var json= JSON.stringify(data_ob);
xhr.onload = function () {
  var users = JSON.parse(xhr.responseText);
  if (xhr.readyState == 4 && xhr.status == "200") {
      alert(users.message);
      var allvalu = document.getElementById(data_ob.id);
      var result =[];
              var noss = allvalu.parentNode;
                       var s = noss.getAttribute("id");
                       $("#"+s).remove();
                      $("#tbodydata").prepend("<tr id=put></t>");
                      var bod = document.getElementById("tbodydata");
                      $("#put").append("<td>"+data_ob.name+"</td>");
                      $("#put").append("<td>"+data_ob.phone  +"</td>");
                      $("#put").append("<td>"+data_ob.balence  +"</td>");
                      $("#put").append("<td>"+data_ob.address +"</td>");
                      $("#put").append("<td>"+data_ob.creat_at +"</td>");
                      $("#put").append("<td>"+data_ob.api_url +"</td>");
                      $("#put").append("<td>"+data_ob.access_token +"</td>");
                      $("#put").append("<td>"+data_ob.access_token +"</td>");
                      $("#put").append("<td>"+data_ob.access_token +"</td>");
                      $("#put").append("<button id=ee class='btn btn-primary' data-toggle='modal'  data-target='#exampleModal'>تعديل</button>");

           
                            // alert(s);
      // alert(allvalu[0]);
      // for(var i =0;i<allvalu.length;i++)
      // {

        
      //     if(allvalu[i].innerHTML==data_ob.id);
      //       {
         
      //         alert(allvalu[i].innerHTML);
      //         break;
      //       }

      // }
    //  alert(s);
  } else {
      alert(users.message);
  }
}
xhr.send(json);

//--------------end save edit    
     }); 
//------start ---add comp

      $("#add_b").click(function(){

        var data_ob = {};
        data_ob.name=$("#a_name").val();
        data_ob.phone=$("#a_phone").val();
        data_ob.address=$("#a_address").val();
        data_ob.api_url=$("#a_api").val();
        data_ob.status=$("#a_status").val();
        data_ob.balence=$("#a_balance").val();
        data_ob.promotian=$("#a_promotion").val();
        data_ob.access_token=$("#a_access_token").val();
        data_ob.creat_at=$("#a_date_creat").val();
        var url = "http://localhost/proto/api/Companies/Create.php";
var xhr = new XMLHttpRequest();
xhr.open("POST", url, true);
xhr.setRequestHeader('Content-type','application/json; charset=utf-8');
var json= JSON.stringify(data_ob);
xhr.onload = function () {
  var users = JSON.parse(xhr.responseText);
  if (xhr.readyState == 4 && xhr.status == "200") {
      alert(users.message);
      same_jaj();
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
         data_ob.name            =$("#a_name").val();
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
function edit_comp( id ,c_status,c_phone,c_name,c_balance ,c_address , c_date_creat,c_api,c_access_token,c_promotion)
{
  
 var c_stat =document.getElementById("e_status");
 c_stat.setAttribute("value",c_status);
  
 var c_id =document.getElementById("e_id");
 c_id.setAttribute("value",id);

 var name =document.getElementById("e_name");
 name.setAttribute("value",c_name);

 var phone =document.getElementById("e_phone");
 phone.setAttribute("value",c_phone);

 var balance =document.getElementById("e_balance");
 balance.setAttribute("value",c_balance);

 var address =document.getElementById("e_address");
 address.setAttribute("value",c_address);

 var date_create =document.getElementById("e_date_creat");
 date_create.setAttribute("value",c_date_creat);

 var api_u =document.getElementById("e_api");
 api_u.setAttribute("value",c_api);

 var access_tkn =document.getElementById("e_access_token");
 access_tkn.setAttribute("value",c_access_token);

 var promo =document.getElementById("e_promotion");
 promo.setAttribute("value",c_promotion);
 alert(form.input);

$.ajax({
url: 'http://localhost/proto/api/Companies/Update.php',
type: 'PUT',


})

}


