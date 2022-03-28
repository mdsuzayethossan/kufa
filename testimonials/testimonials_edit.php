<?php
require '../session_check.php';
require '../dashboard_includes/header.php';
require '../db.php';
$id = $_GET['id'];
$select_testimonials = "SELECT * FROM `testimonials` WHERE id=$id";
$select_testimonials_result = mysqli_query ($db_connect, $select_testimonials);
$after_assoc = mysqli_fetch_assoc($select_testimonials_result);
?>
<!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="admin.php">Starlight</a>     
      </nav>
      <div class="sl-pagebody">
      <div class="row">
                  <div class="col-lg-12 m-auto">
                      <?php  if(isset($_SESSION ['update_testimonials'])) {
                      ?>
                      <div class="alert alert-success">
                          <?= $_SESSION ['update_testimonials'];?>
                      </div>
                      <?php } unset($_SESSION ['update_testimonials']);?>
                      
                      <div class="topbutton text-center">
                          <div class="user_list_btn">
                            <a target="_blank" style="  text-decoration: none; text-align: center; font-weight: 600; color: white;  letter-spacing: 1px; text-transform: UPPERCASE;" href="banners.php">User List</a>
                          </div>

                         <div class="user_view_btn">
                            <a target="_blank" style="border-radius: 25px; text-decoration: none; text-align: center; font-weight: 600; color: white;   letter-spacing: 1px; text-transform: UPPERCASE;" href="view.php">view</a>
                         </div>
                      </div>
                      
                    <div class="card" style="margin-top: 20px;">
                        <div style="background-color: orange;" class="card-header">
                            <h3 style="text-align: center; font-weight: 600; color: white;  padding: 10px 0; text-transform: UPPERCASE;">Testimonials Information</h3>
                        </div>
                            <div class="card-body">
                            <form action="testimonials_update.php" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <input type="hidden" value="<?= $after_assoc['id']?>" name="id" class="form-control" id="exampleInputEmail1">
                                    <label for="exampleInputEmail1" class="form-label">Quiote</label>
                                    <input type="text" value="<?= $after_assoc['quiote']?>" name="quiote" class="form-control" id="exampleInputEmail1">
                                    </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Client Name</label>
                                    <input type="text" value="<?= $after_assoc['client_name']?>" name="client_name" class="form-control" id="exampleInputEmail1">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Comments</label>
                                    <textarea name="comments" class="form-control" rows="3"><?= $after_assoc['comments']?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Designation</label>
                                    <input type="text" value="<?= $after_assoc['designation']?>" name="designation" class="form-control" id="exampleInputEmail1">
                                </div>

                                <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Client Photo</label></br>
                                    <img width="70" src="../uploads/testimonials/<?= $after_assoc['client_photo']?>" alt="">
                                </div>

                                <div class="mb-3">
                                    <input type="file" name="client_photo" value="" class="form-control" id="exampleInputEmail1">
    
                                    <?php if (isset($_SESSION ['invld_exten'])) {?>
                                        <div class="alert alert-warning">
                                            <?= ($_SESSION ['invld_exten']);?>
                                        </div>
                                    <?php } unset($_SESSION ['invld_exten'])?>

                                    <?php if (isset($_SESSION ['file_size_invld'])) {?>
                                        <div class="alert alert-warning">
                                            <?= ($_SESSION ['file_size_invld']);?>
                                        </div>
                                    <?php } unset($_SESSION ['file_size_invld'])?>
                                </div>
                                
                                <div class="mb-3 text-center">
                                    <button style="text-align: center; color: white; background-color: orange; padding: 8px 15PX; letter-spacing: 3px; text-transform: UPPERCASE;" type="submit" class="btn">Submit</button>
                                </div>
                                
                            </form>
                            </div>
                        </div>
                  </div>
              </div>
      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

<?php require '../dashboard_includes/footer.php'; ?>
  
