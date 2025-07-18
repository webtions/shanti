# Shanti

A purpose-built block theme for personal blogs, built around portrait featured images and crafted for calm, readable storytelling.

![Shanti WordPress blog theme](https://github.com/webtions/shanti/blob/main/screenshot.jpg)

---

## About

Shanti is a minimalist block-based WordPress theme designed for personal blogging. It embraces Full Site Editing and is built entirely with blocks, giving you full control over your layout while staying out of the way of your content.

The theme is designed around portrait featured images, with careful typography and generous spacing that supports focused, distraction-free storytelling.

> Developed and maintained by [Themeist](https://themeist.com)

---

## Demo

🔗 [shanti.themeist.com](https://shanti.themeist.com/) _(coming soon)_

---

## Features

- Built around portrait featured images
- Designed for personal blogs, travel logs, and life journals
- Minimal layout with generous spacing and clean typography
- Full Site Editing support with custom templates and block patterns
- Includes Blank and No-Title templates for special use cases

---

## What’s Included

The theme includes a set of templates, reusable parts, and block patterns designed to help you build a personal blog quickly and beautifully.

### Templates

| Template          | Description                                  |
| ----------------- | -------------------------------------------- |
| `index.html`      | Fallback template for all content            |
| `single.html`     | Default template for single posts            |
| `page.html`       | Default template for static pages            |
| `page-front.html` | Custom template for the homepage             |
| `archive.html`    | Template for archives (categories, etc.)     |
| `search.html`     | Search results template                      |
| `404.html`        | Template for not found pages                 |
| `blank.html`      | A completely empty canvas (no header/footer) |
| `no-title.html`   | Template without the post/page title         |

### Template Parts

| Template Part | Purpose     |
| ------------- | ----------- |
| `header.html` | Site header |
| `footer.html` | Site footer |

### Block Patterns

| Pattern File          | Description                                   |
| --------------------- | --------------------------------------------- |
| `footer-default.php`  | Default footer block layout                   |
| `general-heading.php` | Standalone heading block                      |
| `header-default.php`  | Default header block layout                   |
| `hero-cover.php`      | Fullscreen hero section with background image |
| `posts-featured.php`  | Sticky post followed by grid layout           |
| `posts-gallery.php`   | Grid of image-focused posts                   |
| `posts-grid.php`      | Standard post grid                            |
| `posts.php`           | Classic post list layout                      |
| `posts.related.php`   | Related post suggestions                      |

---

## Requirements

- WordPress 6.7 or higher
- PHP 7.4 or later
- Modern browser with CSS Grid support
- License: [GPLv3 or later](https://www.gnu.org/licenses/gpl-3.0.en.html)

---

## Installation

Download and activate like any standard WordPress theme.

### Latest Version

- [Download shanti-0.1.0.zip](https://github.com/webtions/shanti/releases/latest)

Or clone the repo:

```bash
git clone https://github.com/webtions/shanti.git wp-content/themes/shanti
```

Then activate it via **Appearance → Themes** in your WordPress dashboard.

---

## Development Setup

To contribute, test, or lint the theme:

```bash
composer install
```

Run a PHP syntax check:

```bash
composer lint
```

Check for WordPress Coding Standards violations:

```bash
composer standards:check
```

Automatically fix fixable code style issues:

```bash
composer standards:fix
```

Run static analysis:

```bash
composer analyze
```

You can also run preconfigured tasks using VS Code. See `.vscode/tasks.json` for task definitions. Keyboard shortcuts need to be set manually.

For detailed contribution guidelines, see [CONTRIBUTING.md](CONTRIBUTING.md).

> Shanti follows the official [WordPress Coding Standards](https://developer.wordpress.org/coding-standards/).

---

## Changelog

<details><summary>Click to expand</summary>

### 0.1.0 (2025-07-18)

- Rebuilt as a full block theme
- New pattern system
- Template and layout improvements
- Renamed theme to Shanti

### 0.0.1 (2021-12-29)

- Initial release (based on Twenty Twenty-Two)

</details>
