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

- **_index.html_** – Fallback template for all content
- **_single.html_** – Default template for single posts
- **_page.html_** – Default template for static pages
- **_page-front.html_** – Custom template for the homepage
- **_archive.html_** – Template for archives (categories, etc.)
- **_search.html_** – Search results template
- **_404.html_** – Template for not found pages
- **_blank.html_** – A completely empty canvas (no header/footer)
- **_no-title.html_** – Template without the post/page title

### Template Parts

- **_header.html_** – Site header
- **_footer.html_** – Site footer

### Block Patterns

- **_footer-default.php_** – Default footer block layout
- **_general-heading.php_** – Standalone heading block
- **_header-default.php_** – Default header block layout
- **_hero-cover.php_** – Fullscreen hero section with background image
- **_posts-featured.php_** – Sticky post followed by grid layout
- **_posts-gallery.php_** – Grid of image-focused posts
- **_posts-grid.php_** – Standard post grid
- **_posts.php_** – Classic post list layout
- **_posts.related.php_** – Related post suggestions

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

For detailed contribution guidelines, see [CONTRIBUTING.md](CONTRIBUTING.md).

> Shanti follows the official [WordPress Coding Standards](https://developer.wordpress.org/coding-standards/).

---

## Changelog

<details><summary>Click to expand</summary>

### 0.2.0 (2026-01-23)

**New Features:**
- Added default featured image fallback with diagonal stripe pattern
- Added gallery and related posts patterns
- Added font pairing support with multiple typography presets
- Added variable font files (Crimson Pro, Open Sans, Montserrat, Playfair Display)

**Improvements:**
- Implemented standardized cross-theme font size system (7-size scale)
- Consolidated spacing system to 7 semantic presets
- Refined footer pattern with spacing presets
- Refined posts grid layouts and styling
- Updated templates to use semantic spacing presets
- Styled tag cloud with hashtag prefix and improved typography
- Increased wide layout width and added new accent color

**Bug Fixes:**
- Fixed spacing consistency in post grid patterns
- Fixed duplicate wrapper in front page template
- Fixed FSE editor issues in multiple patterns

### 0.1.0 (2025-07-18)

- Work in progress – more updates coming soon

### 0.0.1 (2021-12-29)

- Initial release (based on Twenty Twenty-Two)

</details>
