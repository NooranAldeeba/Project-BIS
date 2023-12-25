<?php

$name=$_REQUEST['name'];
$email=$_REQUEST['email address'];

if(isset($_POST['done']))
{
  $host="localhost";
  $user="root";
  $pass="";
  $Doc="Documents";

  @$conn= mysqli_connect($host,$user,$pass,$Doc);

  $insert="insert into info values('$name','$email')";

  mysqli_query($conn,$insert);
  
  if($conn){
    echo("<h1 style="color:green;"> Your Registration is Successful! </h1>");
  }
  else{
    echo("<h1 style="color:red;"> Your Registration is failed! </h1>");
  }
}

?>