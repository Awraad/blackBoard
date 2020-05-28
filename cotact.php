
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
    margin: 458px;
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




$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$comment=$_POST['question'];


        $q="INSERT INTO comments (firstname,lastname,question) values ('$fname','$lname','$comment')";
        $result = mysqli_query($conn,$q);
        
        
        ?>


	
	<h3><?php
	echo "Sent Successfully";


		?></h3>
<a href="student.php">Back Home</a>
</body>
</html>