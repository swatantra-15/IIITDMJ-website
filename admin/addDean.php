<?php 
       include('includes/header.php');
       include('includes/navbar.php');
       
 ?>

 <div class="col-sm-6 mt-5 mx-3 jumbotron">
        <h3 class="tect center">Add Dean</h3>
       <form action="" method="POST" enctype="multipart/form-data">
       <div class="form-group">
              <lable for="dean_name">Name</lable>
              <input type="text" class="form-control" id="dean_name" name="dean_name">
       </div>
       <div class="form-group">
              <lable for="department_name">Deaprtment Name</lable>
              <input type="text" class="form-control" id="department_name" name="department_name">
       </div>
       <div class="form-group">
              <lable for="email">Email</lable>
              <input type="email" class="form-control" id="email" name="email">
       </div>
       <div class="form-group">
              <lable for="description">Description</lable>
              <textarea class="form-control" id="description" name="description"></textarea>
       </div>
       </form>
       <div class="text-center" >
          <button type="submit" class="btn btn-primary" id="addFacultybtn" name="addFacultybtn">
                 Submit
          </button>
          <button type="button" class="btn btn-light">
                 <a href="dean.php">Close</a>
          </button>
        </div>



<?php 
       include('includes/script.php');
       include('includes/footer.php');
       ?>