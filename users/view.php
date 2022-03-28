<?php
    require '../session_check.php';
    require '../dashboard_includes/header.php';
    require '../db.php';
    $id = $_GET['id'];
    $select_users = "SELECT * FROM users WHERE id=$id";
    $select_users_results = mysqli_query ($db_connect, $select_users);
    $after_assoc = mysqli_fetch_assoc($select_users_results);

?>
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        
      </nav>

      <div class="sl-pagebody">
      <div class="row">
              <div class="col-lg-8 m-auto">
                <div class="card">
                    <div class="card-header" style="background-color: orange;">
                        <h2 style="text-align: center; font-weight: 600; color: white;  padding: 10px 0; text-transform: UPPERCASE; font-family: 'Raleway', sans-serif; letter-spacing: 2px;">User Individual Information</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                <!-- <tr>
                                    <td class="hey">Id:</td>
                                    <td><?= $after_assoc['id']?></td>
                                </tr>  -->
                                <tr>
                                    <td class="hey">Name:</td>
                                    <td><?= $after_assoc['name']?></td>
                                </tr> 
                                <tr>
                                    <td>Email:</td>
                                    <td><?= $after_assoc['email']?></td>
                                </tr> 
                                <tr>
                                    <td>Image:</td>
                                    <td> <img width="150" src="../uploads/users/<?= $after_assoc['image']?>" alt=""></td>
                                </tr> 
                                <tr>
                                    <td>Created At</td>
                                    <td><?= $after_assoc['created_at']?></td>
                                </tr> 
                            </tbody>
                        </table>
                    </div>
                </div>
              </div>
          </div>

      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

         
<?php require '../dashboard_includes/footer.php';?>
