<?php
    $link = mysqli_connect('localhost', 'root', '', 'iiitdmj');
    
    if (isset($_POST['updateCalendar'])) {
        $cal_id=$_POST['cal_id'];
        $sem=$_POST['sem'];
        $heading = $_POST['heading'];
        $date_ug_pg = $_POST['date_ug_pg'];
        $date_else = $_POST['date_else'];

        
        mysqli_query($link, "UPDATE `acad_calendar` SET `heading` = '$heading', `date_ug_pg` = '$date_ug_pg', `date_else` = '$date_else' WHERE `cal_id` = '$cal_id' AND `sem`='$sem'") or die(mysqli_connect_error());

        header("location: calendar.php");
    }
?>
<!-- For Faculty -->
<?php
    $link = mysqli_connect('localhost', 'root', '', 'iiitdmj');
    
    if (isset($_POST['updateFaculty'])) {
        $faculty_id=$_POST['faculty_id'];
        $Discipline = $_POST['Discipline'];
        $Designation = $_POST['Designation'];
        $email=$_POST['email'];
        $phone = $_POST['phone'];
        $faculty_description = trim($_POST['faculty_description']);
        
        mysqli_query($link, "UPDATE `faculty` SET  `Discipline` = '$Discipline', `Designation` = '$Designation', `email` = '$email',`faculty_description` = '$faculty_description', `phone` = '$phone' WHERE `faculty_id` = '$faculty_id'") or die(mysqli_connect_error());

        header("location: faculty.php");
    }
?>
<!-- for Student -->
<?php
    $link = mysqli_connect('localhost', 'root', '', 'iiitdmj');
    
    if (isset($_POST['updateStudent'])) {
        $roll_number=$_POST['roll_number'];
        $programme=$_POST['Programme'];
        $Discipline = $_POST['Discipline'];
        $Sub_Discipline = $_POST['Sub_Discipline'];
        $interest_area = $_POST['Interest_Area'];
        $phone = $_POST['phone'];
        $email=$_POST['email'];
        
        mysqli_query($link, "UPDATE `students` SET  `programme` = '$programme', `discipline` = '$Discipline', `sub_discipline` = '$Sub_Discipline',`interest_area` = '$interest_area', `phone` = '$phone', `email`='$email' WHERE `roll_number` = '$roll_number'") or die(mysqli_connect_error());

        header("location: students.php");
    }
?>