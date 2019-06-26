<?php
#Create a database connection
$conn = mysqli_connect('localhost', 'root','', 'Registration');

#Check connection is working
if(!$conn){
//    mysqli_connect_error()-is a function that stores/contains the error msg for unsuccessful connection
    die("Connection failed".mysqli_connect_error());
}else{
    echo "Connection to the db successful";
}


















