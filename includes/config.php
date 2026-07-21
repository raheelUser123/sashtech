<?php
declare(strict_types=1);
if (session_status() !== PHP_SESSION_ACTIVE) { session_start(); }

define('SITE_NAME', 'Sash Tech');
define('SITE_TAGLINE', 'Your Edge Design');
define('SITE_URL', 'https://sashtech.digital');
define('CONTACT_EMAIL', 'contact@sashtech.digital');
define('CONTACT_PHONE', '+1 000 000 0000');
define('CONTACT_ADDRESS', 'Office fivestar block L');

define('SMTP_HOST', 'sashtech.digital');
define('SMTP_PORT', 465);
define('SMTP_USERNAME', 'contact@sashtech.digital');
define('SMTP_PASSWORD', 'SashDigital123!@#');
define('SMTP_ENCRYPTION', 'ssl'); // ssl for 465, tls for 587
define('MAIL_FROM_EMAIL', 'contact@sashtech.digital');
define('MAIL_FROM_NAME', 'Sash Tech');
define('MAIL_TO_EMAIL', 'contact@sashtech.digital');
define('MAIL_TO_NAME', 'Sash Tech');

date_default_timezone_set('UTC');
