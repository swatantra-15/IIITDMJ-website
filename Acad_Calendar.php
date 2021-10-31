<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Calendar</title>
    <link rel="stylesheet" href="stylesheets/style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="stylesheets/about.css">
    <link rel="stylesheet" href="stylesheets/academic.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="stylesheets/table.css">
</head>

<body>
    <div class="navbar" style="background-image: linear-gradient(rgba(0,5,0,0.7),rgba(0,5,30,0.7)),url(stylesheets/images/Administration.jpg)">
        <?php include 'acadnav.php'; ?>
        <div class="main" style="position:relative;top:35%; width: 50%">
            <h1 align="center">
                Academic Calendar
            </h1>
        </div>
    </div>
    <div id="block" class="container" style="padding: 0.8rem;width:95%">
        <div class="container" style="text-align: center;">
            <i class="fa fa-calendar" style="font-size: x-large;"></i>
            <h1>Academic Calendar for Session <?php echo date('Y') ?><?php echo - (date('y') + 1) ?></h1>
        </div>
        <br>
        <table class="table table-bordered  text-center " style="margin:auto; margin-bottom: 20px;">
            <thead>
                <tr style="background-color: rgba(0,0,0,0.6);color:white; font-size:larger">
                    <th></th>
                    <th> Event </th>
                    <th> Old UG+PG </th>
                    <th> New Pg M.Tech +Mdes+Ph.D(<?php echo date('Y') ?> Batch)</th>
                </tr>
                <tr>
                    <th colspan="4" style="color: red;">Semester 1 </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $link = mysqli_connect('localhost', 'root', '', 'iiitdmj');
                /*Check link to the mysql server*/
                if (!$link) {
                    die('Failed to connect to server: ');
                }
                /*Create query*/
                $qry = 'SELECT * FROM acad_calendar WHERE sem="1"';

                /*Execute query*/
                $result = mysqli_query($link, $qry);

                /*Show the rows in the fetched result set one by one*/
                while ($row = mysqli_fetch_assoc($result)) {
                    echo
                    '<tr> 
          <td style="font-size: medium">' . $row['cal_id'] . '</td>
          <td style="font-size: medium">' . $row['heading'] . '</td>
          <td style="font-size: medium">' . $row['date_ug_pg'] . '</a></td>
          <td style="font-size: medium">' . $row['date_else'] . '</a></td>
          </tr>';
                }
                echo '<tr>
                <th colspan="4" style="color: red;">Semester 2 </th>
            </tr>';
                $qry2 = 'SELECT * FROM acad_calendar WHERE sem="2"';
                $nextresult = mysqli_query($link, $qry2);
                while ($row = mysqli_fetch_assoc($nextresult)) {
                    echo
                    '<tr> 
          <td style="font-size: medium">' . $row['cal_id'] . '</td>
          <td style="font-size: medium">' . $row['heading'] . '</td>
          <td style="font-size: medium">' . $row['date_ug_pg'] . '</a></td>
          <td style="font-size: medium">' . $row['date_else'] . '</a></td>
          </tr>';
                }
                echo '<tr>
                <th colspan="4" style="color: red;">Summer Semester </th>
                </tr>';
                $qry3 = 'SELECT * FROM acad_calendar WHERE sem="sum"';
                $sumresult = mysqli_query($link, $qry3);
                while ($row = mysqli_fetch_assoc($sumresult)) {
                    echo
                    '<tr> 
          <td style="font-size: medium">' . $row['cal_id'] . '</td>
          <td style="font-size: medium">' . $row['heading'] . '</td>
          <td style="font-size: medium">' . $row['date_ug_pg'] . '</a></td>
          <td style="font-size: medium">' . $row['date_else'] . '</a></td>
          </tr>';
                }

                echo '</tbody>     
</table>';
                ?>
    </div>
    <?php include 'footer.php'; ?>

</body>

</html>