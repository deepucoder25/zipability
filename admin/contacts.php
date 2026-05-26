<?php
$contacts = loadData('contacts.json');

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    unset($contacts[$id]);
    saveData('contacts.json', array_values($contacts));
    header('Location: admin.php?action=contacts');
    exit;
}

include 'header.php';
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold">Contact Enquiries</h2>
</div>

<div class="card">
    <div class="table-responsive">
        <table class="table table-hover mb-0">
            <thead class="table-light">
                <tr>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($contacts)): ?>
                    <tr><td colspan="6" class="text-center p-4 text-muted">No enquiries found</td></tr>
                <?php else: ?>
                    <?php foreach (array_reverse($contacts, true) as $id => $item): ?>
                        <tr>
                            <td><?= $item['created_at'] ?? 'N/A' ?></td>
                            <td><?= $item['name'] ?></td>
                            <td><?= $item['phone'] ?></td>
                            <td><?= $item['email'] ?? 'N/A' ?></td>
                            <td title="<?= htmlspecialchars($item['message'] ?? '') ?>"><?= substr($item['message'] ?? '', 0, 50) ?>...</td>
                            <td>
                                <a href="admin.php?action=contacts&delete=<?= $id ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this record?')"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'footer.php'; ?>
