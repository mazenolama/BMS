<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="../dashboard"> <img alt="image" src="assets/img/sidebar-logo.png" class="header-logo" /> <span
                class="logo-name">Hadef Bills</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
                <a href="../dashboard" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <?php if($user_info['role'] == 'Admin'): ?>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fas fa-user-friends"></i><span>Users</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="Create-User">Create User</a></li>
                    <li><a class="nav-link" href="Users">View Users</a></li>
                </ul>
            </li>
            <?php endif; ?>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fas fa-user-friends"></i><span>Clients</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="Create-Client">Create Client</a></li>
                    <li><a class="nav-link" href="Clients">View Clients</a></li>
                </ul>
            </li>
          
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fas fa-file-invoice-dollar"></i><span>Invoices</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="Create-Invoice">Create Invoice</a></li>
                    <li><a class="nav-link" href="Invoices">View Invoices</a></li>
                </ul>
            </li>

            <li>
                <a href="Email" class=" nav-link"><i class="fas fa-envelope"></i><span>Email</span></a>
            </li>
            <li>
                <a href="About" class=" nav-link"><i class="fas fa-info"></i><span>About</span></a>
            </li>
        </ul>
    </aside>
</div>