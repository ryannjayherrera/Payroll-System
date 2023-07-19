

<!doctype html>
<html class="no-js" lang="en">

<head>
 
    <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="plugins/ionicons/dist/css/ionicons.min.css">
    <link rel="stylesheet" href="plugins/icon-kit/dist/css/iconkit.min.css">
    <link rel="stylesheet" href="plugins/perfect-scrollbar/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="plugins/weather-icons/css/weather-icons.min.css">
    <link rel="stylesheet" href="dist/css/theme.min.css">
    <link rel="stylesheet" href="plugins/datedropper/datedropper.min.css">
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="plugins/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="plugins/summernote/dist/summernote-bs4.css">
    <script src="src/js/vendor/modernizr-2.8.3.min.js"></script>

</head>


     <!-- Add Employee -->
     <div class="modal fade full-window-modal" id="empedit_modal<?php echo $row['Fld_RecID']?>" aria-hidden="true">
        <div class="modal-dialog">
            <form class="function.php" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Employee Record</h5>
                   <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                     </div>
                    <div class="modal-body">
                        <!-- Put employee record here -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="Fld_FirstName">First Name</label>
                                    <input type="hidden" name="Fld_RecID" value="<?php echo $row['Fld_RecID']?>"/>
							
                                    <input type="text" class="form-control form-control-uppercase" name="Fld_FirstName" value="<?php echo $row['Fld_FirstName']?>" placeholder="First Name" required="required"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="Fld_MiddleName">Middel Name</label>
                                    <input type="text" class="form-control form-control-uppercase" name="Fld_MiddleName" value="<?php echo $row['Fld_MiddleName']?>" placeholder="Middle Name" required="required"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="Fld_LastName">Last Name</label>
                                    <input type="text" class="form-control form-control-uppercase" name="Fld_LastName" value="<?php echo $row['Fld_LastName']?>" placeholder="Last Name" required="required"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="Fld_Birthday">Birth Date</label>
                                    <input id="dropper-animation" class="form-control" type="date" name="Fld_Birthday" value="<?php echo $row['Fld_Birthday']?>" placeholder="Birthday" required="required"/>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="Fld_Gender">Gender</label>
                                    <select class="form-control" name="Fld_Gender">
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Fld_Address">Address</label>
                                    <input class="form-control form-control-uppercase" type="text" name="Fld_Address" value="<?php echo $row['Fld_Address']?>" placeholder="Address" required="required"/>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="Fld_ContactNumber">Contact Number</label>
                                    <input class="form-control form-control-uppercase" type="text" name="Fld_ContactNumber" value="<?php echo $row['Fld_ContactNumber']?>" placeholder="Contact Number" required="required"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="Fld_EmployeeID">Employee ID</label>
                                    <input type="text" class="form-control form-control-uppercase" name="Fld_EmployeeID" value="<?php echo $row['Fld_EmployeeID']?>" placeholder="Employee ID" required="required"/>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="Fld_DateHired">Date Hired</label>
                                    <input type="date" class="form-control" name="Fld_DateHired" value="<?php echo $row['Fld_DateHired']?>" placeholder="Date Hired" required="required"/>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="Fld_Position">Position</label>
                                    <select class="form-control" name="Fld_Position" value="<?php echo $row['Fld_Position']?>" required="required">
                                        <?php

                                        $users = $conn->query("SELECT * FROM tbl_position");
                                        $i = 1;
                                        while ($row = $users->fetch_assoc()) :
                                        ?>
                                            <option class="form-control form-control-uppercase"><?php echo $row['Fld_PositionName']; ?></option>
                                        <?php endwhile; ?>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="Fld_Status">Status</label>
                                    <select class="form-control" name="Fld_Status" value="<?php echo $row['Fld_Status']?>" required="required">
                                        <?php

                                        $users = $conn->query("SELECT * FROM tbl_emp_status");
                                        $i = 1;
                                        while ($row = $users->fetch_assoc()) :
                                        ?>
                                            <option class="form-control form-control-uppercase"><?php echo $row['Fld_Status']; ?></option>
                                        <?php endwhile; ?>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Fld_JobDesc">Job Description</label>
                            <textarea class="form-control html-editor" rows="10" name="Fld_JobDesc" value="<?php echo $row['Fld_JobDesc']?>" ></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary" name="UpdateEmployee">Save changes</button>
                    </div>
                </div>
            </form>
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="src/js/vendor/jquery-3.3.1.min.js"><\/script>')
    </script>
    <script src="plugins/popper.js/dist/umd/popper.min.js"></script>
    <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="plugins/screenfull/dist/screenfull.js"></script>
    <script src="dist/js/theme.min.js"></script>
    <script src="plugins/datedropper/datedropper.min.js"></script>
    <script src="js/form-picker.js"></script>
    <script src="plugins/select2/dist/js/select2.min.js"></script>
    <script src="plugins/summernote/dist/summernote-bs4.min.js"></script>