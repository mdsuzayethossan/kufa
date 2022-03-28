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
                        <h5 style="text-align: center; font-weight: 600; color: white;  padding: 10px 0; text-transform: UPPERCASE; font-family: 'Raleway', sans-serif; letter-spacing: 2px;">Add Testimonials</h5>
                    </div>
                    <div class="card-body">
                        <form action="testimonials_post.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Quiote</label>
                                <input type="text" class="form-control" name="quiote">
                            </div>
                            <div class="form-group">
                                <label for="">Comments</label>
                                <textarea name="comments" id="" class="form-control" cols="118" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Client Name</label>
                                <input type="text" class="form-control" name="client_name">
                            </div>
                            <div class="form-group">
                                <label for="">Designation</label>
                                <input type="text" class="form-control" name="designation">
                            </div>
                            <div class="form-group">
                                <label for="">Client Photo</label>
                                <input type="file" class="form-control" name="client_photo">
                            </div>
                            <div class="form-group text-center">
                            <button type="submit" style="background-color: orange; border-color: orange; letter-spacing: 2px;"
          class="btn btn-info">ADD Testimonials</button>
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
<?php if(isset($_SESSION['invalid_extension'])) {?>
    <script>
        Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '<?=$_SESSION['invalid_extension']?>',
        })
    </script>
<?php } unset($_SESSION['invalid_extension'])?>

<?php if(isset($_SESSION['invalid_size'])) {?>
    <script>
        Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '<?=$_SESSION['invalid_size']?>',
        })
    </script>
<?php } unset($_SESSION['invalid_size'])?>

<?php if(isset($_SESSION['success'])) {?>
    <script>
        Swal.fire({
        icon: 'success',
        title: 'Congratulations',
        text: '<?=$_SESSION['success']?>',
        })
    </script>
<?php } unset($_SESSION['success'])?>