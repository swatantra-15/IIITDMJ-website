<?php
include_once "includes/connect.php";
if (isset($_GET['event_id'])) {
    $event_id = $_GET['event_id'];
    $query = "DELETE FROM news_events WHERE id='$event_id'";
    $result = mysqli_query($con, $query);
    if ($result) {
        header('Location: news_notice.php');
    }
    else {
        echo "<font color='red'>Record not Deleted</font>";
    }
}
?>
<!-- Delete function for Dean Faculties/Office Staff -->
<?php
include_once "includes/connect.php";
if (isset($_GET['e_id'])) {
    $employee_id = $_GET['e_id'];
    $query2 = "DELETE FROM dean_info WHERE E_id='$employee_id'";
    $result = mysqli_query($con, $query2);
    if ($result) {
        header('Location: dean_info.php');
    }
    else {
        echo "<font color='red'>Record not Deleted</font>";
    }
}
?>