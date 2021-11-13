<?php
include('includes/header.php');
include('includes/navbar.php');

?>
<?php
include 'includes/connect.php';
if (isset($_POST['addstudentbtn'])) {
       $roll_number = $_POST["student_id"];
       $student_image = addslashes(file_get_contents($_FILES['student_image']['tmp_name']));
       $student_name = $_POST["student_name"];
       $programme = $_POST["programme"];
       $discipline = $_POST["discipline"];
       $sub_discilpine = $_POST["subdiscipline"];
       $interest_area = $_POST["interest_area"];
       $addmisssion_year = $_POST["addmission_year"];
       $phone = $_POST["phone"];
       $email = $_POST["email"];
       $query = "INSERT INTO students(roll_number,Student_image,name,programme,discipline,sub_discipline,interest_area,addmission_year,phone,email) VALUES ('$roll_number','$student_image','$student_name','$programme','$discipline','$sub_discilpine','$interest_area','$addmisssion_year','$phone','$email')";
       $run = mysqli_query($con, $query);
       if (!$run) {
              echo "Data Not Inserted ".mysqli_error($con);
       }
}
?>
<div class="col-sm-8 mt-5 mx-3 jumbotron">
       <h3 class="text-center">New Student</h3>
       <form action="" method="POST" enctype="multipart/form-data" onsubmit="addnewdata()">
              <div class="form-group">
                     <label for="student_id">Roll Number</label>
                     <input type="varchar" class="form-control" id="student_id" name="student_id" required>
              </div>
              <div class="form-group">
                     <label for="student_image">Profile Image(Not more than 500kb):</label><br>
                     <input type="file" id="student_image" name="student_image">
              </div>
              <div class="form-group">
                     <label for="student_name">Name</label>
                     <input type="text" class="form-control" id="student_name" name="student_name" required>
              </div>
              <div class="form-group">
                     <label for="programme">Programme</label>
                     <br>
                     <select name="programme" id="programme">
                            <option>Choose Programme</option>
                            <option value="M.Tech">M.Tech</option>
                            <option value="Phd">Phd</option>
                     </select>
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
                     <label for="subdiscipline">Sub Discipline</label>
                     <input type="text" class="form-control" id="subdiscipline" name="subdiscipline">
              </div>
              <div class="form-group">
                     <label for="addmission_year">Addmission Year</label>
                     <input type="year" class="form-control" id="addmission_year" name="addmission_year">
              </div>
              <div class="form-group">
                     <label for="phone">Phone</label>
                     <input type="phone" class="form-control" id="phone" name="phone">
              </div>
              <div class="form-group">
                     <label for="email">Email</label>
                     <input type="email" class="form-control" id="email" name="email">
              </div>
              <div class="form-group">
                     <label for="interest_area">Interest Area</label>
                     <textarea class="form-control" id="interest_area" name="interest_area"></textarea>
              </div>
              <div class="text-center">
                     <button type="submit" class="btn btn-primary" id="addstudentbtn" name="addstudentbtn">
                            Add
                     </button>
                     <button type="button" class="btn btn-light">
                            <a href="students.php">Close</a>
                     </button>
              </div>
       </form>
       <script>
              function addnewdata() {
                     var ask = window.confirm("Are you sure you want to add new data?");
                     if (ask) {
                            window.alert("This post was successfully added.");
                            window.open("http://localhost/ygc/IIITDMJ-website/admin/students.php")
                     } else {
                            event.preventDefault();
                     }
              }
       </script>


       <?php
       include('includes/script.php');
       include('includes/footer.php');
       ?>