<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$db="elansite";
// connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
if (isset($_POST['name'])) {
    $nom = $_POST['name'];
    echo 'nom';
}
if (isset($_POST['email'])) {
    $mail = $_POST['email'];
    echo 'mail';
}
if (isset($_POST['textarea'])) {  
    $descr = $_POST['textarea'];
    echo 'descr';
}

$req="INSERT INTO contact (nom, mail, descr) 
VALUES ('$nom', '$mail', '$descr')";
if($res=mysqli_query($conn, $req)){

echo 'c fait';

}





/*$dbname='elansite';
$con=mysqli_connect("localhost","root","",$dbname);
$nom=$_POST['name'];
$mail=$_POST['email'];
$descr=$_POST['textarea'];

$req="INSERT INTO contact (nom, mail, descr)
VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["textarea"]."')";

$res=mysqli_query($con,$req);*/


?>