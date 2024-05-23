<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tcmatara";

$conn = new mysqli ($servername,$username,$password,$dbname);
if(!$conn){
    die("Connection Error!" .mysqli_connect_error());
}
if(isset($_POST["email"])  ||  isset($_POST["password"])){

    $Uname = $_POST["email"];
    $Password = $_POST["password"];

    $sql = "INSERT INTO login(`Username`, `Password`) VALUES ('$Uname','$Password')";

    mysqli_query($conn,$sql);
}
if($conn->query = TRUE){
    echo"<h1>Reccord Added Successfully</h1>";
}
else{
    echo"faild" .$conn->error;

}
$conn->close();
?>