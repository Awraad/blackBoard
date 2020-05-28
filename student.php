
<?php
$conn = mysqli_connect('localhost', 'root', '','phpdb');

// Check connection
if ($conn) {
echo "Connected successfully";
echo "<br>";
?>
<html>
<head>
<style type="text/css">
h3 {
    /* background-color: beige; */
    width: 14%;
    padding: 14px;
    color: #aa3030;
    font-family: sans-serif;
    border: 6px solid;
    padding-left: 53px;
    margin: 100px auto;
}
.back {
    text-decoration: none;
    background-color: #ab7527;
    width: -21%;
    padding: 17px;
    color: #fbfbfb;
    font-family: sans-serif;
    border-radius: 32px;
    padding-left: 19px;
    margin-left: 626px;
}
body{
    background-image: url("home.jpg");
    margin:0;
}
table{
  margin:100px auto;
      margin-top: -73px;
    width: 35%;
}
img {
    width: 38px;
}
.nav {
    top:0;
    width: 100%;
    background-color: #eaeef0;
    height: 54px;
    margin: 0px;
}
ul {
    list-style-type: none;
}
li {
    display: inline-block;
    padding-top: 21px;
    padding-left: 35px;
}
li a {
    text-decoration: none;
    color: #845e5e;
    background-color: #efefef;
    padding: 11px;
    border-radius: 11px;
}

</style>
  </head>
<body>
<div class="nav">
<ul>
 <li><a href="page.html">Home</a></li>
   <li><a href="contactus.html">Contact Us</a></li>
 <li><a href="page.html">Log Out</a></li>
 
</ul></div>

<div class="container">
  <h3>Course Information</h3>
<table border="5">
  <tr>
    <th>Course Name </th>
    <th>Lecture Subject</th>
    <th>Lecture Link </th>
    
  </tr>


<?php
$result = mysqli_query($conn, "SELECT * FROM lecture");


                      while($row = mysqli_fetch_assoc($result)) {
                     
                     ?>

    <tr>
    <td><?php  echo $row["Cname"];  ?> </td>
    <td><?php  echo $row["Lsubject"];  ?> </td>
    <td><?php  echo $row["Llink"];  ?> </td>
              <?php    } ?>

</table>

</div>

<?php

}else{
  echo "no connection";
  echo mysqli_connect_error();
}

?>
<a class="back" href="answers.php" >View Answers! </a>

 </body>
</html>