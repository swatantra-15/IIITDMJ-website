<div class="modal fade " id="view_modal<?php echo $row['roll_number'] ?>" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title"><?php echo $row['name']?>'s Details</h3>
				</div>
				<div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                        <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($row['Student_image']) . '" alt="" class="rounded-circle" width="70%" height="100%" style="padding:5px; border:1px solid; margin-left:5%; ">' ?>
                        </div>
                        <div class="col-md-6" style="font-size: 1.2rem;">
                            <label><b>Roll Number:</b></label>&emsp;<?php echo $row['roll_number']?><br>
                            <label><b>Name:</b></label> &emsp;<?php echo $row['name']?><br>
                            <label><b>Course:</b></label>&emsp;<?php echo $row['programme']?><br>
                            <label><b>Branch:</b></label>&emsp;<?php echo $row['discipline']?><br>
                            <label><b>Email:</b></label>&emsp;<?php echo $row['email']?><br>
                            <label><b>Sub Discipline:</b></label>&emsp;<?php echo $row['sub_discipline']?><br>
                            <label><b>Admission Year:</b></label>&emsp;<?php echo $row['addmission_year']?><br>
                            <label><b>Phone Number:</b></label>&emsp;<?php echo $row['phone']?><br>
                            <label><b>Interest Areas:</b></label>&emsp;<?php echo $row['interest_area']?><br>
                        </div>
                    </div>
				</div>
				<div style="clear:both;"></div>
				<div class="modal-footer">
                    <button name="update" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</button>
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
				</div>
				</div>
			</form>
            
		</div>
	</div>
</div>