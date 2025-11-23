# Mobiki - WordPress Block Theme

A mobile-first portfolio theme with Nordic design aesthetics.

**Languages / 言語:** [English](#english) | [日本語](README.ja.md)

---

## Features

- 📱 **Mobile-First Design** - Optimized for smartphone viewing
- 🎨 **Nordic Color Palette** - Sophisticated and calming color scheme
- ♿ **Accessibility Ready** - Designed with all users in mind
- ✨ **Beautiful Animations** - Smooth scrolling and fade-in effects
- 🎯 **Full Block Editor Support** - Compatible with WordPress 6.0+ Full Site Editing
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
- **Primary**: #5D7B89 - Main blue-gray
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
- **Text Light**: #95A5A6 - Auxiliary text
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
6. Navigate to the Mobiki theme settings menu in the admin dashboard.

## Theme Structure

```
mobiki/
├── style.css                 # Theme information (required)
├── theme.json               # Block theme settings (required)
├── functions.php            # Theme functions
├── README.md                # This file
├── templates/               # Template files
│   ├── front-page.html     # Home template (homepage)
│   ├── index.html          # Main template
│   ├── single.html         # Single post template
│   └── page.html           # Page template
├── parts/                   # Template parts
│   ├── header.html         # Header
│   ├── footer.html         # Footer
│   ├── side-menu.html      # Desktop side menu
│   ├── side-profile.html   # Desktop profile card (right side)
│   └── mobile-nav.html     # Mobile footer navigation
├── assets/                  # Asset files
│   ├── css/
│   │   └── main.css        # Main stylesheet
│   └── js/
│       └── main.js         # Main script
└── patterns/                # Block patterns (optional)
```

## Customization Guide

### 1. Change Site Information
1. Go to "Settings" → "General" in WordPress admin
2. Enter "Site Title" and "Tagline"
3. This information will be automatically reflected in the header

### 2. Set Logo
1. Go to "Appearance" → "Customize" → "Site Identity"
2. Upload logo image from "Select Logo" button
3. Recommended size: 400×100px (transparent PNG recommended)

### 3. Configure Menus
1. Go to "Appearance" → "Editor"
2. Select "Template Parts" from the left menu
3. Edit each menu:
   - **side-menu** - Desktop side menu and SNS buttons
   - **footer** - Footer menu (optional)
   - **mobile-nav** - Mobile footer navigation
4. Click on navigation blocks to add/edit menu items
5. Save your changes

### 4. Customize Profile Card
1. Go to "Appearance" → "Mobiki Theme Settings"
2. Enter profile information (name, occupation, bio, emoji, etc.)
3. Save
4. Go to "Appearance" → "Editor" → "Template Parts" → "side-profile"
5. Edit emoji, text, and status
6. Save

### 5. Customize SNS Buttons
1. Go to "Appearance" → "Editor" → "Template Parts" → "side-menu"
2. Change SNS button link URLs
3. Remove unused SNS buttons if needed

### 6. Change Color Theme
You can change the site-wide color palette by editing the `theme.json` file:

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
1. Go to "Appearance" → "Editor" → "Templates" → "index"
2. Edit each section:
   - **Hero** - Main visual and catchphrase
   - **About** - Self-introduction
   - **Work** - Portfolio (post type: portfolio)
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
2. Upload video to `wp-content/uploads/` folder
3. Add the following code before the layout-wrapper class in templates/front-page.html:

```html
<!-- wp:html -->
<div class="video-background">
    <video autoplay muted loop playsinline>
        <source src="<?php echo get_site_url(); ?>/wp-content/uploads/your-video.mp4" type="video/mp4">
    </video>
</div>
<!-- /wp:html -->
```

## Technical Specifications

### WordPress Version Support
- WordPress 6.6 or later
- PHP 8.1 or later

### Browser Support
- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome for Android)

### Performance
- CSS: 1 file (main.css)
- JavaScript: 1 file (main.js)
- External libraries: None (Pure JS)
- Page size: Minimized and optimized

## Troubleshooting

### Styles Not Applied
1. Clear browser cache
2. Open "Appearance" → "Customize" in WordPress admin and save
3. Clear cache if using a cache plugin

### Menu Not Displaying
1. Check if menu is created in "Appearance" → "Menus"
2. Verify menu location is set correctly
3. Try reactivating the theme

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
A: Basic customization methods are described in this README.

**Q: Can I use it on multiple sites?**
A: Yes, you can use it without restrictions.

**Q: Do I need a child theme?**
A: As a block theme, many customizations can be done within the editor. A child theme is recommended for extensive customizations.

## Roadmap

- [ ] Add more block patterns
- [ ] Add color scheme presets
- [ ] Additional templates (archive, 404, etc.)
- [ ] More detailed documentation

## Contributing

Bug reports and feature requests are welcome.

## License

This theme is licensed under GPL v3 or later.
See [LICENSE](http://www.gnu.org/licenses/gpl-3.0.html) for details.

## Credits

- Design: Nordic design system
- Fonts: System fonts
- Icons: Emoji

## Author

Miroku
Website: https://profiles.wordpress.org/369work/

## Copyright

Copyright 2025 369work. All rights reserved.

## Version

1.1

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
- 🎨 Screenshot changed

---

**Thank you for choosing Mobiki!** 🎉
