<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='reg_form';

$conn=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if($conn->connect_error){
    die('Connection Failed:'. $conn->connect_error);
}
//  echo 'Connected successfully';
?>