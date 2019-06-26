<?php
if(isset($_POST['signup'])){
    #form validation
    #grab the firstname

    if(isset($_POST['firstname'])){
        $firstname = $_POST['firstname'];
    }else{
        $firstname_err = "First name is required";
    };

    #grab lastname
    if(isset($_POST['lastname'])){
        $lastname = $_POST['lastname'];
    }else{
        $lastname_err = "Last  name is required";
    };

    #grab email
    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }else{
        $email_err = "Email name is required";
    };

    #grab password
    if(isset($_POST['password'])){
        $password= $_POST['password'];
    }else{
        $password_err = "Password name is required";
    };

    #grab date
    if(isset($_POST['date'])){
        $date = $_POST['date'];
    }else{
        $date_err = "Date is required";
    };

    #create connection to the db
    #check if the connection is successful
    include 'config.php';
    $sql = "INSERT INTO `users`(`id`, `Firstname`, `Lastname`, `Email`, `Password`, `Date`) VALUES (null,'$firstname','$lastname','$email','$password','$date')";
    #Save user to thr databse
    #first check if insertion to the db is successfull
    #mysqli_query($conn, $sql)
    if(mysqli_query($conn, $sql)){
        #if user is added successfully
        echo "User added to the db successfully";
        header("location:index.php");
    }else{
        #if adding user is unsuccessfull
        echo "Failed to add user to the db";
    }
}