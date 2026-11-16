# Mobiki - WordPress Block Theme

A mobile-first portfolio theme with Nordic design aesthetics.

**Languages / 言語:** [English](README.md) | [日本語](README.ja.md)

---

## Features

- 📱 **Mobile-First Design** - Designed with smartphone viewing as top priority
- 🎨 **Nordic Color Palette** - Sophisticated and calming color scheme
- ♿ **Accessibility in Mind** - Designed with consideration for all users
- ✨ **Beautiful Animation Effects** - Smooth scrolling and fade-in
- 🎯 **Full Block Editor Support** - Compatible with WordPress 6.6+ Full Site Editing features
- 📐 **Responsive Design** - Beautiful display on all devices
- 🖥️ **Desktop Side Menu** - Fixed navigation menu on the left for desktop
- 👤 **Profile Card** - Profile display on the right for desktop

## Demo

### Desktop Layout
- Center: Main content (max-width 600px)
- Left: Navigation menu + SNS buttons
- Right: Profile card
- Scroll to top button

### Mobile Layout
- Profile card below hero section
- Fixed footer navigation
- Scroll to top button in bottom right

## Color Palette

### Main Colors
- **Primary**: #587581 - Main blue-gray
- **Primary Dark**: #4A6270 - Darker blue-gray
- **Primary Light**: #7A98A6 - Lighter blue-gray

### Accent Colors
- **Accent (Mint)**: #8ABAD3 - Fresh mint blue
- **Accent (Coral)**: #D98F7E - Warm coral pink
- **Accent (Mustard)**: #D9A86C - Calm mustard yellow
- **Accent (Sage)**: #9CAF88 - Natural sage green

### Other Colors
- **Secondary**: #A8B5A5 - Soft gray-green
- **Text Dark**: #2D3436 - Main text
- **Text Medium**: #636E72 - Sub text
- **Text Light**: #667475 - Auxiliary text
- **Background Light**: #F8F9FA - Light background
- **Background Warm**: #FAF7F5 - Warm background
- **Border Light**: #E8EBE8 - Border

## Installation

### Basic Installation
1. Navigate to "Appearance" → "Themes" in the admin dashboard.
2. Click "Add New".
3. Search for "Mobiki" in the search form.
4. Click "Install".
5. Click "Activate".
6. Go to "Appearance" → "About Mobiki" to open the Site Editor and find the support links.


## Theme Structure

```
mobiki/
├── style.css                 # Theme information (required)
├── theme.json               # Block theme settings (required)
├── functions.php            # Theme functions and the About Mobiki page
├── readme.txt               # Theme readme for WordPress.org
├── README.md                # This file
├── templates/               # Template files
│   ├── front-page.html     # Home template (homepage)
│   ├── index.html          # Main template
│   ├── single.html         # Single post template
│   ├── page.html           # Page template
│   ├── archive.html        # Archive template
│   ├── search.html         # Search results template
│   └── 404.html            # 404 template
├── parts/                   # Template parts
│   ├── header.html         # Header
│   ├── footer.html         # Footer
│   ├── side-menu.html      # Desktop side menu
│   ├── side-profile.html   # Desktop profile card (right side)
│   ├── mobile-profile.html # Mobile profile card
│   └── mobile-nav.html     # Mobile footer navigation
├── assets/                  # Asset files
│   ├── css/
│   │   ├── main.css        # Main stylesheet
│   │   ├── editor-style.css # Editor stylesheet
│   │   └── admin.css       # About Mobiki page stylesheet
│   └── js/
│       └── main.js         # Main script
├── patterns/                # Block patterns
├── styles/
│   └── monochrome.json     # Monochrome style variation
└── languages/               # Translation files
```

## Customization Guide

### 1. Change Site Information
1. Go to "Settings" → "General" in WordPress admin
2. Enter "Site Title" and "Tagline"
3. This information will be automatically reflected in the header

### 2. Design Settings
1. Go to "Appearance" → "Editor"
2. Click on each item in the left menu to change settings
   - **Navigation**: Review and edit configured menus
   - **Styles**: Change main colors
   - **Templates**: Change layout of each page
