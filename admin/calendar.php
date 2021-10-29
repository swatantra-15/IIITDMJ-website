<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin- acad_calendar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../stylesheets/table.css">
    <style>
        #nad {
            background-color: rgb(173, 240, 240);
            box-sizing: border-box;
            max-width: 90%;
            margin: auto;
            padding: 1%;
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <?php include 'includes/navbar.php'; ?>
    <?php
    include_once 'includes/connect.php';
    if (isset($_POST['add'])) {
        $cal_id = $_POST["acad_cal_id"];
        $heading = $_POST["heading"];
        $sem = $_POST["Sem"];
        $old = $_POST["old"];
        $else = $_POST["else"];
        $query = "INSERT INTO acad_calendar(cal_id,sem,heading,date_ug_pg,date_else) VALUES ('$cal_id','$sem','$heading','$old','$else')";
        $run = mysqli_query($con, $query);
        if (!$run) {
            echo "Data not Inserted";
        }
    }
    ?>
    <div id="nad">
        <h3 align="center" style="color: Red;">New Event to Be added In Calendar</h3>
        <div class="card" style="width:80%; margin:auto; padding:1rem;">
            <form method="POST" enctype="multipart/form-data">
                <div class="row mt-3">
                    <div class="col-md-7 mt-2">
                        <div class="form-group">
                            <label for="id"><b style="color: black;">Number of Entry in Particular Semester:</b></label>
                            <input type="varchar" id="id" name="acad_cal_id">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for=""><b style="color: black;">Semester </b></label>
                            <select name="Sem" id="">
                                <option selected>Choose Semester</option>
                                <option value="1">First</option>
                                <option value="2">Second</option>
                                <option value="sum">Summer</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Event"><b style="color: black;">Event:</b></label>
                            <div class="col-md-8 mt-1"><input type="varchar" class="form-control" id="heading" name="heading"></div>

                        </div>
                    </div>
                    <div class="col-md-3 mt-2">
                        <div class="form-group">
                            <label for="date"><b style="color: black;">Date:</b></label><br>
                            Old UG+PG: <br><input type="varchar" name="old"><br>
                            New PG etc.: <br><input type="varchar" name="else">
                        </div>
                        <div class="form-group pt-2">
                            <button name="add" class="btn btn-primary" style="float:right; text-align:bottom;">Add</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <div id="block" class="container" style="padding: 0.8rem;width:100vw;height:fit-content">
        <div class="container" style="text-align: center;">
            <i class="fa fa-calendar" style="font-size: x-large;"></i>
            <h2 style="color: blue;">Academic Calendar</h2>
        </div>
        <br>
        <table class="table table-bordered  text-center " style="margin:auto; margin-bottom: 20px;">
            <thead>
                <tr style="background-color: rgba(0,0,0,0.6);color:white; font-size:larger">
                    <th></th>
                    <th> Event </th>
                    <th> Old UG+PG </th>
                    <th> New Pg etc.</th>
                    <th> Action</th>
                </tr>
                <tr>
                    <th colspan="5" style="color: red;">Semester 1 </th>
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
                ?>
                    <tr>
                        <td style="font-size: medium; color:black"><?php echo $row['cal_id'] ?></td>
                        <td style="font-size: medium; color:black"><?php echo $row['heading'] ?></td>
                        <td style="font-size: medium; color:black"><?php echo $row['date_ug_pg'] ?></a></td>
                        <td style="font-size: medium; color:black"><?php echo $row['date_else'] ?></a></td>
                        <td style="font-size: medium;">
                            <div class="col-md-1 mt-2">
                                <div class="form-group pt-2">
                                    <button name="update1" class="btn btn-primary" style="background-color:green" data-toggle="modal" type="button" data-target="#update_modal<?php echo $row['cal_id'] . $row['sem'] ?>"><span class="glyphicon glyphicon-edit"></span>Update</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php
                    include 'update_calendar.php';
                }
                ?>
                <tr>
                    <th colspan="5" style="color: red;">Semester 2 </th>
                </tr>
                <?php
                $link = mysqli_connect('localhost', 'root', '', 'iiitdmj');
                /*Check link to the mysql server*/
                if (!$link) {
                    die('Failed to connect to server: ');
                }
                $qry2 = 'SELECT * FROM acad_calendar WHERE sem="2"';
                $nextresult = mysqli_query($link, $qry2);
                while ($row = mysqli_fetch_assoc($nextresult)) {
                ?>
                    <tr>
                        <td style="font-size: medium; color:black"><?php echo $row['cal_id'] ?></td>
                        <td style="font-size: medium; color:black"><?php echo $row['heading'] ?></td>
                        <td style="font-size: medium; color:black"><?php echo $row['date_ug_pg'] ?></a></td>
                        <td style="font-size: medium; color:black"><?php echo $row['date_else'] ?></a></td>
                        <td style="font-size: medium;">
                            <div class="col-md-1 mt-2">
                                <div class="form-group pt-2">
                                    <button name="update2" class="btn btn-primary" style="background-color:green" data-toggle="modal" type="button" data-target="#update_modal<?php echo $row['cal_id'] . $row['sem'] ?>"><span class="glyphicon glyphicon-edit"></span>Update</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php
                    include 'update_calendar.php';
                }
                ?>
                <tr>
                    <th colspan="5" style="color: red;">Summer Semester </th>
                </tr>
                <?php
                $link = mysqli_connect('localhost', 'root', '', 'iiitdmj');
                /*Check link to the mysql server*/
                if (!$link) {
                    die('Failed to connect to server: ');
                }
                $qry3 = 'SELECT * FROM acad_calendar WHERE sem="sum"';
                $sumresult = mysqli_query($link, $qry3);
                while ($row = mysqli_fetch_assoc($sumresult)) {
                ?>
                    <tr>
                        <td style="font-size: medium; color:black"><?php echo $row['cal_id'] ?></td>
                        <td style="font-size: medium; color:black"><?php echo $row['heading'] ?></td>
                        <td style="font-size: medium; color:black"><?php echo $row['date_ug_pg'] ?></a></td>
                        <td style="font-size: medium; color:black"><?php echo $row['date_else'] ?></a></td>
                        <td style="font-size: medium;">
                            <div class="col-md-1 mt-2">
                                <div class="form-group pt-2">
                                    <button name="update3" class="btn btn-primary" style="background-color:green" data-toggle="modal" type="button" data-target="#update_modal<?php echo $row['cal_id'] . $row['sem'] ?>"><span class="glyphicon glyphicon-edit"></span>Update</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php
                    include 'update_calendar.php';
                }
                ?>
            </tbody>
        </table>
    </div>

    <?php
    include('includes/script.php');
    include('includes/footer.php');
    ?>
</body>

</html>