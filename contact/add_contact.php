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
                        <h5 style="text-align: center; font-weight: 600; color: white;  padding: 10px 0; text-transform: UPPERCASE; font-family: 'Raleway', sans-serif; letter-spacing: 2px;">Add Banner</h5>
                    </div>
                    <div class="card-body">
                        <form action="contact_post.php" method="POST">
                            <div class="form-group">
                                <label for="">Contact Description</label>
                                <input type="text" class="form-control" name="description">
                            </div>
                            <div class="form-group">
                                <label for="">Office Location</label>
                                <input type="text" class="form-control" name="office">
                            </div>
                            <div class="form-group">
                                <label for="">Office Address</label>
                                <input type="text" class="form-control" name="address">
                            </div>
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="tel" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input class="form-control" type="email" id="email" name="email">
                            </div>

                            <div class="form-group text-center">
                            <button type="submit" style="background-color: orange; border-color: orange; letter-spacing: 2px;"
          class="btn btn-info">ADD CONTACT</button>
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
<?php if(isset($_SESSION['contact_added'])) {?>
    <script>
        Swal.fire({
        icon: 'success',
        title: 'Congratulations',
        text: '<?=$_SESSION['contact_added']?>',
        })
    </script>
<?php } unset($_SESSION['contact_added'])?>