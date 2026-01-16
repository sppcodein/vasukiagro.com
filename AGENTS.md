# AGENTS.md

## Project Overview

VAC Block Theme is a custom WordPress Full Site Editing (FSE) block theme designed for VASUKI AGRO CHEMICALS LLP. It features a nature-inspired design specifically optimized for agricultural businesses.

**Key Technologies:**
- WordPress 6.0+ (with Full Site Editing support)
- PHP 7.4+
- HTML5 block templates
- CSS3 (custom styles and animations)
- JavaScript (animations library)
- Google Fonts (Montserrat, Open Sans)
- Animate.css library

**Theme Architecture:**
- Block-based templates and parts
- Custom block patterns for agricultural content
- Custom block styles for enhanced functionality
- Resource-optimized asset loading
- Internationalization (i18n) support via `.pot` file

## Project Structure

```
vac-block-theme-2/
├── functions.php           # Theme setup and enqueue scripts/styles
├── theme.json             # WordPress theme configuration
├── style.css              # Main stylesheet and theme header
├── vac-block-theme.pot    # Translation file
├── assets/
│   ├── css/
│   │   └── custom.css     # Custom theme styles
│   ├── js/
│   │   └── animations.js  # Animation library
│   └── img/              # Theme images
├── inc/
│   ├── block-patterns.php # Custom block patterns registration
│   └── block-styles.php   # Custom block styles
├── parts/                 # Reusable block template parts
├── templates/             # Full site editing templates
└── .github/
    └── copilot-instructions.md # WordPress and PHP best practices guide
```

## Setup Commands

**Prerequisites:**
- WordPress 6.0 or higher installed
- PHP 7.4 or higher
- Writable `/wp-content/themes/` directory

**Installation:**
```bash
# 1. Navigate to WordPress themes directory
cd /wp-content/themes/

# 2. Clone or copy theme folder
# Copy vac-block-theme-2 folder to /wp-content/themes/

# 3. Activate theme in WordPress
# Go to wp-admin → Appearance → Themes → Activate "VASUKI AGRO CHEMICALS Block Theme"

# 4. Visit the Site Editor
# Go to wp-admin → Appearance → Editor to start customizing
```

**No build tools or package manager required** - this is a pure WordPress theme using block editor.

## Development Workflow

### File Organization

- **Template Files** (`/templates/`): Full-page layouts created with block editor
  - `front-page.html` - Homepage
  - `single-product.html` - Individual product pages
  - `page.html` - Default page template
  - `index.html` - Fallback template
  - Archive templates for products, posts, taxonomies

- **Template Parts** (`/parts/`): Reusable block components
  - `header.html` - Site header with navigation
  - `footer.html` - Site footer
  - Cart and checkout related parts
  - Product add-to-cart variations

- **Block Patterns** (`/inc/block-patterns.php`): Pre-designed content blocks
  - Product Features Grid
  - Farmer Testimonials
  - Call to Action sections

- **Block Styles** (`/inc/block-styles.php`): Enhanced styling for core blocks

### Local Development

**Using WAMP/Local WordPress:**
1. Navigate to `wp-admin` → Appearance → Editor (FSE)
2. Edit templates and template parts directly in the block editor
3. Changes are automatically saved to corresponding `.html` files
4. CSS changes in `/assets/css/custom.css` are auto-enqueued via `functions.php`

**Live Reload (Manual):**
- Refresh browser after CSS changes to `custom.css`
- JavaScript changes to `animations.js` require page refresh
- Block template changes are saved instantly in the editor

### Customization Areas

**Colors & Typography** (`theme.json`):
- Color palette: Primary Green, Light Green, Earth Brown, Sky Blue, Yellow, neutrals
- Typography: Montserrat (headings), Open Sans (body)
- Spacing units: px, em, rem, vh, vw, %
- Layout: contentSize (1140px), wideSize (1340px)

**Styles** (`/assets/css/custom.css`):
- Global styling applied to all pages
- Animation classes for entrance effects
- Responsive design utilities

**Animations** (`/assets/js/animations.js`):
- Scroll-triggered animations using Animate.css library
- Classes: `animate-on-scroll`, `fade-in`, `fade-in-left`, etc.

## Code Style Guidelines

### PHP Standards

- Follow WordPress PHP coding standards as defined in [copilot-instructions.md](.github/copilot-instructions.md)
- Enable strict typing: `declare(strict_types=1);` at top of files
- Use `add_action()` and `add_filter()` for extensibility
- Prefix all custom functions with `vac_` to avoid conflicts
- Use `esc_html__()` for all translatable strings
- Validate with `define( 'ABSPATH' )` check before executing code

**Example Function Pattern:**
```php
<?php
declare(strict_types=1);

function vac_custom_function() {
    // Implementation
}
add_action( 'hook_name', 'vac_custom_function' );
```

### WordPress Best Practices

- Use `get_template_directory()` for theme files
- Enqueue scripts/styles with `wp_enqueue_script()` and `wp_enqueue_style()`
- Register block patterns with proper categories
- Use `wp_` prefixed functions for database and API interactions

### HTML/Block Markup

- Block templates use standard WordPress block comment syntax: `<!-- wp:block-name -->`
- Maintain readable indentation in `.html` files
- Use semantic HTML5 elements
- All images require alt text for accessibility

### CSS Conventions

- Use CSS custom properties defined in `theme.json`
- Follow mobile-first responsive design approach
- Use block-specific class names for targeting
- Leverage preset colors and spacing from `theme.json`

