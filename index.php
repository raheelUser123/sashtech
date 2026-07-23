<?php
$pageTitle='Sash Tech | Creative Design, Animation & Digital Growth';
$pageDescription='Sash Tech creates bold design, animation, video, websites, SEO and digital campaigns for brands ready to grow.';
include 'includes/header.php';
?>
<section class="hero hero-dark">
  <div class="hero-glow glow-a"></div><div class="hero-glow glow-b"></div>
  <div class="container hero-grid">
    <div class="hero-copy reveal">
      <span class="eyebrow">CREATIVE • STRATEGY • GROWTH</span>
      <h1>Design that speaks.<br><span>Strategy that grows.</span></h1>
      <p>We help businesses, creators, and authors scale their digital presence through high end design, video, and strategic growth.</p>
      <div class="hero-actions">
        <button class="btn btn-primary" data-popup-open>Start a Project <span>↗</span></button>
        <a class="btn btn-outline light" href="portfolio.php">View Our Work <span>→</span></a>
      </div>
      <div class="trust-points"><span>✓ Fast turnaround</span><span>✓ Premium quality</span><span>✓ Clear communication</span></div>
    </div>
    <div class="hero-visual reveal">
      <div class="visual-frame"><img src="assets/images/generated/hero-creative.png" alt="Creative design and animation workspace"></div>
     
    </div>
  </div>
  <!-- Services Ticker -->
  <div class="services-ticker-wrapper">
    <div class="services-ticker-track">
      <span class="ticker-item"><span class="ticker-star">✦</span> Illustration &amp; Creative Artwork</span>
      <span class="ticker-item"><span class="ticker-star">✦</span> 2D &amp; 3D Modeling &amp; Animation</span>
      <span class="ticker-item"><span class="ticker-star">✦</span> Video Production &amp; Editing</span>
      <span class="ticker-item"><span class="ticker-star">✦</span> Creator Growth &amp; YouTube Strategy</span>
      <span class="ticker-item"><span class="ticker-star">✦</span> Web Design &amp; Technical SEO</span>
      <span class="ticker-item"><span class="ticker-star">✦</span> AI Search Optimization (GEO)</span>
      <span class="ticker-item"><span class="ticker-star">✦</span> Digital Marketing &amp; Paid Acquisition</span>
      <!-- Duplicate for seamless loop -->
      <span class="ticker-item"><span class="ticker-star">✦</span> Illustration &amp; Creative Artwork</span>
      <span class="ticker-item"><span class="ticker-star">✦</span> 2D &amp; 3D Modeling &amp; Animation</span>
      <span class="ticker-item"><span class="ticker-star">✦</span> Video Production &amp; Editing</span>
      <span class="ticker-item"><span class="ticker-star">✦</span> Creator Growth &amp; YouTube Strategy</span>
      <span class="ticker-item"><span class="ticker-star">✦</span> Web Design &amp; Technical SEO</span>
      <span class="ticker-item"><span class="ticker-star">✦</span> AI Search Optimization (GEO)</span>
      <span class="ticker-item"><span class="ticker-star">✦</span> Digital Marketing &amp; Paid Acquisition</span>
    </div>
  </div>
</section>

<section class="services-home">
  <div class="container">
    <div class="center-head reveal"><span class="eyebrow">WHAT WE DO</span><h2>Our Creative Services</h2><p>End-to-end creative and digital solutions to elevate your brand, content and online growth.</p></div>
    <div class="service-home-grid">
      <?php foreach($services as $slug=>$s): ?><article class="service-home-card reveal"><div class="service-icon"><?=e($s['icon'])?></div><h3><?=e($s['title'])?></h3><p><?=e($s['short'])?></p><a href="<?=$slug?>.php">Explore <span>→</span></a></article><?php endforeach; ?>
      <article class="service-home-card reveal"><div class="service-icon">✎</div><h3>Content & Copywriting</h3><p>High-converting copy that engages audiences and supports stronger campaigns.</p><a href="digital-marketing-paid-acquisition.php">Explore <span>→</span></a></article>
    </div>
    <div class="center-action"><a class="btn btn-outline" href="services.php">View All Services <span>→</span></a></div>
  </div>
</section>
<?php
// Remove old $works/$categories block — replaced by curated showcase below
?>

