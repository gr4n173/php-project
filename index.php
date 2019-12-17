<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>


<?php
$db = mysqli_connect('localhost', 'root', '', 'registration');
$output = '';
if(isset($_GET['search'])){

  $searchq = $_GET['search'];

  $query = mysqli_query($db,"SELECT * FROM users WHERE username LIKE '%$searchq%'") or die("Nice Try!!") ;
  $count = mysqli_num_rows($query) ;
  if($count == 0){
    $output = 'There was no search result';

  }
  else{
    while($row = mysqli_fetch_array($query)){

      $username = $row['username'];
      $email = $row['email'];
      $id = $row['id'];

      $output .='<div>'.$username.' ' .$email.'</div>';
    }

  }


}

 ?>








<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php
          	echo $_SESSION['success'];
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>


      <h1>THE FLAG IS VECTOR_CTF {{This is the flag !!!}}</h1>

    <?php print("$output"); ?>


    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>

</body>
</html>
