<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<main class="main">
    <!-- Breadcrumbs Section -->
    <section class="service-breadcrumbs">
        <div class="container">
            <nav class="bc-nav">
                <a href="<?= site_url() ?>">Home</a>
                <span class="bc-sep">›</span>
                <a href="<?= site_url('blog') ?>">Our Blog</a>
                <span class="bc-sep">›</span>
                <span class="bc-current"><?= htmlspecialchars(@$query[0]->title) ?></span>
            </nav>
            <h1><span class="bc-title-white">Blog</span> <span class="bc-title-orange">Details</span></h1>
            <p class="bc-desc"><?= htmlspecialchars(@$query[0]->title) ?></p>
            <div class="bc-features">
                <div class="bc-feature-pill">
                    <div class="pill-icon"><i class="bi bi-clock-history"></i></div>
                    <div class="pill-text"><strong>Since <?= isset($startYear) ? $startYear : '1986' ?></strong><small><?= isset($experience) ? $experience : '40+' ?> Years Legacy</small></div>
                </div>
                <div class="bc-feature-pill">
                    <div class="pill-icon"><i class="bi bi-patch-check-fill"></i></div>
                    <div class="pill-text"><strong>ISO Certified</strong><small>Licensed &amp; Verified</small></div>
                </div>
                <div class="bc-feature-pill">
                    <div class="pill-icon"><i class="bi bi-people-fill"></i></div>
                    <div class="pill-text"><strong>Expert Team</strong><small>CMD to Branch Staff</small></div>
                </div>
                <div class="bc-feature-pill">
                    <div class="pill-icon"><i class="bi bi-geo-alt-fill"></i></div>
                    <div class="pill-text"><strong>Pan-India</strong><small>100+ Branches</small></div>
                </div>
            </div>
        </div>
        <div class="bc-wave-wrap">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 64" preserveAspectRatio="none">
                <path d="M0,30 C480,64 960,0 1440,30 L1440,64 L0,64 Z" fill="#ffffff"/>
            </svg>
        </div>
    </section>

    <!-- Blog Single Post -->
    <section class="blog-details-section py-5 bg-light">
        <div class="container my-3">
            <div class="row ">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm">
                        <!-- Image -->
                        <div class="mb-4 rounded-4 overflow-hidden shadow-sm position-relative">
                            <?php 
                            $image_path = FCPATH . 'uploads/blogs/' . @$query[0]->image;
                            if (@$query[0]->image && file_exists($image_path)): ?>
                                <img src="<?= base_url('uploads/blogs/' . @$query[0]->image) ?>" alt="<?= htmlspecialchars(@$query[0]->title) ?>" class="img-fluid w-100" style="max-height: 450px; object-fit: cover;">
                            <?php else: ?>
                                <img src="<?= base_url('assets/images/about/packers_movers.jpg') ?>" alt="Default Image" class="img-fluid w-100" style="max-height: 450px; object-fit: cover;">
                            <?php endif; ?>
                        </div>
                        
                        <!-- Meta Info -->
                        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4 pb-3 border-bottom">
                            <div class="d-flex gap-3 text-muted small">
                                <span class="d-flex align-items-center gap-2"><i class="bi bi-calendar-event" style="color: #073c91;"></i> <?= date('M d, Y', strtotime(@$query[0]->created_at)) ?></span>
                                <span class="d-flex align-items-center gap-2"><i class="bi bi-person-circle text-success"></i> By Admin</span>
                            </div>
                            <div>
                                <button class="btn btn-sm px-3 rounded-pill fw-bold" style="background: rgba(7, 60, 145, 0.1); color: #073c91; border: none; transition: background 0.3s;" onmouseover="this.style.background='rgba(7, 60, 145, 0.2)'" onmouseout="this.style.background='rgba(7, 60, 145, 0.1)'" data-bs-toggle="modal" data-bs-target="#shareModal">
                                    <i class="bi bi-share me-1"></i> Share Post
                                </button>
                            </div>
                        </div>

                        <!-- Blog Details -->
                        <h2 class="fw-bold mb-4" style="color: #073c91; line-height: 1.4;"><?= @$query[0]->title ?></h2>
                        <div class="blog-content-wrapper text-muted" style="line-height: 1.8; font-size: 1.05rem;">
                            <?= nl2br(@$query[0]->content) ?>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <aside class="blog-sidebar sticky-top" style="top: 100px; z-index: 1;">
                        <div class="bg-white p-4 rounded-4 shadow-sm mb-4">
                            <h5 class="fw-bold mb-4 pb-2 border-bottom" style="color: #073c91;">Recent Posts</h5>
                            <div class="recent-posts-list">
                                <?php if (!empty($recent_posts)): ?>
                                    <?php foreach ($recent_posts as $post_arr): $post = (object)$post_arr; ?>
                                        <?php
                                        $image_file = $post->image;
                                        $full_path = FCPATH . 'uploads/blogs/' . $image_file;
                                        $imagePath = ($image_file && file_exists($full_path)) ? base_url('uploads/blogs/' . $image_file) : base_url('assets/images/about/packers_movers.jpg');
                                        $custom_slug = !empty($post->slug) ? $post->slug : rtrim(str_replace("--", "-", urlencode(str_replace(" ", "-", str_replace(",", " ", $post->title)))), "-");
                                        ?>
                                        <a href="<?= site_url('blog/'.$custom_slug) ?>" class="d-flex align-items-center gap-3 mb-3 text-decoration-none post-link-item">
                                            <div class="flex-shrink-0">
                                                <img src="<?= $imagePath ?>" alt="thumb" class="rounded-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover; transition: transform 0.3s ease;">
                                            </div>
                                            <div>
                                                <h6 class="fw-bold text-dark mb-1 post-title" style="font-size: 0.95rem; line-height: 1.3; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; transition: color 0.2s;"><?= $post->title ?></h6>
                                                <small class="text-muted"><i class="bi bi-clock me-1"></i> <?= date('M d, Y', strtotime($post->created_at)) ?></small>
                                            </div>
                                        </a>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <p class="text-muted">No recent posts available.</p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Sticky CTA Widget -->
                        <div class="bg-light p-4 rounded-4 shadow-sm text-center border-top border-4" style="border-color: #ffb800 !important;">
                            <div class="mb-3">
                                <i class="bi bi-headset" style="font-size: 3rem; color: #073c91;"></i>
                            </div>
                            <h5 class="fw-bold mb-3">Need Moving Help?</h5>
                            <p class="text-muted small mb-4">Get a quick and free estimate for your relocation directly from our experts.</p>
                            <button class="btn w-100 fw-bold py-2 rounded-pill shadow-sm" style="background-color: #ffb800; color: #000; border: none; transition: transform 0.3s ease, box-shadow 0.3s ease;" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 15px rgba(255, 184, 0, 0.3)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 .125rem .25rem rgba(0,0,0,.075)';" data-bs-toggle="modal" data-bs-target="#qteModal">
                                <i class="bi bi-file-earmark-text me-2"></i> Get a Free Quote
                            </button>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Share Modal -->
