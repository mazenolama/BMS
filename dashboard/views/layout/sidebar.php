<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="index.php"> <img alt="image" src="assets/img/logo.png" class="header-logo" /> <span
            class="logo-name">Hadef Bills</span>
        </a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Main</li>
            <li class="dropdown active">
                <a href="index.php" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <?php if($user_info['role'] == 'Admin'): ?>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fas fa-user-friends"></i><span>Users</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="index.php?page=Create-User">Create User</a></li>
                    <li><a class="nav-link" href="index.php?page=View-Users">View Users</a></li>
                </ul>
            </li>
            <?php endif; ?>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fas fa-user-friends"></i><span>Clients</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="index.php?page=Create-Client">Create Client</a></li>
                    <li><a class="nav-link" href="index.php?page=View-Clients">View Clients</a></li>
                </ul>
            </li>
          
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fas fa-file-invoice-dollar"></i><span>Invoices</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="index.php?page=Create-Invoice">Create Invoice</a></li>
                    <li><a class="nav-link" href="index.php?page=View-Invoices">View Invoices</a></li>
                </ul>
            </li>

        <li>
            <a href="index.php?page=Email" class=" nav-link"><i class="fas fa-envelope"></i><span>Email</span></a>
        </li>
    </ul>
    </aside>
</div>