<!-- ======= WEBSITE MOCKUPS ======= -->
<section class="home-showcase-section mockup-section">
  <div class="showcase-head reveal">
    <div class="container">
      <span class="eyebrow">WEB DESIGN</span>
      <h2>Website Mockups</h2>
      <p>Full-page website designs crafted for performance, clarity and premium aesthetics.</p>
    </div>
  </div>
  <div class="mockup-grid">
    <a class="mockup-card reveal" href="portfolio.php">
      <div class="mockup-frame">
        
        <div class="mockup-scroll-area">
          <img src="assets/images/websiteockup/web5.png" alt="Website Mockup 5">
        </div>
      </div>
    </a>
    <a class="mockup-card reveal" href="portfolio.php">
      <div class="mockup-frame">
        
        <div class="mockup-scroll-area">
          <img src="assets/images/websiteockup/web6.png" alt="Website Mockup 6">
        </div>
      </div>
    </a>
    <a class="mockup-card reveal" href="portfolio.php">
      <div class="mockup-frame">
        
        <div class="mockup-scroll-area">
          <img src="assets/images/websiteockup/web3.png" alt="Website Mockup 3">
        </div>
      </div>
    </a>
    <a class="mockup-card reveal" href="portfolio.php">
      <div class="mockup-frame">
        
        <div class="mockup-scroll-area">
          <img src="assets/images/websiteockup/web4.png" alt="Website Mockup 4">
        </div>
      </div>
    </a>
  </div>
  <div class="container showcase-cta-row">
    <a class="btn btn-outline" href="portfolio.php">View All Web Projects <span>→</span></a>
  </div>
</section>

<!-- ======= BRANDING ======= -->
<section class="home-showcase-section branding-section">
  <div class="showcase-head reveal">
    <div class="container">
      <span class="eyebrow">BRANDING</span>
      <h2>Brand Identity</h2>
      <p>Logos, visual systems and brand identities built to be recognisable and timeless.</p>
    </div>
  </div>
  <div class="container">
    <div class="showcase-grid-4 reveal">
      <a class="showcase-card" href="portfolio.php">
        <div class="showcase-img-wrap"><img src="assets/images/branding/branding1.webp" alt="Branding 1"></div>
      </a>
      <a class="showcase-card" href="portfolio.php">
        <div class="showcase-img-wrap"><img src="assets/images/branding/branding2.webp" alt="Branding 2"></div>
      </a>
      <a class="showcase-card" href="portfolio.php">
        <div class="showcase-img-wrap"><img src="assets/images/branding/branding3.webp" alt="Branding 3"></div>
      </a>
      <a class="showcase-card" href="portfolio.php">
        <div class="showcase-img-wrap"><img src="assets/images/branding/branding4.webp" alt="Branding 4"></div>
      </a>
    </div>
  </div>
  <div class="container showcase-cta-row">
    <a class="btn btn-outline" href="portfolio.php">View All Branding <span>→</span></a>
  </div>
</section>

<!-- ======= ILLUSTRATION ======= -->
<section class="home-showcase-section illustration-section">
  <div class="showcase-head reveal">
    <div class="container">
      <span class="eyebrow">ILLUSTRATION</span>
      <h2>Creative Illustration</h2>
      <p>Bold characters, scenes and artwork that bring ideas to life with personality and flair.</p>
    </div>
  </div>
  <div class="container">
    <div class="showcase-grid-4 reveal">
      <a class="showcase-card illus-labeled" href="illustration-creative-artwork.php">
        <div class="showcase-img-wrap"><img src="assets/images/chr1.png" alt="Character Designing"></div>
        <div class="showcase-label">Character Designing</div>
      </a>
      <a class="showcase-card illus-labeled" href="illustration-creative-artwork.php">
        <div class="showcase-img-wrap"><img src="assets/images/portfolio/Illustration/Children Book Style/IMG_1270.webp" alt="Children Book Style"></div>
        <div class="showcase-label">Children Book Style</div>
      </a>
      <a class="showcase-card illus-labeled" href="illustration-creative-artwork.php">
        <div class="showcase-img-wrap"><img src="assets/images/portfolio/Illustration/Fantasy illustrations/IMG_1259.webp" alt="Fantasy Illustrations"></div>
        <div class="showcase-label">Fantasy Illustrations</div>
      </a>
      <a class="showcase-card illus-labeled" href="illustration-creative-artwork.php">
        <div class="showcase-img-wrap"><img src="assets/images/portfolio/Illustration/Scene illustration/d04f7a2c-93a5-4f5d-9ee1-fe53c99b3580.webp" alt="Scene Illustration"></div>
        <div class="showcase-label">Scene Illustration</div>
      </a>
    </div>
  </div>
  <div class="container showcase-cta-row">
    <a class="btn btn-outline" href="illustration-creative-artwork.php">View All Illustrations <span>→</span></a>
  </div>

