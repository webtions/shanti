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
- **_single-standard.html_** – Alternative single post layout with center-aligned wide featured image
- **_page.html_** – Default template for static pages
- **_page-transparent-header.html_** – Page template with transparent header (any page or post)
- **_page-sidebar.html_** – Page template with sidebar
- **_page-no-title.html_** – Template without the post/page title
- **_search.html_** – Search results template
- **_404.html_** – Template for not found pages
- **_blank.html_** – A completely empty canvas (no header/footer)

### Template Parts

- **_header.html_** – Site header
- **_footer.html_** – Site footer
- **_sidebar.html_** – Sidebar (used by page-sidebar template)

### Block Patterns

- **_header.php_** – Default header block layout
- **_header-top-bar.php_** – Header with top bar
- **_footer.php_** – Default footer block layout
- **_footer-columns.php_** – Footer with columns
- **_footer-columns-background.php_** – Footer with columns and background
- **_footer-background.php_** – Footer with background
- **_hero-cover.php_** – Fullscreen hero section with background image
- **_page-home.php_** – Home page content (hero, posts showcase, grid)
- **_post-navigation.php_** – Previous/next post links
- **_post-share.php_** – Social sharing section for single posts
- **_comments.php_** – Comments list, pagination, and comment form
- **_posts-showcase.php_** – Featured post and grid
- **_posts-latest.php_** – Latest posts in a 3-column grid (no pagination)
- **_posts-list.php_** – Classic post list
- **_posts-grid.php_** – Default query loop (3-column grid)
- **_posts-related.php_** – Related post suggestions

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

- [Download Shanti](https://github.com/webtions/shanti/releases/latest)

Or clone the repo:

```bash
git clone https://github.com/webtions/shanti.git wp-content/themes/shanti
```

Then activate it via **Appearance → Themes** in your WordPress dashboard.

---

## Development Setup

<details><summary>Click to expand</summary>

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

</details>

---

## Changelog

<details><summary>Click to expand</summary>

### 0.4.0 (2026-02-27)

**New Features:**

- Added dedicated home and archive templates that use the posts-grid pattern for the main blog listing
- Added hidden-blog-heading pattern so the index template has an accessible blog heading without changing the visual layout
- Introduced additional query layouts: posts-stacked, posts-list-compact, posts-latest (three-column latest posts without pagination), and refined posts-list

**Improvements:**

- Simplified the index template and aligned home, archive, and search templates around shared query patterns and consistent site-content spacing
- Updated query patterns to use the core posts pattern category where appropriate for better discoverability in the inserter
- Standardized pagination wrappers with a query-pagination group and wavy separator styling across grid and list layouts
- Tweaked theme.json to remove a post-template grid align-items override and improved term-description spacing and typography

**Bug Fixes:**

- Hide the query pagination wrapper when there is only a single page of results by adding a body class and CSS rule, reducing visual noise on small archives

### 0.3.0 (2026-02-20)

**New Features:**

- Added page template without title (page-no-title) and page with sidebar template
- Added sidebar template part and hidden-sidebar pattern
- Added header pattern with top bar and footer variants (footer-columns, footer-columns-background, footer-background)
- Added post-navigation and Share Post patterns; single template uses both
- Added comments pattern (list, pagination, comment form) and single-standard template
- Added page-home pattern for front page; front page now uses pattern instead of dedicated template
- Added hidden patterns for 404, post meta, section header, and sidebar
- Added Recommended Plugins page under Appearance
- Added ghost button style, wavy separator mask style, and icon system
- Applied default featured image only to posts, not pages

**Improvements:**

- Refactored theme.json to preset/custom shorthand; primary/secondary font slugs, root padding, image lightbox
- Refined style.css: link thickness and offset, :focus-visible, text-wrap, navigation outline, hero padding, admin bar variable
- Centralized featured image, date, category, and tag styling in theme.json
- Single template: 2-column header (title/date + image), separators around navigation, comments pattern
- Search template: query title, search form, posts-list pattern
- Unified post meta (date + terms) via hidden-post-meta pattern across grid, query loop, showcase, and related
- Set excerpt length to 34 words in post patterns; category above title, tags below content
- Renamed and aligned pattern slugs and headers (footer.php, header.php, post-share, etc.)
- Made pattern strings translation-ready (esc_html_x, translatable labels)
- Normalized spacing with numeric presets and consistent main wrapper across templates
- Simplified theme setup and dev tooling (composer, PHPCS, PHPStan, EditorConfig, Prettier)

**Removed:**

- Archive template; general-heading and legacy post patterns removed or renamed

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
