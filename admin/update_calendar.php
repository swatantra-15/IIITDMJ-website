<div class="modal fade" id="update_modal<?php echo $row['cal_id'].$row['sem'] ?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="update_Calquery.php">
				<div class="modal-header">
					<h3 class="modal-title">Update Calendar</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<input type="hidden" name="cal_id" value="<?php echo $row['cal_id']?>"/>
							<input type="hidden" name="sem" value="<?php echo $row['sem']?>"/>
							<label>Event</label>
							<input type="text" name="heading" value="<?php echo $row['heading']?>" class="form-control" required="required"/>
						</div>
						<div class="form-group">
							<label>Old UG+PG</label>
							<input type="text" name="date_ug_pg" value="<?php echo $row['date_ug_pg']?>" class="form-control" />
						</div>
						<div class="form-group">
							<label>New PG</label>
							<input type="text" name="date_else" value="<?php echo $row['date_else']?>" class="form-control" />
						</div>
					</div>
				</div>
				<div style="clear:both;"></div>
				<div class="modal-footer">
					<button name="update" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Update</button>
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
				</div>
				</div>
			</form>
		</div>
	</div>
</div>