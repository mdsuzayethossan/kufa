<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Starlight Responsive Bootstrap 4 Admin Template</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">

    <!-- vendor css -->
    <link href="/kufa/dashboard_assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/kufa/dashboard_assets/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="/kufa/dashboard_assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <!-- Starlight CSS -->
    <link rel="stylesheet" href="/kufa/dashboard_assets/css/starlight.css">
    <link rel="stylesheet" href="/kufa/dashboard_assets/css/style.css">
    


    <!-- custom css goes here -->
     <style>

        body {
            font-family: 'Raleway', sans-serif;
        }

        .btn-danger {
            background-color: orange; 
            border-color: orange; 
            color: white!important;
            
        }

        a:hover.btn-danger {
            background-color:  #FF5733;
            border-color:  #FF5733;
        }

        .alert-success {
            background-color:  #FF5733;
            color: white;
            border-color: transparent;

        }
        a:hover.alert-success {
            background-color: orange;
            color: white;
        }
        

        /* edit page css goes here */
        .topbutton  {
            display: flex;
            justify-content: center;
        }
        .user_list_btn {
            width: 125px;
            height: 40px;
            border-radius: 25px;
            background-color: orange;
            line-height: 40px;
            margin: 0 10px;
        }
        .user_view_btn {
            width: 125px;
            height: 40px;
            border-radius: 25px;
            background-color: orange;
            line-height: 40px;
            margin: 0 10px;
        }
        .form-control {
            border: 1px solid orange;
        }
        .alert-success {
            background-color: orange;
            color: white;
            border-color: transparent;
        }
        input::placeholder {
          letter-spacing: 1px;
        }
        /* edit page css end here */
     
    </style>
      <!-- custom css end here-->
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href="/kufa/admin.php"><i class="icon ion-android-star-outline"></i> Dashboard</a></div>
    <div class="sl-sideleft">
      <div class="input-group input-group-search">
        <input type="search" name="search" class="form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span><!-- input-group-btn -->
      </div><!-- input-group -->

      <label class="sidebar-label">Navigation</label>
      <div class="sl-sideleft-menu">
        <a href="/kufa/index.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Home</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
           <ion-icon class="menu-item-icon tx-20" name="menu-outline"></ion-icon>
            <span class="menu-item-label">Menus</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="/kufa/menus/menu.php" class="nav-link">Menu Info</a></li>
          <li class="nav-item"><a href="/kufa/submenus/submenu.php" class="nav-link">Submenu Info</a></li>
          <li class="nav-item"><a href="/kufa/menus/add_menu.php" class="nav-link">Add Menu</a></li>
          <li class="nav-item"><a href="/kufa/submenus/add_submenu.php" class="nav-link">Add Submenu</a></li>
          <li class="nav-item"><a href="/kufa/menus/trash.php" class="nav-link">Trash Menu</a></li>
        </ul>


        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <ion-icon class="menu-item-icon tx-20" name="people-outline"></ion-icon>
            <span class="menu-item-label">Social</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="/kufa/social/social.php" class="nav-link">Social Info</a></li>
          <li class="nav-item"><a href="/kufa/social/add_social.php" class="nav-link">Add Social</a></li>
          <li class="nav-item"><a href="/kufa/social/trash.php" class="nav-link">Trash Menu</a></li>
        </ul>


        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <ion-icon class="menu-item-icon tx-20" name="people-outline"></ion-icon>
            <span class="menu-item-label">About</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="/kufa/about/about.php" class="nav-link">About Info</a></li>
          <li class="nav-item"><a href="/kufa/about/add_about.php" class="nav-link">Add About</a></li>
          <li class="nav-item"><a href="/kufa/about/trash.php" class="nav-link">Trash About</a></li>
        </ul>

        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <ion-icon class="menu-item-icon tx-20" name="settings-outline"></ion-icon>
            <span class="menu-item-label">Service</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="/kufa/services/service.php" class="nav-link">Service Info</a></li>
          <li class="nav-item"><a href="/kufa/services/add_service.php" class="nav-link">Add Service</a></li>
          <li class="nav-item"><a href="/kufa/services/trash.php" class="nav-link">Trash Service</a></li>
        </ul>

        <a href="/kufa/inbox.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">inbox</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="/kufa/users/register.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <ion-icon class="menu-item-icon tx-20" name="person-add-outline"></ion-icon>
            <span class="menu-item-label">Add User</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
          <ion-icon class="menu-item-icon tx-20" name="color-wand-outline"></ion-icon>
            <span class="menu-item-label">Logo</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="/kufa/logo/logos.php" class="nav-link">Logo Info</a></li>
          <li class="nav-item"><a href="/kufa/logo/add_logo.php" class="nav-link">Add Logo</a></li>
          <li class="nav-item"><a href="/kufa/logo/trash_logo.php" class="nav-link">Trash Logo</a></li>
        </ul>

        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
          <ion-icon class="menu-item-icon tx-20"  name="flag-outline"></ion-icon>
           
            <span class="menu-item-label">Banner</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="/kufa/banners/banners.php" class="nav-link">Banner Info</a></li>
          <li class="nav-item"><a href="/kufa/banners/add_banner.php" class="nav-link">Add Banner</a></li>
          <li class="nav-item"><a href="/kufa/banners/trash_banner.php" class="nav-link">Trash Banner</a></li>
        </ul>


        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
          <ion-icon class="menu-item-icon tx-20" name="briefcase-outline"></ion-icon>
            <span class="menu-item-label">Experience Times</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="/kufa/times/times.php" class="nav-link">Experience Times Info</a></li>
          <li class="nav-item"><a href="/kufa/times/add_times.php" class="nav-link">Add Times</a></li>
          <li class="nav-item"><a href="/kufa/times/trash_times.php" class="nav-link">Trash Times</a></li>
        </ul>


        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
          <ion-icon class="menu-item-icon tx-20"  name="bulb-outline"></ion-icon>
            <span class="menu-item-label">Skills</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="/kufa/skills/skills.php" class="nav-link">Skills Info</a></li>
          <li class="nav-item"><a href="/kufa/skills/add_skill.php" class="nav-link">Add Skill</a></li>
          <li class="nav-item"><a href="/kufa/skills/trash_skills.php" class="nav-link">Trash Skill</a></li>
        </ul>

        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
          <ion-icon class="menu-item-icon tx-20" name="person-outline"></ion-icon>
            <span class="menu-item-label">Users</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="/kufa/users/users.php" class="nav-link">Users Info</a></li>
          <li class="nav-item"><a href="/kufa/users/trash.php" class="nav-link">Trash Users</a></li>
        
        </ul>

        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <ion-icon class="menu-item-icon tx-20" name="construct-outline"></ion-icon>
            <span class="menu-item-label">Projects</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="/kufa/projects/project.php" class="nav-link">projects Info</a></li>
          <li class="nav-item"><a href="/kufa/projects/add_project.php" class="nav-link">Add Project</a></li>
          <li class="nav-item"><a href="/kufa/projects/trash.php" class="nav-link">Trash projects</a></li>
        </ul>

        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
           <ion-icon class="menu-item-icon tx-20" name="briefcase-outline"></ion-icon>
            <span class="menu-item-label">Experiences</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="/kufa/experiences/experience.php" class="nav-link">Experience Info</a></li>
          <li class="nav-item"><a href="/kufa/experiences/add_experience.php" class="nav-link">Add Experience</a></li>
          <li class="nav-item"><a href="/kufa/experiences/trash.php" class="nav-link">Trash Experience</a></li>
        </ul>

        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon fa fa-rss tx-20"></i>
            <span class="menu-item-label">Blogs</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="/kufa/blogs/blog.php" class="nav-link">Blogs Info</a></li>
          <li class="nav-item"><a href="/kufa/blogs/add_blog.php" class="nav-link">Add Blogs</a></li>
          <li class="nav-item"><a href="/kufa/blogs/trash.php" class="nav-link">Trash Blogs</a></li>
        </ul>

        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
          <ion-icon class="menu-item-icon tx-20" name="chatbubbles-outline"></ion-icon>
            <i ></i>
            <span class="menu-item-label">Testimonials</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="/kufa/testimonials/testimonials.php" class="nav-link">Testimonials Info</a></li>
          <li class="nav-item"><a href="/kufa/testimonials/add_testimonials.php" class="nav-link">Add Testimonials</a></li>
          <li class="nav-item"><a href="/kufa/blogs/trash.php" class="nav-link">Trash Blogs</a></li>
        </ul>

        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon fa fa-handshake-o tx-20"></i> 
        
            <span class="menu-item-label">Partners</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="/kufa/partners/partners.php" class="nav-link">Partners Info</a></li>
          <li class="nav-item"><a href="/kufa/partners/add_partners.php" class="nav-link">Add Partners</a></li>
          <li class="nav-item"><a href="/kufa/partners/trash_partners.php" class="nav-link">Trash Partnerss</a></li>
        </ul>

        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon fa fa-handshake-o tx-20"></i> 
        
            <span class="menu-item-label">contact Information</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="/kufa/contact/contact.php" class="nav-link">contact Info</a></li>
          <li class="nav-item"><a href="/kufa/contact/add_contact.php" class="nav-link">Add contact</a></li>
          <li class="nav-item"><a href="/kufa/contact/trash_contact.php" class="nav-link">Trash contact</a></li>
        </ul>

      </div><!-- sl-sideleft-menu -->

      <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- sl-header-left -->
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name"><?=$_SESSION['name']?></span>
              <img src="/kufa/uploads/users/<?=$_SESSION['image']?>" class="wd-35 ht-35 lh-35 rounded-circle" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href="/kufa/users/editprofile.php?id=<?=$_SESSION['login_id']?>"><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                <li><a href=""><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
                <li><a href=""><i class="icon ion-ios-download-outline"></i> Downloads</a></li>
                <li><a href=""><i class="icon ion-ios-star-outline"></i> Favorites</a></li>
                <li><a href=""><i class="icon ion-ios-folder-outline"></i> Collections</a></li>
                <li><a href="/kufa/logout.php"><i class="icon ion-power"></i> Sign Out</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
        <div class="navicon-right">
          <a id="btnRightMenu" href="" class="pos-relative">
            <i class="icon ion-ios-bell-outline"></i>
            <!-- start: if statement -->
            <span class="square-8 bg-danger"></span>
            <!-- end: if statement -->
          </a>
        </div><!-- navicon-right -->
      </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    <div class="sl-sideright">
      <ul class="nav nav-tabs nav-fill sidebar-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" role="tab" href="#messages">Messages (2)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" role="tab" href="#notifications">Notifications (8)</a>
        </li>
      </ul><!-- sidebar-tabs -->

      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane pos-absolute a-0 mg-t-60 active" id="messages" role="tabpanel">
          <div class="media-list">
            <!-- loop starts here -->
            <a href="" class="media-list-link">
              <div class="media">
                <img src="/kufa/dashboard_assets/img/img3.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                  <span class="d-block tx-11 tx-gray-500">2 minutes ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!-- media -->
            </a>
            <!-- loop ends here -->
            <a href="" class="media-list-link">
              <div class="media">
                <img src="/kufa/dashboard_assets/img/img4.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Samantha Francis</p>
                  <span class="d-block tx-11 tx-gray-500">3 hours ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">My entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link">
              <div class="media">
                <img src="/kufa/dashboard_assets/img/img7.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Robert Walker</p>
                  <span class="d-block tx-11 tx-gray-500">5 hours ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">I should be incapable of drawing a single stroke at the present moment/kufa/dashboard_assets.</p>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link">
              <div class="media">
                <img src="/kufa/dashboard_assets/img/img5.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Larry Smith</p>
                  <span class="d-block tx-11 tx-gray-500">Yesterday, 8:34pm</span>

                  <p class="tx-13 mg-t-10 mg-b-0">When, while the lovely valley teems with vapour around me, and the meridian sun strikes/kufa/dashboard_assets.</p>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link">
              <div class="media">
                <img src="/kufa/dashboard_assets/img/img3.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                  <span class="d-block tx-11 tx-gray-500">Jan 23, 2:32am</span>
                  <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!-- media -->
            </a>
          </div><!-- media-list -->
          <div class="pd-15">
            <a href="" class="btn btn-secondary btn-block bd-0 rounded-0 tx-10 tx-uppercase tx-mont tx-medium tx-spacing-2">View More Messages</a>
          </div>
        </div><!-- #messages -->

        <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="notifications" role="tabpanel">
          <div class="media-list">
            <!-- loop starts here -->
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="/kufa/dashboard_assets/img/img8.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                  <span class="tx-12">October 03, 2017 8:45am</span>
                </div>
              </div><!-- media -->
            </a>
            <!-- loop ends here -->
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="/kufa/dashboard_assets/img/img9.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Social Network</strong></p>
                  <span class="tx-12">October 02, 2017 12:44am</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="/kufa/dashboard_assets/img/img10.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700">20+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                  <span class="tx-12">October 01, 2017 10:20pm</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="/kufa/dashboard_assets/img/img5.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                  <span class="tx-12">October 01, 2017 6:08pm</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="/kufa/dashboard_assets/img/img8.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 12 others in a post.</p>
                  <span class="tx-12">September 27, 2017 6:45am</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="/kufa/dashboard_assets/img/img10.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700">10+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                  <span class="tx-12">September 28, 2017 11:30pm</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="/kufa/dashboard_assets/img/img9.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Great Pyramid</strong></p>
                  <span class="tx-12">September 26, 2017 11:01am</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="/kufa/dashboard_assets/img/img5.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                  <span class="tx-12">September 23, 2017 9:19pm</span>
                </div>
              </div><!-- media -->
            </a>
          </div><!-- media-list -->
        </div><!-- #notifications -->

      </div><!-- tab-content -->
    </div><!-- sl-sideright -->
    <!-- ########## END: RIGHT PANEL ########## --->