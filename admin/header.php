<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard - <?= ucfirst($action) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <style>
        :root { --admin-primary: #ff6b16; --admin-navy: #073c91; }
        .sidebar { min-width: 250px; max-width: 250px; min-height: 100vh; background: var(--admin-navy); color: #fff; }
        .sidebar .nav-link { color: rgba(255,255,255,0.8); padding: 15px 20px; border-bottom: 1px solid rgba(255,255,255,0.1); }
        .sidebar .nav-link:hover, .sidebar .nav-link.active { background: rgba(255,255,255,0.1); color: #fff; }
        .main-content { flex: 1; padding: 30px; background: #f8fafc; }
        .card { border: none; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); }
        .btn-admin { background: var(--admin-primary); color: #fff; border: none; }
        .btn-admin:hover { background: #e55a00; color: #fff; }
        
        /* Pulse Animation for Badges */
        @keyframes pulseAlert {
            0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(255, 51, 51, 0.7); }
            70% { transform: scale(1); box-shadow: 0 0 0 6px rgba(255, 51, 51, 0); }
            100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(255, 51, 51, 0); }
        }
        .pulse-badge {
            animation: pulseAlert 2s infinite;
            background-color: #ff3333;
            color: white;
            font-size: 0.7rem;
            padding: 3px 6px;
            border-radius: 10px;
            margin-left: auto;
        }
    </style>
</head>
<body class="d-flex">
    <?php
        // Get counts for animated badges
        $bookingsCount = count(loadData('bookings.json'));
        $contactsCount = count(loadData('contacts.json'));
        $callbacksCount = count(loadData('callback.json'));
    ?>
    <div class="sidebar d-flex flex-column">
        <div class="p-4 border-bottom border-secondary">
            <h4 class="mb-0">Admin Panel</h4>
        </div>
        <nav class="nav flex-column flex-grow-1">
            <a class="nav-link <?= $action == 'dashboard' ? 'active' : '' ?>" href="admin.php?action=dashboard"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
            <a class="nav-link <?= $action == 'bookings' ? 'active' : '' ?> d-flex align-items-center" href="admin.php?action=bookings">
                <i class="bi bi-calendar-check me-2"></i> Bookings
                <?php if($bookingsCount > 0): ?><span class="pulse-badge"><?= $bookingsCount ?></span><?php endif; ?>
            </a>
            <a class="nav-link <?= $action == 'contacts' ? 'active' : '' ?> d-flex align-items-center" href="admin.php?action=contacts">
                <i class="bi bi-envelope me-2"></i> Enquiries
                <?php if($contactsCount > 0): ?><span class="pulse-badge"><?= $contactsCount ?></span><?php endif; ?>
            </a>
            <a class="nav-link <?= $action == 'callback' ? 'active' : '' ?> d-flex align-items-center" href="admin.php?action=callback">
                <i class="bi bi-headset me-2"></i> Call Backs
                <?php if($callbacksCount > 0): ?><span class="pulse-badge"><?= $callbacksCount ?></span><?php endif; ?>
            </a>
            <a class="nav-link <?= $action == 'blogs' ? 'active' : '' ?>" href="admin.php?action=blogs"><i class="bi bi-journal-text me-2"></i> Blogs</a>
            <a class="nav-link <?= $action == 'reviews' ? 'active' : '' ?>" href="admin.php?action=reviews"><i class="bi bi-star me-2"></i> Reviews</a>
            <a class="nav-link text-danger mt-auto" href="admin.php?action=logout"><i class="bi bi-box-arrow-right me-2"></i> Logout</a>
        </nav>
    </div>
    <div class="main-content">
