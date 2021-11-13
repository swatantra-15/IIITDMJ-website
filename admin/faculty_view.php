<div class="modal fade " id="view_modal<?php echo $row['faculty_id'] ?>" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title"><?php echo $row['name']?>'s Details</h3>
				</div>
				<div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                        <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" alt="" class="rounded-circle" width="60%" height="100%" style="padding:5px; border:1px solid; margin-left:5%; ">' ?>
                        </div>
                        <div class="col-md-6" style="font-size: 1.2rem;">
                            <label><b>Faculty_id</b></label>&emsp;<?php echo $row['faculty_id']?><br>
                            <label><b>Name:</b></label> &emsp;<?php echo $row['name']?><br>
                            <label><b>Discipline:</b></label>&emsp;<?php echo $row['Discipline']?><br>
                            <label><b>Designation:</b></label>&emsp;<?php echo $row['Designation']?><br>
                            <label><b>Email:</b></label>&emsp;<?php echo $row['email']?><br>
                            <label><b>Phone Number:</b></label>&emsp;<?php echo $row['phone']?><br>
                            <label><b>Interest Areas:</b></label>&emsp;<?php echo $row['faculty_description']?><br>
                        </div>
                    </div>
				</div>
				<div style="clear:both;"></div>
				<div class="modal-footer">
                    <button name="update" class="btn btn-warning" data-toggle="modal" type="button" data-target="#update_modal<?php echo $row['faculty_id']?>"><span class="glyphicon glyphicon-edit"></span> Edit</button>
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
				</div>
                <?php include 'edit_faculty.php'?>
				</div>
			</form>
            
		</div>
	</div>
</div>