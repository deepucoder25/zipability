<style>
    .review-form-label { font-weight: 600; font-size: 0.9rem; color: #475569; margin-bottom: 8px; }
    .review-form-control { border-radius: 10px; border: 1px solid #e2e8f0; padding: 12px 15px; }
    .review-form-control:focus { border-color: #ff6600; box-shadow: 0 0 0 4px rgba(255, 102, 0, 0.1); outline: none; }
    
    .rating-select { display: flex; gap: 10px; margin-bottom: 20px; }
    .rating-item { cursor: pointer; font-size: 24px; color: #cbd5e1; transition: 0.2s; }
    .rating-item.active { color: #f59e0b; }
    
    .btn-submit-review { background: #ff6600; color: #fff; border: none; padding: 15px 30px; border-radius: 10px; font-weight: 700; width: 100%; transition: 0.3s; margin-top: 10px; }
    .btn-submit-review:hover { background: #e65c00; transform: translateY(-2px); color: #fff; }
</style>

<!-- Review Form Modal -->
<div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0" style="border-radius: 20px; box-shadow: 0 20px 40px rgba(0,0,0,0.15);">
            <div class="modal-header border-0 pb-0 px-4 pt-4">
                <h3 class="modal-title" id="reviewModalLabel" style="font-weight: 800; color: #001846;">Share Your Experience</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form action="<?= site_url('reviews/submit') ?>" method="POST">
                    <div class="mb-3">
                        <label class="review-form-label">Your Full Name</label>
                        <input type="text" name="name" class="form-control review-form-control" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-3">
                        <label class="review-form-label">Your Email</label>
                        <input type="email" name="email" class="form-control review-form-control" placeholder="Enter your email address" required>
                    </div>
                    <div class="mb-3">
                        <label class="review-form-label">Your City</label>
                        <input type="text" name="city" class="form-control review-form-control" placeholder="e.g. Lucknow" value="<?= isset($city) ? $city : '' ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="review-form-label">Your Rating</label>
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="rating-select mb-0" id="star-rating">
                                <i class="bi bi-star-fill rating-item active" data-value="1"></i>
                                <i class="bi bi-star-fill rating-item active" data-value="2"></i>
                                <i class="bi bi-star-fill rating-item active" data-value="3"></i>
                                <i class="bi bi-star-fill rating-item active" data-value="4"></i>
                                <i class="bi bi-star-fill rating-item active" data-value="5"></i>
                            </div>
                            <div class="d-flex align-items-center gap-2" style="margin-top: -4px;">
                                <div id="rating-emoji" style="font-size: 28px; line-height: 1;">😍</div>
                                <div><span id="rating-number" style="font-weight: 700; color: #475569; font-size: 1.1rem;">5</span><span style="color: #94a3b8; font-weight: 600;">/5</span></div>
                            </div>
                        </div>
                        <input type="hidden" name="rating" id="rating-input" value="5">
                    </div>
                    <div class="mb-3">
                        <label class="review-form-label">Your Message</label>
                        <textarea name="review" class="form-control review-form-control" rows="4" placeholder="Write your feedback here..." required></textarea>
                    </div>
                    <button type="submit" class="btn-submit-review mt-3">Submit Review</button>
                </form>
                <p class="text-muted small mt-3 text-center mb-0">
                    <i class="bi bi-info-circle me-1"></i> Reviews are subject to approval by our team.
                </p>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const emojis = {
        1: '😠',
        2: '😞',
        3: '😐',
        4: '🙂',
        5: '😍'
    };
    const emojiDisplay = document.getElementById('rating-emoji');
    const numberDisplay = document.getElementById('rating-number');
    
    document.querySelectorAll('.rating-item').forEach(star => {
        star.addEventListener('click', function() {
            const value = this.getAttribute('data-value');
            document.getElementById('rating-input').value = value;
            emojiDisplay.textContent = emojis[value];
            numberDisplay.textContent = value;
            
            document.querySelectorAll('.rating-item').forEach(s => {
                if (s.getAttribute('data-value') <= value) {
                    s.classList.add('active');
                    s.classList.replace('bi-star', 'bi-star-fill');
                } else {
                    s.classList.remove('active');
                    s.classList.replace('bi-star-fill', 'bi-star');
                }
            });
        });
    });
});
</script>
