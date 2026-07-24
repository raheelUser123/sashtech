<?php
$pageTitle       = 'Illustration & Creative Artwork | Sash Tech';
$pageDescription = 'Distinctive covers, characters and bespoke artwork created to make ideas unforgettable.';
include 'includes/header.php';

/* ── Read all sub-folders inside Illustration ── */
$baseDir = __DIR__ . '/assets/images/portfolio/Illustration/';
$baseWeb = 'assets/images/portfolio/Illustration/';
$exts    = ['webp','png','jpg','jpeg','gif'];
$tabs    = [];

if (is_dir($baseDir)) {
    $folders = array_values(array_filter(scandir($baseDir), function($f) use ($baseDir) {
        return $f !== '.' && $f !== '..' && is_dir($baseDir . $f);
    }));

    foreach ($folders as $folder) {
        $slug   = preg_replace('/[^a-z0-9]+/', '-', strtolower($folder));
        $dir    = $baseDir . $folder . '/';
        $files  = scandir($dir);
        $images = [];
        foreach ($files as $file) {
            if ($file === '.' || $file === '..') continue;
            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            if (!in_array($ext, $exts)) continue;
            $images[] = $baseWeb . $folder . '/' . $file;
        }
        if (!empty($images)) {
            $tabs[$slug] = ['label' => $folder, 'images' => $images];
        }
    }
}
?>

<!-- ===== SERVICE HERO ===== -->
<section class="page-hero">
  <div class="container two-col">
    <div>
      <span class="eyebrow">SPECIALIST SERVICE</span>
      <h1>Illustration &amp; Creative Artwork</h1>
      <p>Distinctive covers, characters and bespoke artwork created to make ideas unforgettable.</p>
      <button class="btn btn-primary" data-popup-open>Request a Quote <span>↗</span></button>
    </div>
    <div class="reveal">
      <img src="assets/images/chr1.png"
           alt="Illustration &amp; Creative Artwork"
           onerror="this.style.display='none'"
           style="width:100%;max-width:630px;border-radius:20px;border:1px solid rgba(255,255,255,0.1);box-shadow:0 20px 40px rgba(0,0,0,0.3);display:block;margin:0 auto;">
    </div>
  </div>
</section>

<!-- ===== OVERVIEW ===== -->
<section>
  <div class="container two-col">
    <div class="reveal">
      <span class="eyebrow">OVERVIEW</span>
      <h2>Creative execution built around your objective.</h2>
    </div>
    <div class="reveal">
      <p>Every illustration &amp; creative artwork project begins with a clear understanding of the audience, platform, message and desired outcome. We then shape the right creative direction, production workflow and delivery format.</p>
      <p>You receive a defined scope, transparent revision process and assets prepared for practical use.</p>
    </div>
  </div>
</section>

<!-- ===== WHAT'S INCLUDED ===== -->
<section class="dark-section">
  <div class="container">
    <div class="section-head">
      <div>
        <span class="eyebrow">WHAT'S INCLUDED</span>
        <h2>Focused capabilities, professionally delivered.</h2>
      </div>
    </div>
    <div class="cards">
      <article class="service-card reveal">
        <div class="card-icon">✦</div>
        <h3>Book &amp; Novel Covers</h3>
        <p>Tailored planning, creative development, refinement and delivery for your specific goals and platforms.</p>
      </article>
      <article class="service-card reveal">
        <div class="card-icon">✦</div>
        <h3>Character Designing</h3>
        <p>Tailored planning, creative development, refinement and delivery for your specific goals and platforms.</p>
      </article>
      <article class="service-card reveal">
        <div class="card-icon">✦</div>
        <h3>Custom Artworks</h3>
        <p>Tailored planning, creative development, refinement and delivery for your specific goals and platforms.</p>
      </article>
    </div>
  </div>
</section>

<!-- ===== WHO IT'S FOR ===== -->
<section>
  <div class="container two-col">
    <div>
      <span class="eyebrow">WHO IT'S FOR</span>
      <h2>Built for brands, creators, authors, individuals and teams ready to improve their output.</h2>
    </div>
    <ul class="feature-list">
      <li>Startups launching a new idea</li>
      <li>Creators building a stronger content system</li>
      <li>Businesses refreshing their digital presence</li>
      <li>Agencies needing reliable production support</li>
      <li>Authors, publishers and individuals developing visual assets</li>
    </ul>
  </div>
</section>

<!-- ===== CLIENT REVIEW ===== -->
<section class="testimonials-section">
  <div class="container">
    <div class="section-head">
      <div>
        <span class="eyebrow">CLIENT REVIEW</span>
        <h2>What authors and individuals say.</h2>
      </div>
    </div>
    <article class="testimonial reveal">
      <div class="testimonial-stars">
        <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
      </div>
      <p>“The illustration style gave our book the premium, memorable look we wanted. The process was smooth, clear and truly aligned with what an author needs when launching a story.”</p>
      <div class="testimonial-author">
        <div class="testimonial-avatar" style="background:linear-gradient(135deg,#5c48ff,#f359c1)">AR</div>
        <div>
          <b>Author / Individual Creator</b>
          <small>Book Cover Project</small>
        </div>
      </div>
    </article>
  </div>
