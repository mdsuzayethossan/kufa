<?php 
session_start();
if (!isset( $_SESSION['login'])) {
    header('location:/vespa/login.php');

}
require '../dashboard_includes/header.php';
?>

<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="admin.php">Starlight</a>     
      </nav>
      <div class="sl-pagebody">
  <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-md-100v">

    <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white">
      <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">starlight <span style="color: orange;"
          class="tx-info tx-normal">admin</span></div>
      <div class="tx-center">Professional Admin Template Design</div>
      <!-- Email success alert start -->
      <?php if(isset($_SESSION['success'])) {?>
      <div class="alert alert-success">
        <?= $_SESSION ['success'] ?>
      </div>
      <?php } unset($_SESSION['success'])?>
      <!-- Email success alert end -->

      <div class="topbutton text-center" style="margin: 20px 0;">
        <div class="user_list_btn">
          <a style="  text-decoration: none; text-align: center; font-weight: 600; color: white;  letter-spacing: 1px; text-transform: UPPERCASE;"
            href="users.php">User List</a>
        </div>

        <div class="user_view_btn">
          <a target="_blank"
            style="border-radius: 25px; text-decoration: none; text-align: center; font-weight: 600; color: white;   letter-spacing: 1px; text-transform: UPPERCASE;"
            href="view.php">view</a>
        </div>
      </div>

      <form action="post.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <input type="text" name="name" class="form-control" placeholder="Enter your name">
        </div><!-- form-group -->
        <div class="form-group">
          <input type="email" name="email" class="form-control" placeholder="Enter your email">
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" name="password" class="form-control" placeholder="Enter your password">
        </div><!-- form-group -->
        <div class="form-group">
          <input type="text" name="designation" class="form-control" placeholder="Enter your designation">
        </div><!-- form-group -->
        <div class="form-group">
          <label for="file">Choose your file</label>
          <input type="file" name="file" class="form-control" id="file">
        </div><!-- form-group -->
        <div class="form-group">
          <select name="country" class="form-control">
            <option value="">--Select your country--</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="India">India</option>
            <option value="Brazil">Brazil</option>
            <option value="China">China</option>
            <option value="Finland">Finland</option>
            <option value="Indonesia">Indonesia</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Pakistan">Pakistan</option>
            <option value="Argentina">Argentina</option>
          </select>
        </div><!-- form-group -->
        <div class="form-group">
          <select name="role" class="form-control">
            <option value="">--Select Role--</option>
            <option value="1">Admin</option>
            <option value="2">Moderator</option>
            <option value="3">Viewer</option>
            <option value="4">Editor</option>
            <option value="0">Gorib</option>
            
          </select>
        </div><!-- form-group -->
        <div class="form-group tx-12">By clicking the Sign Up button below, you agreed to our privacy policy and terms
          of use of our website.</div>
        <button type="submit" style="background-color: orange; border-color: orange;"
          class="btn btn-info btn-block">Sign Up</button>

        <div class="mg-t-20 tx-center">Already have an account? <a style="color: orange;" href="/vespa/login.php"
            class="tx-info">Sign In</a></div>
      </form>
    </div><!-- login-wrapper -->
  </div><!-- d-flex -->
  </div><!-- sl-pagebody -->
  </div><!-- sl-mainpanel -->
<?php 
require '../dashboard_includes/footer.php';
?>
