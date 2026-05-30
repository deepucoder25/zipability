<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
include 'city_content.php';
?>



<section class="city-details-section">
  <div class="container">
    <div class="row g-4">

      <!-- ============ LEFT: MAIN CONTENT (col-lg-8) ============ -->
      <div class="col-lg-8">

        <!-- About Card -->
        <div class="city-content-card">

          <!-- Eyebrow + Heading -->
          <div class="city-section-eyebrow">Top Rated Relocation</div>
          <h2 class="city-section-title">
            
            <span class="city-accent"><?= $city ?></span>
       Packers and Movers
          </h2>
<div class='city-prose'>
       
<?php echo $htmlcontent;?>  
<div class="city-map mt-2 mb-2">
<?php include 'city_map.php';?>
</div> 
</div>  

    <?php echo $htmlcontent1;?>   
    <?php echo $htmlcontent2;?>      

    <!-- ============ Premium Shifting Rate Charts Widget ============ -->
    <?php include 'city_price.php'; ?>

    <?php include 'city_reviews.php'?>

    <?php include 'city_faq.php'?>

      </div><!-- /col-lg-8 -->

      <!-- ============ RIGHT: SIDEBAR (col-lg-4) ============ -->
      <div class="col-lg-4">
        <?php include 'city_siderbar.php'; ?>
      </div>

      </div><!-- /col-lg-4 -->

    </div><!-- /row -->



  </div><!-- /container -->
</section>

<style>
/* =====================================================
   CITY PAGE — ABOUT SECTION STYLES
   ===================================================== */
.city-details-section {
  background: #f1f5f9;
  padding: 48px 0 60px;
}

/* Content Card */
.city-content-card {
  background: #ffffff;
  border-radius: 18px;
  padding: 32px;
  box-shadow: 0 4px 24px rgba(0,0,0,0.05);
  border: 1px solid #e8edf4;
}

/* Eyebrow label */
.city-section-eyebrow {
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 1.5px;
  color: var(--primary-cyan);
  text-transform: uppercase;
  margin-bottom: 8px;
}

/* Section headings */
.city-section-title {
  font-size: clamp(1.3rem, 2.5vw, 1.65rem);
  font-weight: 800;
  color: #001333;
  line-height: 1.3;
  margin-bottom: 22px;
}
.city-accent { color: var(--primary-cyan); }

.city-section-title-sm {
  font-size: 1.15rem;
  font-weight: 800;
  color: #001333;
  margin-bottom: 14px;
  padding-bottom: 10px;
  border-bottom: 2px solid #f1f5f9;
  position: relative;
}
.city-section-title-sm::after {
  content: '';
  position: absolute;
  bottom: -2px;
  left: 0;
  width: 42px;
  height: 2px;
  background: #ff6600;
}

/* Hero image */
.city-img-wrap {
  position: relative;
  border-radius: 14px;
  overflow: hidden;
  margin-bottom: 24px;
}
.city-hero-img {
  width: 100%;
  max-height: 320px;
  object-fit: cover;
  display: block;
}
.city-exp-badge {
  position: absolute;
  bottom: 16px;
  left: 16px;
  background: #ffffff;
  border-radius: 12px;
  padding: 12px 18px;
  display: flex;
  align-items: center;
  gap: 10px;
  box-shadow: 0 8px 24px rgba(0,0,0,0.15);
}
.city-exp-badge .exp-num {
  font-size: 2rem;
  font-weight: 900;
  color: var(--primary-cyan);
  line-height: 1;
}
.city-exp-badge .exp-label {
  font-size: 12px;
  color: #64748b;
  line-height: 1.4;
}

/* Prose text */
.city-prose p {
  color: #475569;
  font-size: 15px;
  line-height: 1.8;
  margin-bottom: 14px;
}

/* Feature pills */
.city-feature-pills {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  margin-top: 18px;
}
.city-pill {
  display: flex;
  align-items: center;
  gap: 8px;
  background: #f0f6ff;
  border: 1px solid #d4e4ff;
  color: var(--primary-cyan);
  border-radius: 8px;
  padding: 8px 14px;
  font-size: 13px;
  font-weight: 600;
}
.city-pill i { font-size: 15px; }

