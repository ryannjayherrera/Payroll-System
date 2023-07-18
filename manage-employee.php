<?php
include('db-config.php');
if (isset($_GET['id'])) {
	$user = $conn->query("SELECT * FROM tbl_employee where Fld_RecID =" . $_GET['id']);
	foreach ($user->fetch_array() as $k => $v) {
		$meta[$k] = $v;
	}
}
?>
<div class="modal fade full-window-modal" id="new_emp_btn" tabindex="-1" role="dialog" aria-labelledby="new_emp_btn" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="new_emp_btn">Update Employee List</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<!-- Put employee record here -->



				<form class="forms-sample">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="FirstName">First Name</label>
								<input type="hidden" name="id" value="<?php echo isset($id) ? $id : "" ?>" />
								<input type="text" name="firstname" required="required" class="form-control" value="<?php echo isset($firstname) ? $firstname : "" ?>" />
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="MiddleName">Middel Name</label>
								<input type="text" name ="middlename" placeholder="(optional)" class="form-control" value="<?php echo isset($middlename) ? $middlename : "" ?>" />
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="LastName">Last Name</label>
								<input type="text" name="lastname" required="required" class="form-control" value="<?php echo isset($lastname) ? $lastname : "" ?>" />
							</div>
						</div>
					</div>


					<div class="row">
						<div class="col-md-2">
							<div class="form-group">
								<label for="Birthday">Birth Date</label>
								<input id="dropper-animation" class="form-control" type="date" id="Birthday" placeholder="Birthday" />
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label for="gender">Gender</label>
								<select class="form-control" id="gender">
									<option>Male</option>
									<option>Female</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="address">Address</label>
								<input class="form-control" type="text" id="address" placeholder="Address" />
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label for="ContactNumber">Contact Number</label>
								<input class="form-control" type="text" id="ContactNumber" placeholder="Contact Number" />
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-2">
							<div class="form-group">
								<label for="datehired">Date Hired</label>
								<input type="date" class="form-control" id="datehired" placeholder="Date Hired">
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label for="Position">Position</label>
								<select class="form-control select2" id="Position">
									<?php
									include 'db-config.php';
									$users = $conn->query("SELECT * FROM tbl_position");
									$i = 1;
									while ($row = $users->fetch_assoc()) :
									?>
										<option><?php echo $row['Fld_PositionName']; ?></option>
									<?php endwhile; ?>

								</select>
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label for="status">Status</label>
								<select class="form-control select2" id="status">
									<?php
									include 'db-config.php';
									$users = $conn->query("SELECT * FROM tbl_emp_status");
									$i = 1;
									while ($row = $users->fetch_assoc()) :
									?>
										<option><?php echo $row['Fld_Status']; ?></option>
									<?php endwhile; ?>

								</select>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="jobdesc">Job Description</label>
						<textarea class="form-control html-editor" rows="10" id="jobdesc"></textarea>
					</div>

				</form>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<script>
	$('#manage-user').submit(function(e) {
		e.preventDefault();
		start_load()
		$.ajax({
			url: 'ajax.php?action=save_user',
			method: 'POST',
			data: $(this).serialize(),
			success: function(resp) {
				if (resp == 1) {
					alert_toast("Data successfully saved", 'success')
					setTimeout(function() {
						location.reload()
					}, 1500)
				}
			}
		})
	})
</script>