<?php
require '../dashboard_includes/header.php';
require '../db.php';

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
                        <h5 style="text-align: center; font-weight: 600; color: white;  padding: 10px 0; text-transform: UPPERCASE; font-family: 'Raleway', sans-serif; letter-spacing: 2px;">ADD SOCIAL</h5>
                    </div>
                    <div class="card-body">
                        <form action="social_post.php" method="POST">

                            <div class="form-group">
                                <label for="">Icon Name</label>
                                <input type="text" class="form-control" name="icon_name">
                            </div>

                            <div class="form-group">
                                <label for="">Icon Class</label>
                                <input type="text" class="form-control" name="icon_class">
                            </div>

                            <div class="form-group">
                                <label for="">Social Link</label>
                                <input type="text" class="form-control" name="social_link">
                            </div>

                            <div class="form-group text-center">
                            <button type="submit" style="background-color: orange; border-color: orange; letter-spacing: 2px;"
          class="btn btn-info">ADD SOCIAL</button>
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
<?php if(isset($_SESSION['submenu_added'])) {?>
    <script>
        Swal.fire({
        icon: 'success',
        title: 'Congratulations',
        text: '<?=$_SESSION['submenu_added']?>',
        })
    </script>
<?php } unset($_SESSION['submenu_added'])?>