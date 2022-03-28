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
                        <h5 style="text-align: center; font-weight: 600; color: white;  padding: 10px 0; text-transform: UPPERCASE; font-family: 'Raleway', sans-serif; letter-spacing: 2px;">Add Service</h5>
                    </div>
                    <div class="card-body">
                        <form action="service_post.php" method="POST">

                            <div class="form-group">
                                <label for="">Service Logo Class</label>
                                <input type="text" class="form-control" name="logo_class">
                            </div>

                            <div class="form-group">
                                <label for="">Service Name</label>
                                <input type="text" class="form-control" name="service_name">
                            </div>

                            <div class="form-group">
                                <label for="">Service Description </label></br>
                                <textarea name="description" id="" class="form-control" cols="118" rows="4"></textarea>
                            </div>
                            
                            <div class="form-group text-center">
                            <button type="submit" style="background-color: orange; border-color: orange; letter-spacing: 2px;"
          class="btn btn-info">ADD Service</button>
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
<?php if(isset($_SESSION['blog_added'])) {?>
    <script>
        Swal.fire({
        icon: 'success',
        title: 'Congratulations',
        text: '<?=$_SESSION['blog_added']?>',
        })
    </script>
<?php } unset($_SESSION['blog_added'])?>