### JavaScript

- Use ES5+ syntax (Arrow functions, const/let, etc.)
- Prefix custom classes with `vac-` or animation class names
- Load jQuery only if required (animations.js currently loads jQuery)
- Document animation classes and their triggers

## Internationalization (i18n)

The theme is prepared for translation:
- Translation file: `vac-block-theme.pot`
- Text domain: `vac-block-theme`
- All user-facing strings use `esc_html__()`, `__()`, or `esc_attr__()`

**Adding Translatable Strings:**
```php
echo esc_html__( 'My Text', 'vac-block-theme' );
```

## Testing and Validation

### Manual Testing Checklist

- [ ] Test homepage (front-page.html) displays correctly
- [ ] Verify all template types render (product, page, post, archive)
- [ ] Check responsive design on mobile, tablet, desktop
- [ ] Validate animations trigger on scroll
- [ ] Test custom colors apply from theme.json
- [ ] Verify Google Fonts load properly
- [ ] Test in block editor: edit templates and parts
- [ ] Verify no PHP errors in wp-admin or frontend
- [ ] Check WooCommerce template parts (if WooCommerce active)

### Browser Support

- Chrome/Edge (latest)
- Firefox (latest)
- Safari (latest)
- Mobile browsers (iOS Safari, Chrome Android)

### Performance Considerations

- Animations are loaded via external CDN (Animate.css)
- CSS files are minified in production WordPress
- JavaScript is loaded in footer (async not required here)
- Google Fonts use swap display strategy
- Preconnect to Google Fonts endpoints configured

## Build and Deployment

### Development to Production

1. **Version Management**: Update version in `functions.php`
   ```php
   define( 'VAC_BLOCK_THEME_VERSION', 'X.X.X' );
   ```

2. **Cache Busting**: Change version number to force asset refresh

3. **Theme Activation**: 
   - Upload theme to production `/wp-content/themes/`
   - Activate via wp-admin → Appearance → Themes

4. **No Build Step Required**: Theme works as-is without compilation

### Files to Deploy

All files in the theme directory:
```
vac-block-theme-2/
├── functions.php
├── style.css
├── theme.json
├── .git/ (optional)
├── .github/
├── assets/
├── inc/
├── parts/
└── templates/
```

### Backup Considerations

- Keep backups of modified template files
- Backup `theme.json` configuration changes
- Store translation updates from `.pot` file

## Common Development Tasks

### Adding a New Block Pattern

1. Open `/inc/block-patterns.php`
2. Use `register_block_pattern()` following existing patterns
3. Include category `'vac-blocks'`
4. Use block markup following WordPress standards

### Creating a New Template

1. Go to wp-admin → Appearance → Editor
2. Click "Templates" in sidebar
3. Click "+" to create new template
4. Design using block editor
5. Save - file is created in `/templates/`

### Customizing Colors

Edit `/theme.json` color palette:
```json
"palette": [
  {
    "color": "#HEX_CODE",
    "name": "Display Name",
    "slug": "css-slug"
  }
]
```

### Adding Custom CSS

Add to `/assets/css/custom.css`:
- CSS loads via `wp_enqueue_style()` in functions.php
- Refresh browser to see changes
- Use CSS custom properties from theme.json

### Adding JavaScript

1. Add file to `/assets/js/`
2. Enqueue in `vac_block_theme_scripts()` function
3. Use proper nonce verification for AJAX calls
4. Add JSDoc comments for function documentation

## Debugging and Troubleshooting

### Enable WordPress Debug Mode

Add to `wp-config.php` for development:
```php
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
```

Check debug log at: `/wp-content/debug.log`

### Common Issues

**Templates not updating:**
- Clear WordPress object cache: `wp_cache_flush()`
- Reload the block editor page

**CSS not applying:**
- Check `theme.json` for correct spacing/color slugs
- Verify CSS file path in `functions.php`
- Increment version number in `functions.php`

**Animations not working:**
- Verify Animate.css loads: Check browser DevTools → Network
- Check animation class names match defined patterns
- Verify `animations.js` loads correctly

**PHP Warnings:**
- Check `/wp-content/debug.log`
- Review `/inc/` files for undefined functions
- Validate all `add_action()` hooks exist

## PHP Version and WordPress Compatibility

- **Minimum PHP:** 7.4 (for typed properties, arrow functions)
- **Minimum WordPress:** 6.0 (for FSE support)
- **Maximum Tested:** Latest WordPress version
- **Recommended:** PHP 8.0+ for better performance

## Security Considerations

- Always use `esc_html__()` for escaping translatable text
- Use `esc_attr__()` for HTML attributes
- Verify nonces for any custom form submissions
- Use `sanitize_text_field()` for user input
- Use `wp_kses_post()` for HTML content validation
- No direct SQL queries - use `$wpdb->prepare()` if needed

## Additional Resources

- [WordPress Theme Development Handbook](https://developer.wordpress.org/themes/)
- [WordPress Block Editor Handbook](https://developer.wordpress.org/block-editor/)
- [WordPress Security Handbook](https://developer.wordpress.org/plugins/security/)
- [Theme.json Documentation](https://schemas.wp.org/wp/latest/theme.json)
- [WooCommerce Template Documentation](https://docs.woocommerce.com/document/template-structure/) (if using WooCommerce)

## Contact & Support

For theme-specific issues or customizations, refer to the implementation notes in [copilot-instructions.md](.github/copilot-instructions.md).
