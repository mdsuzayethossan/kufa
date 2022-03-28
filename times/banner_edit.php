<?php
require '../session_check.php';
require '../dashboard_includes/header.php';
require '../db.php';
$id = $_GET['id'];
$select_banner = "SELECT * FROM banners WHERE id=$id";
$select_banner_result = mysqli_query ($db_connect, $select_banner);
$after_assoc = mysqli_fetch_assoc($select_banner_result);
?>
<!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="admin.php">Starlight</a>     
      </nav>
      <div class="sl-pagebody">
      <div class="row">
                  <div class="col-lg-12 m-auto">
                      <?php  if(isset($_SESSION ['update_banner'])) {
                      ?>
                      <div class="alert alert-success">
                          <?= $_SESSION ['update_banner'];?>
                      </div>
                      <?php } unset($_SESSION ['update_banner']);?>
                      
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
                            <h3 style="text-align: center; font-weight: 600; color: white;  padding: 10px 0; text-transform: UPPERCASE;">Banner Information</h3>
                        </div>
                            <div class="card-body">
                            <form action="banner_update.php" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <input type="hidden" value="<?= $after_assoc['id']?>" name="id" class="form-control" id="exampleInputEmail1">
                                    <label for="exampleInputEmail1" class="form-label">Title</label>
                                    <input type="text" value="<?= $after_assoc['title']?>" name="title" class="form-control" id="exampleInputEmail1">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Description</label>
                                    <textarea name="description" class="form-control" rows="3"><?= $after_assoc['description']?></textarea>
                                </div>
                                
                                <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Image</label></br>
                                    <img width="70" src="../uploads/banners/<?= $after_assoc['image']?>" alt="">
                                </div>

                                <div class="mb-3">
                                    <input type="file" name="file" value="" class="form-control" id="exampleInputEmail1">
    
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
                                

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Button</label>
                                    <input type="text" name="btn" value="<?= $after_assoc['btn']?>" class="form-control" id="exampleInputEmail1">
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
  
