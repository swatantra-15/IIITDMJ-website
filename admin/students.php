<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="col-sm-9 mt-5">
    <!--Table-->
    <div class="bg-light text-dark p-2">
        <p>
        <h4>List of Students</h4>
        </p>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Roll Number</th>
                    <th scope="col">Profile Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Programme</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                <?php
                include_once 'includes/connect.php';
                /*Create query*/
                $qry = 'SELECT * FROM students WHERE discipline="CSE" ORDER BY programme, name ASC ';

                /*Execute query*/
                $result = mysqli_query($con, $qry);

                /*Show the rows in the fetched result set one by one*/
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td style="font-size: medium; color:black; border:10px light"><?php echo $row['roll_number'] ?></td>
                        <?php echo '<td><img src="data:image/jpeg;base64,' . base64_encode($row['Student_image']) . '" alt="" class="rounded-circle" width="90" style="padding:5px; border:0.6px solid"></td>' ?>
                        <td style="font-size: medium; color:black; border:10px light"><?php echo $row['name'] ?></td>
                        <td style="font-size: medium; color:black; border:10px light"><?php echo $row['programme'] ?></td>
                        <td style="font-size: medium; color:black; border:10px light"><?php echo $row['email'] ?></td>
                        <td style="font-size: medium;">
                            <div class="btn-group">
                                <button type="submit" class="btn btn-info mr-3" name="view" value="view">
                                    <i class="fas fa-address-card"></i>
                                </button>
                                <button name="del" class="btn btn-primary" style="background-color:red" dtype="button"><a href="delete_function.php?roll=<?php echo $row['roll_number'] ?>" style="color:white; text-decoration:none" onclick="return checkdelete()"><span class="glyphicon glyphicon-edit"></span><i class="fas fa-trash-alt"></i></a></button>
                            </div>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<!--row closed from header-->
<script src="js/deleteprompt.js"></script>
<div>
    <a class="btn btn-danger box" href="addstudent.php" style="  position: fixed; bottom: 10px; right: 20px; margin-bottom: 30px;">
        <i class="fas fa-plus fa-2x"></i>

    </a>

</div>




<?php
include('includes/script.php');
include('includes/footer.php');
?>