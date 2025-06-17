<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NAME ?> | <?= ucfirst($page) ?></title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar with logo that hides/shows menu -->
        <nav id="sidebar" class="collapsed">
            <div class="sidebar-header">
                <div class="logo-container">
                    <img src="<?= BASE_URL ?>assets/images/warehouse-logo.png" alt="Warehouse Logo" class="logo" id="menuToggle">
                </div>
                <h3 class="app-name"><?= WAREHOUSE ?></h3>
            </div>
            
            <ul class="list-unstyled components">
                <li class="<?= $page === 'dashboard' ? 'active' : '' ?>">
                    <a href="?page=dashboard"><i class="fas fa-tachometer-alt"></i> <span class="menu-text">Dashboard</span></a>
                </li>
                <li class="<?= strpos($page, 'inventory') !== false ? 'active' : '' ?>">
                    <a href="?page=inventory"><i class="fas fa-boxes"></i> <span class="menu-text">Inventory</span></a>
                </li>
                <li class="<?= strpos($page, 'reports') !== false ? 'active' : '' ?>">
                    <a href="?page=reports"><i class="fas fa-chart-bar"></i> <span class="menu-text">Reports</span></a>
                </li>
                <li class="<?= strpos($page, 'integration') !== false ? 'active' : '' ?>">
                    <a href="?page=integration"><i class="fas fa-plug"></i> <span class="menu-text">Integration</span></a>
                </li>
                <li>
                    <a href="?page=auth/logout"><i class="fas fa-sign-out-alt"></i> <span class="menu-text">Logout</span></a>
                </li>
            </ul>
        </nav>

        <!-- Page Content -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <div class="current-page"><?= ucfirst($page) ?></div>
                </div>
            </nav>