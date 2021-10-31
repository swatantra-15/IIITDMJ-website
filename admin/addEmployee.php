<?php
include('includes/header.php');
include('includes/navbar.php');

?>
<?php
include_once 'includes/connect.php';
if (isset($_POST['addFacultybtn'])) {
       $employee_name = $_POST["dean_name"];
       $department_name = $_POST["department_name"];
       $designation = $_POST["designation"];
       $query = "INSERT INTO dean_info(Employee_Name,department_name,Designation) VALUES ('$employee_name','$department_name','$designation')";
       $run = mysqli_query($con, $query);
       if (!$run) {
              echo "Data not Inserted";
       }
}
?>
<div class="col-sm-10 mt-5 mx-3 jumbotron">
       <h3 class="text-center">Add Dean Staff</h3>
       <form action="" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                     <lable for="dean_name">Name</lable>
                     <input type="text" class="form-control" id="dean_name" name="dean_name" required>
              </div>
              <div class="form-group">
                     <lable for="department_name">Department Name</lable>
                     <br>
                     <select name="department_name" id="department_name">
                            <option>Choose Department</option>
                            <option value="Students">Students</option>
                            <option value="Academics">Academics</option>
                            <option value="RSPC">Research</option>
                     </select>
              </div>
              <div class="form-group">
                     <lable for="designation">Designation</lable>
                     <textarea class="form-control" id="designation" name="designation"></textarea>
              </div>
              <div class="text-center">
                     <button type="submit" class="btn btn-primary" id="addFacultybtn" name="addFacultybtn" onclick="addnewdata()">
                            Add
                     </button>
                     <button type="button" class="btn btn-light">
                            <a href="dean_info.php">Close</a>
                     </button>
              </div>
       </form>
       <script>
              function addnewdata() {
                     var ask = window.confirm("Are you sure you want to add new data?");
                     if (ask) {
                            window.alert("This post was successfully added.");
                            window.open("http://localhost/ygc/IIITDMJ-website/admin/dean_info.php")
                            window.location.reload();
                     }
              }
       </script>
       <?php
       include('includes/script.php');
       include('includes/footer.php');
       ?>