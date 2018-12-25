<!DOCTYPE html>
<html>
<head>
	<title>Twitter Follower</title>

		 <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
  	<div class="jumbotron">
  		<h2 class="text-center">Twitter Follower</h2>
  	</div>
  	<form action="twitter_follower.php" method="post">
	  <div class="form-group">
	    <label for="twitter name">Twitter Screen Name:</label>
	    <input type="text" class="form-control" id="twt_name" name="twt_name" required="required">
	  </div>
	 <center><button type="submit" class="btn btn-primary">Submit</button></center> 
    </form>
  </div>
</body>
</html>

