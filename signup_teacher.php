
<html>
<head>
<style type="text/css">
h3 {
    /* background-color: beige; */
    width: 20%;
    padding: 27px;
    color: #aa3030;
    font-family: sans-serif;
    border: 20px solid;
    padding-left: 131px;
    margin: 100px 397px;
}
a {
    text-decoration: none;
    background-color: #ab7527;
    width: 43%;
    padding: 63px;
    color: white;
    font-family: sans-serif;
    border-radius: 32px;
    padding-left: 57px;
    margin:423px;
}
body{
    background-image: url("home.jpg");
    margin:0;
}
</style>

	</head>
<body>
<?php

// Create connection
$conn = mysqli_connect('localhost', 'root', '','phpdb');



$uname=$_POST['uname'];
$ID=$_POST['ID'];
$pass=$_POST['psw'];
$email=$_POST['Email'];
$DOBDay=$_POST['DOBDay'];
$DOBMonth=$_POST['DOBMonth'];
$DOBYear=$_POST['DOBYear'];

		$q="INSERT INTO teacher  values ('$uname','$ID','$pass','$email','$DOBDay','$DOBMonth','$DOBYear')";
		$result = mysqli_query($conn,$q);?>
	<h3><?php
	echo "Sent Successfully";


		?></h3>
<a href="teacher.php">Back </a>
</body>
</html>