<?php
require '../dashboard_includes/header.php';
?>

  <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.php">Dashboard</a>
      </nav>

      <div class="sl-pagebody">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="card">
                    <div class="card-header" style="background-color: orange;">
                        <h5 style="text-align: center; font-weight: 600; color: white;  padding: 10px 0; text-transform: UPPERCASE; font-family: 'Raleway', sans-serif; letter-spacing: 2px;">Add Experience</h5>
                    </div>
                    <div class="card-body">
                        <form action="experience_post.php" method="POST">

                            <div class="form-group">
                                <label for="">Company Name</label>
                                <input type="text" class="form-control" name="company_name">
                            </div>

                            <div class="form-group">
                                <label for="">Duration</label>
                                <input type="text" class="form-control" name="duration">
                            </div>
                            
                            <div class="form-group">
                                <label for="">Designation</label>
                                <input type="text" class="form-control" name="designation">
                            </div>

                            <div class="form-group">
                                <label for="">Details</label>
                                <input type="text" class="form-control" name="details">
                            </div>

                            <div class="form-group text-center">
                            <button type="submit" style="background-color: orange; border-color: orange; letter-spacing: 2px;"
          class="btn btn-info">ADD Experience</button>
                            </div>
                        </form>
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
<?php if(isset($_SESSION['experience_added'])) {?>
    <script>
        Swal.fire({
        icon: 'success',
        title: 'Congratulations',
        text: '<?=$_SESSION['experience_added']?>',
        })
    </script>
<?php } unset($_SESSION['experience_added'])?>