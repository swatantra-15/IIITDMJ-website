<?php
include('includes/header.php');
include('includes/navbar.php');

?>
<?php
include 'includes/connect.php';
if (isset($_POST['addfacultybtn'])) {
       $faculty_id = $_POST["faculty_id"];
       $faculty_name = $_POST["faculty_name"];
       $faculty_image = addslashes(file_get_contents($_FILES['faculty_image']['tmp_name']));
       $email = $_POST["email"];
       $discipline = $_POST["discipline"];
       $Designation = $_POST["designation"];
       $phone = $_POST["phone"];
       $faculty_description = $_POST["description"];
       $query = "INSERT INTO faculty(faculty_id,name,image,email,Discipline,Designation,phone,faculty_description) VALUES ('$faculty_id','$faculty_name','$faculty_image','$email','$discipline','$Designation','$phone','$faculty_description')";
       $run = mysqli_query($con, $query);
       if (!$run) {
              echo "Data Not Inserted " . mysqli_error($con);
       }
}
?>
<div class="col-sm-8 mt-5 mx-3 jumbotron">
       <h3 class="text-center">New Faculty</h3>
       <form action="" method="POST" enctype="multipart/form-data" onsubmit="addnewdata()">
              <div class="form-group">
                     <label for="faculty_image">Profile Image(Not more than 500kb):</label><br>
                     <input type="file" name="faculty_image">
              </div>
              <div class="form-group">
                     <label for="faculty_id">Faculty ID(like: YSK_101)</label>
                     <input type="varchar" class="form-control" id="faculty_id" name="faculty_id" required>
              </div>
              <div class="form-group">
                     <label for="faculty_name">Name</label>
                     <input type="text" class="form-control" id="faculty_name" name="faculty_name" required>
              </div>
              <div class="form-group">
                     <label for="email">Email</label>
                     <input type="email" class="form-control" id="email" name="email">
              </div>
              <div class="form-group">
                     <label for="discipline">Discipline</label>
                     <br>
                     <select name="discipline" id="discipline">
                            <option>Choose Discipline</option>
                            <option value="CSE">CSE</option>
                            <option value="ECE">ECE</option>
                            <option value="Design">Design</option>
                            <option value="ME">ME</option>
                            <option value="Natural Science">Natural Science</option>
                     </select>
              </div>
              <div class="form-group">
                     <label for="designation">Designation</label>
                     <input type="text" class="form-control" id="designation" name="designation">
              </div>
              <div class="form-group">
                     <label for="phone">Phone</label>
                     <input type="phone" class="form-control" id="phone" name="phone">
              </div>
              <div class="form-group">
                     <label for="description">Description</label>
                     <textarea class="form-control" id="description" name="description"></textarea>
              </div>
              <div class="text-center">
                     <button type="submit" class="btn btn-primary" id="addfacultybtn" name="addfacultybtn">
                            add
                     </button>
                     <button type="button" class="btn btn-light">
                            <a href="faculty.php">Close</a>
                     </button>
              </div>
       </form>


       <script>
              function addnewdata() {
                     var ask = window.confirm("Are you sure you want to add new data?");
                     if (ask) {
                            window.alert("This post was successfully added.");
                            window.open("http://localhost/ygc/IIITDMJ-website/admin/faculty.php")
                     } else {
                            event.preventDefault();
                     }
              }
       </script>
       <?php
       include('includes/script.php');
       include('includes/footer.php');
       ?>