<!-- Change Status Modal HTML -->
<div class="modal fade" id="empstatusupdate_modal<?php echo $fetch['Fld_RecID']?>" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="function.php" method="POST">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Employee Status</h4>
                        
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>

                    <div class="modal-body">
                       
                        <input type="hidden" name="Fld_RecID" value="<?php echo $fetch['Fld_RecID']?>"/>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="Fld_Status">Employee Status</label>
                                <select class="form-control" name="Fld_Status" value="<?php echo $fetch['Fld_Status']?>">
                                    <?php
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
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <button name="empstatusupdate" class="btn btn-info"  >Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>