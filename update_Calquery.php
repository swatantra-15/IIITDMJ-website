<?php
    $link = mysqli_connect('localhost', 'root', '', 'iiitdmj');
    
    if (isset($_POST['update'])) {
        $cal_id=$_POST['cal_id'];
        $sem=$_POST['sem'];
        $heading = $_POST['heading'];
        $date_ug_pg = $_POST['date_ug_pg'];
        $date_else = $_POST['date_else'];
        
        mysqli_query($link, "UPDATE `acad_calendar` SET `heading` = '$heading', `date_ug_pg` = '$date_ug_pg', `date_else` = '$date_else' WHERE `cal_id` = '$cal_id' AND `sem`='$sem' ") or die(mysqli_error());

        header("location: calendar.php");
    }
