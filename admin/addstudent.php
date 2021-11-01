<?php 
       include('includes/header.php');
       include('includes/navbar.php');
       
 ?>

 <div class="col-sm-11 mt-5 mx-3 jumbotron">
        <h3 class="text-center">New Student</h3>
       <form action="" method="POST" enctype="multipart/form-data">
       <div class="form-group">
              <lable for="student_id">Roll Number</lable>
              <input type="varchar" class="form-control" id="student_id" name="student_id">
       </div>
       <div class="form-group">
              <lable for="faculty_name">Name</lable>
              <input type="text" class="form-control" id="student_name" name="student_name">
       </div>
       <div class="form-group">
              <lable for="programme">Programme</lable>
              <input type="varchar" class="form-control" id="programme" name="programme">
       </div>
       <div class="form-group">
              <lable for="dicipline">Discipline</lable>
              <input type="text" class="form-control" id="dicipline" name="dicipline">
       </div>
       <div class="form-group">
              <lable for="subdicipline">Sub Discipline</lable>
              <input type="text" class="form-control" id="subdicipline" name="subdicipline">
       </div>
       <div class="form-group">
              <lable for="email">Addmission Year</lable>
              <input type="year" class="form-control" id="email" name="email">
       <div class="form-group">
              <lable for="email">Email</lable>
              <input type="email" class="form-control" id="email" name="email">
       </div>
       <div class="form-group">
              <lable for="phone">Phone</lable>
              <input type="phone" class="form-control" id="phone" name="phone">
       </div>
       </form>
       <div class="text-center" >
          <button type="submit" class="btn btn-primary" id="addFacultybtn" name="addFacultybtn">
                 Submit
          </button>
          <button type="button" class="btn btn-light">
                 <a href="students.php">Close</a>
          </button>
        </div>



<?php 
       include('includes/script.php');
       include('includes/footer.php');
       ?>