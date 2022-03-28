<?php
require '../dashboard_includes/header.php';
require '../db.php';
$select_trash_partners = "SELECT * FROM partners WHERE status=0";
$select_trash_partners_result = mysqli_query($db_connect, $select_trash_partners);
?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Dashboard</a>
      </nav> 
      <div class="sl-pagebody">
      <div class="row">
         <div class="col-lg-6 m-auto">
            <div class="card">
                <div class="card-header">
                    <div class="card-title" style="background-color: orange;">
                        <h1 style="text-align: center; font-weight: 600; color: white;  padding: 10px 0; text-transform: UPPERCASE; font-family: 'Raleway', sans-serif; letter-spacing: 2px;">Partners Information</h1>
                    </div>
                </div>
                <?php if(isset($_SESSION['delete_banner'])){?>
                    <div class="alert alert-success"><?= $_SESSION['delete_banner'] ?></div>
                <?php } unset($_SESSION['delete_banner']) ?>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Sl</th>
                            <th scope="col">Logo</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php foreach($select_trash_partners_result as $key => $partners_trash){?>
                          <tr>
                            <th scope="row"><?= $key+1?></th>
                            <td>
                                <img width="50" src="../uploads/partners/<?= $partners_trash['logo']?>" alt="<?= $banners_trash['logo']?>">
                            </td>
                            <td> 
                              <a href='partners_delete.php?id=<?php echo $partners_trash['id']?>' class="btn btn-danger delete">Delete</a>
                           </td>
                          </tr>
                          <?php }?>
                        </tbody>
                      </table>
                </div>
            </div>
         </div>
      </div>
    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
   
<!-- ########## END: MAIN PANEL ########## -->







<?php 
require '../dashboard_includes/footer.php';
?>