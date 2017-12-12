<!-- Optional JavaScript -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script> 
	
	<!-- Log in Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="modalTitle">Login</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<form>
			  <div class="form-group">
				<label for="email">Email address</label>
				<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
				<label for="pwd">Password</label>
				<input type="password" class="form-control" id="password" placeholder="Password">
			  </div>
			  <div class="form-group" style="visibility:hidden" id=budget>
				<label for="pwd">Monthly Budget (USD):</label>
				<input type="input" class="form-control" id="budg" placeholder="e.g. 1300.34">
			  </div>

				<input type="hidden" id="loginActive" name="loginActive" value="1">
			</form>
		  </div>
		  <div class="modal-footer">
			<a id="toggleLogin">Sign Up</a>
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="button" id="loginSignUpButton" class="btn btn-primary">Login</button>
		  </div>
		</div>
	  </div>
	</div>
	
	<script>
	
		/*To handle the sign up and log in toggle button*/
		$("#toggleLogin").click(function(){
			if($("#loginActive").val() == "1" ){
			
				$("#loginActive").val("0");
				$("#modalTitle").html("Sign Up");
				$("#loginSignUpButton").html("Sign Up");
				$("#toggleLogin").html("Login");
				document.getElementById('budget').style.visibility = 'visible';
			}else{
				$("#loginActive").val("1");
				$("#modalTitle").html("Login");
				$("#loginSignUpButton").html("Login");
				$("#toggleLogin").html("Sign Up");
				document.getElementById('budget').style.visibility = 'hidden';
			}
		})
		
		/*To handle the sign up and log in Post. As of now, it just alerts the Post variables to the browser*/
		$("#loginSignUpButton").click(function(){
			
			$.ajax({
				type: "POST",
				url:"actions.php?action=loginSignup",
				data: "email="+$("#email").val() + "&password="+$("#password").val()+"&loginActive="+$("#loginActive").val()+"&budget="+$("#budg").val(),
				success: function(result){
					alert(result);
				}
			})
		
		})

		
	</script>
  </body>
</html>