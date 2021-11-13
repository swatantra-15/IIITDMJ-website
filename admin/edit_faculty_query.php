<?php
    $link = mysqli_connect('localhost', 'root', '', 'iiitdmj');
    
    if (isset($_POST['update'])) {
        $faculty_id=$_POST['faculty_id'];
        $Discipline = $_POST['Discipline'];
        $Designation = $_POST['Designation'];
        $email=$_POST['email'];
        $phone = $_POST['phone'];
        $faculty_description = trim($_POST['faculty_description']);
        
        mysqli_query($link, "UPDATE `faculty` SET  `Discipline` = '$Discipline', `Designation` = '$Designation', `email` = '$email',`faculty_description` = '$faculty_description', `phone` = '$phone' WHERE `faculty_id` = '$faculty_id'") or die(mysqli_connect_error());

        header("location: faculty.php");
    }