3. For blocks labeled "Custom HTML" in the editor screen, it's more convenient to switch to the code editor for editing. You can also delete them to match your design.

### 3. Configure Menus
1. Go to "Appearance" → "Editor"
2. Select "Patterns" → "All Template Parts" from the left menu
3. Edit each menu:
   - **side-menu** - Desktop side menu and SNS buttons
   Click on navigation blocks to add/edit menu items
   - **footer** - Footer menu (initially equipped with blog menu in HTML custom code)
   Can be customized by directly editing HTML code
   - **mobile-nav** - Mobile footer navigation (equipped with HTML custom code)
   Can be customized by directly editing HTML code
4. For blocks labeled "Custom HTML" in the editor screen, it's more convenient to switch to the code editor for editing. You can also delete them to match your design.
5. Save your changes


### 4. Customize Profile Card
1. Go to "Appearance" → "Editor" → "Patterns" → "All Template Parts" → "side-profile"
2. Edit emoji, text, and status
3. Save
4. Similarly, you can also edit "mobile-profile"


### 5. Customize SNS Buttons
1. Go to "Appearance" → "Editor" → "Patterns" → "All Template Parts" → "side-menu"
2. Change SNS button link URLs
3. Remove unused SNS buttons if needed

### 6. Change Color Theme
Go to "Appearance" → "Editor" → "Styles" to change the colors or choose the Monochrome style variation.

If you build a child theme, you can also change the site-wide color palette in its `theme.json` file:

```json
{
  "settings": {
    "color": {
      "palette": [
        {
          "slug": "primary",
          "color": "#your-color",
          "name": "Primary"
        }
      ]
    }
  }
}
```

### 7. Create Content
#### Edit Homepage
1. Go to "Appearance" → "Editor" → "Templates" → "Front Page"
2. Edit each section:
   - **Hero** - Main visual and catchphrase
   - **About** - Self-introduction
   - **Work** - Portfolio (edit the cards directly in the template)
   - **Blog** - Blog posts (post type: post)
   - **Service** - Services offered
   - **Contact** - Contact information

#### Create Blog Posts
1. Go to "Posts" → "Add New"
2. Enter title and content
3. Set featured image (recommended size: 1200×630px)
4. Set categories and tags
5. Publish

#### Create Pages
1. Go to "Pages" → "Add New"
2. Enter title and content
3. Set featured image if needed
4. Publish

### 8. Add Background Video (Optional)
To add a background video:

1. Prepare video file (MP4 format recommended)
2. Upload the video from "Media" → "Add New" and copy its file URL
3. Go to "Appearance" → "Editor" → "Templates" → "Front Page" and switch to the Code editor
4. Add the following code before the layout-wrapper group, replacing the `src` with the URL you copied:

```html
<!-- wp:html -->
<div class="video-background" aria-hidden="true">
    <video autoplay muted loop playsinline>
        <source src="https://example.com/wp-content/uploads/your-video.mp4" type="video/mp4">
    </video>
</div>
<!-- /wp:html -->
```

Block templates are HTML files, so PHP such as `get_site_url()` does not run in them. Editing in the Site Editor also keeps your change when the theme is updated.

## Technical Specifications

### WordPress Version Support
- WordPress 6.6 or later
- PHP 7.4 or later

### Browser Support
- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome for Android)

### Performance
- CSS: style.css and main.css on the front end
- JavaScript: 1 file (main.js)
- External libraries: None (Pure JS)
- Page size: Minimized and optimized

## Troubleshooting

### Styles Not Applied
1. Clear browser cache
2. Clear cache if using a cache plugin

### Menu Not Displaying
1. Open the "side-menu" template part in "Appearance" → "Editor" and check that the Navigation block has links
2. If you edited the template part and want the original back, use "Reset" in the template part's actions menu

### Mobile Layout Issues
1. Clear browser cache
2. Check viewport settings
3. Verify CSS file is loading correctly

## FAQ

**Q: Is this theme free?**
A: Yes, it's free to use under GPL v3 license.

