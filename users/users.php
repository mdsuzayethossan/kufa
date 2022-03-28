<?php 
require '../dashboard_includes/header.php';
require '../session_check.php';
?>
<?php 
require '../db.php';
$select_users = "SELECT * FROM users WHERE status=0";
$select_users_result = mysqli_query($db_connect, $select_users);

?>
 <!-- ########## START: MAIN PANEL ########## -->
 <?php if( $_SESSION['role'] == 1 || 2) { ?>

 <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Dashboard</a>
      </nav> 

      <div class="sl-pagebody">
      <div class="row">
                  <div class="col-lg-12 m-auto">
                        <div class="card">
                            <div class="card_header" style="background-color: orange;" >
                                <h2 style="text-align: center; font-weight: 600; color: white;  padding: 10px 0; text-transform: UPPERCASE; font-family: 'Raleway', sans-serif; letter-spacing: 2px;">Users Information</h2>
                            </div>

                            

                            <?php if(isset($_SESSION['restore_delete'])){?>
                                <div class="alert alert-success"><?= $_SESSION['restore_delete'] ?></div>
                           <?php } unset($_SESSION['restore_delete']) ?>
                           
                           

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
                                    <th scope="col">Country</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($select_users_result as $key => $user) {?>   
                                    <tr>
                                        <th scope="row"><?= $key+1 ?></th>
                                        <td><?php echo $user['name']?></td>
                                        <td><?php echo $user['email']?></td>
                                        <td>
                                            <img width="50" src="../uploads/users/<?= $user['image']?>" alt="">
                                        </td>
                                        <td>
                                        <span class="badge bg-secondary"><?php echo $user['country']?></span>
                                        </td>
                                        <td><?php echo $user['created_at']?></td>
                                        <td>
                                            <?php if($user['role'] == 1){?>
                                                <span class="badge bg-success">Admin</span>
                                            
                                            <?php } 

                                            elseif($user['role'] == 2) {?>
                                                <span class="badge bg-info">Moderator</span>
                                            <?php }  elseif($user['role'] == 3) {?>
                                                <span class="badge bg-primary">Viewer</span>
                                            
                                            <?php } elseif($user['role'] == 4) {?>
                                                <span class="badge bg-danger">Editor</span>
                                            
                                            <?php } else { ?>
                                                <span class="badge bg-secondary">Gorib</span>
                                            <?php }?>
                                           
                                        </td>
                                        <td>
                                            <a target="_blank"  href="view.php?id=<?php echo $user['id']?>" class="btn alert-success">view</a>
                                        </td>
                                        <?php if($_SESSION['role'] !=3) { ?>
                                        <td>
                                            <a target="_blank"  href="edit.php?id=<?php echo $user['id']?>" class="btn btn-danger">Edit</a>
                                        </td>
                                        <?php } ?>
                                        <?php if($_SESSION['role'] == 1 ) { ?>
                                        <td> 
                                            <a id='soft_delete.php?id=<?php echo $user['id']?>' class="btn btn-danger delete">Delete</a>
                                        </td>
                                        <?php } ?>
                                     
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
        <script>
            $('.delete').click(function(){
                Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#FFA500',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href=$(this).attr('id');
                }
                })
            });
        </script>
        <?php if(isset($_SESSION['soft_delete'])) {?>
            <script>
                 Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
            </script>
            <?php } unset($_SESSION['soft_delete'])?>
    


