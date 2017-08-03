

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<a class="navbar-brand" href="#">Homepage</a>
		<ul class="nav navbar-nav">
			<li>
				<a href="home">Home</a>
			
			</li>
			
				<li class="active"><a href="settings">Settings</a></li>
			
		</ul>
	</div>
</nav>

<br><br>
<h1>Welcome! to settings</h1>


<p class="bg-success">Our Features!!</p>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Change Passwords
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Settings / Change passwords</h4>
      </div>
      <div class="modal-body">

                		Current Password : <input type="password" name="currentPassword" class="form-control" required="required" title="">

                		New Password : <input type="password" name="newPassword" class="form-control" required="required" title="">

                		Repeat Password : <input type="password" name="repeatPassword"  class="form-control" required="required" title="">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



