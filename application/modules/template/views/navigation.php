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
  }
  ?>

  <!-- Main Sticky Header -->
  <header class="main-header <?= $active_tab === 'home' ? 'home-header' : '' ?>" id="mainHeader">
    <div class="container-fluid px-4 px-xl-5 d-flex align-items-center justify-content-between">
      <!-- Brand Logo -->
      <a href="<?= site_url() ?>" class="brand-wrap text-decoration-none">
        <img src="<?= base_url() ?>assets/images/logo/logo.png" alt="ZIPABILITY RELOCATION" class="brand-logo">
      </a>

      <!-- Desktop Navigation Menu -->
      <nav class="desktop-nav d-none d-lg-flex align-items-center gap-4">
        <a href="<?= site_url() ?>" class="nav-link<?= $active_tab === 'home' ? ' active' : '' ?>">Home</a>
        <a href="<?= site_url('about-us') ?>" class="nav-link<?= $active_tab === 'about' ? ' active' : '' ?>">About Us</a>
        <div class="nav-item dropdown">
          <a href="<?= site_url('our-services') ?>" class="nav-link dropdown-toggle<?= $active_tab === 'services' ? ' active' : '' ?>">Our Services <i class="bi bi-chevron-down ms-1"></i></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= site_url('home-shifting') ?>">Home Shifting</a></li>
            <li><a class="dropdown-item" href="<?= site_url('office-relocation') ?>">Office Relocation</a></li>
            <li><a class="dropdown-item" href="<?= site_url('car-transportation') ?>">Car Transportation</a></li>
          </ul>
        </div>
        <a href="<?= site_url('why-us') ?>" class="nav-link">Why Us</a>
        <a href="<?= site_url('how-it-works') ?>" class="nav-link">How It Works</a>
        <div class="nav-item dropdown">
          <a href="<?= site_url('resources') ?>" class="nav-link dropdown-toggle<?= $active_tab === 'resources' ? ' active' : '' ?>">Resources <i class="bi bi-chevron-down ms-1"></i></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= site_url('blog') ?>">Blog</a></li>
            <li><a class="dropdown-item" href="<?= site_url('faqs') ?>">FAQ</a></li>
          </ul>
        </div>
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
        <div class="mobile-nav-item<?= $active_tab === 'about' ? ' active' : '' ?>">
          <a href="<?= site_url('about-us') ?>" class="mobile-nav-link">About Us</a>
        </div>
        <div class="mobile-nav-item mobile-dropdown<?= $active_tab === 'services' ? ' active' : '' ?>">
          <button class="mobile-nav-link mobile-dropdown-toggle">
            <span>Our Services</span>
            <i class="bi bi-chevron-down toggle-icon"></i>
          </button>
          <div class="mobile-dropdown-menu">
            <a href="<?= site_url('home-shifting') ?>">Home Shifting</a>
            <a href="<?= site_url('office-relocation') ?>">Office Relocation</a>
            <a href="<?= site_url('car-transportation') ?>">Car Transportation</a>
          </div>
        </div>
        <div class="mobile-nav-item">
          <a href="<?= site_url('why-us') ?>" class="mobile-nav-link">Why Us</a>
        </div>
        <div class="mobile-nav-item">
          <a href="<?= site_url('how-it-works') ?>" class="mobile-nav-link">How It Works</a>
        </div>
        <div class="mobile-nav-item mobile-dropdown<?= $active_tab === 'resources' ? ' active' : '' ?>">
          <button class="mobile-nav-link mobile-dropdown-toggle">
            <span>Resources</span>
            <i class="bi bi-chevron-down toggle-icon"></i>
          </button>
          <div class="mobile-dropdown-menu">
            <a href="<?= site_url('blog') ?>">Blog</a>
            <a href="<?= site_url('faqs') ?>">FAQ</a>
          </div>
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
