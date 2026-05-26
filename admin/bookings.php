<?php
$bookings = loadData('bookings.json');

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    unset($bookings[$id]);
    saveData('bookings.json', array_values($bookings));
    header('Location: admin.php?action=bookings');
    exit;
}

include 'header.php';
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold">Booking Enquiries</h2>
</div>

<div class="card">
    <div class="table-responsive">
        <table class="table table-hover mb-0">
            <thead class="table-light">
                <tr>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Route</th>
                    <th>Move Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($bookings)): ?>
                    <tr><td colspan="6" class="text-center p-4 text-muted">No bookings found</td></tr>
                <?php else: ?>
                    <?php foreach (array_reverse($bookings, true) as $id => $item): ?>
                        <tr>
                            <td><?= $item['created_at'] ?? 'N/A' ?></td>
                            <td><?= $item['name'] ?></td>
                            <td><?= $item['phone'] ?></td>
                            <td><?= ($item['mfrom'] ?? '') . ' to ' . ($item['mto'] ?? '') ?></td>
                            <td><?= $item['move_date'] ?? 'N/A' ?></td>
                            <td>
                                <a href="admin.php?action=bookings&delete=<?= $id ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this record?')"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'footer.php'; ?>
