=== Mobiki ===
Theme URI: https://369theme.com/themes/mobiki
Contributors: 369work
Author URI: https://profiles.wordpress.org/369work/
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
Stable tag: 1.9
License: GNU General Public License v3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Tags: blog, portfolio, one-column, three-columns, left-sidebar, right-sidebar, block-patterns, custom-colors, custom-logo, custom-menu, editor-style, featured-images, full-site-editing, post-formats, sticky-post, style-variations, threaded-comments, translation-ready, wide-blocks

A mobile-first portfolio theme with Nordic-inspired design and full site editing support.


== Description ==

Mobiki is a modern WordPress block theme designed with a mobile-first approach and Nordic-inspired aesthetics. Perfect for portfolios, personal blogs, and creative professionals.

= Key Features =

* 📱 **Mobile-First Design** - Optimized for smartphone viewing
* 🎨 **Nordic Color Palette** - Refined colors with a calm, sophisticated feel
* ♿ **Accessibility in Mind** - Designed with all users in mind
* ✨ **Beautiful Animations** - Smooth scrolling and fade-in effects
* 🎯 **Full Site Editing** - Complete support for the WordPress 6.6+ Site Editor
* 📐 **Responsive Design** - Beautiful display on all devices
* 🖥️ **Desktop Side Menu** - Fixed navigation menu on the left side for desktop
* 👤 **Profile Card** - Profile display on the right side for desktop


= Layout =

**Desktop Layout:**
- Center: Main content (max-width 600px)
- Left: Navigation menu + Social buttons
- Right: Profile card
- Scroll-to-top button

**Mobile Layout:**
- Profile card directly below hero section
- Fixed footer navigation at bottom
- Scroll-to-top button in bottom-right corner


= Color Palette =

**Main Colors:**
- Primary: #587581 (Blue-gray)
- Primary Dark: #4A6270 (Darker blue-gray)
- Primary Light: #7A98A6 (Lighter blue-gray)

**Accent Colors:**
- Accent (Mint): #8ABAD3 (Fresh mint blue)
- Accent (Coral): #D98F7E (Warm coral pink)
- Accent (Mustard): #D9A86C (Muted mustard yellow)
- Accent (Sage): #9CAF88 (Natural sage green)

**Other Colors:**
- Secondary: #A8B5A5 (Soft gray-green)
- Text Dark: #2D3436 (Main text)
- Text Medium: #636E72 (Sub text)
- Text Light: #667475 (Auxiliary text)
- Background Light: #F8F9FA (Light background)
- Background Warm: #FAF7F5 (Warm background)
- Border Light: #E8EBE8 (Border lines)


= Theme Structure =

* Full Site Editing support with theme.json
* Templates for the front page, index, single posts, pages, archives, search results and 404
* Template parts (header, footer, side menus, profile card)
* Optimized CSS and JavaScript (no external libraries)
* Pure JavaScript implementation


== Installation ==

1. Go to "Appearance" → "Themes" in the admin panel
2. Click "Add New"
3. Enter "Mobiki" in the search form
4. Install
5. Click Activate
6. Go to 'Appearance' > 'About Mobiki' to open the Site Editor and find the support links


== Customization ==

All of the settings below are made in the Site Editor ('Appearance' > 'Editor').
Template parts are listed under 'Patterns' > 'All Template Parts'.

= Site Information =
1. Go to 'Settings' > 'General' in WordPress admin
2. Enter your 'Site Title' and 'Tagline'
3. These will automatically appear in the header

= Logo Setup =
1. Go to 'Appearance' > 'Editor' > 'Patterns' > 'All Template Parts' > 'header'
2. Select the Site Logo block and upload your logo image
3. Recommended size: 400×100px (transparent PNG recommended)

= Menu Setup =
1. Desktop side menu: open the 'side-menu' template part, then add, edit or remove the links in the Navigation block
2. Mobile footer navigation: open the 'mobile-nav' template part, then edit the links in the Custom HTML block
3. Save your changes

= Profile Card Customization =
1. Desktop: open the 'side-profile' template part
2. Mobile: open the 'mobile-profile' template part
3. Edit emoji, text, and status
4. Save your changes


= Social Buttons Customization =
1. Open the 'side-menu' template part
2. Update social button URLs
3. Remove unused social buttons as needed


= Color Theme Changes =
Go to 'Appearance' > 'Editor' > 'Styles' to change the colors or choose the Monochrome style variation.


== Frequently Asked Questions ==

= Is this theme free? =
Yes, it is free to use under the GPL v3 (or later) license.

= Can I use this theme for commercial purposes? =
Yes, you can freely use it for commercial websites.

= Can I use this theme on multiple sites? =
Yes, you can use it on unlimited sites.

= Do I need a child theme? =
As a block theme, many customizations can be done within the editor. A child theme is recommended only for extensive custom development.

