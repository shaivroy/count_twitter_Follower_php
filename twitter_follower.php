<?php
$tw_username = $_POST['twt_name']; 
// print_r($tw_username); die;
$data = file_get_contents('https://cdn.syndication.twimg.com/widgets/followbutton/info.json?screen_names='.$tw_username); 
$parsed =  json_decode($data,true);
$tw_followers =  $parsed[0]['followers_count'];
// echo  $tw_followers;
?>
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
  	 <h2 class="text-center">Name: <span style="color:red;"><?php echo $tw_username; ?></span></h2>
  	 <h3 class="text-center">Followers Count: <span style="color:red;"><?php echo  $tw_followers; ?></span></h3>
  	<center> <a href="index.php"><button class="btn btn-primary">Check Again</button></a></center>
  </div>
</body>
</html>
