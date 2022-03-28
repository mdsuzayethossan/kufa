<?php 
session_start();
require 'dashboard_includes/header.php';
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Pages</a>
        <span class="breadcrumb-item active">Blank Page</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Blank Page</h5>
          <p>This is a starter page</p>
        </div><!-- sl-page-title -->

      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

<?php 
require 'dashboard_includes/footer.php';
?>
<?php if(isset( $_SESSION['login_korce'])) {?>
    <script>
        Swal.fire({
        position: 'center',
        icon: 'success',
        title: '<?=$_SESSION['login_korce']?>',
        showConfirmButton: false,
        timer: 2000
        })
    </script>
<?php } unset($_SESSION['login_korce'])?>
