<section class="review-header">
    <div class="container">
        <h1>What Our Clients Say</h1>
        <p class="text-muted fs-5">Read real feedback from our satisfied customers across India.</p>
    </div>
</section>

<div class="container mb-5 pb-5">
    <?php if($this->session->flashdata('success')): ?>
        <div class="alert alert-success alert-dismissible fade show rounded-4 mb-4 text-center" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i> <?= $this->session->flashdata('success') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
            <button class="btn-submit d-inline-block shadow" style="width: auto; padding: 15px 40px; font-size: 1.1rem; border-radius: 50px;" data-bs-toggle="modal" data-bs-target="#reviewModal">
                <i class="bi bi-pencil-square me-2"></i> Write a Review
            </button>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <?php if (!empty($reviews)): ?>
                <?php foreach (array_reverse($reviews) as $r): ?>
                    <div class="review-card">
                        <div class="review-rating">
                            <?php for($i=1; $i<=5; $i++): ?>
                                <i class="bi bi-star<?= $i <= ($r['rating'] ?? 5) ? '-fill' : '' ?>"></i>
                            <?php endfor; ?>
                        </div>
                        <div class="review-text">
                            "<?= htmlspecialchars($r['review']) ?>"
                        </div>
                        <div class="review-author">
                            <div class="author-avatar">
                                <?= strtoupper(substr($r['name'], 0, 1)) ?>
                            </div>
                            <div class="author-info">
                                <h6><?= htmlspecialchars($r['name']) ?></h6>
                                <span><?= htmlspecialchars($r['city']) ?> • <?= date('M d, Y', strtotime($r['created_at'])) ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="text-center p-5 bg-light rounded-4">
                    <i class="bi bi-chat-left-dots display-1 text-muted mb-3 d-block"></i>
                    <p class="text-muted fs-5">No reviews yet. Be the first to share your experience!</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>


