<?php
require_once __DIR__.'/config.php';require_once __DIR__.'/functions.php';require_once __DIR__.'/data.php';
$pageTitle=$pageTitle??SITE_NAME.' | Creative Digital Agency';$pageDescription=$pageDescription??'Creative design, animation, video, web, SEO and digital marketing services.';$pagePath=$pagePath??basename($_SERVER['PHP_SELF']??'index.php');$canonical=url($pagePath==='index.php'?'':$pagePath);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?=e($pageTitle)?></title>
    <meta name="description" content="<?=e($pageDescription)?>">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="<?=e($canonical)?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?=e($pageTitle)?>">
    <meta property="og:description" content="<?=e($pageDescription)?>">
    <meta property="og:url" content="<?=e($canonical)?>">
    <meta property="og:image" content="<?=e(url('assets/images/logo.webp'))?>">
    <meta name="twitter:card" content="summary_large_image">
   <!-- Favicon with Brand Title -->
    <link rel="icon" type="image/png" sizes="48x48" href="<?=e(url('assets/images/favicon.png'))?>" title="Sash Tech Favicon">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=e(url('assets/images/favicon.png'))?>" title="Sash Tech Logo">

    <!-- Schema for Brand Name (Google ko brand name confirmation dene ke liye) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "name": "Sash Tech",
      "url": "https://sashtech.digital/"
    }
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css?v=20260713-3">
    <script defer src="assets/js/main.js?v=20260713-3"></script>
</head>
<body><a class="skip-link" href="#main">Skip to content</a>
    <header class="site-header" id="siteHeader">
        <div class="container nav-wrap"><a class="brand" href="/"><img src="assets/images/logo.webp"
                    alt="Sash Tech logo"></a><button
                class="nav-toggle" aria-expanded="false" aria-controls="mainNav"
                aria-label="Open menu"><span></span><span></span><span></span></button>
            <nav class="main-nav" id="mainNav" aria-label="Primary navigation"><a class="<?=is_active('/')?>"
                    href="/">Home</a><a class="<?=is_active('about.php')?>" href="about.php">About</a>
                <div class="nav-dropdown"><button aria-expanded="false">Services <span class="nav-chevron"
                            aria-hidden="true"></span></button>
                    <div class="dropdown-menu"><a href="services.php">All
                            Services</a><?php foreach($services as $navSlug=>$s): ?><a
                            href="<?=$navSlug?>.php"><?=e($s['title'])?></a><?php endforeach; ?></div>
                </div><a class="<?=is_active('portfolio.php')?>" href="portfolio.php">Portfolio</a><a
                    class="<?=is_active('pricing.php')?>" href="pricing.php">Pricing</a><a
                    class="<?=is_active('contact.php')?>" href="contact.php">Contact</a><button
                    class="btn btn-primary nav-cta start-cta" data-popup-open>Start a Project <span class="btn-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M14 3h7v7"/><path d="M10 14L21 3"/></svg></span></button>
            </nav>
        </div>
    </header>
    <main id="main">