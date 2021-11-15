<div class="modal fade" id="update_modal<?php echo $row['roll_number'] ?>" aria-hidden="true">
	<div class=" modal-dialog modal-xl">
		<div class="modal-content">
			<form method="POST" action="update_queries.php">
				<div class="modal-header">
					<h3 class="modal-title">Update <?php echo $row['name'] ?>'s Details</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<input type="hidden" name="roll_number" value="<?php echo $row['roll_number'] ?>" />
							<label for="imgfile">Profile Image(Not more than 500kb):</label>
							<input type="file" name="student_image" class="form-control" />
						</div>
						<div class="form-group">
							<label for="programme">Programme</label>
							<input type="text" class="form-control" id="Programme" name="Programme" value="<?php echo $row['programme'] ?>" />
						</div>
						<div class="form-group">
							<label for="Discipline">Discipline</label>
							<input type="text" class="form-control" id="Discipline" name="Discipline" value="<?php echo $row['discipline'] ?>" />
						</div>
						<div class="form-group">
							<label for="Sub_Discipline">Sub Discipline</label>
							<input type="text" class="form-control" id="Sub_Discipline" name="Sub_Discipline" value="<?php echo $row['sub_discipline'] ?>" />
						</div>
						<div class="form-group">
							<label for="Interest_Area">Interest Areas</label>
							<input type="text" class="form-control" id="Interest_Area" name="Interest_Area" value="<?php echo $row['interest_area'] ?>" />
						</div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="phone" class="form-control" id="phone" name="phone" value="<?php echo $row['phone'] ?>" />
                        </div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email'] ?>" />
						</div>
					</div>
				</div>
				<div style="clear:both;"></div>
				<div class="modal-footer">
					<button name="updateStudent" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Update</button>
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
				</div>
			</form>
		</div>
	</div>
</div>