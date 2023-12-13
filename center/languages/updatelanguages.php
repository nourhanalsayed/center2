<?php
include_once("connection/connect.php");
if(isset($_POST["submit"])){
$id=$_POST["id"];
$name= $_POST["name"];
$price= $_POST["price"];
$nbrofhour= $_POST["nbrofhour"];

$insert_query="update languages set name='".$name."',price=".$price.",
nbrofhour=".$nbrofhour." where id= ".$id ;
 $result = mysqli_query($connexion, $insert_query);

echo mysqli_error($connexion);
 if($result){
    echo "data inserted successfully";
    header('location:index.php?page=languages');
 }
}

    ?>