</section>

<section class="process-section"><div class="container"><div class="process-shell">
  <div class="process-intro reveal"><div><span class="eyebrow">OUR PROCESS</span><h2>From first idea to final delivery.</h2><p>Every project follows a clear, collaborative system designed to protect quality, timing and communication.</p><button class="btn btn-outline light" data-popup-open>Start Your Project <span>→</span></button></div><div style="margin:24px 0;"><img src="assets/images/newimages/From first idea to final delivery. Our process section.png" alt="Process workflow overview" style="width:100%; border-radius:16px; border:1px solid rgba(255,255,255,0.08); box-shadow:0 15px 35px rgba(0,0,0,0.25);"></div></div>
  <div class="process-steps">
  <?php $steps=[['01','Discover','We learn your goals, audience, references and project requirements.'],['02','Plan','We define the scope, milestones, creative direction and delivery schedule.'],['03','Create','Our specialists develop the main concepts, visuals and production assets.'],['04','Refine','You review the work while we improve every detail through focused revisions.'],['05','Deliver','Final files are quality-checked, organized and delivered ready to launch.']]; foreach($steps as $s): ?><article class="process-node reveal"><div class="step-top"><b><?=$s[0]?></b><span class="step-line"></span></div><h3><?=$s[1]?></h3><p><?=$s[2]?></p></article><?php endforeach; ?>
  </div></div></div></section>
