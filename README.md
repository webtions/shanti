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

<table>
  <thead>
    <tr>
      <th style="width: 200px;">Template</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr><td><code>index.html</code></td><td>Fallback template for all content</td></tr>
    <tr><td><code>single.html</code></td><td>Default template for single posts</td></tr>
    <tr><td><code>page.html</code></td><td>Default template for static pages</td></tr>
    <tr><td><code>page-front.html</code></td><td>Custom template for the homepage</td></tr>
    <tr><td><code>archive.html</code></td><td>Template for archives (categories, etc.)</td></tr>
    <tr><td><code>search.html</code></td><td>Search results template</td></tr>
    <tr><td><code>404.html</code></td><td>Template for not found pages</td></tr>
    <tr><td><code>blank.html</code></td><td>A completely empty canvas (no header/footer)</td></tr>
    <tr><td><code>no-title.html</code></td><td>Template without the post/page title</td></tr>
  </tbody>
</table>

### Template Parts

<table>
  <thead>
    <tr>
      <th style="width: 200px;">Template Part</th>
      <th>Purpose</th>
    </tr>
  </thead>
  <tbody>
    <tr><td><code>header.html</code></td><td>Site header</td></tr>
    <tr><td><code>footer.html</code></td><td>Site footer</td></tr>
  </tbody>
</table>

### Block Patterns

<table>
  <thead>
    <tr>
      <th style="width: 200px;">Pattern File</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr><td><code>footer-default.php</code></td><td>Default footer block layout</td></tr>
    <tr><td><code>general-heading.php</code></td><td>Standalone heading block</td></tr>
    <tr><td><code>header-default.php</code></td><td>Default header block layout</td></tr>
    <tr><td><code>hero-cover.php</code></td><td>Fullscreen hero section with background image</td></tr>
    <tr><td><code>posts-featured.php</code></td><td>Sticky post followed by grid layout</td></tr>
    <tr><td><code>posts-gallery.php</code></td><td>Grid of image-focused posts</td></tr>
    <tr><td><code>posts-grid.php</code></td><td>Standard post grid</td></tr>
    <tr><td><code>posts.php</code></td><td>Classic post list layout</td></tr>
    <tr><td><code>posts.related.php</code></td><td>Related post suggestions</td></tr>
  </tbody>
</table>

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
