<?php include'header.php'?>
<?php include 'config.php'?>
<div class="container">
    <div class="jumbotron">
        <h3 style="text-align: center">Welcome To Crud App</h3>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
            <th>No</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
        <?php

        $sql = "SELECT * FROM `Users`";

        #fetch data from the database by issuing the query
        #the data will be stored in the variable "$fetched_results"
        $fetched_results =mysqli_query($conn,$sql);

        #to get individual data use a loop (while loop)

     #convert fetched data into an associative array(key/value)
        while($row =mysqli_fetch_assoc($fetched_results)){

        #for each record in the while grab the data in their respective columns
        extract($row);
        echo "
          <tr>
                    <td>$id</td>
                    <td>$Firstname</td>
                    <td>$Lastname</td>
                    <td>$Email</td>
                    <td>
                    <a href='update.php?users_id=$id&u_firstname=$Firstname&u_lastname=$Lastname&u_email=$Email' class='btn-info' style='padding: 5px'>Update</a>
                    <a href=''class='btn-danger'>Delete</a>
                    </td>
                    
          </tr>
        ";
    }
        ?>

        </tbody>
    </table>

</div>
<?php include 'footer.php'?>





























