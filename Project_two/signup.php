<?php include 'header.php'?>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="" method="post">
                <div class="form-group">
                    <label for="firstname">firstname:</label>
                    <input type="text" class="form-control" id="firstname">
                </div>
                <div class="form-group">
                    <label for="lastname">lastname:</label>
                    <input type="text" class="form-control" id="lastname">
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" name="password" class="form-control" id="pwd">
                </div>
                <div class="form-group">
                    <label><input type="date"> Date Registered</label>
                </div>
                <button type="submit"name="signup" class="btn btn-default">Sign up</button>
            </form>

        </div>
        <div class="col-md-4"></div>
    </div>
</div>
<?php include 'footer.php'?>

























