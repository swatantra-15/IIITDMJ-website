<?php 
       include('includes/header.php');
       include('includes/navbar.php');
       ?>

<div class="col-sm-9 mt-5">
    <!--Table-->
<div class="bg-light text-dark p-2">
    <p><h4>List of Alumini</h4></p>
<table class="table" >
    <thead>
        <tr>
            <th scope="col">Alum ID</th>
            <th scope="col">Name</th>
            <th scope="col">Date Of Birth</th>
            <th scope="col">Year of Graduation</th>
            <th scope="col">Email</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>

</tr>
</thead>
</tbody>
<tr>
    <th scope="row">111</th>
    <td>example</td>
    <td>example</td>
    <td>example</td>
    <td>example</td>
    <td>example</td>
    <td>
       <div class="btn-group">
          <button type="submit" class="btn btn-info mr-3" name="view" value="view">
            <i class="fas fa-pen"></i>
         </button>
          <button type="submit" class="btn btn-secondary" name="Delete" value="Delete">
            <i class="fas fa-trash-alt"></i>
          </button>
        </div>
     </td>
</tr>
</tbody>
</table>
</div>
</div>
<!--row closed from header-->

<div>
    <a class="btn btn-danger box" href="addAlumni.php" style="  position: fixed; bottom: 10px; right: 20px; margin-bottom: 30px;" >
        <i class="fas fa-plus fa-2x"></i>

</a>

</div>




<?php 
       include('includes/script.php');
       include('includes/footer.php');
       ?>