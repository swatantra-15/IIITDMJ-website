<?php
include_once "../connection/connection.php";
if (isset($_GET['event_id'])) {
    $event_id = $_GET['event_id'];
    $query = "DELETE FROM news_events WHERE id='$event_id'";
    $result = mysqli_query($link, $query);
    if ($result) {
        header('Location: news_notice.php');
    }
    else {
        echo "<font color='red'>Record not Deleted</font>";
    }
}
