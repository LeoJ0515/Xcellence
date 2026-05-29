<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>Xcellence | Cheesy Corn Chips – Product Gallery</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
      background: #FFFBF5;
      color: #2D2A24;
      overflow-x: hidden;
    }

    /* INTRO ANIMATION */
    .intro-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(145deg, #FFE8C5 0%, #FFD9A5 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 2000;
      flex-direction: column;
      transition: opacity 0.8s cubic-bezier(0.23, 1, 0.32, 1), visibility 0.8s;
      opacity: 1;
      visibility: visible;
      pointer-events: all;
    }

    .intro-overlay.hide-intro {
      opacity: 0;
      visibility: hidden;
      pointer-events: none;
    }

    .intro-logo {
      text-align: center;
      animation: floatPop 1.2s ease-out forwards;
    }

    .intro-logo i {
      font-size: 5rem;
      color: #D68B2C;
      filter: drop-shadow(0 10px 15px rgba(0,0,0,0.1));
      margin-bottom: 1rem;
    }

    .intro-logo h1 {
      font-size: 3.2rem;
      letter-spacing: -0.02em;
      background: linear-gradient(135deg, #C2691A, #A34500);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
      font-weight: 800;
    }

    .intro-logo p {
      font-size: 1.1rem;
      color: #966A3A;
      font-weight: 500;
      margin-top: 0.5rem;
    }

    @keyframes floatPop {
      0% { opacity: 0; transform: scale(0.94) translateY(20px); }
      100% { opacity: 1; transform: scale(1) translateY(0); }
    }

    @keyframes bounce {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(8px); }
    }

    .main-content {
      opacity: 0;
      transition: opacity 1s ease 0.2s;
    }

    .main-content.visible {
      opacity: 1;
    }

    /* SLIDE MENU */
    .menu-overlay-bg {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.3);
      backdrop-filter: blur(3px);
      z-index: 1100;
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.3s ease, visibility 0.3s;
    }

    .menu-overlay-bg.active {
      opacity: 1;
      visibility: visible;
    }

    .slide-menu {
      position: fixed;
      top: 0;
      right: -340px;
      width: 320px;
      height: 100%;
      background: #FFFFFFE6;
      backdrop-filter: blur(16px);
      box-shadow: -8px 0 40px rgba(0, 0, 0, 0.12);
      z-index: 1200;
      transition: right 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
      padding: 2rem 1.5rem;
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
      border-left: 1px solid rgba(214, 139, 44, 0.2);
    }

    .slide-menu.open {
      right: 0;
    }

    .menu-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 2px solid #FFD8A8;
      padding-bottom: 1rem;
    }

    .menu-header h3 {
      font-size: 1.6rem;
      font-weight: 700;
      color: #C2691A;
    }

    .close-menu {
      background: none;
      border: none;
      font-size: 1.8rem;
      cursor: pointer;
      color: #AA693A;
      transition: transform 0.2s;
    }

    .close-menu:hover {
      transform: rotate(90deg);
    }

    .menu-links {
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
    }

    .menu-links a {
      text-decoration: none;
      font-size: 1.2rem;
      font-weight: 600;
      color: #3D3226;
      transition: 0.2s;
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .menu-links a i {
      width: 28px;
      color: #D68B2C;
      font-size: 1.2rem;
    }

    .menu-links a:hover {
      color: #C2691A;
      transform: translateX(5px);
    }

    .menu-contact {
      margin-top: auto;
      background: #FFF2E2;
      padding: 1rem;
      border-radius: 28px;
      text-align: center;
    }

    .container {
      max-width: 1250px;
      margin: 0 auto;
      padding: 0 1.8rem;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1.2rem 0;
      flex-wrap: wrap;
    }

    .logo {
      font-size: 1.8rem;
      font-weight: 800;
      background: linear-gradient(135deg, #D68B2C, #B45F1B);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
      letter-spacing: -0.3px;
    }

    .logo span {
      font-size: 0.8rem;
      font-weight: 500;
      color: #A75D1A;
    }

    .menu-icon {
      background: #FFE1B9;
      border: none;
      font-size: 1.8rem;
      width: 48px;
      height: 48px;
      border-radius: 60px;
      cursor: pointer;
      color: #B45F1B;
      transition: all 0.2s;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }

    .menu-icon:hover {
      background: #D68B2C;
      color: white;
      transform: scale(0.96);
    }

    /* HERO + GALLERY */
    .hero-section-wrapper {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      gap: 2rem;
      margin: 2rem 0 3rem;
    }

    .hero-text {
      flex: 1.2;
      min-width: 260px;
    }

    .hero-badge {
      background: #FFE6CC;
      display: inline-block;
      padding: 0.3rem 1rem;
      border-radius: 40px;
      font-weight: 600;
      font-size: 0.8rem;
      color: #B45F1B;
      margin-bottom: 1rem;
    }

    .hero-text h1 {
      font-size: 3rem;
      font-weight: 800;
      line-height: 1.2;
      color: #2D2A24;
    }

    .hero-text h1 span {
      color: #D68B2C;
    }

    .hero-text p {
      font-size: 1.1rem;
      color: #5B4B38;
      margin: 1.2rem 0 1.8rem;
      max-width: 500px;
    }

    .btn-group {
      display: flex;
      gap: 1rem;
      flex-wrap: wrap;
    }

    .btn-primary {
      background: #D68B2C;
      border: none;
      padding: 0.9rem 2rem;
      border-radius: 60px;
      font-weight: 700;
      font-size: 1rem;
      color: white;
      cursor: pointer;
      transition: 0.2s;
      box-shadow: 0 8px 14px -6px #D68B2C70;
      display: inline-flex;
      align-items: center;
      gap: 10px;
    }

    .btn-primary:hover {
      background: #B45F1B;
      transform: translateY(-2px);
    }

    .btn-outline {
      background: transparent;
      border: 2px solid #D68B2C;
      padding: 0.9rem 2rem;
      border-radius: 60px;
      font-weight: 600;
      cursor: pointer;
      transition: 0.2s;
      color: #B45F1B;
    }

    .btn-outline:hover {
      background: #D68B2C10;
      border-color: #B45F1B;
    }

    /* AUTO SLIDING GALLERY WITH IMAGES */
    .auto-slider {
      flex: 1;
      min-width: 280px;
      background: linear-gradient(145deg, #FFF8EE, #FFF2E2);
      border-radius: 60px;
      padding: 1rem;
      box-shadow: 0 20px 30px -12px rgba(0,0,0,0.1);
      position: relative;
    }

    .slider-container {
      overflow: hidden;
      border-radius: 48px;
      position: relative;
    }

    .slides {
      display: flex;
      transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .slide {
      min-width: 100%;
      text-align: center;
      padding: 1rem 0.5rem;
      background: rgba(255, 250, 240, 0.8);
      border-radius: 40px;
    }

    /* PRODUCT IMAGE STYLES */
    .product-img {
      width: 200px;
      height: 200px;
      object-fit: cover;
      border-radius: 32px;
      box-shadow: 0 12px 24px rgba(0,0,0,0.12);
      margin-bottom: 1rem;
      background: #FFE9CE;
    }

    .slide h4 {
      font-size: 1.3rem;
      font-weight: 700;
      color: #C2691A;
      margin-top: 0.5rem;
    }

    .slide p {
      font-size: 0.9rem;
      color: #8B6946;
    }

    .slider-dots {
      display: flex;
      justify-content: center;
      gap: 12px;
      margin-top: 1rem;
    }

    .dot {
      width: 10px;
      height: 10px;
      background: #E9C99E;
      border-radius: 50%;
      cursor: pointer;
      transition: 0.2s;
    }

    .dot.active-dot {
      background: #D68B2C;
      width: 24px;
      border-radius: 8px;
    }

    /* fallback icon when image missing */
    .slide .fa-jar, .slide .fa-cheese, .slide .fa-shopping-bag, .slide .fa-truck-fast {
      font-size: 5rem;
      color: #E8A247;
      margin-bottom: 0.5rem;
    }

    /* other sections */
    .features {
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      justify-content: center;
      margin: 4rem 0;
    }

    .feature-card {
      background: white;
      border-radius: 40px;
      padding: 1.6rem;
      flex: 1;
      min-width: 180px;
      box-shadow: 0 12px 24px -12px rgba(0,0,0,0.08);
      text-align: center;
    }

    .feature-card i {
      font-size: 2.4rem;
      color: #D68B2C;
      margin-bottom: 0.8rem;
    }

    .product-show {
      background: #FFF5EA;
      border-radius: 60px;
      padding: 3rem 2rem;
      margin: 3rem 0;
    }

    .price-tag {
      font-size: 2.2rem;
      font-weight: 800;
      color: #C2691A;
    }

    .order-row {
      margin-top: 2rem;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      gap: 1rem;
    }

    .footer {
      border-top: 1px solid #F0E2D0;
      margin-top: 4rem;
      padding: 2rem 0;
      text-align: center;
      font-size: 0.85rem;
      color: #7F6B53;
    }

    @media (max-width: 850px) {
      .hero-section-wrapper {
        flex-direction: column;
      }
      .hero-text h1 { font-size: 2.4rem; }
      .auto-slider { width: 100%; margin-top: 0.5rem; }
      .product-img { width: 160px; height: 160px; }
    }
  </style>
</head>
<body>

<div class="intro-overlay" id="introOverlay">
  <div class="intro-logo">
    <i class="fas fa-cheese"></i>
    <h1>XCELLENCE</h1>
    <p>crunchy • cheesy • see our snack</p>
    <div style="margin-top: 2rem;">
      <i class="fas fa-arrow-down" style="font-size: 1.4rem; opacity: 0.7; animation: bounce 1.4s infinite;"></i>
    </div>
  </div>
</div>

<div class="main-content" id="mainContent">
  <div class="menu-overlay-bg" id="menuOverlayBg"></div>
  <div class="slide-menu" id="slideMenu">
    <div class="menu-header">
      <h3>Xcellence</h3>
      <button class="close-menu" id="closeMenuBtn"><i class="fas fa-times"></i></button>
    </div>
    <div class="menu-links">
      <a href="#home"><i class="fas fa-home"></i> Home</a>
      <a href="#product"><i class="fas fa-shopping-bag"></i> Our Snack</a>
      <a href="#order"><i class="fab fa-whatsapp"></i> Order via WA</a>
      <a href="#cod"><i class="fas fa-truck"></i> COD UUM</a>
      <a href="#insta"><i class="fab fa-instagram"></i> Instagram</a>
      <a href="#tiktok"><i class="fab fa-tiktok"></i> TikTok</a>
    </div>
    <div class="menu-contact">
      <i class="fas fa-phone-alt" style="color:#D68B2C"></i>
      <p style="margin-top: 5px; font-weight: 500;">📲 WhatsApp: +60 11-2332 7967 / +62 81290560039</p>
      <small>COD seluruh UUM • Self pick-up</small>
    </div>
  </div>

  <div class="container">
    <nav class="navbar">
      <div class="logo">XCELLENCE <span>cheesy tornado chips</span></div>
      <button class="menu-icon" id="menuOpenBtn"><i class="fas fa-bars"></i></button>
    </nav>

    <div id="home">
      <div class="hero-section-wrapper">
        <div class="hero-text">
          <div class="hero-badge"><i class="fas fa-star"></i> UUM's favorite snack</div>
          <h1>Twisted, <span>cheesy</span><br> & dangerously tasty</h1>
          <p>Corn-based tornado chips with premium cheese flavour, low MSG, and packed in a reusable jar. Affordable, delicious, and made for UUM students & staff.</p>
          <div class="btn-group">
            <button class="btn-primary" id="orderNowBtn"><i class="fab fa-whatsapp"></i> Order via WhatsApp</button>
            <button class="btn-outline" id="learnMoreBtn">✨ Explore more</button>
          </div>
        </div>

        <!-- AUTO SLIDING PRODUCT GALLERY WITH YOUR PHOTOS -->
        <div class="auto-slider">
          <div class="slider-container">
            <div class="slides" id="slidesContainer">
              <!-- SLIDE 1 - REPLACE 'product1.jpg' WITH YOUR IMAGE FILE -->
              <div class="slide">
                <img src="X1.jpeg" alt="Xcellence Cheesy Chips Jar" class="product-img" onerror="this.style.display='none'; this.nextElementSibling.style.display='block'">
                <i class="fas fa-jar" style="display: none; font-size: 5rem;"></i>
                <h4>🍟 Tornado Chips</h4>
                <p>Crunchy corn twist • premium cheese</p>
              </div>
              <!-- SLIDE 2 - REPLACE 'product2.jpg' WITH YOUR IMAGE FILE -->
              <div class="slide">
                <img src="X2.jpeg" alt="Cheese flavored snack" class="product-img" onerror="this.style.display='none'; this.nextElementSibling.style.display='block'">
                <i class="fas fa-cheese" style="display: none; font-size: 5rem;"></i>
                <h4>🧀 Extra Cheesy</h4>
                <p>Rich cheddar style, low MSG</p>
              </div>
              <!-- SLIDE 3 - REPLACE 'product3.jpg' WITH YOUR IMAGE FILE -->
              <div class="slide">
                <img src="X3.jpeg" alt="Snack jar display" class="product-img" onerror="this.style.display='none'; this.nextElementSibling.style.display='block'">
                <i class="fas fa-shopping-bag" style="display: none; font-size: 5rem;"></i>
                <h4>RM7 / jar</h4>
                <p>Affordable • Student friendly</p>
              </div>
              <!-- SLIDE 4 - REPLACE 'product4.jpg' WITH YOUR IMAGE FILE -->
              <div class="slide">
                <img src="X4.jpeg" alt="COD Delivery UUM" class="product-img" onerror="this.style.display='none'; this.nextElementSibling.style.display='block'">
                <i class="fas fa-truck-fast" style="display: none; font-size: 5rem;"></i>
                <h4>COD UUM</h4>
                <p>Delivered to your college</p>
              </div>
            </div>
          </div>
          <div class="slider-dots" id="sliderDots"></div>
        </div>
      </div>
    </div>

    <div class="features">
      <div class="feature-card"><i class="fas fa-mobile-alt"></i><h3>WhatsApp / IG</h3><p>Order in seconds via chat</p></div>
      <div class="feature-card"><i class="fas fa-money-bill-wave"></i><h3>Cash on Delivery</h3><p>COD available all around UUM</p></div>
      <div class="feature-card"><i class="fas fa-wallet"></i><h3>Cashless 🏦 TnG</h3><p>Bank transfer / Touch 'n Go</p></div>
      <div class="feature-card"><i class="fas fa-graduation-cap"></i><h3>Student price</h3><p>Only RM7 / jar</p></div>
    </div>

    <div id="product">
      <div class="product-show">
        <div style="display: flex; flex-wrap: wrap; gap: 2rem; align-items: center;">
          <div style="flex:1; text-align: center;">
            <i class="fas fa-cheese" style="font-size: 4rem; color:#E8A247;"></i>
            <i class="fas fa-pepper-hot" style="font-size: 3rem; margin-left: 10px; color:#BB7936;"></i>
            <div style="margin-top: 20px;"><span class="price-tag">RM7 / jar</span><br><span style="font-size: 0.9rem;">~200g tornado chips</span></div>
          </div>
          <div style="flex:2">
            <h2 style="font-size: 1.9rem;">🍟 Xcellence cheesy tornado chips</h2>
            <p style="margin: 0.8rem 0;">✔ Premium cheese flavour • low MSG • safe & crunchy<br>
            ✔ Bulk sourced, hygienically repacked into ideal jar size<br>
            ✔ Perfect for study sessions, relaxing, or campus hangouts<br>
            ✔ Available for COD or self pick-up in UUM Sintok</p>
            <div style="margin-top: 1rem;"><i class="fas fa-check-circle" style="color:#D68B2C;"></i> 100% halal ingredients & friendly service</div>
          </div>
        </div>
      </div>
    </div>

    <div id="order" style="scroll-margin-top: 80px;">
      <div style="background: #FFFFFF; border-radius: 48px; padding: 2rem; box-shadow: 0 12px 28px -10px rgba(0,0,0,0.05);">
        <div class="order-row">
          <div><i class="fab fa-whatsapp" style="font-size: 3rem; color:#25D366;"></i></div>
          <div style="flex: 1;">
            <h3>Ready to snack? <i class="fas fa-smile-wink"></i></h3>
            <p>Contact us directly via WhatsApp (two numbers available), Instagram DM, or place order through chat.</p>
          </div>
          <button class="btn-primary" id="whatsappOrderBtn" style="background:#25D366; box-shadow: none;"><i class="fab fa-whatsapp"></i> Chat Now</button>
        </div>
        <hr style="margin: 1.5rem 0; border-color:#F0E2D0;">
        <div id="cod">
          <div style="display: flex; gap: 1.5rem; flex-wrap: wrap; justify-content: space-between; align-items: center;">
            <div><i class="fas fa-truck-fast" style="font-size: 2.5rem; color:#D68B2C;"></i></div>
            <div><strong>📍 Cash-on-Delivery (COD) — All UUM areas</strong><br>We deliver to colleges, SOB, library, cafeteria, staff housing.</div>
            <div><i class="fas fa-university"></i> Self pick-up: Near DKG 1</div>
          </div>
        </div>
      </div>
    </div>

    <div style="background: linear-gradient(120deg, #FFEFDD, #FFE9D4); margin: 3rem 0; border-radius: 48px; padding: 2rem; text-align: center;">
      <i class="fab fa-instagram" style="font-size: 2.4rem; margin-right: 1rem; color:#C13584;"></i>
      <i class="fab fa-tiktok" style="font-size: 2.2rem; color:#010101;"></i>
      <p style="margin: 1rem 0 0.5rem;">Follow @xcellence.cheesebites on IG & TikTok for promos, snack videos & campus giveaways!</p>
      <div class="btn-group" style="justify-content: center; margin-top: 1rem;">
        <button class="btn-outline" id="igBtn"><i class="fab fa-instagram"></i> Instagram</button>
        <button class="btn-outline" id="ttBtn"><i class="fab fa-tiktok"></i> TikTok</button>
      </div>
    </div>

    <div style="display: flex; flex-wrap: wrap; gap: 2rem; justify-content: space-between; margin-top: 1rem;">
      <div><i class="fas fa-heart" style="color:#E8A247;"></i> <strong>Vision:</strong> Trusted snack among UUM students & staff</div>
      <div><i class="fas fa-store"></i> <strong>Partnership:</strong> 10 members | profit sharing equally</div>
      <div><i class="fas fa-leaf"></i> <strong>Corn-based • premium cheese • 2 WA lines</strong></div>
    </div>

    <div class="footer">
      <p>© 2026 Xcellence – UUM Sintok, Kedah. Delivering crunch & joy across campus.<br>
      Payments: Cash on Delivery (COD) | Bank Transfer | TnG. Partner capital: RM180.</p>
    </div>
  </div>
</div>

<script>
  // INTRO
  const intro = document.getElementById('introOverlay');
  const mainContent = document.getElementById('mainContent');
  function finishIntro() {
    if (!intro) return;
    intro.classList.add('hide-intro');
    mainContent.classList.add('visible');
    setTimeout(() => { if (intro && intro.parentNode) intro.style.display = 'none'; }, 900);
  }
  setTimeout(finishIntro, 2100);
  if (intro) intro.addEventListener('click', finishIntro);

  // SLIDE MENU
  const menuOpenBtn = document.getElementById('menuOpenBtn');
  const slideMenu = document.getElementById('slideMenu');
  const menuOverlayBg = document.getElementById('menuOverlayBg');
  const closeMenuBtn = document.getElementById('closeMenuBtn');
  function openMenu() { slideMenu.classList.add('open'); menuOverlayBg.classList.add('active'); document.body.style.overflow = 'hidden'; }
  function closeMenu() { slideMenu.classList.remove('open'); menuOverlayBg.classList.remove('active'); document.body.style.overflow = ''; }
  menuOpenBtn.addEventListener('click', openMenu);
  closeMenuBtn.addEventListener('click', closeMenu);
  menuOverlayBg.addEventListener('click', closeMenu);

  const menuLinks = document.querySelectorAll('.menu-links a');
  menuLinks.forEach(link => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      const targetId = link.getAttribute('href').substring(1);
      if (targetId === 'insta') window.open('https://www.instagram.com/xcellence.cheesebites?igsh=enczZDhjbGhjZXRx', '_blank');
      else if (targetId === 'tiktok') window.open('https://www.tiktok.com/@xcellence_cheesebites?_r=1&_t=ZS-96lR0Ed1bUL', '_blank');
      else if (document.getElementById(targetId)) document.getElementById(targetId).scrollIntoView({ behavior: 'smooth', block: 'start' });
      else if (targetId === 'home') window.scrollTo({ top: 0, behavior: 'smooth' });
      closeMenu();
    });
  });

  // WHATSAPP TWO NUMBERS
  const WA_NUMBER_1 = "601123327967";
  const WA_NUMBER_2 = "6281290560039";
  const DEFAULT_MSG = "Hi Xcellence! I'd like to order Cheesy Tornado Chips (RM7/jar) for COD in UUM.";

  function openWhatsApp(number, message = DEFAULT_MSG) {
    let clean = number.replace(/\D/g, '');
    const url = `https://wa.me/${clean}?text=${encodeURIComponent(message)}`;
    window.open(url, '_blank');
  }

  function askAndOpenWhatsApp() {
    let userChoice = confirm("📱 Choose WhatsApp line:\n\n✅ Press OK → +60 11-2332 7967 (Malaysia)\n❌ Press Cancel → +62 812-9056-0039 (Secondary)");
    if (userChoice) openWhatsApp(WA_NUMBER_1);
    else openWhatsApp(WA_NUMBER_2);
  }

  document.getElementById('orderNowBtn').addEventListener('click', askAndOpenWhatsApp);
  document.getElementById('whatsappOrderBtn').addEventListener('click', askAndOpenWhatsApp);
  document.getElementById('learnMoreBtn').addEventListener('click', () => document.getElementById('product').scrollIntoView({ behavior: 'smooth' }));
  document.getElementById('igBtn').addEventListener('click', () => window.open('https://www.instagram.com/xcellence.cheesebites', '_blank'));
  document.getElementById('ttBtn').addEventListener('click', () => window.open('https://www.tiktok.com/@xcellence_cheesebites', '_blank'));

  // AUTO SLIDING CAROUSEL
  const slidesContainer = document.getElementById('slidesContainer');
  const slides = document.querySelectorAll('.slide');
  const dotsContainer = document.getElementById('sliderDots');
  let currentIndex = 0;
  let autoInterval;
  const totalSlides = slides.length;

  function createDots() {
    dotsContainer.innerHTML = '';
    for (let i = 0; i < totalSlides; i++) {
      const dot = document.createElement('div');
      dot.classList.add('dot');
      if (i === currentIndex) dot.classList.add('active-dot');
      dot.addEventListener('click', () => { stopAutoSlide(); goToSlide(i); startAutoSlide(); });
      dotsContainer.appendChild(dot);
    }
  }

  function goToSlide(index) {
    if (index < 0) index = totalSlides - 1;
    if (index >= totalSlides) index = 0;
    currentIndex = index;
    slidesContainer.style.transform = `translateX(-${currentIndex * 100}%)`;
    document.querySelectorAll('.dot').forEach((dot, idx) => {
      if (idx === currentIndex) dot.classList.add('active-dot');
      else dot.classList.remove('active-dot');
    });
  }

  function nextSlide() { goToSlide(currentIndex + 1); }
  function startAutoSlide() { if (autoInterval) clearInterval(autoInterval); autoInterval = setInterval(nextSlide, 2800); }
  function stopAutoSlide() { if (autoInterval) { clearInterval(autoInterval); autoInterval = null; } }

  createDots();
  goToSlide(0);
  startAutoSlide();
  const sliderBox = document.querySelector('.auto-slider');
  sliderBox.addEventListener('mouseenter', stopAutoSlide);
  sliderBox.addEventListener('mouseleave', startAutoSlide);
</script>
</body>
</html>