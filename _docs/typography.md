# Typography

The theme uses Montserrat for body text and Playfair Display for headings. Pretty common pairing but it works.

## Fonts

**Montserrat** (Body)
- Variable font, weights 100-900
- Used for everything except headings
- Clean, readable, does the job

**Playfair Display** (Headings)
- Variable font, weights 400-900
- High-contrast serif, gives that editorial feel
- Only used for h1-h6 and post titles

**Monospace** (Code)
- System font stack (Consolas, Menlo, Monaco, etc.)
- For code blocks and preformatted text

Both variable fonts are included in `/assets/fonts/` with regular and italic variants.

## Font Sizes

The theme uses a 7-size scale. All sizes are fluid (they scale with viewport width using `clamp()`).

| Size | Slug | rem | Approx. px |
|------|------|-----|------------|
| Extra Small | `x-small` | 0.875rem | 14-16px |
| Small | `small` | 1.125rem | 16-18px |
| Medium | `medium` | 1.25rem | 18-22px |
| Large | `large` | 2rem | 28-32px |
| Extra Large | `x-large` | 2.5rem | 36-48px |
| 2X Large | `xx-large` | 3.5rem | 48-64px |
| 3X Large | `xxx-large` | 4.5rem | 64-80px |

**Quick rem reference** (assuming 16px base):
- 0.875rem = 14px
- 1rem = 16px
- 1.125rem = 18px
- 1.25rem = 20px
- 2rem = 32px
- 2.5rem = 40px
- 3.5rem = 56px
- 4.5rem = 72px

The actual sizes will vary slightly because of the fluid scaling, but these are good ballpark numbers.

## Font Weights

Custom weight tokens available:

```css
--wp--custom--font-weight--thin: 100
--wp--custom--font-weight--light: 300
--wp--custom--font-weight--regular: 400
--wp--custom--font-weight--medium: 500
--wp--custom--font-weight--semi-bold: 600
--wp--custom--font-weight--bold: 700
--wp--custom--font-weight--black: 900
```

Most of the time you'll use `regular` (400) for body and `medium` (500) for headings.

## Line Heights

Custom line height tokens:

```css
--wp--custom--line-height--tight: 1.1    // Large headings
--wp--custom--line-height--snug: 1.2     // Regular headings
--wp--custom--line-height--small: 1.3    // Compact text
--wp--custom--line-height--medium: 1.5   // Default body
--wp--custom--line-height--body: 1.6     // Comfortable reading
--wp--custom--line-height--normal: 1.75  // Relaxed
```

Body text uses 1.5 by default. Headings use 1.3 for tighter spacing.

## What Gets What

Here's how things are set up by default:

**Body text**
- Montserrat, 1.25rem (20px), line-height 1.5

**Headings (h1-h6)**
- Playfair Display, weight 500, line-height 1.3

**Post titles**
- 4.5rem (huge), line-height 1.3

**Navigation**
- 1.25rem, weight 400

**Meta info** (dates, tags, etc.)
- 1.125rem (18px)

**Code blocks**
- Monospace, 1.125rem

## Usage

Reference the presets like this:

```css
.my-heading {
  font-family: var(--wp--preset--font-family--playfair-display);
  font-size: var(--wp--preset--font-size--x-large);
  font-weight: var(--wp--custom--font-weight--medium);
  line-height: var(--wp--custom--line-height--tight);
}
```

Font smoothing is enabled globally for better rendering on Mac/iOS.

## Notes

- Minimum font size is 14px. Anything smaller gets hard to read
- The fluid typography means text scales nicely on all devices without breakpoints
- If you're adding new patterns, stick to the preset sizes instead of custom values
