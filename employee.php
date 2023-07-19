<?php
require_once 'function.php';
include 'db-config.php';


?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Employee | ePMS</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
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
    <link rel="stylesheet" href="plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <script src="src/js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->





    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-users bg-blue"></i>
                        <div class="d-inline">
                            <h5>Emloyee</h5>
                            <span>Make Employee Management Extremely Simple</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Employee</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Put content here -->

        <!-- Pusadasda -->

        <div class="card">
            <div class="card-header d-block">
                <h3>Employee List</h3></br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control" id="searchInput" placeholder="Search">
                        </div>
                    </div>
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm btn-block float-center" data-toggle="modal" type="button" data-target="#new_emp_btn"><span class="ik ik-user-plus"></span> Add Employee</button>

                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="dt-responsive">
                    <table id="alt-pg-dt" class="table table-bordered table-striped table-hover nowrap">
                        <thead>

                            <th>Employee ID</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Status</th>
                            <th class="nosort">&nbsp;</th>

                        </thead>
                        <tbody>
                            <?php

                            $query = mysqli_query($conn, "SELECT * FROM tbl_employee");

                            while ($row = mysqli_fetch_array($query)) {

                            ?>
                                <tr>
                                    <td><?php echo $row['Fld_EmployeeID']; ?> </td>
                                    <td><?php echo $row['Fld_FirstName']; ?> <?php echo $row['Fld_MiddleName']; ?>. <?php echo $row['Fld_LastName']; ?></td>
                                    <td><?php echo $row['Fld_Position']; ?></td>
                                    <td><?php echo $row['Fld_Status']; ?></td>
                                    <td>
                                        <div class="table-actions" style="text-align: center;">
                                            <button class="btn btn-icon btn-warning view_employee" data-id="<?php echo $row['Fld_RecID'] ?>" type="button"><i class="ik ik-folder-minus"></i></button>
                                            <button class="btn btn-icon btn-primary" data-toggle="modal" data-target="#empedit_modal<?php echo $row['Fld_RecID'] ?>"><i class="ik ik-edit-2"></i></button>
                                            <!--   <button class="btn btn-icon btn-success" data-toggle="modal" data-target="#empstatusupdate_modal<?php echo $row['Fld_RecID'] ?>"><i class="ik ik-file-text"></i></button> -->
                                        </div>
                                    </td>
                                </tr>

                            <?php
                                /* include 'modal/emp-status-update.php'; */
                                include "modal/emp-edit.php";
                            }

                            ?>



                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>

    <!-- Add Employee -->
    <div class="modal fade full-window-modal" id="new_emp_btn" tabindex="-1" role="dialog" aria-labelledby="new_emp_btn" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form class="forms-sample" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="new_emp_btn">Add Employee</h5>
                        <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
                    </div>
                    <div class="modal-body">
                        <!-- Put employee record here -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="Fld_FirstName">First Name</label>
                                    <input type="text" class="form-control form-control-uppercase" name="Fld_FirstName" placeholder="First Name" required="required">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="Fld_MiddleName">Middel Name</label>
                                    <input type="text" class="form-control form-control-uppercase" name="Fld_MiddleName" placeholder="Middle Name" required="required">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="Fld_LastName">Last Name</label>
                                    <input type="text" class="form-control form-control-uppercase" name="Fld_LastName" placeholder="Last Name" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="Fld_Birthday">Birth Date</label>
                                    <input id="dropper-animation" class="form-control" type="date" name="Fld_Birthday" placeholder="Birthday" required="required">
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
                                    <input class="form-control form-control-uppercase" type="text" name="Fld_Address" placeholder="Address" required="required">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="Fld_ContactNumber">Contact Number</label>
                                    <input class="form-control form-control-uppercase" type="text" name="Fld_ContactNumber" placeholder="Contact Number" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="Fld_EmployeeID">Employee ID</label>
                                    <input type="text" class="form-control form-control-uppercase" name="Fld_EmployeeID" placeholder="Employee ID" required="required">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="Fld_DateHired">Date Hired</label>
                                    <input type="date" class="form-control" name="Fld_DateHired" placeholder="Date Hired" required="required">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="Fld_Position">Position</label>
                                    <select class="form-control" name="Fld_Position" required="required">
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
                                    <select class="form-control select2" name="Fld_Status" required="required">
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
                            <textarea class="form-control html-editor" rows="10" name="Fld_JobDesc"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="addEmployee">Save changes</button>
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
    <script src="plugins/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.js"></script>


    <script>
        // Search functionality
        $(document).ready(function() {
            $("#searchInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("table tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b, o, i, l, e, r) {
            b.GoogleAnalyticsObject = l;
            b[l] || (b[l] =
                function() {
                    (b[l].q = b[l].q || []).push(arguments)
                });
            b[l].l = +new Date;
            e = o.createElement(i);
            r = o.getElementsByTagName(i)[0];
            e.src = 'https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e, r)
        }(window, document, 'script', 'ga'));
        ga('create', 'UA-XXXXX-X', 'auto');
        ga('send', 'pageview');
    </script>
</body>

</html>