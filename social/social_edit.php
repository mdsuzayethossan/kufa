<?php
require '../session_check.php';
require '../dashboard_includes/header.php';
require '../db.php';
$id = $_GET['id'];
$select_social = "SELECT * FROM `social` WHERE id=$id";
$select_social_result = mysqli_query ($db_connect, $select_social);
$after_assoc_social = mysqli_fetch_assoc($select_social_result);
?>
<!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="admin.php">Starlight</a>     
      </nav>
      <div class="sl-pagebody">
      <div class="row">
                  <div class="col-lg-12 m-auto">
                      <?php  if(isset($_SESSION ['update_social'])) {
                      ?>
                      <div class="alert alert-success">
                          <?= $_SESSION ['update_social'];?>
                      </div>
                      <?php } unset($_SESSION ['update_social']);?>
                      
                      <div class="topbutton text-center">
                          <div class="user_list_btn">
                            <a target="_blank" style="  text-decoration: none; text-align: center; font-weight: 600; color: white;  letter-spacing: 1px; text-transform: UPPERCASE;" href="skills.php">Social</a>
                          </div>

                         <div class="user_view_btn">
                            <a target="_blank" style="border-radius: 25px; text-decoration: none; text-align: center; font-weight: 600; color: white;   letter-spacing: 1px; text-transform: UPPERCASE;" href="#">view</a>
                         </div>
                      </div>
                      
                    <div class="card" style="margin-top: 20px;">
                        <div style="background-color: orange;" class="card-header">
                            <h3 style="text-align: center; font-weight: 600; color: white;  padding: 10px 0; text-transform: UPPERCASE;">Banner Information</h3>
                        </div>
                            <div class="card-body">
                            <form action="social_update.php" method="POST">
                                <div class="mb-3">
                                    <input type="hidden" value="<?= $after_assoc_social['id']?>" name="id" class="form-control" id="exampleInputEmail1">
                                    <label for="exampleInputEmail1" class="form-label">Social Name</label>
                                    <input type="text" value="<?= $after_assoc_social['icon_name']?>" name="icon_name" class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Icon Class</label>
                                    <input type="text" value="<?= $after_assoc_social['icon_class']?>" name="icon_class" class="form-control" id="exampleInputEmail1">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Social Link</label>
                                    <input type="text" value="<?= $after_assoc_social['social_link']?>" name="social_link" class="form-control" id="exampleInputEmail1">
                                    
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
  
