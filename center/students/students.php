<a href="./index.php?page=addstudents">+add new </a><div class="table-responsive">
    <?php include_once("connection/connect.php");
    ?>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>education level</th>
            <th>Age</th>
            <th>Address</th>
            <th>managment</th>
            <th>pic</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query_select="select * from students";
        $resultstudent = mysqli_query($connexion, $query_select);
        while($studentrow=mysqli_fetch_array($resultstudent, MYSQLI_ASSOC)){


        ?>

            <tr class="odd gradeX">
                <td><?php echo $studentrow['fullname']; ?></td>
                <td><?php echo $studentrow['phone']; ?></td>
                <td><?php echo $studentrow['email']; ?></td>
                <td class="center"><?php echo $studentrow['educ_lvl']; ?></td>
                <td class="center"><?php echo $studentrow['age']; ?></td>
                <td><?php echo $studentrow['adress']; ?></td>
                
                <td>
                 <a href="./index.php?page=editstudents&id=<?php echo $studentrow['id']; ?>">edit</a>
                 <a href="./index.php?page=deletestudents&id=<?php echo $studentrow['id'];?>">delete</a>

                </td>
                <td> <img style="width:100px" src="<?php echo $studentrow['pic']; ?>"></td>
                
            </tr>

        <?php



        }
        ?>

 
    </tbody>
</table>
</div>