<?php if (!empty($slug) && $slug === 'web-design-technical-seo'): ?>
<section class="card-stack-section">
  <style>
    .card-stack-section{padding:100px 0 60px}
    .card-stack-head{text-align:center;margin-bottom:40px}
    .card-stack-head .eyebrow{display:block;color:#a855f7;font-weight:800;letter-spacing:.2em;font-size:13px;margin-bottom:10px}
    .card-stack-head h2{font-size:clamp(32px,5.5vw,64px);font-weight:800;letter-spacing:-.02em;line-height:.9;margin:0}

    .card-stack-list{position:relative}
    .card-stack-item{position:sticky;top:110px;padding-bottom:40px}
    .card-stack-card{
      display:flex;flex-wrap:wrap;align-items:center;gap:40px;
      padding:48px;border-radius:32px;position:relative;
      background:#0e0e14;border:1px solid rgba(255,255,255,.08);
      box-shadow:0 30px 60px rgba(0,0,0,.5);
      overflow:hidden;transition:transform .25s ease, filter .25s ease;
      transform-origin:top center;
      min-height:420px;
    }
    <?php for ($zi = 1; $zi <= 10; $zi++): ?>
    .card-stack-item:nth-child(<?=$zi?>){z-index:<?=$zi?>}
    <?php endfor; ?>
    .card-stack-item:nth-child(odd) .card-stack-card{flex-direction:row}
    .card-stack-item:nth-child(even) .card-stack-card{flex-direction:row-reverse}

    .card-stack-text{flex:1 1 320px;min-width:280px}
    .card-stack-num{display:flex;align-items:center;gap:14px;margin-bottom:18px}
    .card-stack-num span{font-family:monospace;letter-spacing:.2em;font-size:13px;color:#a855f7}
    .card-stack-num i{display:block;width:44px;height:1px;background:rgba(168,85,247,.4)}
    .card-stack-text h3{font-size:clamp(26px,3vw,38px);font-weight:800;letter-spacing:-.01em;margin:0 0 14px;
      background:linear-gradient(90deg,#c084fc,#818cf8);-webkit-background-clip:text;background-clip:text;color:transparent}
    .card-stack-text p{color:rgba(255,255,255,.55);line-height:1.65;max-width:480px;margin:0 0 20px}
    .card-stack-link{display:inline-flex;align-items:center;gap:8px;color:rgba(255,255,255,.5);font-weight:700;font-size:14px;text-decoration:none;transition:color .2s ease}
    .card-stack-card:hover .card-stack-link{color:#fff}
    .card-stack-link svg{width:16px;height:16px;transition:transform .2s ease}
    .card-stack-card:hover .card-stack-link svg{transform:translate(3px,-3px)}

    .card-stack-visual{flex:1 1 260px;min-width:220px;max-width:340px;aspect-ratio:1/1;position:relative;display:flex;align-items:center;justify-content:center}
    .card-stack-glow{position:absolute;inset:10%;border-radius:50%;filter:blur(60px);opacity:.35;background:linear-gradient(135deg,#c084fc,#818cf8)}
    .card-stack-visual img{position:relative;z-index:1;width:100%;height:100%;object-fit:contain;filter:drop-shadow(0 20px 35px rgba(0,0,0,.4))}

    @media (max-width:820px){
      .card-stack-item{top:80px}
      .card-stack-card{flex-direction:column !important;text-align:center;padding:32px}
      .card-stack-text p{margin-left:auto;margin-right:auto}
      .card-stack-num{justify-content:center}
    }
  </style>

  <div class="container">
    <div class="card-stack-head reveal">
      <span class="eyebrow">DESIGN. DEVELOP. DOMINATE.</span>
      <h2>WHAT WE DO</h2>
    </div>

    <?php
    // Drop your own images in assets/images/portfolio/ and update the paths below.
    $stackCards = [
      [
        'num'   => '01',
        'title' => 'Website Designing',
        'desc'  => 'Custom, conversion-focused website design built around your brand and your audience — not a recycled template. Every layout is planned around clarity, hierarchy and the action you want visitors to take.',
        'image' => 'assets/images/cardstack-web/1.png',
      ],
      [
        'num'   => '02',
        'title' => 'Search Engine Optimization',
        'desc'  => 'Technical and on-page SEO that gets your site found — structured data, clean site architecture, fast load times and content built around what your customers are actually searching for.',
        'image' => 'assets/images/cardstack-web/2.png',
      ],
      [
        'num'   => '03',
        'title' => 'Responsive Development & Tuning',
        'desc'  => 'Pixel-accurate builds that hold up on every screen size, tuned for speed and stability — cross-browser tested, performance audited, and ready to scale as your traffic grows.',
        'image' => 'assets/images/cardstack-web/3.png',
      ],
    ];
    ?>

    <div class="card-stack-list" id="cardStackList">
      <?php foreach ($stackCards as $card): ?>
      <div class="card-stack-item">
        <a class="card-stack-card reveal" href="portfolio.php">
          <div class="card-stack-text">
            <div class="card-stack-num"><span><?=e($card['num'])?></span><i></i></div>
            <h3><?=e($card['title'])?></h3>
            <p><?=e($card['desc'])?></p>
            <span class="card-stack-link">Explore Service
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
            </span>
          </div>
          <div class="card-stack-visual">
            <div class="card-stack-glow"></div>
            <img src="<?=e($card['image'])?>" alt="<?=e($card['title'])?>" loading="lazy">
          </div>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<script>
(function () {
  const items = Array.from(document.querySelectorAll('#cardStackList .card-stack-item'));
  if (!items.length) return;

  function update() {
    const viewportH = window.innerHeight;
    items.forEach(function (item, i) {
      const next = items[i + 1];
      if (!next) return;
      const nextRect = next.getBoundingClientRect();
      // How far the next card has crept up over this one (0 = not yet, 1 = fully covered)
      const progress = Math.min(1, Math.max(0, (viewportH - nextRect.top) / (viewportH * 0.5)));
      const scale = 1 - progress * 0.06;
      const card = item.querySelector('.card-stack-card');
      card.style.transform = 'scale(' + scale + ')';
      card.style.filter = 'brightness(' + (1 - progress * 0.25) + ')';
    });
  }

  document.addEventListener('scroll', update, { passive: true });
  window.addEventListener('resize', update);
  update();
})();
</script>
<?php endif; ?>