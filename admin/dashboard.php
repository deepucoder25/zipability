<?php include 'header.php'; ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold">Welcome, Admin</h2>
    <span class="text-muted"><?= date('l, d M Y') ?></span>
</div>

<div class="row g-4">
    <div class="col-md-3">
        <div class="card p-4 text-center">
            <h1 class="display-5 fw-bold text-primary"><?= count(loadData('bookings.json')) ?></h1>
            <p class="text-muted mb-0">Total Bookings</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card p-4 text-center">
            <h1 class="display-5 fw-bold text-success"><?= count(loadData('contacts.json')) ?></h1>
            <p class="text-muted mb-0">Contact Enquiries</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card p-4 text-center">
            <h1 class="display-5 fw-bold text-danger"><?= count(loadData('callback.json')) ?></h1>
            <p class="text-muted mb-0">Call Back Requests</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card p-4 text-center">
            <h1 class="display-5 fw-bold text-info"><?= count(loadData('blogs.json')) ?></h1>
            <p class="text-muted mb-0">Blog Posts</p>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-6">
        <div class="card p-4">
            <h5 class="fw-bold mb-4">Quick Links</h5>
            <div class="d-grid gap-2">
                <a href="admin.php?action=callback" class="btn btn-outline-danger text-start"><i class="bi bi-headset me-2"></i> Manage Call Back Requests</a>
                <a href="admin.php?action=bookings" class="btn btn-outline-success text-start"><i class="bi bi-list-check me-2"></i> View Recent Bookings</a>
                <a href="admin.php?action=blogs" class="btn btn-outline-primary text-start"><i class="bi bi-plus-circle me-2"></i> Create New Blog Post</a>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
