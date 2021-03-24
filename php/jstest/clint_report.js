$(document).ready(function(){
  //  alert("fhg");
  show();

 function show (){
  //-- start------ (ajax_get)-------------------------------
  // $("#dataTable").onload(function(){
    

  $.ajax({
    url: "http://localhost/proto/api/apiuserreport.php?client_phone="+$("#hide_client_phone").val(),
    method: 'GET',
    dataType:'json',
    data:{get_param:'value'},
    serverSide:true,

    success:function(emp ,_ms){
      var array_tr = new Array;
      var n_tr_td = new Array;
      // alert(emp);
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



})//end



