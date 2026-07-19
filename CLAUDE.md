# FABAesthetics — project notes for Claude

Laravel site for the FAB Aesthetics (Dr. Samreen Khan) skin & hair clinic.

## Deploy: "push to git and pull to the server"

When the user asks to deploy / "push and pull to the server", follow
**DEPLOYMENT.md**. Short version:

1. Local: `git add -A && git commit -m "..." && git push origin main`
2. Server: `ssh -p 65002 u885799198@46.202.161.164`, then
   `cd /home/u885799198/domains/fabaesthetics.in/public_html && git pull origin main`
3. On the server run `php artisan migrate --force` only if migrations changed,
   `composer install` only if composer files changed, then
   `php artisan config:clear && php artisan view:clear`.

Never commit `.env` (gitignored). The **server uses MySQL**; **local uses PostgreSQL** —
do not copy `.env` between them.

## Local dev

- Run: `php artisan serve` (PHP 8.4).
- DB: local PostgreSQL 17, database `u885799198_fabaesthetics`. App content tables are
  created by `database/migrations/2025_02_18_000000_create_app_tables.php`.
- Site logo: `public/assets/images/logo.png` (referenced by all layouts).
- Layouts: `resources/views/new-layout.blade.php` (primary) and `layout.blade.php`
  (used by `/about`, `/new-home`).
