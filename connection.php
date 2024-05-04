<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="restaurentdb";
  $con=mysqli_connect($host,$user,$password,$db);
  if($con){
    echo "";
  }
else{
    echo"no";
}
?>