**Q: Can I use it for commercial purposes?**
A: Yes, you can use it freely for commercial sites.

**Q: Is customization support available?**
A: Basic customization methods are described in this README. Free support is provided on the WordPress.org support forum (https://wordpress.org/support/theme/mobiki/). Paid customization (https://369theme.com/order) and paid email support are also available. For details, please contact 369Theme (https://369theme.com/contact?product=mobiki).

**Q: Can I use it on multiple sites?**
A: Yes, you can use it without restrictions.

**Q: Do I need a child theme?**
A: As a block theme, many customizations can be done within the editor. A child theme is recommended for extensive customizations.

## Roadmap

- [ ] Add more block patterns
- [x] Add color scheme presets (Monochrome style variation, 1.8)
- [x] Additional templates (archive, search, 404)
- [ ] More detailed documentation

## Contributing

Bug reports and feature requests are welcome.

## License

This theme is licensed under GPL v3 or later.
See [LICENSE](https://www.gnu.org/licenses/gpl-3.0.html) for details.

## Credits

- Design: Nordic design system
- Fonts: System fonts
- Icons: Emoji

## Author

miroku
Website: https://profiles.wordpress.org/369work/

## Copyright

Copyright 2025 369work. Mobiki is distributed under the terms of the GNU General Public License v3 or later.


## Changelog

### 1.0.0 (2025-10-30)
- 🎉 Initial release
- ✨ Mobile-first design
- 🎨 Nordic color palette implementation
- ♿ Accessibility support
- 📱 Responsive design completion
- 🖥️ Desktop side menu and profile card added
- ✨ Smooth scroll animation implementation
- 🎯 Full block editor support

### 1.0.1 (2025-11-06)
- 🎨 Style and page navigation changes

### 1.1 (2025-11-14)
- ✨ Side menu pattern implementation
- 🎨 Bug fixes
- 🎨 Style refinements

### 1.2 (2025-11-23)
- 📁 README translation
- 🎨 Screenshot changed to English version

### 1.3 (2025-11-25)
- ✨ Side profile changes
- 🎨 Editor style adjustments

### 1.4 (2025-12-01)
- 🎨 Side profile bug fixed
- 🎨 Changed CSS

### 1.5 (2026-5-20)
- ✨ Compatible with WordPress 7.0

### 1.6 (2026-7-19)
- 🐛 theme.json fixed
- 🐛 patterns bug fixed

### 1.7 (2026-8-20)
- ✨ Compatible with WordPress 7.1
- 🐛 Fixed the template previews in the Site Editor so they match the front end layout
- 🐛 Editor styles are no longer enqueued on the admin screens
- 🐛 Fixed invalid block markup in the profile pattern

### 1.8 (2026-9-14)
- 🎨 Added a Monochrome style variation
- 🎨 The colour custom properties in main.css and editor-style.css now read the theme.json presets, so a style variation applies across the theme (fallbacks keep the default look unchanged)
- ♿ Darkened the link colour and the auxiliary text colour to meet the WCAG AA contrast ratio of 4.5:1
- ♿ Fixed the category badge, which used white text on a light background (2.09:1)
- 📝 Added Theme URI to the style sheet header
- 🏷️ Added custom-logo, post-formats, style-variations, wide-blocks, three-columns, left-sidebar and right-sidebar to the tags
- 📝 Corrected the License URI to https

### 1.9 (2026-10-1)
- ✨ Lowered the minimum PHP version to 7.4
- ✨ Added an About Mobiki page under Appearance with links to the Site Editor, reviews and support
- 📝 Updated the Theme URI to https://369theme.com/themes/mobiki
- 📝 readme.txt / README: The setup steps now point to the Site Editor, and the support, license, version and file list are corrected
- ♿ Changed the label of the desktop profile card from "Mobile Profile Card" to "Profile Card"
- 🐛 The desktop side menu and profile card now line up at the same top edge below the header, and no longer overlap the header or the admin bar on short screens
- 📸 Updated screenshot.png to show the new side menu and profile card position
- 🌐 Regenerated mobiki.pot from the theme code

---

**Thank you for choosing Mobiki!** 🎉