</section>

<!-- ===== PROCESS ===== -->
<section>
  <div class="container">
    <div class="section-head">
      <div>
        <span class="eyebrow">PROCESS</span>
        <h2>A simple path from brief to delivery.</h2>
      </div>
    </div>
    <div class="process-steps">
      <?php
      $steps = [
        ['01','Brief','Clear briefing and goal setting to define the creative direction.'],
        ['02','Direction','Developing concepts, moodboards, and style frames for approval.'],
        ['03','Production','Executing the design, animation, edits, or development assets.'],
        ['04','Review','Iterating and refining the assets through focused review rounds.'],
        ['05','Delivery','Delivering clean, organized final files optimized for launch.'],
      ];
      foreach($steps as $s): ?>
      <article class="process-node reveal">
        <div class="step-top"><b><?=$s[0]?></b><span class="step-line"></span></div>
        <h3><?=e($s[1])?></h3>
        <p><?=e($s[2])?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ===== ILLUSTRATION PORTFOLIO (TABS + GRID + PAGINATION) ===== -->
<section class="illus-portfolio-section">
  <div class="container">

    <div class="reveal" style="margin-bottom:40px;">
      <span class="eyebrow">OUR ILLUSTRATION WORK</span>
      <h2>Browse the Portfolio</h2>
      <p>Filter by style to explore our full illustration library.</p>
    </div>

    <!-- Tabs -->
    <div class="illus-tabs" role="tablist">
      <button class="illus-tab active" data-tab="all" type="button">All</button>
      <?php foreach ($tabs as $slug => $info): ?>
        <button class="illus-tab" data-tab="<?=e($slug)?>" type="button"><?=e($info['label'])?></button>
      <?php endforeach; ?>
    </div>

    <!-- Grid -->
    <div class="illus-grid" id="illusGrid">
      <?php foreach ($tabs as $slug => $info): ?>
        <?php foreach ($info['images'] as $img): ?>
          <a class="illus-card reveal"
             data-tab="<?=e($slug)?>"
             href="<?=e($img)?>"
             target="_blank" rel="noopener">
            <img src="<?=e($img)?>" alt="<?=e($info['label'])?>" loading="lazy">
            <div class="illus-card-label"><?=e($info['label'])?></div>
          </a>
        <?php endforeach; ?>
      <?php endforeach; ?>
    </div>

    <!-- Pagination -->
    <div class="illus-pagination" id="illusPagination"></div>

  </div>
</section>

<script>
(function () {
    const PER_PAGE  = 16;
    const grid      = document.getElementById('illusGrid');
    const pagDiv    = document.getElementById('illusPagination');
    const tabs      = document.querySelectorAll('.illus-tab');
    const allCards  = Array.from(grid.querySelectorAll('.illus-card'));

    let activeTab   = 'all';
    let currentPage = 1;

    function getFiltered() {
        return allCards.filter(c => activeTab === 'all' || c.dataset.tab === activeTab);
    }

    function render() {
        const filtered   = getFiltered();
        const totalPages = Math.max(1, Math.ceil(filtered.length / PER_PAGE));
        if (currentPage > totalPages) currentPage = totalPages;
        if (currentPage < 1) currentPage = 1;

        const start = (currentPage - 1) * PER_PAGE;
        const end   = start + PER_PAGE;

        allCards.forEach(c => c.style.display = 'none');
        filtered.forEach((c, i) => { if (i >= start && i < end) c.style.display = ''; });

        buildPagination(totalPages);
    }

    function buildPagination(total) {
        pagDiv.innerHTML = '';
        if (total <= 1) return;

        const mkBtn = (label, disabled, active, onClick) => {
            const b = document.createElement('button');
            b.innerHTML = label;
            b.disabled  = disabled;
            if (active) b.classList.add('active');
            b.addEventListener('click', () => { onClick(); render(); scrollUp(); });
            pagDiv.appendChild(b);
        };

        mkBtn('←', currentPage === 1, false, () => currentPage--);
        for (let i = 1; i <= total; i++) {
            const pg = i;
            mkBtn(i, false, i === currentPage, () => currentPage = pg);
        }
        mkBtn('→', currentPage === total, false, () => currentPage++);
    }

    function scrollUp() {
        window.scrollTo({ top: grid.getBoundingClientRect().top + window.pageYOffset - 120, behavior: 'smooth' });
    }

    tabs.forEach(t => t.addEventListener('click', () => {
        tabs.forEach(x => x.classList.remove('active'));
        t.classList.add('active');
        activeTab   = t.dataset.tab;
        currentPage = 1;
        render();
    }));

    render();
})();
</script>

<?php include 'includes/footer.php'; ?>
