<section class="yt-video-section">
  <style>
    .yt-video-section{padding:80px 0}
    .yt-video-grid{display:grid;grid-template-columns:1fr 1fr;gap:40px;align-items:center}
    .yt-copy .eyebrow{color:#a855f7;font-weight:800;letter-spacing:1px}
    .yt-copy h2{font-size:clamp(28px,3.6vw,40px);margin:12px 0}
    .yt-copy p{color:rgba(255,255,255,.85);line-height:1.6;margin-bottom:18px}

    .yt-media{display:flex;align-items:center;justify-content:center}
    .yt-phone{
      width:320px;height:568px;border-radius:28px;overflow:hidden;
      border:10px solid #0b0b0f;background:#000;box-shadow:0 30px 70px rgba(0,0,0,.5);
      display:flex;align-items:center;justify-content:center;position:relative
    }
    .yt-phone .yt-video-el{height:100%;width:auto;display:block;object-fit:cover}

    .yt-video-overlay{position:absolute;inset:0;display:flex;align-items:center;justify-content:center;pointer-events:none}
    .yt-video-play{width:70px;height:70px;border-radius:50%;background:rgba(255,255,255,.12);display:flex;align-items:center;justify-content:center;pointer-events:auto;border:1px solid rgba(255,255,255,.18);}
    .yt-video-play svg{width:26px;height:26px;color:#fff}

    /* Reveal animation */
    .reveal{opacity:0;transform:translateY(24px);transition:opacity .7s ease,transform .7s ease}
    .reveal.in-view{opacity:1;transform:none}

    @media (max-width:900px){
      .yt-video-grid{grid-template-columns:1fr;gap:28px}
      .yt-phone{width:90%;height:50vh}
    }
  </style>

  <div class="container">
    <div class="yt-video-grid">
      <div class="yt-copy reveal" id="ytCopy">
        <span class="eyebrow">YOUTUBE & CREATOR GROWTH</span>
        <h2>Better video, smarter strategy — grow your channel.</h2>
        <p>We craft YouTube-ready edits, thumbnails, and channel strategies that turn viewers into subscribers. See a captured moment from our process below.</p>
        <div style="display:flex;gap:12px;flex-wrap:wrap;margin-top:10px">
          <button class="btn btn-primary" data-popup-open>Start a Project <span>↗</span></button>
          <a class="btn btn-outline" href="creator-growth-youtube-strategy.php">See Service <span>→</span></a>
        </div>
      </div>

      <div class="yt-media reveal" id="ytMedia">
        <div class="yt-phone" id="ytPhone">
          <video class="yt-video-el" id="ytVideoEl" muted playsinline preload="metadata" loop>
            <source src="assets/images/createyoutube-growthvideo/video-shot.mp4" type="video/mp4">
          </video>
          <div class="yt-video-overlay">
            <button class="yt-video-play" id="ytPlayBtn" aria-label="Play video">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
  (function(){
    const media = document.getElementById('ytMedia');
    const copy  = document.getElementById('ytCopy');
    const phone = document.getElementById('ytPhone');
    const video = document.getElementById('ytVideoEl');
    const play  = document.getElementById('ytPlayBtn');
    if (!video) return;

    // IntersectionObserver for reveal
    const io = new IntersectionObserver(entries=>{
      entries.forEach(entry=>{
        if (entry.isIntersecting){
          entry.target.classList.add('in-view');
        }
      });
    }, {threshold:0.25});
    io.observe(media);
    io.observe(copy);

    // Ensure portrait video looks good: use height, keep width auto
    function fitPortrait(){
      // CSS handles sizing; ensure video is paused by default
      video.pause(); video.muted = true; video.currentTime = 0;
    }
    fitPortrait();

    // Play/pause on click
    play.addEventListener('click', function(e){
      e.preventDefault();
      if (video.paused){ video.muted = false; video.play().catch(()=>{}); play.style.opacity = 0; }
      else { video.pause(); video.currentTime = 0; play.style.opacity = 1; }
    });

    // Pause when leaving viewport
    const ioPause = new IntersectionObserver(entries=>{
      entries.forEach(entry=>{
        if (!entry.isIntersecting){ video.pause(); video.currentTime = 0; play.style.opacity = 1; }
      });
    }, {threshold:0});
    ioPause.observe(phone);

    // On small screens, tapping phone toggles play
    phone.addEventListener('click', function(){
      if (window.innerWidth <= 900){ play.click(); }
    });
  })();
  </script>
</section>