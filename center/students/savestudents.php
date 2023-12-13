<?php
include_once("connection/connect.php");
if(isset($_POST["submit"])){

$name= $_POST["name"];
$phone= $_POST["phone"];
$email= $_POST["email"];
$educ_lvl= $_POST["educ_lvl"];
$age= $_POST["age"];
$adress= $_POST["adress"];
$user_id=$_SESSION["session_user_id"];
///////// file upload area 
// here we get from form and save to file storage before database

$targetDirectory = "images/students/";
$targetFile = $targetDirectory . basename($_FILES["pic"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($targetFile)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size (optional)
if ($_FILES["pic"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats (optional)
if ($fileType !== "jpg" && $fileType !== "png" && $fileType !== "jpeg" && $fileType !== "gif") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// echo $targetFile;
if ($uploadOk == 0) {
   echo "Sorry, your file was not uploaded.";
   header("location:index.php?page=addstudents");
} else {
   // If everything is ok, try to upload file
   if (move_uploaded_file($_FILES["pic"]["tmp_name"], $targetFile)) {
       echo "The file " . basename($_FILES["pic"]["name"]) . " has been uploaded.";
   } else {
       echo "Sorry, there was an error uploading your file.";
   }
}


///////// file upload area

$insert_query="insert into students(fullname,phone,email,educ_lvl,age,adress,createdby,pic)
 values('".$name."',".$phone.",'".$email."','".$educ_lvl."',".$age.",'".$adress."',".$user_id.",'".$targetFile."')";
 echo $insert_query ;
 $result = mysqli_query($connexion, $insert_query);


 if($result){
    echo "data inserted successfully";
    header('location:index.php?page=students');

 }else{
    echo mysqli_error($connexion); }

// echo $insert_query;

}else{
    echo"didnt ";
}




?>