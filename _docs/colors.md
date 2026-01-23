# Colors

The color palette is pretty straightforward. Clean, minimal look with a warm yellow accent.

## Main Colors

Here's what you'll be working with most of the time:

| Slug | Hex | What it's for |
|------|-----|---------------|
| `foreground` | `#000000` | Body text, anything that needs to be readable |
| `background` | `#FFFFFF` | Page background |
| `primary` | `#F8CD5F` | The yellow accent. Use sparingly for highlights |
| `contrast` | `#000000` | Same as foreground, just a semantic name |

## Supporting Colors

These fill in the gaps:

| Slug | Hex | Notes |
|------|-----|-------|
| `secondary` | `#FFFCF5` | Warm off-white, nice for subtle backgrounds |
| `tertiary` | `#F4F6FA` | Cool off-white alternative |
| `contrast-medium` | `#4E4E60` | Gray for meta info, dates, that kind of thing |
| `base-secondary` | `#F8F7FC` | Light purple-ish gray for code blocks |
| `border-light` | `#E3E3F0` | Subtle borders |
| `border-dark` | `#4E4E60` | When you need a stronger border |
| `accent-light` | `#F9F3E3` | Warm beige background |
| `transparent` | `transparent` | Self-explanatory |

## Gradients

The theme includes a few gradient presets. Use them sparingly - the theme works best when kept simple.

**Background to Secondary** (Subtle warm fade for hero sections)
```css
linear-gradient(160deg, var(--wp--preset--color--background), var(--wp--preset--color--secondary))
```

**Primary Glow** (Soft yellow glow effect, looks nice behind headings)
```css
radial-gradient(circle at center, color-mix(in srgb, var(--wp--preset--color--primary) 15%, transparent) 0%, transparent 70%)
```

**Warm Sunset** (Yellow to orange, good for CTAs)
```css
linear-gradient(135deg, #F8CD5F 0%, #FFA500 100%)
```

There are a couple more in theme.json if you're curious.

## Duotone Filters

Two image filters available:

- **Black and Yellow** (`#000000` + `#F8CD5F`) for bold look
- **Dark Grayscale** (`#4E4E60` + `#FFFFFF`) for more subtle treatment

## How to Use

Just reference the CSS variables:

```css
color: var(--wp--preset--color--foreground);
background-color: var(--wp--preset--color--primary);
border-color: var(--wp--preset--color--border-light);
```

Or for gradients:
```css
background: var(--wp--preset--gradient--primary-glow);
```

## Accessibility

All the main color combos meet WCAG AA standards (most hit AAA). Black on white is 21:1 contrast, so you're good there. The yellow primary color is meant for accents, not body text.
