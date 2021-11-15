<div class="modal fade" id="update_modal<?php echo $row['faculty_id'] ?>" aria-hidden="true">
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
							<input type="hidden" name="faculty_id" value="<?php echo $row['faculty_id'] ?>" />
							<label for="imgfile">Profile Image(Not more than 500kb):</label>
							<input type="file" name="myfile" class="form-control" />
						</div>
						<div class="form-group">
							<label for="Discipline">Discipline</label>
							<input type="text" class="form-control" id="Discipline" name="Discipline" value="<?php echo $row['Discipline'] ?>" />
						</div>
						<div class="form-group">
							<label for="Designation">Designation</label>
							<input type="text" class="form-control" id="Designation" name="Designation" value="<?php echo $row['Designation'] ?>" />
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email'] ?>" />
						</div>
						<div class="form-group">
							<label for="phone">Phone</label>
							<input type="phone" class="form-control" id="phone" name="phone" value="<?php echo $row['phone'] ?>" />
						</div>
						<div class="form-group">
							<label for="faculty_description">Description</label>
							<input type="text" class="form-control" id="faculty_description" name="faculty_description" value="<?php echo $row['faculty_description'] ?>" />
						</div>
					</div>
				</div>
				<div style="clear:both;"></div>
				<div class="modal-footer">
					<button name="updateFaculty" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Update</button>
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
				</div>
			</form>
		</div>
	</div>
</div>