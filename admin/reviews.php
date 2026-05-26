<?php
$reviews = loadData('reviews.json');

// Handle Toggle Status (Show/Hide)
if (isset($_GET['toggle'])) {
    $id = $_GET['toggle'];
    foreach($reviews as &$r) {
        if ($r['id'] == $id) {
            $r['status'] = ($r['status'] === 'show') ? 'hide' : 'show';
            break;
        }
    }
    saveData('reviews.json', $reviews);
    header('Location: admin.php?action=reviews');
    exit;
}

// Handle Delete Review
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    foreach($reviews as $key => $r) {
        if ($r['id'] == $id) {
            unset($reviews[$key]);
            break;
        }
    }
    saveData('reviews.json', array_values($reviews));
    header('Location: admin.php?action=reviews');
    exit;
}

include 'header.php';
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold">Customer Reviews</h2>
    <div class="badge bg-primary rounded-pill px-3 py-2">Total: <?= count($reviews) ?></div>
</div>

<div class="card border-0 shadow-sm rounded-4 overflow-hidden">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="bg-light">
                <tr>
                    <th class="px-4 py-3 border-0">Client Info</th>
                    <th class="py-3 border-0">Review Message</th>
                    <th class="py-3 border-0 text-center">Rating</th>
                    <th class="py-3 border-0 text-center">Status</th>
                    <th class="px-4 py-3 border-0 text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($reviews)): ?>
                    <tr>
                        <td colspan="5" class="text-center p-5 text-muted">No reviews found.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach (array_reverse($reviews) as $r): ?>
                        <tr>
                            <td class="px-4">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar-sm bg-light rounded-circle d-grid place-items-center fw-bold text-secondary" style="width: 40px; height: 40px;">
                                        <?= strtoupper(substr($r['name'], 0, 1)) ?>
                                    </div>
                                    <div>
                                        <div class="fw-bold"><?= htmlspecialchars($r['name']) ?></div>
                                        <small class="text-muted"><?= htmlspecialchars($r['city']) ?></small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0 small text-wrap" style="max-width: 300px;"><?= htmlspecialchars($r['review']) ?></p>
                                <small class="text-secondary" style="font-size: 0.7rem;"><?= date('M d, Y', strtotime($r['created_at'])) ?></small>
                            </td>
                            <td class="text-center">
                                <div class="text-warning small">
                                    <?php for($i=1; $i<=5; $i++): ?>
                                        <i class="bi bi-star<?= $i <= $r['rating'] ? '-fill' : '' ?>"></i>
                                    <?php endfor; ?>
                                </div>
                            </td>
                            <td class="text-center">
                                <?php if (($r['status'] ?? 'show') === 'show'): ?>
                                    <span class="badge bg-success-subtle text-success px-3 rounded-pill">Active</span>
                                <?php else: ?>
                                    <span class="badge bg-warning-subtle text-warning px-3 rounded-pill">Pending</span>
                                <?php endif; ?>
                            </td>
                            <td class="px-4 text-end">
                                <div class="btn-group shadow-sm">
                                    <a href="admin.php?action=reviews&toggle=<?= $r['id'] ?>" class="btn btn-sm btn-light border" title="<?= ($r['status'] ?? 'show') === 'show' ? 'Hide Review' : 'Approve Review' ?>">
                                        <i class="bi bi-<?= ($r['status'] ?? 'show') === 'show' ? 'eye-slash' : 'eye' ?>"></i>
                                    </a>
                                    <a href="admin.php?action=reviews&delete=<?= $r['id'] ?>" class="btn btn-sm btn-light border text-danger" onclick="return confirm('Permanently delete this review?')" title="Delete">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<style>
    .avatar-sm { display: grid; place-items: center; }
    .bg-success-subtle { background: #dcfce7; }
    .text-success { color: #166534; }
    .bg-warning-subtle { background: #fef9c3; }
    .text-warning { color: #854d0e; }
</style>

<?php include 'footer.php'; ?>
