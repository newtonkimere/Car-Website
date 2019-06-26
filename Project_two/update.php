<?php include 'header.php'?>
<div class="container">
    <?php
    include 'config.php';
    if (isset($_GET['user_id'])){
        $id =$GET['user_id'];
        $firstname = $_GET['u_firstname'];
        $lastname = $_GET['u_lastname'];
        $email = $_GET['u_email'];
    }
    ?>

    <div class="jumbotron">
        <h3 style="text-align: center">Welcome To Detail Crud App </h3>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="update_handler.php" method="post">
                <input type="text" name="id" hidden value="id">
                <div class="form-group">
                    <label for="firstname">fistname:</label>
                    <input type="text" class="form-control" id="firstname" value="<?php $Firstname?>">
                </div>
                <div class="form-group">
                    <label for="lastname">lastname:</label>
                    <input type="text" class="form-control" id="lastname"value="<?php $Lastname?>">
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" name="email" class="form-control" id="email"value="<?php $Email?>">
                </div>
                <button type="submit"name="Sign up" class="btn btn-default">Update</button>
            </form>

        </div>
        <div class="col-md-4"></div>
    </div>
</div>
    <br>
<?php include 'footer.php';