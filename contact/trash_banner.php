<?php
require '../dashboard_includes/header.php';
require '../db.php';
$select_trash_banners = "SELECT * FROM banners WHERE status=1";
$select_trash_banners_result = mysqli_query($db_connect, $select_trash_banners);
?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Dashboard</a>
      </nav> 
      <div class="sl-pagebody">
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title" style="background-color: orange;">
                        <h1 style="text-align: center; font-weight: 600; color: white;  padding: 10px 0; text-transform: UPPERCASE; font-family: 'Raleway', sans-serif; letter-spacing: 2px;">Banner Information</h1>
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
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Banner Image</th>
                            <th scope="col">Button</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php foreach($select_trash_banners_result as $key => $banners_trash){?>
                          <tr>
                            <th scope="row"><?= $key+1?></th>
                            <td><?= $banners_trash['title']?></td>
                            <td><?= $banners_trash['description']?></td>
                            <td>
                                <img width="50" src="../uploads/banners/<?= $banners_trash['image']?>" alt="<?= $banners_trash['image']?>">
                            </td>
                            <td>
                                <?= $banners_trash['btn']?>
                            </td>
                            <td> 
                              <a href='banner_delete.php?id=<?php echo $banners_trash['id']?>' class="btn btn-danger delete">Delete</a>
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