<main class="main">
    <div class="site-breadcrumb" style="background: url(<?= base_url() ?>assets/img/breadcrumb/01.jpg)">
        <div class="container">
            <h2 class="breadcrumb-title">Our Reviews</h2>
            <ul class="breadcrumb-menu">
                <li><a href="<?= site_url() ?>">Home</a></li>
                <li class="active">Reviews</li>
            </ul>
        </div>
    </div>

    <div class="our-service-page feature-content-section" style="min-height: 50vh; background-image: url('assets/images/location/location-background.png'); background-size: cover; background-repeat: no-repeat; background-position: center; padding-top: 15px; padding-bottom: 15px;">
        <div ng-app="reviewsApp" ng-controller="reviewsctrl">
            <br />
            <div class="container">
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 pb-2 mb-3" style="border-bottom: 2px solid #f1f5f9; position: relative;">
                    <h3 class="m-0" style="font-size: 1.5rem; font-weight: 800; color: #001333;">
                        <i class="bi bi-chat-left-quote me-2"></i>Customer Experiences
                    </h3>
                    <button class="btn btn-primary rounded-pill px-4 shadow-sm" style="background: #0a4ebd; border-color: #0a4ebd; font-weight: 700;" data-bs-toggle="modal" data-bs-target="#reviewModal">
                        <i class="bi bi-pencil-square me-1"></i> Write a Review
                    </button>
                    <div style="position: absolute; bottom: -2px; left: 0; width: 60px; height: 3px; background: #ff6600;"></div>
                </div>
                
                <div class="city-review-slider mt-4 pb-4">
                    <?php
                    if ($reviews->num_rows() == 0) {
                        echo "<p class='no-reviews-text'>No reviews yet...</p>";
                    } else {
                        foreach ($reviews->result() as $r) {
                            $pdate = explode(" ", $r->posted_date)[0];
                            $size = strlen(explode("@", $r->email)[0]) - 4;
                            $lem = substr($r->email, -12);
                            $fem = substr($r->email, 0, 4);
                            $st = str_repeat("*", $size);
                            $em = $fem . $st . $lem;
                    ?>
                            <div class="city-review-slide">
                                <div class="city-review-card" itemprop="review" itemscope itemtype="https://schema.org/Review">
                                    <meta itemprop="name" content="<?= $r->r_title ?>" />
                                    <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/LocalBusiness">
                                        <meta itemprop="name" content="<?= $company3 ?>" />
                                    </div>
                                    
                                    <div class="review-stars">
                                        <?php for ($i = 0; $i < $r->stars; $i++) { ?>
                                            <i class="bi bi-star-fill"></i>
                                        <?php } ?>
                                        <span class="d-none rating-value" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                            <span itemprop="ratingValue"><?= $r->stars ?></span> stars
                                        </span>
                                    </div>
                                    
                                    <p itemprop="reviewBody">"<?=$r->r_desc?>"</p>
                                    
                                    <div class="review-author">
                                        <div class="review-avatar"><?= strtoupper(substr($r->name, 0, 1)) ?></div>
                                        <div>
                                            <strong itemprop="author" itemscope itemtype="https://schema.org/Person">
                                                <span itemprop="name"><?= $r->name ?></span>
                                            </strong>
                                            <small><?= $em ?></small>
                                            <meta itemprop="datePublished" content="<?= $pdate ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } ?>
                    <div class="mt-4 w-100 d-flex justify-content-center">
                        <div class="pagination">
                            <?php echo $this->pagination->create_links() ?>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>

</main>
<style>
    /* Global Container */
    .our-service-page {
        padding: 30px 0;
        color: #000;
    }

    .fade-in {
        visibility: visible;
        animation: fadeInUp 0.6s ease-in-out;
    }
    .btn:hover {
        background-color: #000;
        color:white;
    }
    /* Button Styling */
    .write-review-btn {
        background-color: #e21b22;
        color: #fff;
        border: none;
        width: 100%;
        font-size: 1rem;
        font-weight: bold;
        border-radius: 5px;
        padding: 10px;
    }

    /* Review Container */
    .single-review {
        display: flex;
        flex-direction: column;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 15px;
        margin-bottom: 15px;
        transition: transform 0.3s ease;
        position: relative;
    }

    .single-review:hover {
        transform: scale(1.02);
    }

    .review-icon {
        align-self: center;
        max-width: 70px;
        margin-bottom: 10px;
    }

    .review-img {
        width: 100%;
        border-radius: 50%;
    }

    /* Review Content */
    .review-content {
        flex-grow: 1;
    }

    .review-author {
        color: #f4854a;
        font-size: 0.9rem;
    }

    .author-name {
        background-color: #000;
        padding: 3px;
        border-radius: 5px;
        color: #fff;
    }

    .review-date {
        color: #555;
        font-size: 0.8rem;
    }

    .review-rating {
        margin-top: 10px;
    }

    .rating-value {
        color: #000;
        font-weight: bold;
    }

    .review-title {
        font-weight: bold;
        color: #000;
        margin-top: 5px;
        font-size: 1.1rem;
    }

    .review-body {
        color: #000;
        margin: 5px 0;
    }

    .review-email {
        font-weight: bold;
        color: #555;
    }

    .no-reviews-text {
        color: #888;
        text-align: center;
        font-size: 1.2rem;
        margin: 20px auto;
    }

    /* Read More Button */
    .read-more-btn {
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 8px 12px;
        font-size: 0.9rem;
        margin-top: 10px;
        cursor: pointer;
        align-self: flex-start;
        transition: background-color 0.3s;
    }

    .read-more-btn:hover {
        background-color: #0056b3;
    }
</style>
