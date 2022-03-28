<?php 
require '../session_check.php';
require '../dashboard_includes/header.php';
?>
<?php 
require '../db.php';
$select_trash_users = "SELECT * FROM users WHERE status=1";
$select_trash_users_result = mysqli_query($db_connect, $select_trash_users);

?>
 <!-- ########## START: MAIN PANEL ########## -->
 <?php if($_SESSION['role'] !=4 && $_SESSION['role'] !=0 ) { ?>
 <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Dashboard</a>
        
      </nav>

      <div class="sl-pagebody">
            <div class="row">
                  <div class="col-lg-12 m-auto">
                      <div style="margin-top: 40px;" class="card">
                            <div class="card_header" style="background-color: orange;" >
                                <h2 style="text-align: center; font-weight: 600; color: white;  padding: 10px 0; text-transform: UPPERCASE; font-family: 'Raleway', sans-serif; letter-spacing: 2px;">Temporary Deleted Information</h2>
                            </div>

                            <?php if(isset($_SESSION['delete_user'])){?>
                                <div class="alert alert-success"><?= $_SESSION['delete_user'] ?></div>
                           <?php } unset($_SESSION['delete_user']) ?>
                          <div class="card_body">
                            <table class="table table-striped">
                                <thead> 
                                    <tr>
                                    <th scope="col">Sl</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($select_trash_users_result as $key => $trash_user) {?>   
                                    <tr>
                                        <th scope="row"><?= $key+1 ?></th>
                                        <td><?php echo $trash_user['name']?></td>
                                        <td><?php echo $trash_user['email']?></td>
                                        <td><img width="50" src="../uploads/users/<?= $trash_user['image']?>" alt=""></td>
                                        <td><?php echo $trash_user['created_at']?></td>
                                        <td>
                                            <a  href="view.php?id=<?php echo $trash_user['id']?>" class="btn alert-success">view</a>
                                        </td>
                                        <td>
                                            <a href="restore.php?id=<?php echo $trash_user['id']?>" class="btn btn-danger">Restore</a>
                                        </td>
                                        <td>
                                            <a href="delete.php?id=<?php echo $trash_user['id']?>" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                          </div>
                      </div>  
                  </div>
              </div>
      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <?php } ?>
    <!-- ########## END: MAIN PANEL ########## -->
    <?php require '../dashboard_includes/footer.php';?>

