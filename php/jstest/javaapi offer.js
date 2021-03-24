$(document).ready(function(){
  
  selectd();
  function selectd(){

    $.ajax({
      url: "http://localhost/proto/api/Companies/Companies.php",
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

  }// end funcation 

  // selector the event click -----strat
  $("#sele_comp").change(function(){
    $("#tbodydata").children().remove();
// alert($(this).val());
$.ajax({
  url: "http://localhost/proto/api/Offers/Offeread.php?id="+$(this).val()+"",
  method: 'GET',
  dataType:'json',
  data:{get_param:'value'},
  serverSide:true,

  success:function(emp ,_ms){

    var array_tr = new Array;
var n_tr_td = new Array;

var n_tbody = document.getElementById("tbodydata");
// var n_tbody = document.getElementById("tbodydata");

$.each(emp, function(index){

// alert(JSON.stringify(emp) );
array_tr[index] =document.createElement("tr");
    array_tr[index].setAttribute("id","tr"+index);
    n_tbody.appendChild(array_tr[index]);


        n_tr_td[index]=document.createElement("input");
        n_tr_td[index].setAttribute("type","hidden");
        n_tr_td[index].setAttribute("id",emp[index].id);
      n_tr_td[index].innerHTML=emp[index].id;
      array_tr[index].appendChild(n_tr_td[index]);

        n_tr_td[index]=document.createElement("td");
      n_tr_td[index].innerHTML=emp[index].Offer_Name;
      array_tr[index].appendChild(n_tr_td[index]);
    
      n_tr_td[index]=document.createElement("td");
      n_tr_td[index].innerHTML=emp[index].price;
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
      var new_labs=document.createElement("label");
      new_labs.setAttribute("class","custom-control-label");
      new_labs.setAttribute("for","in_"+index);
        var inps = document.getElementById("in_"+index);
        new_labs.innerHTML="موقف";
        if(emp[index].status == 1)
        {
          
         inps.setAttribute("checked","checked");
         new_labs.innerHTML="مفتوح";
       }
       
       nes_div.appendChild(new_inp);
       nes_div.appendChild(new_labs);
       
   var new_buttons = document.createElement("button");
   new_buttons.setAttribute("class","btn btn-primary");
   new_buttons.setAttribute("data-toggle","modal");
   new_buttons.setAttribute("Onclick","edit_offer("+emp[index].id+","+emp[index].company_id+","+JSON.stringify(emp[index].Offer_Name)+","+ emp[index].price+","+JSON.stringify(emp[index].description)+","+JSON.stringify(emp[index].creat_at)+")");
   //  new_buttons.addEventListener('onclick');
   new_buttons.setAttribute("data-target","#exampleModal");
   new_buttons.innerHTML="تعديل";
   array_tr[index].appendChild(new_buttons);

   n_tr_td[index]=document.createElement("td");
   n_tr_td[index].setAttribute("type","hidden");
   n_tr_td[index].setAttribute("id","id_"+index);
   n_tr_td[index].setAttribute("value",emp[index].id);
   array_tr[index].appendChild(n_tr_td[index]);
   

              //-- end------ (loop each )------------------------------- 
        });
  //-- end------ (ajax_get)------------------------------- 
    }})
  });//end selector
  
  // same_jaj();
  
  //-- end------ (show table data)------------------------------- 
  // show();  for run the show function 
  function show (com_id){
  //-- start------ (ajax_get)-------------------------------
  // $("#dataTable").onload(function(){
    

  
    // }) 
    }

  //-- end------ (show table data)------------------------------- 


//button save edit____________
     $("#save_b").click(function(){
      var data_ob = {};
      data_ob.id = $("#e_id").val();
      data_ob.company_id   =   $("#a_sele_comp").val();
      data_ob.name =    $("#e_name").val();
      data_ob.price =   $("#e_price").val();
      data_ob.description = $("#e_desc").val();
      data_ob.creat_at =$("#e_date_creat").val();
      
// alert(data_ob);
 var url = "http://localhost/proto/api/Offers/Update.php";
var xhr = new XMLHttpRequest();
xhr.open("PUT", url, true);
xhr.setRequestHeader('Content-type','application/json; charset=utf-8');
var json= JSON.stringify(data_ob);
xhr.onload = function () {
  var users = JSON.parse(xhr.responseText);
  if (xhr.readyState == 4 && xhr.status == "200") {
      alert(users.message);
      
  } else {
      alert(users.message);
  }
}
xhr.send(json);

//--------------end save edit    
     }); 
//------start ---add comp

      //button save add_offer

      // function same_jaj(){
      //   $("#tbodydata").prepend("<tr id= hhh></tr>");
      //   var data_ob = new Object();
      //    data_ob.name            =$("#a_name").val();
      //     data_ob.phone         =$("#a_phone").val();
      //     data_ob.address       =$("#a_address").val();
      //     data_ob.api_url       =$("#a_api").val();
      //     data_ob.status        =$("#a_status").val();
      //     data_ob.balence       =$("#a_balance").val();
      //     data_ob.promotian     =$("#a_promotion").val();
      //     data_ob.access_token  =$("#a_access_token").val();
      //     data_ob.creat_at=$("#a_date_creat").val();
      //     $("#hhh").append("<td>"+data_ob.name+"</td");
      //     $("#hhh").append("<td>"+data_ob.phone  +"</td");
      //     $("#hhh").append("<td>"+data_ob.balence  +"</td");
      //     $("#hhh").append("<td>"+data_ob.address +"</td");
      //     $("#hhh").append("<td>"+data_ob.creat_at +"</td");
      //     $("#hhh").append("<td>"+data_ob.api_url +"</td");
      //     $("#hhh").append("<td>"+data_ob.access_token +"</td");
      //     // $("#hhh").append("<td>"+data_ob.status +"</td");
      //     $("#hhh").append("<td>"+data_ob.promotian +"</td");
      //     $("#hhh").append("<button id=ee class='btn btn-primary' data-toggle='modal'  data-target='#exampleModal'>تعديل</button>");

      //   // alert("hellow");
        
      //   }
      $("#ADD_B").click(function(){
        // alert("onevent");
       var data_ob = {};
       // data_ob.id = $("#e_id").val();
      //  alert("on event");
       data_ob.company_id   =   $("#add_select_offer_comp").val();
       data_ob.name =    $("#a_name").val();
       data_ob.price =   $("#a_price").val();
       data_ob.description = $("#a_desc").val();
       data_ob.creat_at =$("#a_date_creat").val();
       
       
 // alert(data_ob);
  var url = "http://localhost/proto/api/Offers/Create.php";
 var xhr = new XMLHttpRequest();
 xhr.open("POST", url, true);
 xhr.setRequestHeader('Content-type','application/json; charset=utf-8');
 var json= JSON.stringify(data_ob);
 xhr.onload = function () {
   var users = JSON.parse(xhr.responseText);
   if (xhr.readyState == 4 && xhr.status == "200") {
       alert(users.message);
       window.location.reload();
       
   } else {
       alert(users.message);
   }
 }
 xhr.send(json);
 
 //--------------end save edit    
      });        
        
      })//end
      
      
              function edit_offer( id ,c_id,c_name,price,c_desc,c_date)
              {
                // alert("in the edit");
                $("#a_sele_comp").val(c_id);
                $("#e_name").val(c_name);
                $("#e_price").val(price);
                $("#e_desc").val(c_desc);
                $("#e_date_creat").val(c_date);
                $("#e_id").val(id);
            
               
              }
                 
     

