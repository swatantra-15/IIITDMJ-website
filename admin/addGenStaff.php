<?php
include('includes/header.php');
include('includes/navbar.php');

?>
<?php
include_once 'includes/connect.php';
if (isset($_POST['addstaffbtn'])) {
       $registration_id = $_POST["registration_id"];
       $designation = $_POST["registration_role"];
       $staff_name = $_POST["employee_name"];
       $department_name = $_POST["department_name"];
       $email = $_POST["email"];
       $phone = $_POST["phone"];
       $query = "INSERT INTO people(registration_id,registration_role,name,Department,email,phone) VALUES ('$registration_id','$designation','$staff_name','$department_name','$email','$phone')";
       $run = mysqli_query($con, $query);
       if (!$run) {
              echo "Data Not Inserted ".mysqli_error($con);
       }
}
?>
<div class="col-sm-6 mt-5 mx-3 jumbotron">
       <h3 class="text-center">Add General Staff</h3>
       <form action="" method="POST" enctype="multipart/form-data" onsubmit="addnewdata()">
              <div class="form-group">
                     <label for="registration_id">Registration id</label>
                     <input type="varchar" class="form-control" id="registration_id" name="registration_id" required>
              </div>
              <div class="form-group">
                     <label for="employee_name">Name</label>
                     <input type="text" class="form-control" id="employee_name" name="employee_name" required>
              </div>
              <div class="form-group">
                     <label for="registration_role">Designation</label>
                     <input type="text" class="form-control" id="registration_role" name="registration_role" required>
              </div>
              <div class="form-group">
                     <label for="department_name">Department Name</label>
                     <input type="text" class="form-control" id="department_name" name="department_name" required>
              </div>
              <div class="form-group">
                     <label for="email">Email</label>
                     <input type="email" class="form-control" id="email" name="email">
              </div>
              <div class="form-group">
                     <label for="phone">Phone</label>
                     <input type="phone" class="form-control" id="phone" name="phone">
              </div>
              <div class="text-center">
                     <button type="submit" class="btn btn-primary" id="addstaffbtn" name="addstaffbtn">
                            Add
                     </button>
                     <button type="button" class="btn btn-light">
                            <a href="gen_staff.php">Close</a>
                     </button>
              </div>
       </form>
       <script>
              function addnewdata() {
                     var ask = window.confirm("Are you sure you want to add new data?");
                     if (ask) {
                            window.alert("This post was successfully added.");
                            window.open("http://localhost/ygc/IIITDMJ-website/admin/gen_staff.php")
                     } else {
                            event.preventDefault();
                     }
              }
       </script>
       <?php
       include('includes/script.php');
       include('includes/footer.php');
       ?>