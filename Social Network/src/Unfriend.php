<?php
session_start();
?>
<?php
require 'conn.php';

$email = $_SESSION['email'];
$friend_email = $_GET['friend_email'];
$query = "DELETE FROM friend WHERE myEmail = '$email' AND myfriendEmail = '$friend_email' ";
if(mysqli_query($connection,$query))
	{
			    echo '<script type="text/javascript"> 
		   alert("Friend removed!");
           window.location = "nonfriendprofile.php?nonfriend_email='.$friend_email.'"
      </script>';
	}
?>