== Supports ==

Free support is provided on the WordPress.org support forum: https://wordpress.org/support/theme/mobiki/
Paid customization is available at https://369theme.com/order
Paid email support is also available. For details, please contact 369Theme: https://369theme.com/contact?product=mobiki


== Screenshots ==

1. Desktop view with side menu and profile card


== Changelog ==

= 1.9 =
* Lowered the minimum PHP version to 7.4
* Added an About Mobiki page under Appearance with links to the Site Editor, reviews and support (support forum, paid customization, contact)
* readme.txt: Added a support section with the support forum, paid customization and contact links
* style.css / readme.txt: Updated the Theme URI to https://369theme.com/themes/mobiki
* readme.txt: The setup steps now point to the Site Editor instead of the Customizer, the Menus screen and a settings page that the theme does not have
* readme.txt: Corrected the license in the FAQ and the copyright notice to GPL v3 or later, matching style.css
* readme.txt: Corrected the supported WordPress version in the description to 6.6+
* readme.txt: Corrected the template list and the screenshot list to match the theme
* README.md / README.ja.md: Applied the same corrections and fixed the background video example, which used PHP inside a block template
* Accessibility: changed the label of the desktop profile card from "Mobile Profile Card" to "Profile Card"
* Desktop: the side menu and the profile card now share the same top edge below the site header, instead of being centred vertically. They no longer overlap the header or the admin bar on short screens, and scroll inside when the screen is too short
* Updated screenshot.png to show the new side menu and profile card position
* Regenerated mobiki.pot from the theme code. It had duplicate entries, strings the theme no longer uses, and was missing the strings used in attributes


= 1.8 =
* Added a Monochrome style variation
* The colour custom properties in main.css and editor-style.css now read the theme.json presets, so a style variation applies across the theme. The fallback values are the defaults, so the default look is unchanged
* Accessibility: darkened the link colour and the auxiliary text colour so both meet the WCAG AA contrast ratio of 4.5:1 on the page background
* Accessibility: the category badge used white text on a light background (2.09:1). Button and badge colours now come from dedicated palette entries, so the text stays readable in every style variation
* Added Theme URI to the style sheet header
* Added custom-logo, post-formats, style-variations, wide-blocks, three-columns, left-sidebar and right-sidebar to the tags, to match the layout and the features the theme already supports
* Corrected the License URI to https

= 1.7 =
* Compatible with WordPress 7.1
* Fixed the three column layout of the template previews in the Site Editor
* Editor styles are no longer enqueued on the admin screens
* Fixed invalid block markup in the profile pattern

= 1.6 =
* theme.json fixed
* patterns bug fixed

= 1.5 =
* Compatible with WordPress 7.0

= 1.4 =
* Side profile bug fixed
* Changed CSS

= 1.3 =
* Side profile changes
* Editor style adjustments

= 1.2 =
* README translation
* Screenshot changed

= 1.1 =
* Changes style and Patterns

= 1.0.1 =
* Changes style and page navigation

= 1.0.0 (2025-10-30) =
* Initial release
* Mobile-first design implementation
* Nordic color palette implementation
* Accessibility support
* Responsive design completed
* Desktop side menu and profile card added
* Smooth scroll animations implemented
* Full block editor support

== Upgrade Notice ==

= 1.9 =
Lowers the minimum PHP version to 7.4 and adds an About Mobiki page with support links.

= 1.8 =
Adds a Monochrome style variation and improves text contrast. The default look is otherwise unchanged.


== Resources ==

= Design =
* Nordic Design System - Inspired by Scandinavian design principles

= Fonts =
* System fonts used throughout the theme

= Icons =
* Emoji icons used for visual elements


== Technical Specifications ==

= WordPress Version Support =
* WordPress 6.6 or higher
* PHP 7.4 or higher

= Browser Support =
* Chrome (latest)
* Firefox (latest)
* Safari (latest)
* Edge (latest)
* Mobile browsers (iOS Safari, Chrome for Android)

== Troubleshooting ==

= Styles not displaying =
1. Clear browser cache
2. If using cache plugins, clear the cache

= Menu not displaying =
1. Open the 'side-menu' template part in 'Appearance' > 'Editor' and check that the Navigation block has links
2. If you edited the template part and want the original back, use 'Reset' in the template part's actions menu

= Mobile layout issues =
1. Clear browser cache
2. Verify viewport settings are correct
3. Confirm CSS files are loading properly

== Credits ==

Design: Nordic-inspired design system
Fonts: System fonts
Icons: Emoji

== Author ==

miroku
Website: https://profiles.wordpress.org/369work/

== Copyright ==

Mobiki WordPress Theme, Copyright 2025 369work
mobiki is distributed under the terms of the GNU GPL

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <https://www.gnu.org/licenses/>.

---

Thank you for choosing Mobiki! 🎉
