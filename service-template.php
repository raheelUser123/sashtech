<?php
require_once 'includes/config.php';require_once 'includes/data.php';
$slug=$serviceSlug??'';$service=$services[$slug]??null;if(!$service){http_response_code(404);include '404.php';exit;}
$pageTitle=$service['title'].' | Sash Tech';$pageDescription=$service['short'];include 'includes/header.php';
?>
<section class="page-hero">
  <div class="container two-col">
    <div>
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="services.php">Services</a> / <?=e($service['title'])?></div>
      <span class="eyebrow">SPECIALIST SERVICE</span>
      <h1><?=e($service['title'])?></h1>
      <p><?=e($service['short'])?></p>
      <button class="btn btn-primary" data-popup-open>Request a Quote <span>↗</span></button>
    </div>
    <?php if (!empty($service['image'])): ?>
    <div class="reveal">
      <img src="assets/images/newimages/<?=e($service['image'])?>" alt="<?=e($service['title'])?>" style="width: 100%; max-width: 500px; border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.1); box-shadow: 0 20px 40px rgba(0,0,0,0.3); display: block; margin: 0 auto;">
    </div>
    <?php endif; ?>
  </div>
</section>
<section><div class="container two-col"><div class="reveal"><span class="eyebrow">OVERVIEW</span><h2>Creative execution built around your objective.</h2></div><div class="reveal"><p>Every <?=strtolower(e($service['title']))?> project begins with a clear understanding of the audience, platform, message and desired outcome. We then shape the right creative direction, production workflow and delivery format.</p><p>You receive a defined scope, transparent revision process and assets prepared for practical use.</p></div></div></section>
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
<section><div class="container faq"><div class="section-head"><div><span class="eyebrow">SERVICE FAQ</span><h2>Common questions.</h2></div></div><?php foreach(['What do you need from me to start?'=>'A short brief, references, goals, timeline and any existing brand assets are usually enough to begin.','How long does a project take?'=>'Timelines depend on complexity and are confirmed before work starts.','Are revisions included?'=>'Yes. The number of included revision rounds is defined in the proposal.'] as $q=>$a): ?><div class="faq-item"><button class="faq-button" aria-expanded="false"><?=$q?><span>+</span></button><div class="faq-panel"><p><?=$a?></p></div></div><?php endforeach; ?></div></section>
<?php include 'includes/footer.php'; ?>
