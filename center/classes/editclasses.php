<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
 <body style="background-color: rgb(109, 104, 104);">
<div class="container"  >
<?php
$id=$_GET["id"];
include_once("connection/connect.php");
$select_query = "SELECT * FROM classes where id=".$id; 
$result = mysqli_query($connexion, $select_query);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>
    <div class="row">
        <form method="post" action="./index.php?page=updatelanguages">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="col-md-6">
                <label  >code:</label>
                <input type="number" class="form-control" name="code" value="<?php echo $row['code']; ?>">
            </div>
            <div class="col-md-6">
                <label  >capacity:</label>
                <input type="number" class="form-control" name="capacity" value="<?php echo $row['capacity']; ?>">
            </div>
            
            <div class="col-md-6">
                <input type="submit" value="save" name="submit" class="btn btn-primary">     
            </div>
        </form>
    </div>
</div>

</body>



</html>