<section class="why-section"><div class="container why-grid"><div class="why-image reveal"><img src="assets/images/newimages/WHY CHOOSE US Section.png" alt="Creative team collaborating"><span class="metric m1"><b>50+</b> Creative Skills</span><span class="metric m2"><b>300+</b> Projects</span><span class="metric m3"><b>98%</b> Satisfaction</span></div><div class="why-copy reveal"><span class="eyebrow">WHY CHOOSE US</span><h2>Your Vision. Our Expertise.<br>Outstanding Results.</h2><p>We combine creativity, strategy and technology to deliver work that feels polished, performs strongly and supports your long-term growth.</p><div class="check-grid"><span>Creative & experienced team</span><span>Flexible pricing</span><span>On-time delivery</span><span>Scalable support</span><span>Clear communication</span><span>Quality assurance</span></div></div></div></section>
<section class="stats-band"><div class="container stats-band-grid"><div><strong class="counter" data-target="300" data-suffix="+">0</strong><span>Projects Completed</span></div><div><strong class="counter" data-target="200" data-suffix="+">0</strong><span>Happy Clients</span></div><div><strong class="counter" data-target="5" data-suffix="+">0</strong><span>Years Experience</span></div><div><strong class="counter" data-target="8" data-suffix="">0</strong><span>Core Services</span></div></div></section>
<section class="testimonials-section testi-carousel-section">
  <div class="container">
    <div class="center-head reveal">
      <span class="eyebrow">TESTIMONIALS</span>
      <h2>What Our Clients Say</h2>
      <p>Real feedback from clients we've had the privilege of working with.</p>
    </div>

    <!-- Carousel Wrapper -->
    <div class="testi-carousel-outer">
      <button class="testi-arrow testi-prev" aria-label="Previous review">&#8592;</button>

      <div class="testi-carousel-track-wrap">
        <div class="testi-carousel-track" id="testiTrack">

          <!-- Review 1 -->
          <article class="testimonial testi-slide">
            <div class="testimonial-stars"><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span></div>
            <p>Sash Tech brought clarity and creativity to our brand. The final work felt modern, polished and completely aligned with our goals.</p>
            <div class="testimonial-author">
              <div class="testimonial-avatar" style="background:linear-gradient(135deg,#5c48ff,#f359c1)">JM</div>
              <div><b>Jason Miller</b><small>Marketing Director</small></div>
            </div>
          </article>

          <!-- Review 2 -->
          <article class="testimonial testi-slide">
            <div class="testimonial-stars"><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span></div>
            <p>The video editing and content strategy helped us create a more consistent channel and stronger audience engagement. Highly recommend!</p>
            <div class="testimonial-author">
              <div class="testimonial-avatar" style="background:linear-gradient(135deg,#f359c1,#ff8c42)">SJ</div>
              <div><b>Sarah Johnson</b><small>Content Creator</small></div>
            </div>
          </article>

          <!-- Review 3 -->
          <article class="testimonial testi-slide">
            <div class="testimonial-stars"><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span></div>
            <p>Professional, responsive and results-driven. Our new website finally represents the quality of our business. Couldn't be happier.</p>
            <div class="testimonial-author">
              <div class="testimonial-avatar" style="background:linear-gradient(135deg,#10b981,#06b6d4)">DL</div>
              <div><b>David Lee</b><small>Business Owner</small></div>
            </div>
          </article>

          <!-- Review 4 -->
          <article class="testimonial testi-slide">
            <div class="testimonial-stars"><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span></div>
            <p>Our YouTube channel completely transformed after working with Sash Tech. The thumbnails and channel strategy doubled our click-through rate.</p>
            <div class="testimonial-author">
              <div class="testimonial-avatar" style="background:linear-gradient(135deg,#f59e0b,#ef4444)">AR</div>
              <div><b>Ahmed Raza</b><small>YouTube Creator</small></div>
            </div>
          </article>

          <!-- Review 5 -->
          <article class="testimonial testi-slide">
            <div class="testimonial-stars"><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span></div>
            <p>The 3D animations they produced exceeded every expectation. The attention to detail was incredible and delivery was right on time.</p>
            <div class="testimonial-author">
              <div class="testimonial-avatar" style="background:linear-gradient(135deg,#8b5cf6,#3b82f6)">MC</div>
              <div><b>Maria Chen</b><small>Creative Director</small></div>
            </div>
          </article>

          <!-- Review 6 -->
          <article class="testimonial testi-slide">
            <div class="testimonial-stars"><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span></div>
            <p>Sash Tech handled our complete digital marketing campaign. The ROI was phenomenal, and we saw a 3x increase in leads within the first month.</p>
            <div class="testimonial-author">
              <div class="testimonial-avatar" style="background:linear-gradient(135deg,#06b6d4,#5c48ff)">TK</div>
              <div><b>Tom Kaur</b><small>E-commerce Founder</small></div>
            </div>
          </article>

          <!-- Review 7 -->
          <article class="testimonial testi-slide">
            <div class="testimonial-stars"><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span></div>
            <p>From logo to full brand identity, they nailed it on the first pass. The team really listened and understood exactly what we were going for.</p>
            <div class="testimonial-author">
              <div class="testimonial-avatar" style="background:linear-gradient(135deg,#ec4899,#8b5cf6)">LP</div>
              <div><b>Layla Parker</b><small>Brand Manager</small></div>
            </div>
          </article>

          <!-- Review 8 -->
          <article class="testimonial testi-slide">
            <div class="testimonial-stars"><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span></div>
            <p>Their SEO work genuinely moved the needle. We went from page 4 to top 3 in under 60 days, and communication throughout was excellent.</p>
            <div class="testimonial-author">
              <div class="testimonial-avatar" style="background:linear-gradient(135deg,#10b981,#f59e0b)">RN</div>
              <div><b>Ryan Nguyen</b><small>Digital Strategist</small></div>
            </div>
          </article>

          <!-- Review 9 -->
          <article class="testimonial testi-slide">
            <div class="testimonial-stars"><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span></div>
            <p>The illustration work gave our book a premium, memorable identity. The process was smooth, collaborative and exactly what a writer needs to bring a story to life.</p>
            <div class="testimonial-author">
              <div class="testimonial-avatar" style="background:linear-gradient(135deg,#5c48ff,#f359c1)">TW</div>
              <div><b>Tom Wilson</b><small>Writer</small></div>
            </div>
          </article>

          <!-- Review 10 -->
          <article class="testimonial testi-slide">
            <div class="testimonial-stars"><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span></div>
            <p>The illustration direction made our portfolio feel more polished and memorable. Sara Noble gave our project a clear visual voice and helped us present our work with confidence.</p>
            <div class="testimonial-author">
              <div class="testimonial-avatar" style="background:linear-gradient(135deg,#ec4899,#8b5cf6)">SN</div>
              <div><b>Sara Nobel</b><small>Illustration Client</small></div>
            </div>
          </article>

        </div><!-- /track -->
      </div>

      <button class="testi-arrow testi-next" aria-label="Next review">&#8594;</button>
    </div><!-- /outer -->

    <!-- Dots -->
    <div class="testi-dots" id="testiDots"></div>

  </div>
