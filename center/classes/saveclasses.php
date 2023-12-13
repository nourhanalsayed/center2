<?php
include_once("connection/connect.php");
if(isset($_POST["submit"])){

$name= $_POST["code"];
$price= $_POST["capacity"];
$user_id=$_SESSION["session_user_id"];
$insert_query="insert into classes(code,capacity)
 values(".$code.",".$capacity.")";
 echo $insert_query ;
 $result = mysqli_query($connexion, $insert_query);


 if($result){
    echo "data inserted successfully";
    header('location:index.php?page=classes');

 }else{
    echo mysqli_error($connexion); }

// echo $insert_query;

}else{
    echo"didnt ";
}




?>