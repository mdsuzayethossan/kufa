<?php
require '../dashboard_includes/header.php';
require '../db.php';
//Menus
$select_menu = "SELECT * FROM `menus`";
$select_menu_result = mysqli_query($db_connect, $select_menu);
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
                        <h5 style="text-align: center; font-weight: 600; color: white;  padding: 10px 0; text-transform: UPPERCASE; font-family: 'Raleway', sans-serif; letter-spacing: 2px;">Add Submenu</h5>
                    </div>
                    <div class="card-body">
                        <form action="submenu_post.php" method="POST">

                            <div class="form-group">
                                <select name="menu_id" class="form-control" id="">
                                    <option value="">-- Select Menu --</option>
                                <?php foreach($select_menu_result as $menu) {?>
                                    <option value="<?= $menu['id']?>"><?= $menu['menu_name']?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Add Submenu</label>
                                <input type="text" class="form-control" name="submenu_name">
                            </div>

                            <div class="form-group">
                                <label for="">Submenu Link</label>
                                <input type="text" class="form-control" name="submenu_link">
                            </div>

                            <div class="form-group text-center">
                            <button type="submit" style="background-color: orange; border-color: orange; letter-spacing: 2px;"
          class="btn btn-info">ADD Submenu</button>
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