/* Checklist */
.city-checklist {
  list-style: none;
  padding: 0;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 10px;
  margin: 14px 0 18px;
}
.city-checklist li {
  display: flex;
  align-items: center;
  gap: 8px;
  font-size: 14px;
  color: #334155;
}
.city-checklist li i {
  color: var(--primary-cyan);
  font-size: 16px;
  flex-shrink: 0;
}

/* Stats strip */
.city-stats-strip {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 0;
  background: linear-gradient(120deg, #001333 0%, var(--primary-cyan) 100%);
  border-radius: 14px;
  padding: 20px 10px;
  margin-top: 24px;
  text-align: center;
}
.city-stat {
  padding: 0 10px;
  border-right: 1px solid rgba(255,255,255,0.15);
}
.city-stat:last-child { border-right: none; }
.city-stat .stat-num {
  display: block;
  font-size: 1.4rem;
  font-weight: 900;
  color: #ffd600;
  line-height: 1;
  margin-bottom: 4px;
}
.city-stat .stat-label {
  font-size: 11px;
  color: rgba(255,255,255,0.75);
  font-weight: 500;
}

/* Review Cards */
.city-review-card {
  background: #f8fafc;
  border: 1px solid #e2e8f0;
  border-left: 4px solid var(--primary-cyan);
  border-radius: 12px;
  padding: 18px;
  height: 100%;
}
.city-review-card .review-stars {
  color: #f59e0b;
  font-size: 13px;
  margin-bottom: 10px;
}
.city-review-card p {
  font-size: 13px;
  color: #475569;
  line-height: 1.6;
  font-style: italic;
  margin-bottom: 14px;
}
.city-review-card .review-author {
  display: flex;
  align-items: center;
  gap: 10px;
}
.city-review-card .review-avatar {
  width: 36px;
  height: 36px;
  background: linear-gradient(135deg, var(--primary-cyan), #001333);
  color: #fff;
  border-radius: 50%;
  display: grid;
  place-items: center;
  font-weight: 700;
  font-size: 14px;
  flex-shrink: 0;
}
.city-review-card .review-author strong {
  display: block;
  font-size: 13px;
  color: #001333;
}
.city-review-card .review-author small {
  font-size: 11px;
  color: #94a3b8;
}

/* FAQ */
.city-faq-item {
  background: #f8fafc;
  border: 1px solid #e2e8f0;
  border-radius: 12px;
  margin-bottom: 10px;
  overflow: hidden;
}
.city-faq-btn {
  width: 100%;
  text-align: left;
  background: none;
  border: none;
  padding: 16px 20px;
  display: flex;
  align-items: center;
  gap: 12px;
  font-weight: 700;
  font-size: 14px;
  color: #001333;
  cursor: pointer;
  transition: background 0.2s;
}
.city-faq-btn:hover { background: #f0f6ff; }
.city-faq-btn.active { color: var(--primary-cyan); background: #f0f6ff; }
.city-faq-btn .faq-q-icon { color: #ff6600; font-size: 17px; flex-shrink: 0; }
.city-faq-btn .faq-chevron { margin-left: auto; font-size: 14px; color: #94a3b8; transition: transform 0.3s; }
.city-faq-btn[aria-expanded="true"] .faq-chevron { transform: rotate(180deg); color: var(--primary-cyan); }
.city-faq-btn span { flex: 1; }
.city-faq-body {
  padding: 4px 20px 16px 49px;
  font-size: 13px;
  color: #64748b;
  line-height: 1.7;
}

/* Responsive */
@media (max-width: 768px) {
  .city-content-card { padding: 20px 16px; }
  .city-stats-strip { grid-template-columns: repeat(2, 1fr); gap: 12px 0; }
  .city-stat { padding: 8px 10px; border-right: none; border-bottom: 1px solid rgba(255,255,255,0.15); }
  .city-stat:nth-child(even) { border-right: none; }
  .city-checklist { grid-template-columns: 1fr; }
  .city-hero-img { max-height: 200px; }
}
@media (max-width: 480px) {
  .city-feature-pills { flex-direction: column; }
}
</style>
