# Shanti

A minimalist, purpose-built blogging theme for WordPress, built to fully embrace Full Site Editing.

![Shanti WordPress blog theme](https://github.com/webtions/shanti/blob/main/screenshot.jpg)

---

## About

Shanti is an experimental block-based theme that takes advantage of the latest Full Site Editing (FSE) features in WordPress. Designed with a clean layout and plenty of white space, it aims to provide a distraction-free reading experience. Ideal for bloggers and minimalists.

> ✨ Developed and maintained by [Themeist](https://themeist.com)

---

## Demo

🔗 [shanti.themeist.com](https://shanti.themeist.com/)

---

## Requirements

- WordPress 6.0+
- PHP 7.4 or later
- Browser with modern CSS Grid + Flexbox support
- License: [GPLv3](http://www.gnu.org/licenses/gpl-3.0.html) or later

---

## Installation

Download and activate like any standard WordPress theme.

### Latest Version

- [Download shanti-0.0.1.zip](https://github.com/webtions/shanti/releases/download/0.0.1/shanti-0.0.1.zip)

Or clone the repo:

```bash
git clone https://github.com/webtions/shanti.git wp-content/themes/shanti
```

Then activate it via **Appearance → Themes** in your WordPress dashboard.

---

## Development Setup

To contribute or lint the theme:

### Install dependencies

```bash
composer install
```

### Run PHPCS

```bash
phpcs -d memory_limit=512M
```

Or run the preconfigured tasks using your preferred keybindings (e.g. you may assign `F6` for PHPCS, `Cmd + F6` for PHPCBF) via VS Code.

> See `.vscode/tasks.json` for task definitions. You’ll need to assign your own shortcuts in VS Code’s keyboard settings.

> Shanti follows the official [WordPress Coding Standards](https://developer.wordpress.org/coding-standards/).

---

## Changelog

<details><summary>Click to expand</summary>

### 0.0.2 (2022-01-09)

- Theme renamed to "Shanti"

### 0.0.1 (2021-12-29)

- Initial release based on Twenty Twenty-Two (TT2)

</details>
