<?php 
require '../session_check.php';
require '../dashboard_includes/header.php';
?>
<?php 
require '../db.php';
$select_blog = "SELECT * FROM `blogs`";
$select_blog_result = mysqli_query($db_connect, $select_blog);
?>
<!-- ########## START: MAIN PANEL ########## -->
 <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Dashboard</a>
      </nav> 
      <div class="sl-pagebody">
      <div class="row">
         <div class="col-lg-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <div class="card-title" style="background-color: orange;">
                        <h1 style="text-align: center; font-weight: 600; color: white;  padding: 10px 0; text-transform: UPPERCASE; font-family: 'Raleway', sans-serif; letter-spacing: 2px;">Blog Information</h1>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Sl</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Created_at</th>
                            <th scope="col">Image</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php foreach($select_blog_result as $key => $blogs){?>
                          <tr>
                            <th scope="row"><?= $key+1?></th>
                            <td>
                            <?= substr($blogs['title'], 0, 50)?>
                            </td>
                            <td>
                              
                                <?= substr($blogs['description'], 0, 150).'....Read More'?>
                            </td>
                            <td>
                                <?= $blogs['created_at']?>
                            </td>
                            <td>
                                <img width="80" src="../uploads/blogs/<?= $blogs['image']?>" alt="<?= $blogs['image']?>">
                            </td>
                            <td>
                              <?php if($blogs['status']==1) {?>
                                <a href="blog_status.php?id=<?= $blogs['id']?>" class="btn btn-danger">Active</a>
                                <?php } else {?>
                                  <a href="blog_status.php?id=<?= $blogs['id']?>" class="btn btn-secondary">Deactive</a>
                                  <?php }?>
                            </td>
                            <td>
                                <a target="_blank"  href="skill_edit.php?id=<?php echo $experiences['id']?>" class="btn btn-danger">Edit</a>
                            </td>
                            <td> 
                              <a id='experience_soft_delete.php?id=<?php echo $experiences['id']?>' class="btn btn-danger delete">Delete</a>
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
    


