<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="col-sm-9 mt-5">
    <!--Table-->
    <div class="bg-light text-dark p-2">
        <p>
        <h4>List of Office Department Faculties</h4>
        </p>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Department Name</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            </tbody>
            <?php
            include_once 'includes/connect.php';
            /*Create query*/
            $qry = 'SELECT * FROM dean_info ORDER BY department_name';

            /*Execute query*/
            $result = mysqli_query($con, $qry);

            /*Show the rows in the fetched result set one by one*/
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td style="font-size: medium; color:black"><?php echo $row['Employee_Name'] ?></td>
                    <td style="font-size: medium; color:black"><?php echo $row['department_name'] ?></td>
                    <td style="font-size: medium; color:black"><?php echo $row['Designation'] ?></td>
                    <td style="font-size: medium;">
                        <div class="col-md-1 mt-2">
                            <div class="form-group pt-2">
                                <button name="del" class="btn btn-primary" style="background-color:red" dtype="button"><a href="delete_function.php?e_id=<?php echo $row['E_id'] ?>" style="color:white; text-decoration:none" onclick="return checkdelete()"><span class="glyphicon glyphicon-edit"></span>Delete</a></button>
                            </div>
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
    <a class="btn btn-danger box" href="addEmployee.php" style="  position: fixed; bottom: 10px; right: 20px; margin-bottom: 30px;">
        <i class="fas fa-plus fa-2x"></i>

    </a>

</div>




<?php
include('includes/script.php');
include('includes/footer.php');
?>