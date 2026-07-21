<?php
function e(string $value): string { return htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); }
function url(string $path=''): string { return rtrim(SITE_URL,'/').'/'.ltrim($path,'/'); }
function csrf_token(): string {
 if (empty($_SESSION['csrf_token'])) { $_SESSION['csrf_token'] = bin2hex(random_bytes(32)); }
 return $_SESSION['csrf_token'];
}
function is_active(string $file): string { return basename($_SERVER['PHP_SELF'] ?? '') === $file ? 'is-active' : ''; }
