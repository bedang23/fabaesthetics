# Deployment

How this project is deployed. The site lives on a git-based server: **push to GitHub, then pull on the server.**

## Coordinates

| What            | Value                                                        |
| --------------- | ----------------------------------------------------------- |
| Git remote      | `git@github.com:bedang23/fabaesthetics.git` (branch `main`) |
| Server SSH      | `ssh -p 65002 u885799198@46.202.161.164`                    |
| Server web root | `/home/u885799198/domains/fabaesthetics.in/public_html`     |
| Live URL        | https://fabaesthetics.in                                     |

> Credentials (SSH password, DB password) are **not** stored in the repo. Keep them
> in your own password manager / SSH key.

## Deploy workflow ("push to git and pull to the server")

After making and verifying a change locally:

**1. Push to GitHub (local machine):**

```bash
git add -A
git commit -m "Describe the change"
git push origin main
```

**2. Pull on the server:**

```bash
ssh -p 65002 u885799198@46.202.161.164
cd /home/u885799198/domains/fabaesthetics.in/public_html
git pull origin main
```

**3. Post-pull steps on the server — only when relevant:**

```bash
# only if composer.json / composer.lock changed (vendor/ is gitignored):
composer install --no-dev --optimize-autoloader

# only if new files were added under database/migrations:
php artisan migrate --force

# clear caches so the new code/views/config take effect:
php artisan config:clear
php artisan view:clear
php artisan cache:clear
```

For a plain change to Blade views, JS/CSS, or images, step 2 alone is enough
(optionally `php artisan view:clear`).

## Important: what is NOT pushed

`.gitignore` excludes these, so they are **never** overwritten by a deploy:

- **`.env`** — the server keeps its own `.env` (production **MySQL** credentials).
  Locally this file points at PostgreSQL; the two never collide because `.env`
  is not tracked. **Do not** copy your local `.env` to the server.
- **`/vendor`** and **`/node_modules`** — installed on the server via
  `composer install` (see above).
- Uploaded media under `public/images/` (admin uploads live on the server only).

## One-time server prerequisite

`git pull` on the server only works if `public_html` is a git clone of the repo.
If it is not yet a repo (deploys were manual before), initialise it once —
carefully, so existing `.env`, `vendor/`, and uploaded `public/images/` are kept:

```bash
cd /home/u885799198/domains/fabaesthetics.in/public_html
git init
git remote add origin git@github.com:bedang23/fabaesthetics.git
git fetch origin
git checkout -f main         # overwrites tracked files with the repo version;
                            # .env / vendor / node_modules are gitignored and preserved
```

The server needs an SSH deploy key (or HTTPS token) authorised on the GitHub repo
for `fetch`/`pull` to work non-interactively.

## Local database note

The production DB is **MySQL**; local dev uses **PostgreSQL 17**. Service and blog
content was imported from a server SQL dump. The app's content tables
(`services`, `blogs`, `contacts`, `forms`) are created by
`database/migrations/2025_02_18_000000_create_app_tables.php`, which is guarded with
`Schema::hasTable()` so running `php artisan migrate` on the server is a safe no-op.
