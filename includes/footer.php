</main>
<section class="final-cta reveal"><div class="container"><div><span class="eyebrow">READY TO BUILD YOUR EDGE?</span><h2>Let’s turn your next idea into work people remember.</h2></div><button class="btn btn-light" data-popup-open>Start a Project <span class="btn-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M14 3h7v7"/><path d="M10 14L21 3"/></svg></span></button></div></section>
<footer class="site-footer"><div class="container footer-grid"><div><a class="brand footer-brand" href="index.php"><h2>Sash Tech</h2></a><p>Creative production, digital experiences and growth strategy under one roof.</p><div class="socials">
  <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" aria-label="Facebook" title="Facebook">
    <svg viewBox="0 0 24 24" fill="currentColor" width="18" height="18" aria-hidden="true"><path d="M22 12c0-5.522-4.477-10-10-10S2 6.478 2 12c0 4.991 3.657 9.128 8.438 9.879v-6.99H7.898v-2.89h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.462h-1.26c-1.243 0-1.63.772-1.63 1.562v1.874h2.773l-.443 2.89h-2.33v6.99C18.343 21.128 22 16.991 22 12z"/></svg>
  </a>
  <a href="https://www.instagram.com/sashtech.digital/" target="_blank" rel="noopener noreferrer" aria-label="Instagram" title="Instagram">
    <svg viewBox="0 0 24 24" fill="currentColor" width="18" height="18" aria-hidden="true"><path d="M7 2C4.243 2 2 4.243 2 7v10c0 2.757 2.243 5 5 5h10c2.757 0 5-2.243 5-5V7c0-2.757-2.243-5-5-5H7zm10 2c1.654 0 3 1.346 3 3v10c0 1.654-1.346 3-3 3H7c-1.654 0-3-1.346-3-3V7c0-1.654 1.346-3 3-3h10zm-5 3.5a4.5 4.5 0 1 0 0 9 4.5 4.5 0 0 0 0-9zm0 2a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5zm4.75-.75a1.25 1.25 0 1 0 0 2.5 1.25 1.25 0 0 0 0-2.5z"/></svg>
  </a>
  <a href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" title="LinkedIn">
    <svg viewBox="0 0 24 24" fill="currentColor" width="18" height="18" aria-hidden="true"><path d="M4.98 3.5C4.98 4.88 3.88 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1 4.98 2.12 4.98 3.5zM0 8.5h5V24H0V8.5zm7.5 0h4.77v2.16h.07c.66-1.25 2.27-2.57 4.68-2.57 5 0 5.92 3.29 5.92 7.57V24H17.5v-7.6c0-1.81-.03-4.15-2.53-4.15-2.53 0-2.92 1.98-2.92 4.02V24H7.5V8.5z"/></svg>
  </a>
</div></div><div><h3>Company</h3><a href="about.php">About</a><a href="portfolio.php">Portfolio</a><a href="pricing.php">Pricing</a><a href="contact.php">Contact</a></div><div><h3>Services</h3><?php foreach(array_slice($services,0,5,true) as $slug=>$s): ?><a href="<?=$slug?>.php"><?=e($s['title'])?></a><?php endforeach; ?></div><div><h3>Contact</h3><a href="mailto:<?=e(CONTACT_EMAIL)?>"><?=e(CONTACT_EMAIL)?></a><a href="tel:<?=e(CONTACT_PHONE)?>"><?=e(CONTACT_PHONE)?></a><a><?=e(CONTACT_ADDRESS)?></a></div></div><div class="container footer-bottom"><span>© 2022 Sash Tech. All rights reserved.</span><span><a href="privacy-policy.php">Privacy Policy</a> · <a href="terms-and-conditions.php">Terms & Conditions</a></span></div></footer>
<?php include __DIR__.'/popup.php'; ?>

<!-- WhatsApp Floating Button -->
<a class="whatsapp-float" href="https://wa.link/y70vqb" target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="28" height="28">
    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z"/>
  </svg>
  <span class="whatsapp-tooltip">Chat with us</span>
</a>

</body></html>