<div class="modal fade" id="shareModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 rounded-4 shadow-lg">
            <div class="modal-header border-bottom-0 pb-0">
                <h5 class="modal-title fw-bold" style="color: #073c91;">Share this post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4">
                <div class="d-grid gap-3 social-buttons">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=YOUR_URL" target="_blank" class="btn text-white py-2 rounded-3 fw-bold" style="background-color: #1877F2;">
                        <i class="bi bi-facebook me-2"></i> Share on Facebook
                    </a>
                    <a href="https://twitter.com/intent/tweet?url=YOUR_URL" target="_blank" class="btn text-white py-2 rounded-3 fw-bold" style="background-color: #1DA1F2;">
                        <i class="bi bi-twitter me-2"></i> Share on Twitter
                    </a>
                    <a href="https://api.whatsapp.com/send?text=YOUR_URL" target="_blank" class="btn text-white py-2 rounded-3 fw-bold" style="background-color: #25D366;">
                        <i class="bi bi-whatsapp me-2"></i> Share on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var currentUrl = window.location.href;
    document.querySelectorAll('.social-buttons a').forEach(function(btn) {
        var shareUrl = btn.getAttribute('href');
        btn.setAttribute('href', shareUrl.replace('YOUR_URL', encodeURIComponent(currentUrl)));
    });
</script>

<style>
.post-link-item:hover .post-title {
    color: #ffb800 !important;
}
.post-link-item:hover img {
    transform: scale(1.05);
}
.blog-content-wrapper img {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
    margin: 15px 0;
}
.blog-content-wrapper a {
    color: #073c91;
    text-decoration: none;
}
.blog-content-wrapper a:hover {
    text-decoration: underline;
}
</style>

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BlogPosting",
    "headline": "<?= addslashes(@$query[0]->title) ?>",
    "image": [
        "<?= @$query[0]->image ? base_url('uploads/blogs/' . @$query[0]->image) : base_url('assets/images/about/packers_movers.jpg') ?>"
    ],
    "datePublished": "<?= date('c', strtotime(@$query[0]->created_at)) ?>",
    "author": {
        "@type": "Person",
        "name": "Admin"
    },
    "publisher": {
        "@type": "Organization",
        "name": "<?= isset($company3) ? $company3 : 'MyCompany' ?>",
        "logo": {
            "@type": "ImageObject",
            "url": "<?= base_url('assets/images/logo/logo.png') ?>"
        }
    },
    "description": "<?= addslashes(substr(strip_tags(@$query[0]->description), 0, 160)) ?>",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "<?= current_url() ?>"
    }
}
</script>