<?php
$callbacks = loadData('callback.json');

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    unset($callbacks[$id]);
    saveData('callback.json', array_values($callbacks));
    header('Location: admin.php?action=callback');
    exit;
}

include 'header.php';
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold">Call Back Requests</h2>
</div>

<div class="card">
    <div class="table-responsive">
        <table class="table table-hover mb-0">
            <thead class="table-light">
                <tr>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($callbacks)): ?>
                    <tr><td colspan="4" class="text-center p-4 text-muted">No call back requests found</td></tr>
                <?php else: ?>
                    <?php foreach (array_reverse($callbacks, true) as $id => $item): ?>
                        <tr>
                            <td><?= $item['created_at'] ?? 'N/A' ?></td>
                            <td class="fw-bold text-dark"><?= $item['name'] ?></td>
                            <td><a href="tel:<?= $item['phone'] ?>" class="text-decoration-none fw-bold text-primary"><?= $item['phone'] ?></a></td>
                            <td>
                                <a href="admin.php?action=callback&delete=<?= $id ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this record?')"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'footer.php'; ?>
