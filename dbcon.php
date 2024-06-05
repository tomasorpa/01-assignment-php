<?php
define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","assignment_01-s2");


$connection=mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);
if(!$connection){
    die("Connection failed");
}
?>