</section>

<script>
(function(){
  const track   = document.getElementById('testiTrack');
  const slides  = Array.from(track.querySelectorAll('.testi-slide'));
  const dotsWrap= document.getElementById('testiDots');
  const prevBtn = document.querySelector('.testi-prev');
  const nextBtn = document.querySelector('.testi-next');
  const perView = window.innerWidth < 700 ? 1 : window.innerWidth < 1024 ? 2 : 3;
  let current   = 0;
  let autoTimer;
  const total   = slides.length;
  const maxIdx  = Math.max(0, total - perView);

  /* Build dots */
  const numDots = maxIdx + 1;
  for(let i = 0; i < numDots; i++){
    const d = document.createElement('button');
    d.className = 'testi-dot' + (i===0?' active':'');
    d.setAttribute('aria-label','Go to slide '+(i+1));
    d.addEventListener('click',()=>{ goTo(i); resetAuto(); });
    dotsWrap.appendChild(d);
  }

  function setSlideWidth(){
    const gap = 20;
    const outerW = track.parentElement.offsetWidth;
    const pv = window.innerWidth < 700 ? 1 : window.innerWidth < 1024 ? 2 : 3;
    const w  = (outerW - gap*(pv-1)) / pv;
    slides.forEach(s=>{ s.style.minWidth = w+'px'; s.style.maxWidth = w+'px'; });
    track.style.gap = gap+'px';
    goTo(current, false);
  }

  function goTo(idx, animate=true){
    const pv  = window.innerWidth < 700 ? 1 : window.innerWidth < 1024 ? 2 : 3;
    const mx  = Math.max(0, total - pv);
    current   = Math.max(0, Math.min(idx, mx));
    const gap = 20;
    const slideW = slides[0].offsetWidth + gap;
    track.style.transition = animate ? 'transform 0.55s cubic-bezier(0.4,0,0.2,1)' : 'none';
    track.style.transform  = `translateX(-${current * slideW}px)`;
    /* update dots */
    const nd = Math.max(0, total-pv)+1;
    Array.from(dotsWrap.children).forEach((d,i)=>d.classList.toggle('active', i===current));
    prevBtn.disabled = current === 0;
    nextBtn.disabled = current >= mx;
  }

  prevBtn.addEventListener('click',()=>{ goTo(current-1); resetAuto(); });
  nextBtn.addEventListener('click',()=>{ goTo(current+1); resetAuto(); });

  function startAuto(){ autoTimer = setInterval(()=>{ goTo(current >= maxIdx ? 0 : current+1); }, 4000); }
  function resetAuto(){ clearInterval(autoTimer); startAuto(); }

  /* Touch/swipe */
  let startX=0;
  track.addEventListener('touchstart', e=>{ startX=e.touches[0].clientX; }, {passive:true});
  track.addEventListener('touchend',   e=>{ const dx=e.changedTouches[0].clientX-startX; if(Math.abs(dx)>50){ goTo(dx<0?current+1:current-1); resetAuto(); } });

  window.addEventListener('resize', setSlideWidth);
  setSlideWidth();
  startAuto();
  prevBtn.disabled = true;
})();
</script>

<section class="home-cta"><div class="container home-cta-inner"><div><span class="eyebrow">LET'S WORK TOGETHER</span><h2>Have a project in mind?</h2><p>Let’s create something bold, memorable and built to perform.</p><div class="hero-actions"><button class="btn btn-light" data-popup-open>Start a Project <span>→</span></button><a class="btn btn-outline light" href="contact.php">Get in Touch <span>→</span></a></div></div><div class="home-cta-image"><img src="assets/images/newimages/LET'S WORK TOGETHER section bottom.png" alt="Sash Tech creative growth collaboration"></div></div></section>


<?php include 'includes/footer.php'; ?>
