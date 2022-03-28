<?php
session_start();
require '../session_check.php';
require '../dashboard_includes/header.php';
require '../db.php';
$id = $_GET['id'];
$select_user = "SELECT * FROM users WHERE id=$id";
$select_user_result = mysqli_query ($db_connect, $select_user);
$after_assoc = mysqli_fetch_assoc($select_user_result);
?>
<!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="admin.php">Starlight</a>     
      </nav>
      <div class="sl-pagebody">
      <div class="row">
                  <div class="col-lg-6 m-auto">
                      <?php  if(isset($_SESSION ['update_user'])) {
                      ?>
                      <div class="alert alert-success">
                          <?= $_SESSION ['update_user'];?>
                      </div>
                      <?php } unset($_SESSION ['update_user']);?>
                      
                      <div class="topbutton text-center">
                          <div class="user_list_btn">
                            <a target="_blank" style="  text-decoration: none; text-align: center; font-weight: 600; color: white;  letter-spacing: 1px; text-transform: UPPERCASE;" href="users.php">User List</a>
                          </div>

                         <div class="user_view_btn">
                            <a target="_blank" style="border-radius: 25px; text-decoration: none; text-align: center; font-weight: 600; color: white;   letter-spacing: 1px; text-transform: UPPERCASE;" href="view.php">view</a>
                         </div>
                      </div>
                      
                    <div class="card" style="margin-top: 20px;">
                        <div style="background-color: orange;" class="card-header">
                            <h3 style="text-align: center; font-weight: 600; color: white;  padding: 10px 0; text-transform: UPPERCASE;">Form Validation</h3>
                        </div>
                            <div class="card-body">
                            <form action="update.php" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <input type="hidden" value="<?= $after_assoc['id']?>" name="id" class="form-control" id="exampleInputEmail1">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="text" value="<?= $after_assoc['name']?>" name="name" class="form-control" id="exampleInputEmail1">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="email" name="email" value="<?= $after_assoc['email']?>" class="form-control" id="exampleInputEmail1">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Password</label>
                                    <input type="password" name="password" value="<?= $after_assoc['password']?>" class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Image</label></br>
                                    <img width="70" src="../uploads/users/<?= $after_assoc['image']?>" alt="">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Country</label>
                                    <select name="country" class="form-control">
                                        <option value="">--Select your country--</option>
                                        <option value="Bangladesh" <?=($after_assoc['country'] == 'Bangladesh'? 'selected': '')?>>Bangladesh</option>
                                        <option value="India" <?=($after_assoc['country'] == 'India'? 'selected': '')?>>India</option>
                                        <option value="Brazil" <?=($after_assoc['country'] == 'Brazil'? 'selected': '')?>>Brazil</option>
                                        <option value="China" <?=($after_assoc['country'] == 'China'? 'selected': '')?>>China</option>
                                        <option value="Finland" <?=($after_assoc['country'] == 'Finland'? 'selected': '')?>>Finland</option>
                                        <option value="Indonesia" <?=($after_assoc['country'] == 'Indonesia'? 'selected': '')?>>Indonesia</option>
                                        <option value="Malaysia" <?=($after_assoc['country'] == 'Malaysia'? 'selected': '')?>>Malaysia</option>
                                        <option value="Pakistan" <?=($after_assoc['country'] == 'Pakistan'? 'selected': '')?>>Pakistan</option>
                                        <option value="Pakistan" <?=($after_assoc['country'] == 'Argentina'? 'selected': '')?>>Argentina</option>
                                    </select>
                                        
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

                                <div class="mb-3 text-center">
                                    <button style="text-align: center; color: white; background-color: orange; padding: 8px 15PX; letter-spacing: 3px; text-transform: UPPERCASE;" type="submit" class="btn">Submit</button>
                                </div>
                                <a href=" "></a>
                            </form>
                            </div>
                        </div>
                  </div>
              </div>
      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

<?php require '../dashboard_includes/footer.php'; ?>
  
