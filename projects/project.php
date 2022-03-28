<?php 
require '../session_check.php';
require '../dashboard_includes/header.php';
?>
<?php 
require '../db.php';
$select_projects = "SELECT * FROM `projects`";
$select_projects_result = mysqli_query($db_connect, $select_projects);
?>
<!-- ########## START: MAIN PANEL ########## -->
 <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Dashboard</a>
      </nav> 
      <div class="sl-pagebody">
      <div class="row">
         <div class="col-lg-10 m-auto">
            <div class="card">
                <div class="card-header">
                    <div class="card-title" style="background-color: orange;">
                        <h1 style="text-align: center; font-weight: 600; color: white;  padding: 10px 0; text-transform: UPPERCASE; font-family: 'Raleway', sans-serif; letter-spacing: 2px;">Project Information</h1>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Sl</th>
                            <th scope="col">category</th>
                            <th scope="col">Title</th>
                            <th scope="col">Information</th>
                            <th scope="col">image</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php foreach($select_projects_result as $key => $projects){?>
                          <tr>
                            <th scope="row"><?= $key+1?></th>
                            <td><?= $projects['title']?></td>
                            <td><?= $projects['category']?></td>
                            <td><?= $projects['information']?></td>
                            <td>
                                <img width="50" src="../uploads/projects/<?= $projects['image']?>" alt="<?= $projects['image']?>">
                            </td>
                            
                            <td>
                              <?php if($projects['status']==1) {?>
                                <a href="project_status.php?id=<?= $projects['id']?>" class="btn btn-danger">Active</a>
                                <?php } else {?>
                                  <a href="project_status.php?id=<?= $projects['id']?>" class="btn btn-secondary">Deactive</a>
                                  <?php }?>
                            </td>
                            <td>
                                <a target="_blank"  href="project_edit.php?id=<?php echo $projects['id']?>" class="btn btn-danger">Edit</a>
                            </td>
                            <td> 
                              <a id='project_soft_delete.php?id=<?php echo $projects['id']?>' class="btn btn-danger delete">Delete</a>
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
    


