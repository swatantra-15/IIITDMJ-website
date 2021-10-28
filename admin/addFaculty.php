<?php
include('includes/header.php');
include('includes/navbar.php');

?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
       <h3 class="tect center">New Faculty</h3>
       <form action="" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                     <label for="imgfile">Profile Image(Not more than 500kb):</label><br>
                     <input type="file" name="myfile" required />
              </div>
              <div class="form-group">
                     <label for="faculty_id">Faculty ID</label>
                     <input type="varchar" class="form-control" id="faculty_id" name="faculty_id">
              </div>
              <div class="form-group">
                     <label for="faculty_name">Name</label>
                     <input type="text" class="form-control" id="faculty_name" name="faculty_name">
              </div>
              <div class="form-group">
                     <label for="email">Email</label>
                     <input type="email" class="form-control" id="email" name="email">
              </div>
              <div class="form-group">
                     <label for="phone">Phone</label>
                     <input type="phone" class="form-control" id="phone" name="phone">
              </div>
              <div class="form-group">
                     <label for="description">Description</label>
                     <textarea class="form-control" id="description" name="description"></textarea>
              </div>
       </form>
       <div class="text-center">
              <button type="submit" class="btn btn-primary" id="btn" name="btn">
                     Submit
              </button>
              <button type="button" class="btn btn-light">
                     <a href="faculty.php">Close</a>
              </button>
       </div>



       <?php
       include('includes/script.php');
       include('includes/footer.php');
       ?>