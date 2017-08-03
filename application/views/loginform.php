
	<body>
		

		<div class="maindiv col-md-4" style="margin-top:200px;margin-left:400px;text-align:center;">

	<form name="myForm" action="index.php/checklogin" method="post">

		<div class="panel panel-default">
		  <div class="panel-heading">Login/Register!</div>
		  <div class="panel-body">
		   
<!--//Panel content-->
				   <div class="input-group">
					  <span class="input-group-addon" id="basic-a ddon1">Username @</span>
					  <input type="text" name = "userName" class="form-control" placeholder="Username" required="required" aria-describedby="basic-addon1">	 
					</div>
		 			<br>

		 			<div class="input-group">
		 			<span class="input-group-addon" id="basic-addon1">password * *</span>
					  <input type="password" name="password" class="form-control" required="required" placeholder="Password"  title="" aria-describedby="basic-addon1">
					  
				</div>
			<br>
					  <button type="submit" class="btn btn-primary">Login</button>
					  <a href="index.php/registeruser/register"><button type="button" class="btn btn-danger">Register</button></a>

<!--end of panel content-->
		  </div>
		</div>

			</form>
 		 </div>


		

	