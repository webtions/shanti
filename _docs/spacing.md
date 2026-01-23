# Spacing

The spacing system uses 7 preset sizes that scale with viewport width. Everything uses `clamp()` so spacing adapts automatically. No media queries needed.

## The Scale

| Size | Slug | Value | Approx. Range |
|------|------|-------|---------------|
| X-Small | `x-small` | `clamp(0.5rem, 1.5vw, 1rem)` | 8-16px |
| Small | `small` | `clamp(1rem, 2vw, 1.5rem)` | 16-24px |
| Medium | `medium` | `clamp(1.5rem, 3vw, 2rem)` | 24-32px |
| Large | `large` | `clamp(3rem, 5vw, 4rem)` | 48-64px |
| X-Large | `x-large` | `clamp(4rem, 6vw, 6rem)` | 64-96px |
| XX-Large | `xx-large` | `clamp(5rem, 8vw, 8rem)` | 80-128px |
| XXX-Large | `xxx-large` | `clamp(30px, 5vw, 80px)` | 30-80px |

The pixel values are approximate. They'll scale smoothly between the min and max based on screen size.

## How clamp() Works

Quick explanation if you're not familiar:

```css
padding: clamp(1.5rem, 3vw, 2rem);
```

This means:
- **Minimum:** 1.5rem (24px), won't go smaller
- **Preferred:** 3% of viewport width, scales with screen
- **Maximum:** 2rem (32px), won't go larger

So on mobile you get 24px, on desktop you get 32px, and everything in between scales smoothly.

## rem to px Reference

| rem | px |
|-----|----|
| 0.5rem | 8px |
| 1rem | 16px |
| 1.5rem | 24px |
| 2rem | 32px |
| 3rem | 48px |
| 4rem | 64px |
| 5rem | 80px |
| 6rem | 96px |
| 8rem | 128px |

## When to Use What

**X-Small** (Tight spacing, like gaps between icons or inline elements)

**Small** (Related elements, card padding, form fields)

**Medium** (Default spacing between sections, comfortable padding)

**Large** (Major section breaks, hero padding. This is the default block gap)

**X-Large** (Big sections, dramatic spacing)

**XX-Large** (Hero sections, full-page layouts)

**XXX-Large** (Special case, mainly used for cover blocks)

## Layout Widths

- **Content:** 640px (optimal reading width)
- **Wide:** 1580px (full-width sections)

## Common Block Spacing

Just documenting what's already set up:

- **Block gap:** Large (48-64px) by default
- **Headings:** 10px top/bottom
- **Paragraphs:** 0 top, 20px bottom
- **Post title:** 0 top, 40px bottom
- **Cover blocks:** XXX-Large padding all sides

Check theme.json for the full list if you need specifics.

## Usage

In CSS:
```css
margin-bottom: var(--wp--preset--spacing--medium);
padding: var(--wp--preset--spacing--large);
gap: var(--wp--preset--spacing--small);
```

In block patterns:
```html
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large"}}}} -->
```

## Tips

- Stick to the presets instead of custom values. Keeps things consistent
- The fluid spacing means you rarely need to adjust for different screen sizes
- If something feels too tight or loose, try the next size up or down before adding custom spacing
- Large is a good default for most section spacing
