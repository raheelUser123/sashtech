<?php
require_once 'includes/config.php';require_once 'includes/data.php';
$slug=$serviceSlug??'';$service=$services[$slug]??null;if(!$service){http_response_code(404);include '404.php';exit;}
$pageTitle=$service['title'].' | Sash Tech';$pageDescription=$service['short'];include 'includes/header.php';
?>
<section class="page-hero">
  <div class="container two-col">
    <div>
      <span class="eyebrow">SPECIALIST SERVICE</span>
      <h1><?=e($service['title'])?></h1>
      <p><?=e($service['short'])?></p>
      <button class="btn btn-primary" data-popup-open>Request a Quote <span>↗</span></button>
    </div>
    <?php if (!empty($service['image'])): ?>
    <div class="reveal">
      <img src="assets/images/newimages/<?=e($service['image'])?>" alt="<?=e($service['title'])?>" style="width: 100%; max-width: 630px; border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.1); box-shadow: 0 20px 40px rgba(0,0,0,0.3); display: block; margin: 0 auto;">
    </div>
    <?php endif; ?>
  </div>
</section>
<?php if ($slug === 'ai-search-optimization'): ?>
<section><div class="container two-col"><div class="reveal"><span class="eyebrow">GEO</span><h2>Beyond Traditional SEO — Optimizing for the AI Era</h2></div><div class="reveal"><p>As search behavior shifts from traditional search engine results pages to generative AI answers, relying on keyword-dense SEO alone is no longer enough. Modern users ask conversational questions and expect direct, cited answers.</p><p>Generative Engine Optimization (GEO) ensures your brand becomes the trusted entity that platforms like ChatGPT, Google Gemini, Perplexity, and Claude quote directly in their responses.</p><ul class="feature-list"><li><strong>Entity & Knowledge Graph Building:</strong> Aligning your site data so AI systems clearly understand who you are and what services you provide.</li><li><strong>Citation & Authority Engineering:</strong> Securing high-trust backlinks and citations across digital networks to validate your credibility.</li><li><strong>Semantic & Intent-Driven Content:</strong> Structuring information using natural language patterns that match complex search queries.</li></ul></div></div></section>
<?php else: ?>
<section><div class="container two-col"><div class="reveal"><span class="eyebrow">OVERVIEW</span><h2>Creative execution built around your objective.</h2></div><div class="reveal"><p>Every custom <?=strtolower(e($service['title']))?> project begins with an in-depth discovery phase mapping your core business goals, target audience, and market positioning. We turn these strategic insights into responsive UI/UX layouts, conversion-focused content structures, and scalable website architecture engineered for peak performance.</p></div></div></section>
<?php endif; ?>
<?php include 'includes/video-reel-section.php'; ?>
<?php include 'includes/card-stack-section.php'; ?>
<?php if ($slug === 'web-design-technical-seo'): ?>
<section class="built-showcase">
  <style>
    .built-showcase{padding:100px 0;overflow:hidden}
    .built-showcase .container{display:grid;grid-template-columns:1fr 1.6fr;gap:60px;align-items:start}
    .built-showcase-head{position:sticky;top:120px}
    .built-showcase-head .eyebrow{color:#a855f7;font-weight:800;letter-spacing:1px}
    .built-showcase-head h2{font-size:clamp(38px,5vw,58px);font-weight:900;line-height:1.05;margin:10px 0 18px}
    .built-showcase-head p{color:rgba(255,255,255,.6);font-size:16px;line-height:1.6;max-width:360px}

    .built-grid{display:grid;grid-template-columns:1fr 1fr;gap:26px}
    .built-card{perspective:1000px}
    .built-card-inner{position:relative;border-radius:16px;overflow:hidden;background:#111;border:1px solid rgba(255,255,255,.08);transition:transform .25s ease,box-shadow .25s ease;transform-style:preserve-3d;will-change:transform}
    .built-card-inner:hover{box-shadow:0 25px 50px rgba(0,0,0,.45)}
    .built-card-inner img{width:100%;display:block;aspect-ratio:16/10;object-fit:cover;object-position:top}
    .built-card-caption{display:flex;align-items:center;justify-content:space-between;padding:14px 4px 0}
    .built-card-caption span{font-weight:700;color:#fff}
    .built-card-caption svg{width:16px;height:16px;color:rgba(255,255,255,.6);transition:transform .2s ease,color .2s ease}
    .built-card:hover .built-card-caption svg{transform:translate(2px,-2px);color:#a855f7}

    @media (max-width:900px){
      .built-showcase .container{grid-template-columns:1fr}
      .built-showcase-head{position:static}
      .built-grid{grid-template-columns:1fr}
    }
  </style>
  <div class="container">
    <div class="built-showcase-head reveal">
      <span class="eyebrow">YES, WE BUILT THESE</span>
      <h2>A glimpse into the web design work we've shipped.</h2>
      <p>Real websites, real brands, real results — crafted for performance, clarity and premium aesthetics.</p>
    </div>
    <div class="built-grid">
      <?php
      $builtProjects = [
        ['img' => 'assets/images/portfolio/webui/web1.jpeg', 'name' => 'Paronama'],
        ['img' => 'assets/images/portfolio/webui/web2.jpeg', 'name' => 'Photos All'],
        ['img' => 'assets/images/portfolio/webui/web3.webp', 'name' => 'Artist Website'],
        ['img' => 'assets/images/portfolio/webui/web4.webp', 'name' => 'Organic Website'],
      ];
      foreach ($builtProjects as $p):
      ?>
      <a class="built-card reveal" href="portfolio.php">
        <div class="built-card-inner">
          <img src="<?=e($p['img'])?>" alt="<?=e($p['name'])?>" loading="lazy">
        </div>
        <div class="built-card-caption">
          <span><?=e($p['name'])?></span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M7 7h10v10"/></svg>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<script>
(function () {
  const cards = document.querySelectorAll('.built-card-inner');
  const MAX_TILT = 10;

  cards.forEach(function (el) {
    el.addEventListener('mousemove', function (e) {
      const rect = el.getBoundingClientRect();
      const x = (e.clientX - rect.left) / rect.width - 0.5;
      const y = (e.clientY - rect.top) / rect.height - 0.5;
      const rotateY = x * MAX_TILT * 2;
      const rotateX = -y * MAX_TILT * 2;
      el.style.transform = 'rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg) scale3d(1.03,1.03,1.03)';
    });

    el.addEventListener('mouseleave', function () {
      el.style.transform = 'rotateX(0deg) rotateY(0deg) scale3d(1,1,1)';
    });
  });
})();
</script>
<?php endif; ?>
<section class="dark-section"><div class="container"><div class="section-head"><div><span class="eyebrow">WHAT’S INCLUDED</span><h2>Focused capabilities, professionally delivered.</h2></div></div><div class="cards"><?php foreach($service['items'] as $item): ?><article class="service-card reveal"><div class="card-icon">✦</div><h3><?=e($item)?></h3><p>Tailored planning, creative development, refinement and delivery for your specific goals and platforms.</p></article><?php endforeach; ?></div></div></section>
<section><div class="container two-col"><div><span class="eyebrow">WHO IT’S FOR</span><h2>Built for brands, creators, authors, individuals and teams ready to improve their output.</h2></div><ul class="feature-list"><li>Startups launching a new idea</li><li>Creators building a stronger content system</li><li>Businesses refreshing their digital presence</li><li>Agencies needing reliable production support</li><li>Authors, publishers and individuals developing visual assets</li></ul></div></section>
<section><div class="container"><div class="section-head"><div><span class="eyebrow">PROCESS</span><h2>A simple path from brief to delivery.</h2></div></div><div class="process-steps">
  <?php 
  $steps = [
    ['01', 'Brief', 'Clear briefing and goal setting to define the creative direction.'],
    ['02', 'Direction', 'Developing concepts, moodboards, and style frames for approval.'],
    ['03', 'Production', 'Executing the design, animation, edits, or development assets.'],
    ['04', 'Review', 'Iterating and refining the assets through focused review rounds.'],
    ['05', 'Delivery', 'Delivering clean, organized final files optimized for launch.']
  ];
  foreach($steps as $s): 
  ?>
  <article class="process-node reveal"><div class="step-top"><b><?=$s[0]?></b><span class="step-line"></span></div><h3><?=e($s[1])?></h3><p><?=e($s[2])?></p></article>
  <?php endforeach; ?>
</div></div></section>
<?php if ($slug === 'ai-search-optimization'): ?>
<section><div class="container"><div class="section-head"><div><span class="eyebrow">READY TO DOMINATE THE FUTURE OF SEARCH?</span><h2>Don't let AI search engines leave your brand behind.</h2></div></div><div class="btn-group" style="display:flex; gap:16px; flex-wrap:wrap; justify-content:center;"><button class="btn btn-primary" data-popup-open>Get Started with GEO <span>↗</span></button><a class="btn btn-secondary" href="contact.php">Schedule a Strategy Call <span>↗</span></a></div></div></section>
<?php endif; ?>
<?php include 'includes/footer.php'; ?>