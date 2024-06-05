<?php
include("dbcon.php");
if (isset($_POST["add_students"])) {
    
    $firstName = trim($_POST["first_name"]);
    $lastName = trim($_POST["last_name"]);
    $semester = trim($_POST["semester"]);

    
    if (empty($firstName) || empty($lastName) || empty($semester)) {
        header("location:addStudent.php?message=You need to fill in all the statements");
    } elseif ($semester >= 5) {
        header("location:addStudent.php?message=Enter a valid semester");
    } else {
        $query = "INSERT INTO `students` (`first_name`, `last_name`, `semester`) VALUES ('$firstName', '$lastName', $semester)";
        $result=mysqli_query($connection,$query);
        if(!$result){
            die("Query failed");
        }
        else{
            header("location:addStudent.php?added_succesfully=Student added succesfully.");
        }
    }
}
?>
