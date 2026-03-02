=== Shanti ===
Contributors: hchouhan
Requires at least: 6.7
Tested up to: 6.8
Requires PHP: 7.4
Stable tag: 0.5.0
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.en.html

A minimalist purpose-built blog theme for WordPress powered by blocks.

== Description ==
A purpose-built block theme for personal blogs, built around portrait featured images and crafted for calm, readable storytelling.

Shanti is designed for individuals who use blogging as a way to document their lives, travels, and thoughts. It avoids the visual clutter found in many modern themes and instead focuses on simplicity, generous spacing, and typography that invites reading.

Built entirely with WordPress blocks and Full Site Editing, Shanti gives you full creative control — while staying out of the way of your words.

GitHub repository: https://github.com/webtions/shanti

== Changelog ==

= 0.5.0 =
2026-03-02
* Simplified the color palette to six core presets (`base`, `contrast`, `contrast-alt`, `primary`, `secondary`, `tertiary`) and removed unused or overlapping tokens such as `foreground`, `background`, `base-secondary`, `accent-light`, extra accent colors, and `border-dark`.
* Renamed the background preset to `base` and standardized `contrast` as the primary text color across templates, patterns, and global styles.
* Introduced `contrast-alt` for secondary/meta text and wired it into captions, post meta, author/date blocks, and form placeholders for consistent typography.
* Introduced `tertiary` as the shared border/divider color and updated tag cloud, preformatted blocks, inputs, and other UI elements to use it.
* Updated gradients to be fully preset-driven, adding `primary-to-secondary` and `base-to-tertiary` and renaming existing gradients (`background-to-secondary` → `base-to-secondary`, etc.) to match the new palette.
* Aligned the "Black and Yellow" duotone filter with the current primary color so it stays in sync with the brand yellow.

= 0.4.0 =
2026-02-27
* Added dedicated home and archive templates that use the posts-grid pattern for the main blog listing.
* Added hidden-blog-heading pattern so the index template has an accessible blog heading without changing the visual layout.
* Introduced additional query layouts: posts-stacked, posts-list-compact, posts-latest (three-column latest posts without pagination), and refined posts-list.
* Simplified the index template and aligned home, archive, and search templates around shared query patterns and consistent site-content spacing.
* Updated query patterns to use the core posts pattern category where appropriate for better discoverability in the inserter.
* Standardized pagination wrappers with a query-pagination group and wavy separator styling across grid and list layouts.
* Tweaked theme.json to remove a post-template grid align-items override and improved term-description spacing and typography.
* Fixed layout so the query pagination wrapper is hidden when there is only a single page of results, reducing visual noise on small archives.

= 0.3.0 =
2026-02-20
* Added page template without title (page-no-title) and page with sidebar template.
* Added sidebar template part and hidden-sidebar pattern.
* Added header pattern with top bar and footer variants (footer-columns, footer-columns-background, footer-background).
* Added post-navigation and Share Post patterns; single template uses both.
* Added comments pattern (list, pagination, comment form) and single-standard template.
* Added page-home pattern for front page; front page now uses pattern instead of dedicated template.
* Added hidden patterns for 404, post meta, section header, and sidebar.
* Added Recommended Plugins page under Appearance.
* Added ghost button style, wavy separator mask style, and icon system.
* Applied default featured image only to posts, not pages.
* Refactored theme.json to use preset/custom shorthand, primary/secondary font slugs, root padding, and image lightbox support.
* Refined style.css (links, focus-visible, text-wrap, navigation outline, hero padding, admin bar variable).
* Centralized featured image, date, category, and tag styling in theme.json.
* Updated single template with a two-column header (title/date + image), separators around navigation, and comments pattern.
* Updated search template with query title, search form, and posts-list pattern.
* Unified post meta (date + terms) via hidden-post-meta pattern across grid, query loop, showcase, and related patterns.
* Set excerpt length to 34 words in post patterns; category above title, tags below content.
* Renamed and aligned pattern slugs and headers (footer.php, header.php, post-share.php, etc.).
* Made pattern strings translation-ready using esc_html_x and translatable labels.
* Normalized spacing with numeric presets and consistent main wrapper across templates.
* Simplified theme setup and development tooling (composer, PHPCS, PHPStan, EditorConfig, Prettier).
* Removed legacy archive template and older general-heading and post patterns.

= 0.2.0 =
2026-01-23
* Added default featured image fallback with diagonal stripe pattern.
* Added gallery and related posts patterns.
* Added font pairing support with multiple typography presets.
* Added variable font files (Crimson Pro, Open Sans, Montserrat, Playfair Display).
* Implemented standardized cross-theme font size system (7-size scale).
* Consolidated spacing system to 7 semantic presets.
* Refined footer pattern with spacing presets.
* Refined posts grid layouts and styling.
* Updated templates to use semantic spacing presets.
* Styled tag cloud with hashtag prefix and improved typography.
* Increased wide layout width and added new accent color.
* Fixed spacing consistency in post grid patterns.
* Fixed duplicate wrapper in front page template.
* Fixed FSE editor issues in multiple patterns.

= 0.1.0 =
2025-07-18
* Work in progress – more updates coming soon.

= 0.0.1 =
2021-12-29
* Initial release.


== Copyright ==

Shanti WordPress Theme, (C) 2025 Harish Chouhan
Shanti is distributed under the terms of the GNU General Public License v3 or later.
License URI: https://www.gnu.org/licenses/gpl-3.0.html

=== Fonts ===

Montserrat
Copyright 2011 The Montserrat Project Authors
License: SIL Open Font License, 1.1 — https://opensource.org/licenses/OFL-1.1
Source: https://fonts.google.com/specimen/Montserrat
GitHub: https://github.com/JulietaUla/Montserrat

=== Images ===

"shanti-cover.svg"
Created by Harish Chouhan
License: GPLv3 or later
