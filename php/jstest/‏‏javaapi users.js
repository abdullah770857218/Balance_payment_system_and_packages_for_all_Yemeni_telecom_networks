$(document).ready(function(){
  $("#offer_selecter").hide();
  // alert("onevent");
  alert("dsfds");
  selectd();//set the data of company name to selecter <option>
  datauser();
  function selectd(){
    

    $.ajax({
      url: "http://localhost/proto/api/Companies/Companies.php",
      method: 'GET',
      dataType:'json',
      data:{get_param:'value'},
      serverSide:true,
      
      success:function(emp ,_ms){
        $.each(emp, function(index){
          $("#select_compname").append("<option value="+emp[index].id+" onSelect=>"+emp[index].name+"</option>");
        })
        // alert();
      }
    });
    
  }// end funcation 

  function datauser()
  {
    $.ajax({
      url: "http://localhost/proto/api/Clients/Client.php?id="+$("#H_input_id").val()+"",
      method: 'GET',
      dataType:'json',
      data:{get_param:'value'},
      serverSide:true,
      success:function(emp ,_ms){
         emp.balence;
         $("#spot_balance").html(emp.balence);
         $("#spot_name_client").html(emp.name);
         // alert();
      }
    });
  }//end function datauser


  // selector the event click -----strat
  $("#select_compname").change(function(){
    datauser();
    $("#offer_selecter").show();
    $("#offer_selecter").children().remove();
    // alert($(this).val());
    $.ajax({
      url: "http://localhost/proto/api/Offers/Offeread.php?id="+$(this).val()+"",
      method: 'GET',
      dataType:'json',
      data:{get_param:'value'},
      serverSide:true,
      
      success:function(emp ,_ms){
        
        
        // var n_tbody = document.getElementById("tbodydata");
        
        $.each(emp, function(index){
          // alert(JSON.stringify(emp));
          $("#offer_selecter").append("<option value="+emp[index].id+" onSelect=>"+emp[index].Offer_Name+" ( "+emp[index].price+" ) "+" ريال "+"</option>");
          
          document.getElementById("select_compname").disabled=true;
          
          //-- end------ (loop each )------------------------------- 
        });
        //-- end------ (ajax_get)------------------------------- 
      }})
    });//end selector change ()
// add uints 
     $("#Button_exe").click(function(){
    // alert($("#num").val().length);    
       if($("#num").val()=="")
       {
         alert("ادخل الرقم من فضلك ");
       }else if($("#num").val().length<9)
       {
       var aff=$("#num").val().length;
       aff= 9-aff;
        alert("ينقصك ("+aff+")  ارقام اعد المحاولة ");
       }else
       {
         var data_ob = new Object();
         data_ob.id= $("#H_input_id").val();
         data_ob.company_id= $("#select_compname").val();
         data_ob.offer_id= $("#offer_selecter").val();
         data_ob.phone_customer= $("#num").val();
        var url = "http://localhost/proto/api/api_Execute_front.php";
var xhr = new XMLHttpRequest();
xhr.open("POST", url, true);
xhr.setRequestHeader('Content-type','application/json; charset=utf-8');
var json= JSON.stringify(data_ob);
xhr.onload = function () {
  var users = JSON.parse(xhr.responseText);
  if (xhr.readyState == 4 && xhr.status == "200") {
    alert(JSON.stringify(users.message));
    window.location.reload();
  } else {
    // alert(users.message);
  }
}
xhr.send(json);



       }
    })
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
          function auto_selecting (idd){
      
            $("#select_compname").val(idd).change();





            $("#offer_selecter").show();
            
          }
          
      
      function input_num(){
        
      //  var selec_comp = $("option");
      if($("#num").val() =='77')
      {

      
      document.getElementById("divid").style.background="rgb(190, 5, 75 )";
    }
      else if($("#num").val() =='73')
      {
        document.getElementById("divid").style.background="rgb(249, 227, 155 )";
      }
      if($("#num").val()=='71'){
        document.getElementById("divid").style.background="rgb(21, 94, 147)";
      }
      if($("#num").val()=='70'){
        document.getElementById("divid").style.backgroundColor="rgb(127,62,152,130)";
      }
       
      if($("#num").val()=='7'){
        document.getElementById("divid").style.background="";
      }
       
    $.ajax({
      url: "http://localhost/proto/api/Companies/Companies.php",
      method: 'GET',
      dataType:'json',
      data:{get_param:'value'},
      serverSide:true,
      
      success:function(emp ,_ms){
        $.each(emp, function(index){
        if(emp[index].phone==$("#num").val()){

          auto_selecting(emp[index].id);
        }
        // else if(emp[index].phone !==$("#num").val())
      
   
        
        })
        // alert();
      }
    });
     
     
        
      }

      