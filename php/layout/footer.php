 <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span> حقوق الطبع محفوظه   &copy; لدى    </span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

        
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
     
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../jstest/‏‏javaapi users.js"></script>  
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>



<script>
	function dalh(){
		var element = document.getElementById("num").value;
		if(element==77){
      document.getElementById("divid").style.background="red";
      
						
		}
		if(element==73){
			document.getElementById("divid").style.background="yellow";
		}
		if(element==71){
			document.getElementById("divid").style.background="blue";
		}
		if(element==70){
			document.getElementById("divid").style.background="purple";
		}
		if(element==7){
			document.getElementById("divid").style.background="";
			
		}	
		
	}
	</script>



<script>
$(document).ready(function(){
  $("#nas").click(function(){
// alert ($("#nas").val());
var re = $("#nas").val();
if(re=="MTN")
{
  $("#mtn").show();
  $("#yemen").hide();
  $("#sba").hide();
  $("#yy").hide();
    $("#tan").show();
}
else if(re=="Yemen Mobile")
{
  $("#yemen").show();
  $("#mtn").hide();
  $("#sba").hide();
  $("#yy").hide();
     $("#tan").show();
}
else if(re=="Sabafon")
{
  $("#sba").show();
  $("#mtn").hide();
  $("#yemen").hide();
  $("#yy").hide();
     $("#tan").show();
}
else if(re=="Y")
{
  $("#yy").show();
  $("#sba").hide();
  $("#mtn").hide();
  $("#yemen").hide();
     $("#tan").show();
}


else
{
    
  $("#yy").hide();
  $("#mtn").hide();
  $("#yemen").hide();
  $("#sba").hide();
    
}

});});

</script>
<script src="js/jquery-3.5.1.js"></script>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="../jstest/‏‏javaapi users.js"></script> 
  </body>
</html>