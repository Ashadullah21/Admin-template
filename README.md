# Ash Dashboard

A premium, developer-friendly admin dashboard template built with **Laravel 12**, **Bootstrap 5**, and modern web technologies.

![Ash Dashboard](https://img.shields.io/badge/version-1.2.0-blue) ![License](https://img.shields.io/badge/license-Commercial-orange) ![Laravel](https://img.shields.io/badge/Laravel-12.x-red) ![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-purple)

---

## Features

- 20+ pre-built dashboard pages (E-commerce, CRM, Analytics, HRM, Kanban, and more)
- Light & Dark mode with dynamic theme customizer
- Fully responsive — mobile-first with Bootstrap 5
- ApexCharts integration for data visualization
- Laravel 12 backend with Blade templating
- Clean, well-commented codebase

---

## Requirements

- PHP 8.2+
- Composer
- Node.js 18+
- npm

---

## Installation

```bash
# 1. Clone or extract the project
cd ash

# 2. Install PHP dependencies
composer install

# 3. Set up environment
cp .env.example .env
php artisan key:generate

# 4. Run migrations
php artisan migrate

# 5. Install and build frontend assets
npm install
npm run build

# 6. Serve the application
php artisan serve
```

Visit `http://localhost:8000` in your browser.

---

## File Structure

```
ash/
├── app/Http/Controllers/   # Dashboard page controllers
├── resources/
│   ├── views/
│   │   ├── layouts/        # Base layout (sidebar, nav)
│   │   └── dashboard/      # Individual page views
│   ├── css/                # Custom stylesheets
│   └── js/                 # Custom scripts
├── public/
│   ├── css/                # Compiled CSS
│   └── js/                 # Compiled JS
└── routes/web.php          # All route definitions
```

---

## Third-Party Credits

| Library | License | Used For |
|---|---|---|
| Laravel 12 | MIT | PHP Framework |
| Bootstrap 5.3 | MIT | UI Components |
| Bootstrap Icons 1.11 | MIT | Icon Set |
| ApexCharts | MIT | Charts & Graphs |
| Inter (Google Fonts) | OFL | Typography |
| TailwindCSS 4 | MIT | Utility CSS |
| DiceBear Avatars (avataaars style) | MIT | Placeholder Avatars |
| FlagCDN | Free | Country Flags |

---

## License

This is a **commercial template**. By purchasing a license you agree to the terms in [LICENSE.md](LICENSE.md).

**© 2026 Ash UI Framework. All rights reserved.**
