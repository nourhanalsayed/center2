<?php
include_once("connection/connect.php");
if(isset($_POST["submit"])){
$id=$_POST["id"];
$name= $_POST["name"];
$phone= $_POST["phone"];
$email= $_POST["email"];
$educ_lvl= $_POST["educ_lvl"];
$age= $_POST["age"];
$adress= $_POST["adress"];




$insert_query="update students set fullname='".$name."',phone=".$phone.",
email='".$email."',educ_lvl='".$educ_lvl."',age=".$age.",adress='".$adress."','pic=".$pic."'where id=".$id ;
 $result = mysqli_query($connexion, $insert_query);

echo mysqli_error($connexion);
 if($result){
    echo "data inserted successfully";
    header('location:index.php?page=students');
 }
}

    ?>