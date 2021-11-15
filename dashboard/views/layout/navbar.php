<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar sticky">
    <div class="form-inline mr-auto">
    <ul class="navbar-nav mr-3">
        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
            collapse-btn"> <i data-feather="align-justify"></i></a></li>
        <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
            <i data-feather="maximize"></i>
        </a></li>
    </ul>
    </div>
    <ul class="navbar-nav navbar-right">
    <?php if($user_info['role'] == 'Admin'): ?>
        <?php include_once('notifications.php'); ?>
    <?php endif; ?>
    <li class="dropdown"><a href="#" data-toggle="dropdown"
        class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <figure class="avatar mr-2 avatar-sm bg-success text-white" style="font-size: 15px;height: 40px;width: 40px;" data-initial="<?=$user_info["fname_letter"] . $user_info["lname_letter"] ?>"></figure> <span class="d-sm-none d-lg-inline-block"></span></a>
        <div class="dropdown-menu dropdown-menu-right pullDown">
        <div class="dropdown-title">Hello <?=$user_info["fname"] ?></div>
        <a href="Profile" class="dropdown-item has-icon"> <i class="far
                fa-user"></i> Profile
        </a> <a href="Activities" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
            Activities
        </a> <a href="Settings" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
            Settings
        </a>
        <div class="dropdown-divider"></div>
        <form action="index.php" method="POST" >
            <button type="submit" name="logout" class="dropdown-item has-icon text-danger"> Logout <i class="fas fa-sign-out-alt" style="padding-top: 8.8px;"></i> </button>
        </form>

        </div>
    </li>
    </ul>
</nav>