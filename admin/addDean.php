<?php
include('includes/header.php');
include('includes/navbar.php');

?>
<?php
include 'includes/connect.php';
if (isset($_POST['adddeanbtn'])) {
       $dean_id = $_POST["dean_id"];
       $dean_name = $_POST["dean_name"];
       $department_name=$_POST["department_name"];
       $email = $_POST["email"];
       $dean_description = $_POST["description"];
       $query = "INSERT INTO dean(dean_id,name,department_name,email,description) VALUES ('$dean_id','$dean_name','$department_name','$email','$dean_description')";
       $run = mysqli_query($con, $query);
       if (!$run) {
              echo "Data Not Inserted " . mysqli_error($con);
       }
}
?>
<div class="col-sm-7 mt-5 mx-3 jumbotron">
       <h3 class="text-center">Add Dean</h3>
       <form action="" method="POST" enctype="multipart/form-data" onsubmit="addnewdata()">
              <div class="form-group">
                     <label for="dean_id">Dean Id</label>
                     <input type="Varchar" class="form-control" id="dean_id" name="dean_id" required>
              </div>
              <div class="form-group">
                     <label for="dean_name">Name</label>
                     <input type="text" class="form-control" id="dean_name" name="dean_name" required>
              </div>
              <div class="form-group">
                     <label for="department_name">Department Name</label>
                     <br>
                     <select name="department_name" id="department_name">
                            <option>Choose Department</option>
                            <option value="Academics">Academics</option>
                            <option value="RSPC">Research</option>
                            <option value="Students">Students</option>
                     </select>
              </div>
              <div class="form-group">
                     <label for="email">Email</label>
                     <input type="email" class="form-control" id="email" name="email">
              </div>
              <div class="form-group">
                     <label for="description">Description</label>
                     <textarea class="form-control" id="description" name="description"></textarea>
              </div>
              <div class="text-center">
                     <button type="submit" class="btn btn-primary" id="adddeanbtn" name="adddeanbtn">
                            Add
                     </button>
                     <button type="button" class="btn btn-light">
                            <a href="dean.php">Close</a>
                     </button>
              </div>
       </form>

       <script>
              function addnewdata() {
                     var ask = window.confirm("Are you sure you want to add new data?");
                     if (ask) {
                            window.alert("This post was successfully added.");
                            window.open("http://localhost/ygc/IIITDMJ-website/admin/dean.php")
                     } else {
                            event.preventDefault();
                     }
              }
       </script>

       <?php
       include('includes/script.php');
       include('includes/footer.php');
       ?>