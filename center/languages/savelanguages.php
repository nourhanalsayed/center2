<?php
include_once("connection/connect.php");
if(isset($_POST["submit"])){

$name= $_POST["name"];
$price= $_POST["price"];
$nbrofhour= $_POST["nbrofhour"];
$user_id=$_SESSION["session_user_id"];
$insert_query="insert into languages(name,price,nbrofhour)
 values('".$name."',".$price.",".$nbrofhour.")";
 echo $insert_query ;
 $result = mysqli_query($connexion, $insert_query);


 if($result){
    echo "data inserted successfully";
    header('location:index.php?page=languages');

 }else{
    echo mysqli_error($connexion); }

// echo $insert_query;

}else{
    echo"didnt ";
}




?>