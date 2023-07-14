
<div class="app-sidebar colored">
    <div class="sidebar-header">
        <a class="header-brand" href="index.php">
            <div class="logo-img">
                <img src="src/img/brand-white.svg" class="header-brand-img" alt="lavalite">
            </div>
            <span class="text">ThemeKit</span>
        </a>
        <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
    </div>

    <div class="sidebar-content">
        <div class="nav-container">
            <nav id="main-menu-navigation" class="navigation-main">

                <div class="nav-item">
                    <a href="index.php?page=dashboard" class="nav-item nav-dashboard"><span class='icon-field'><i class="ik ik-bar-chart-2"></i></span>Dashboard</a>
                </div>
                <div class="nav-lavel">Employee Management</div>
                <div class="nav-item">
                    <a href="index.php?page=employee" class="nav-item nav-employee"><span class='icon-field'><i class="ik ik-bar-chart-2"></i></span>Employee</a>
                </div>
            </nav>


            <script>
                $('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
            </script>

        </div>
    </div>
</div>