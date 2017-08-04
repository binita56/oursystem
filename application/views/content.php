<?php echo "Sucessfully logged in";?>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<a class="navbar-brand" href="#">Homepage</a>
		<ul class="nav navbar-nav">
			<li class="active">
				<a href="#">Home</a>
			</li>
			<li>

				<a href="settings">Settings</a>
			</li>
		</ul>
	</div>
</nav>

<br><br>
<h1>Welcome! to homepage<br><br> <?php echo "Name : ".$name."<br><br>"."Email : ".$email. "<br><br>Address : ".$address?><hr></h1>

<a href="logout"><button type="button" class="btn btn-sm btn-default">Logout <?php echo $name ?></button></a>