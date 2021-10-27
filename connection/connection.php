<?php
$servername="localhost";
$username="root";
$password="";
$dbname="iiitdmj";
$link=mysqli_connect($servername,$username,$password,$dbname);
if (!$link) {
    echo "Connection Failed ".mysqli_connect_error();
}