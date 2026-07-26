<?php if (!empty($slug) && $slug === 'creator-growth-youtube-strategy'): ?>
<section class="yt-video-section">
  <style>
    .yt-video-section{padding:90px 0}
    .yt-video-frame{
      position:relative;width:100%;max-width:1100px;margin:0 auto;
      border-radius:28px;overflow:hidden;
      border:1px solid rgba(255,255,255,.1);
      box-shadow:0 30px 70px rgba(0,0,0,.5);
      background:#0a0a0e;
      aspect-ratio:16/9;
      opacity:0;transform:translateY(30px);
      transition:opacity .7s ease, transform .7s ease;
    }
    .yt-video-frame.in-view{opacity:1;transform:translateY(0)}
    .yt-video-el{width:100%;height:100%;object-fit:cover;display:block}

    .yt-video-play{
      position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);
      width:76px;height:76px;border-radius:50%;
      background:rgba(255,255,255,.12);backdrop-filter:blur(6px);
      border:1px solid rgba(255,255,255,.3);
      display:flex;align-items:center;justify-content:center;
      transition:opacity .3s ease, transform .3s ease;
      pointer-events:none;
    }
    .yt-video-play svg{width:26px;height:26px;color:#fff;margin-left:3px}
    .yt-video-frame:hover .yt-video-play{opacity:0;transform:translate(-50%,-50%) scale(.8)}
  </style>

  <div class="container">
    <div class="yt-video-frame reveal" id="ytVideoFrame">
      <video class="yt-video-el" id="ytVideoEl" muted loop playsinline preload="metadata">
        <source src="assets/images/createyoutube-growthvideo/video-shot.mp4" type="video/mp4">
      </video>
      <div class="yt-video-play">
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
      </div>
    </div>
  </div>
</section>
<script>
(function () {
  const frame = document.getElementById('ytVideoFrame');
  const video = document.getElementById('ytVideoEl');
  if (!frame || !video) return;

  // Play + unmute on hover, pause + reset + re-mute on leave
  frame.addEventListener('mouseenter', function () {
    video.muted = false;
    video.volume = 1;
    const p = video.play();
    if (p && typeof p.catch === 'function') p.catch(function () {});
  });
  frame.addEventListener('mouseleave', function () {
    video.pause();
    video.currentTime = 0;
    video.muted = true;
  });

  // Fade the whole frame in when scrolled into view, out when it leaves
  const io = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        frame.classList.add('in-view');
      } else {
        frame.classList.remove('in-view');
        video.pause();
        video.currentTime = 0;
      }
    });
  }, { threshold: 0.25 });

  io.observe(frame);
})();
</script>
<?php endif; ?>