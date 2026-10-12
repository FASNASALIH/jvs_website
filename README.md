# JVS Website

Website for **JVS (Jyoshna's Versatile Stability)**, built as a standard Laravel application with Blade templates and a blue-and-black design.

**Pages:** Home, About Us, Our Services, Our Businesses, Contact.
All content comes from the JVS brochure, and the site needs no database.

## Requirements

- PHP 8.2 or newer (with the usual Laravel extensions: `mbstring`, `openssl`, `pdo`, `tokenizer`, `xml`, `ctype`, `json`, `fileinfo`)
- [Composer](https://getcomposer.org/) 2.x
- An internet connection in the browser (the pages load the Manrope font and the Lucide icon library from CDNs)

## Quick start

From the project folder:

```bash
composer setup
php artisan serve
```

Open http://127.0.0.1:8000

`composer setup` runs `composer install`, creates your `.env` file and generates the application key. If you prefer to do it by hand:

```bash
composer install

# macOS / Linux
cp .env.example .env
# Windows (Command Prompt)
copy .env.example .env

php artisan key:generate
php artisan serve
```

## Routes

| URL | Name | Page |
|-----|------|------|
| `/` | `home` | Home |
| `/about` | `about` | About Us |
| `/services` | `services` | Our Services |
| `/businesses` | `businesses` | Our Businesses |
| `/contact` | `contact` | Contact (optional `?service=Name` pre-selects the enquiry type) |

List them any time with `php artisan route:list`.

## Project structure

```
app/Http/Controllers/PageController.php   One method per page
config/jvs.php                            Site content: contact details, nav, services, businesses
routes/web.php                            The five page routes
resources/views/
    layouts/app.blade.php                 Shared HTML shell, fonts, scripts
    pages/                                home, about, services, businesses, contact
    partials/                             header, footer, brand (logo), service grid, business grid, call-to-action band
    components/                           button, eyebrow, page-intro, reveal (scroll animation)
public/
    css/app.css                           All styling
    js/app.js                             Menu, scroll progress, reveal animations, contact form
    images/                               JVS logo (jvs-logo.png) and photos taken from the brochure
tests/Feature/PagesTest.php               Smoke tests for every page
```

## Editing content

- **Phone, email, address, website, navigation, services, businesses, domains:** `config/jvs.php`. Changes appear on every page that uses them.
- **Page text and layout:** `resources/views/pages/`.
- **Header, footer and repeated blocks:** `resources/views/partials/`.
- **Logo:** `public/images/jvs-logo.png`, shown through `resources/views/partials/brand.blade.php`. Its size is set by `.brand-logo` in `public/css/app.css`.
- **Colours, spacing and typography:** `public/css/app.css`.
- **Images:** replace files in `public/images/`, keeping the same file names (or update the paths in `config/jvs.php`).

## Content sources

### Brochure content used

| Brochure content | Where it appears on the site |
|---|---|
| Phone, email, website, address (Visakhapatnam, 530022) | Contact page, footer (from `config/jvs.php`) |
| Tagline "Driving Success Through Education, Events & Innovation" | Home hero text, footer |
| About Us paragraphs ("growing business group driven by innovation, vision, and versatility" and "We create and develop ventures...") | Home, About, Businesses page intro |
| The 6 focus areas (Event Management, Career Placements, Startup Entrepreneurship, Technology Innovation, Company Registrations, Hospitality) | About page |
| Both "Our Perspective" quotes, with Jyoshna Yellapu and Vahid Shaik and their titles | About page, word for word |
| "How We Serve" intro and all 8 services with their tags | Services page, Home |
| The 6 business tiles (JVS, JVS Tech, Jyoora Events, Versatile Academy, VexoBiz, Signature Stays) | Businesses page, Home, venture strip |
| JVS logo | Header, footer, browser tab icon |
| Photos: laptop photo (hero) and the six business photos | `public/images/` (the original images embedded in the brochure) |

### Brochure content not used

- The "Scan to Explore" QR code (the brochure only has a blank placeholder box there).
- The circuit-board chip photo.
- The taglines printed inside the business photos, for example "Turning Moments into Memorable Experiences" (Jyoora) and "From Idea to Impact" (VexoBiz). They appear in the images but not as page text.

### Not in the brochure (written or inferred)

- **Headings and button text:** for example "One vision. Versatile possibilities.", "Different expertise. One purpose: your growth.", "Every opportunity starts with a conversation.", "Let's Connect", "A vision beyond boundaries", "Let's create what's next."
- **Business categories:** the label under each business (JVS Tech = Technology & Innovation, VexoBiz = Business & Consulting, and so on) is matched by the site author, not stated in the brochure.
- **Name spelling:** the site writes "JVSTech" as one word, while the brochure image shows "JVS Tech".
- **Email address:** the brochure prints `gmail..com` with a double dot. The site uses the single-dot `jvsacademyofficial@gmail.com`.
- **Contact form:** not in the brochure. It only opens the visitor's email app.

### External data

- **About JVS:** none is used. One public search found only unrelated results.
- **Technical resources loaded from the internet:** the Manrope font (Google Fonts) and the Lucide icon library (`unpkg.com`). These are design tools, not information.

### Check of the live website (www.jvsacademy.com, 10 Oct 2026)

The live site was read but **none of its content is used**, because it differs from the brochure. It describes the company as "Versatile Stability Academy Private Limited", calls JVS "India's Trusted Learning & Events Platform", and lists four ventures that do not appear in the brochure: Learnix (academic projects, placement training), Startix (registration, web design, branding), Sparkix (events) and Growix (placements, career counselling). The brochure's ventures (JVS Tech, Jyoora Events, Versatile Academy, VexoBiz, Signature Stays) are not listed there.

## Contact form

The form does not send mail from the server. It opens the visitor's email app with a pre-filled message addressed to the email in `config/jvs.php`, so no mail configuration is needed. If you later want server-side sending, add a `POST` route and a controller method, configure the `MAIL_*` values in `.env`, and send with Laravel's `Mail` facade.

## Tests

```bash
composer test
```

This runs the smoke tests in `tests/Feature/PagesTest.php`, which check that every page loads and that unknown URLs return 404.

## Deployment

1. Point the web server's document root at the `public/` folder, never at the project root.
2. On the server, install production dependencies:
   ```bash
   composer install --no-dev --optimize-autoloader
   ```
3. Create `.env` from `.env.example` and set:
   ```
   APP_ENV=production
   APP_DEBUG=false
   APP_URL=https://your-domain.example
   ```
   then run `php artisan key:generate`.
4. Optionally cache for speed:
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```
5. Make sure `storage/` and `bootstrap/cache/` are writable by the web server user.

After changing `.env` or `config/jvs.php` on a server where config is cached, run `php artisan config:clear` (or `config:cache` again).

## Troubleshooting

| Problem | Fix |
|---------|-----|
| `Failed opening required '.../vendor/autoload.php'` | Run `composer install`. |
| "No application encryption key has been specified" | Run `php artisan key:generate` (and make sure `.env` exists). |
| Icons or font missing | The pages load the Lucide icons and Manrope font from the internet; check the connection. |
| Blank page or 500 error | Set `APP_DEBUG=true` in `.env` locally, or read `storage/logs/laravel.log`. |
| Changes to config not showing | Run `php artisan config:clear`. |

## Framework

Built on Laravel 12 (`laravel/framework ^12.0` in `composer.json`). See the [Laravel documentation](https://laravel.com/docs) for everything else.