<?php if (!empty($serviceSlug) && $serviceSlug === 'video-production-editing'): ?>
<section class="video-reel-section">
  <style>
    .video-reel-section{padding:90px 0;overflow:hidden}
    .video-reel-section .reveal{opacity:1 !important;transform:none !important}
    .video-reel-heading{text-align:center;margin-bottom:50px}
    .video-reel-heading .eyebrow{display:block;color:#a855f7;font-weight:800;letter-spacing:1px;font-size:20px;margin-bottom:6px}
    .video-reel-heading h2{font-size:clamp(36px,6vw,64px);font-weight:900;letter-spacing:1px;margin:0;background:linear-gradient(180deg,#ffffff 0%,#8a8a8a 100%);-webkit-background-clip:text;background-clip:text;color:transparent}

    .video-reel-marquee{position:relative;width:100%;-webkit-mask-image:linear-gradient(90deg,transparent 0,#000 6%,#000 94%,transparent 100%);mask-image:linear-gradient(90deg,transparent 0,#000 6%,#000 94%,transparent 100%)}
    .video-reel-row{display:flex;gap:20px;width:max-content}
    .video-reel-row + .video-reel-row{margin-top:20px}
    .video-reel-row.dir-left{animation:reelScrollLeft 40s linear infinite}
    .video-reel-row.dir-right{animation:reelScrollRight 40s linear infinite}
    .video-reel-marquee:hover .video-reel-row{animation-play-state:paused}

    .video-reel-card{flex:0 0 220px;position:relative;border-radius:18px;overflow:hidden;background:#111;aspect-ratio:9/16;border:1px solid rgba(255,255,255,.08)}
    .video-reel-video{width:100%;height:100%;object-fit:cover;display:block}

    @keyframes reelScrollLeft{from{transform:translateX(0)}to{transform:translateX(-50%)}}
    @keyframes reelScrollRight{from{transform:translateX(-50%)}to{transform:translateX(0)}}

    @media (max-width:768px){
      .video-reel-card{flex-basis:150px}
    }
  </style>
  <div class="container">
    <div class="video-reel-heading">
      <span class="eyebrow">SHORT FORM</span>
      <h2>CONTENT</h2>
    </div>

    <?php
    // Auto-detect every reel1.mp4, reel2.mp4, reel3.mp4 ... in assets/images/.
    // Just drop more reelN.mp4 files in there and they'll show up automatically.
    $reelFiles = [];
    $reelDir = __DIR__ . '/../assets/images/';
    if (is_dir($reelDir)) {
      $files = scandir($reelDir);
      if ($files !== false) {
        foreach ($files as $file) {
          if (preg_match('/^reel\d+\.mp4$/i', $file)) {
            $reelFiles[] = 'assets/images/' . $file;
          }
        }
      }
    }
    natsort($reelFiles);
    $reelFiles = array_values($reelFiles);
    if (empty($reelFiles)) {
      $reelFiles[] = 'assets/images/reel1.mp4';
    }

    $cardsPerRow = 9;
    $slotsPerRow = $cardsPerRow * 2; // doubled so the CSS loop (-50%) is seamless
    $total = count($reelFiles);
    ?>

    <div class="video-reel-marquee">
      <div class="video-reel-row dir-left">
        <?php for ($i = 0; $i < $slotsPerRow; $i++): $reel = $reelFiles[$i % $total]; ?>
          <article class="video-reel-card reveal">
            <video class="video-reel-video" muted loop playsinline autoplay preload="metadata">
              <source src="<?=e($reel)?>" type="video/mp4">
            </video>
          </article>
        <?php endfor; ?>
      </div>
      <div class="video-reel-row dir-right">
        <?php for ($i = 0; $i < $slotsPerRow; $i++): $reel = $reelFiles[($i + 1) % $total]; ?>
          <article class="video-reel-card reveal">
            <video class="video-reel-video" muted loop playsinline autoplay preload="metadata">
              <source src="<?=e($reel)?>" type="video/mp4">
            </video>
          </article>
        <?php endfor; ?>
      </div>
    </div>
  </div>
</section>
<script>
(function () {
  const cards = document.querySelectorAll('.video-reel-section .video-reel-card');
  cards.forEach(function (card) {
    const video = card.querySelector('.video-reel-video');
    if (!video) return;

    card.addEventListener('mouseenter', function () {
      video.muted = false;
      video.volume = 1;
      const p = video.play();
      if (p && typeof p.catch === 'function') p.catch(function () {});
    });

    card.addEventListener('mouseleave', function () {
      video.muted = true;
    });
  });
})();
</script>
<?php endif; ?>