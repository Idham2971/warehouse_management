<?php
require_once 'config/config.php';
require_once 'config/database.php';

// Simple router
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

// Check if user is logged in (simple example)
session_start();
if (!isset($_SESSION['user_id']) && $page !== 'login') {
    header('Location: ?page=auth/login');
    exit();
}

// Load the appropriate controller/view
$controllerPath = "controllers/" . str_replace('/', '', $page) . ".php";
$viewPath = "views/" . $page . ".php";

if (file_exists($controllerPath)) {
    require_once $controllerPath;
}

if (file_exists($viewPath)) {
    require_once 'views/partials/header.php';
    require_once $viewPath;
    require_once 'views/partials/footer.php';
} else {
    require_once 'views/partials/header.php';
    require_once 'views/errors/404.php';
    require_once 'views/partials/footer.php';
}
?>
<div class="dashboard-container">
    <div class="card">
        <div class="card-header">
            <i class="fas fa-box-open"></i>
            <span>Total Inventory</span>
        </div>
        <div class="card-body">
            1,248
        </div>
    </div>
    
    <div class="card">
        <div class="card-header">
            <i class="fas fa-exclamation-triangle"></i>
            <span>Low Stock Items</span>
        </div>
        <div class="card-body">
            42
        </div>
    </div>
    
    <div class="card">
        <div class="card-header">
            <i class="fas fa-truck"></i>
            <span>Pending Shipments</span>
        </div>
        <div class="card-body">
            18
        </div>
    </div>
    
    <div class="card">
        <div class="card-header">
            <i class="fas fa-chart-line"></i>
            <span>Monthly Growth</span>
        </div>
        <div class="card-body">
            +12%
        </div>
    </div>
    
    <div class="card">
        <div class="card-header">
            <i class="fas fa-dollar-sign"></i>
            <span>Inventory Value</span>
        </div>
        <div class="card-body">
            $245,789
        </div>
    </div>
    
    <div class="card">
        <div class="card-header">
            <i class="fas fa-warehouse"></i>
            <span>Warehouse Capacity</span>
        </div>
        <div class="card-body">
            78%
        </div>
    </div>
</div>