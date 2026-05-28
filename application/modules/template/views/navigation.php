<body>
  <?php
  $ci =& get_instance();
  $class = strtolower($ci->router->fetch_class());
  $segment1 = $ci->uri->segment(1);

  $active_tab = '';
  if (empty($segment1) || $segment1 === 'home' || $class === 'home') {
      $active_tab = 'home';
  } elseif ($class === 'about' || in_array($segment1, ['about-us', 'why-us'])) {
      $active_tab = 'about';
  } elseif ($class === 'services' || in_array($segment1, ['our-services'])) {
      $active_tab = 'services';
  } elseif ($segment1 === 'how-it-works') {
      $active_tab = 'how_it_works';
  } elseif ($segment1 === 'resources') {
      $active_tab = 'resources';
  } elseif ($class === 'contacts' || $segment1 === 'contact-us') {
      $active_tab = 'contact';
  } elseif ($class === 'blog' || $segment1 === 'blog') {
      $active_tab = 'blog';
  } elseif ($class === 'reviews' || $segment1 === 'reviews') {
      $active_tab = 'reviews';
  }
  ?>

  <!-- Main Sticky Header -->
  <header class="main-header <?= $active_tab === 'home' ? 'home-header' : '' ?>" id="mainHeader">
    <div class="container-fluid d-flex align-items-center justify-content-between">
      <!-- Brand Logo -->
      <a href="<?= site_url() ?>" class="brand-wrap text-decoration-none">
        <img src="<?= base_url() ?>assets/images/logo/logo.png" alt="<?=$company3?>" class="brand-logo" loading="lazy">
      </a>

      <!-- Desktop Navigation Menu -->
      <nav class="desktop-nav d-none d-lg-flex align-items-center gap-4">
        <a href="<?= site_url() ?>" class="nav-link<?= $active_tab === 'home' ? ' active' : '' ?>">Home</a>
        <div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle<?= $active_tab === 'about' ? ' active' : '' ?>">About Us <i class="bi bi-chevron-down ms-1"></i></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= site_url('about-us') ?>">About Us</a></li>
            <li><a class="dropdown-item" href="<?= site_url('why-us') ?>">Why Choose Us</a></li>
            <li><a class="dropdown-item" href="<?= site_url('how-it-works') ?>">How It Works</a></li>
            <li><a class="dropdown-item" href="<?= site_url('careers') ?>">Careers</a></li>
            <li><a class="dropdown-item" href="<?= site_url('faqs') ?>">FAQs</a></li>
            <li><a class="dropdown-item" href="<?= site_url('terms-and-conditions') ?>">Terms & Conditions</a></li>
            <li><a class="dropdown-item" href="<?= site_url('privacy-policy') ?>">Privacy Policy</a></li>
          </ul>
        </div>
        <div class="nav-item dropdown">
          <a href="<?= site_url('our-services') ?>" class="nav-link dropdown-toggle<?= $active_tab === 'services' ? ' active' : '' ?>">Services <i class="bi bi-chevron-down ms-1"></i></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= site_url('packing-moving') ?>">Packing and Moving Services</a></li>
            <li><a class="dropdown-item" href="<?= site_url('loading-unloading') ?>">Loading and Unloading Services</a></li>
            <li><a class="dropdown-item" href="<?= site_url('car-transportation') ?>">Car Carrier Services</a></li>
            <li><a class="dropdown-item" href="<?= site_url('office-relocation') ?>">Office Shifting Services</a></li>
            <li><a class="dropdown-item" href="<?= site_url('bike-transportation') ?>">Bike Transportation Services</a></li>
            <li><a class="dropdown-item" href="<?= site_url('corporate-shifting') ?>">Commercial Shifting Services</a></li>
            <li><a class="dropdown-item" href="<?= site_url('warehouse-and-storage') ?>">Household Goods Warehousing Services</a></li>
            <li><a class="dropdown-item" href="<?= site_url('goods-insurance') ?>">Household Goods Insurance Services</a></li>
          </ul>
        </div>
        <a href="<?= site_url('our-branches') ?>" class="nav-link">Network</a>
        <div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle">Gallery <i class="bi bi-chevron-down ms-1"></i></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= site_url('photo-gallery') ?>">Photo Gallery</a></li>
            <li><a class="dropdown-item" href="<?= site_url('video-gallery') ?>">Video Gallery</a></li>
          </ul>
        </div>
        <a href="<?= site_url('blog') ?>" class="nav-link<?= $active_tab === 'blog' ? ' active' : '' ?>">Blog</a>
        <a href="<?= site_url('contact-us') ?>" class="nav-link<?= $active_tab === 'contact' ? ' active' : '' ?>">Contact Us</a>
      </nav>

      <!-- Header Action Buttons -->
      <div class="d-flex align-items-center gap-3">
        <!-- Get a Quote Button -->
        <a href="#" class="btn-quote d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#qteModal">
          <span>Get a Quote</span>
          <i class="bi bi-arrow-right-circle-fill text-white fs-5"></i>
        </a>

        <!-- Hamburger for Mobile -->
        <button class="hamburger d-flex d-lg-none" id="openMenu" aria-label="Open navigation menu">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </div>
  </header>

  <!-- Full Screen Mega Menu (overlay menu when clicking hamburger) -->
  <nav class="mega-overlay" id="megaMenu" aria-label="Main navigation">
    <button class="mega-close" id="closeMenu" aria-label="Close navigation menu">
      <i class="bi bi-x"></i>
    </button>
    <div class="mega-inner">
      <div class="mobile-nav-list">
        <div class="mobile-nav-item<?= $active_tab === 'home' ? ' active' : '' ?>">
          <a href="<?= site_url() ?>" class="mobile-nav-link">Home</a>
        </div>
        <div class="mobile-nav-item mobile-dropdown<?= $active_tab === 'about' ? ' active' : '' ?>">
          <button class="mobile-nav-link mobile-dropdown-toggle">
            <span>About Us</span>
            <i class="bi bi-chevron-down toggle-icon"></i>
          </button>
          <div class="mobile-dropdown-menu">
            <a href="<?= site_url('about-us') ?>">About Us</a>
            <a href="<?= site_url('why-us') ?>">Why Choose Us</a>
            <a href="<?= site_url('how-it-works') ?>">How It Works</a>
            <a href="<?= site_url('careers') ?>">Careers</a>
            <a href="<?= site_url('faqs') ?>">FAQs</a>
            <a href="<?= site_url('terms-and-conditions') ?>">Terms & Conditions</a>
            <a href="<?= site_url('privacy-policy') ?>">Privacy Policy</a>
          </div>
        </div>
        <div class="mobile-nav-item mobile-dropdown<?= $active_tab === 'services' ? ' active' : '' ?>">
          <button class="mobile-nav-link mobile-dropdown-toggle">
            <span>Services</span>
            <i class="bi bi-chevron-down toggle-icon"></i>
          </button>
          <div class="mobile-dropdown-menu">
            <a href="<?= site_url('packing-moving') ?>">Packing and Moving Services</a>
            <a href="<?= site_url('loading-unloading') ?>">Loading and Unloading Services</a>
            <a href="<?= site_url('car-transportation') ?>">Car Carrier Services</a>
            <a href="<?= site_url('office-relocation') ?>">Office Shifting Services</a>
            <a href="<?= site_url('bike-transportation') ?>">Bike Transportation Services</a>
            <a href="<?= site_url('corporate-shifting') ?>">Commercial Shifting Services</a>
            <a href="<?= site_url('warehouse-and-storage') ?>">Household Goods Warehousing Services</a>
            <a href="<?= site_url('goods-insurance') ?>">Household Goods Insurance Services</a>
          </div>
        </div>
        <div class="mobile-nav-item">
          <a href="<?= site_url('our-branches') ?>" class="mobile-nav-link">Network</a>
        </div>
        <div class="mobile-nav-item mobile-dropdown">
          <button class="mobile-nav-link mobile-dropdown-toggle">
            <span>Gallery</span>
            <i class="bi bi-chevron-down toggle-icon"></i>
          </button>
          <div class="mobile-dropdown-menu">
            <a href="<?= site_url('photo-gallery') ?>">Photo Gallery</a>
            <a href="<?= site_url('video-gallery') ?>">Video Gallery</a>
          </div>
        </div>
        <div class="mobile-nav-item<?= $active_tab === 'blog' ? ' active' : '' ?>">
          <a href="<?= site_url('blog') ?>" class="mobile-nav-link">Blog</a>
        </div>
        <div class="mobile-nav-item<?= $active_tab === 'contact' ? ' active' : '' ?>">
          <a href="<?= site_url('contact-us') ?>" class="mobile-nav-link">Contact Us</a>
        </div>
      </div>
    </div>
  </nav>

  <script>
    const openMenu = document.getElementById('openMenu');
    const closeMenu = document.getElementById('closeMenu');
    const megaMenu = document.getElementById('megaMenu');
    const body = document.body;
    const mainHeader = document.getElementById('mainHeader');

    if(openMenu) {
      openMenu.addEventListener('click', () => {
        megaMenu.classList.add('active');
        body.classList.add('menu-open');
      });
    }

    if(closeMenu) {
      closeMenu.addEventListener('click', () => {
        megaMenu.classList.remove('active');
        body.classList.remove('menu-open');
      });
    }

    document.querySelectorAll('.mobile-dropdown-toggle').forEach(button => {
      button.addEventListener('click', (e) => {
        e.preventDefault();
        const parent = button.closest('.mobile-nav-item');
        document.querySelectorAll('.mobile-nav-item.mobile-dropdown').forEach(item => {
          if (item !== parent) item.classList.remove('active');
        });
        parent.classList.toggle('active');
      });
    });

    if(megaMenu) {
      megaMenu.addEventListener('click', (e) => {
        if (e.target === megaMenu) {
          megaMenu.classList.remove('active');
          body.classList.remove('menu-open');
        }
      });
    }

    window.addEventListener('scroll', () => {
      if(mainHeader) {
        mainHeader.classList.toggle('scrolled', window.scrollY > 20);
      }
    });
  </script>
