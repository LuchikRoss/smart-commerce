== Think Up Themes ==

- By Think Up Themes, http://www.thinkupthemes.com/

Requires at least:	4.0.0
Tested up to:		4.7.2

Consulting is the free version of the multi-purpose professional theme (Consulting Pro) ideal for a business or blog website. The theme has a responsive layout, HD retina ready and comes with a powerful theme options panel with can be used to make awesome changes without touching any code. The theme also comes with a full width easy to use slider. Easily add a logo to your site and create a beautiful homepage using the built-in homepage layout.

-----------------------------------------------------------------------------
	Support
-----------------------------------------------------------------------------

- For support for Consulting (free) please post a support ticket over at the https://wordpress.org/support/theme/consulting.

-----------------------------------------------------------------------------
	Frequently Asked Questions
-----------------------------------------------------------------------------

- None Yet


-----------------------------------------------------------------------------
	Limitations
-----------------------------------------------------------------------------

- RTL support is yet to be added. This is planned for inclusion in v1.1.0


-----------------------------------------------------------------------------
	Copyright, Sources, Credits & Licenses
-----------------------------------------------------------------------------

Consulting WordPress Theme, Copyright 2017 Think Up Themes Ltd
Consulting is distributed under the terms of the GNU GPL

The following opensource projects, graphics, fonts, API's or other files as listed have been used in developing this theme. Thanks to the author for the creative work they made. All creative works are licensed as being GPL or GPL compatible.

    [1.01] Item:        Underscores (_s) starter theme - Copyright: Automattic, automattic.com
           Item URL:    http://underscores.me/
           Licence:     Licensed under GPLv2 or later
           Licence URL: http://www.gnu.org/licenses/gpl.html

    [1.02] Item:        Redux Framework
           Item URL:    https://github.com/ReduxFramework/ReduxFramework
           Licence:     GPLv3
           Licence URL: http://www.gnu.org/licenses/gpl.html

    [1.03] Item:        PrettyPhoto
           Item URL:    http://www.no-margin-for-errors.com/projects/prettyphoto-jquery-lightbox-clone/
           Licence:     GPLv2
           Licence URL: http://www.gnu.org/licenses/gpl-2.0.html

    [1.04] Item:        ImagesLoaded
           Item URL:    https://github.com/desandro/imagesloaded
           Licence:     MIT
           Licence URL: http://opensource.org/licenses/mit-license.html

    [1.05] Item:        Sticky
           Item URL:    https://github.com/garand/sticky
           Licence:     MIT
           Licence URL: http://opensource.org/licenses/mit-license.html

    [1.06] Item:        Waypoints
           Item URL:    https://github.com/imakewebthings/jquery-waypoints
           Licence:     MIT
           Licence URL: http://opensource.org/licenses/mit-license.html

    [1.07] Item:        ResponsiveSlides
           Item URL:    https://github.com/viljamis/ResponsiveSlides.js
           Licence:     MIT
           Licence URL: http://opensource.org/licenses/mit-license.html

    [1.08] Item:        ScrollUp
           Item URL:    https://github.com/markgoodyear/scrollup
           Licence:     MIT
           Licence URL: http://opensource.org/licenses/mit-license.html

    [1.09] Item:        Modernizr
           Item URL:    https://github.com/Modernizr/Modernizr
           Licence:     MIT
           Licence URL: http://opensource.org/licenses/mit-license.html

    [1.10] Item:        Font Awesome
           Item URL:    http://fortawesome.github.io/Font-Awesome/#license
           Licence:     SIL Open Font &  MIT
           Licence OFL: http://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL
           Licence MIT: http://opensource.org/licenses/mit-license.html

    [1.11] Item:        Twitter Bootstrap (including images)
           Item URL:    https://github.com/twitter/bootstrap/wiki/License
           Licence:     Apache 2.0
           Licence URL: http://www.apache.org/licenses/LICENSE-2.0

    [1.12] Item:        transparent.png, slide_demo1.png, slide_demo2.png, slide_demo3.png
           Item URL:    /images
           Licence:     CC0
           Licence URL: These items have been produced specifically for Consulting and are owned by Think Up Themes. Released under CC0.

-----------------------------------------------------------------------------
	Changelog
-----------------------------------------------------------------------------

Version 1.1.2
- Updated: Support added for EDD to ensure purchase buttons display correctly on downloads page.

Version 1.1.1
- fixed:   Page intro migration script fixed.
- Updated: Floating header now only applies when slider full or page intro style 2 is used.

Version 1.1.0
- New:     Page intro style option added.
- Updated: Responsive style improved to ensure compatibility with new intro styles.
- Updated: Page intro now displays as a traditional layout as apposed to the modern layout. Users can switch between the designs using theme options.

Version 1.0.9
- Fixed:   jQuery for video responsive sizes updated to prevent issues when video sliders are used.

Version 1.0.8
- Updated: Customizer theme option styling updated.

Version 1.0.7
- Fixed:   Page intro height fixed to display correctly (max 200px) when floating header not set.

Version 1.0.6
- Fixed:   Documentation display fixed to ensure compatibilty with WordPress v4.8.
- Updated: Homepage (Featured) section customizer options display regardless of if switch is on or off.

Version 1.0.5
- New:     Option to enable floating header added to theme options section in Customizer.
- Fixed:   the_title_attribute() In function the_title_attribute() the changed back to In function the_title_attribute() to correct display issue.
- Fixed:   the_title_attribute() In function the_title_attribute() the changed back to In function consulting_thinkup_input_blogdate() to correct display issue.
- Updated: Full width slider displays as default. Previously boxed slider was default.

Version 1.0.4
- Updated: Improved escaping in various sections of 05.blog.php.
- Updated: WP_Query in template-sitemap.php ended with wp_reset_postdata().
- Updated: Link to //www.wordpress.org/ in 04.footer.php made translation ready.
- Updated: Instances of esc_attr( get_the_title() ) replaced with the_title_attribute() in 05.blog.php.

Version 1.0.3
- New:     Page slider migrated to be easy to use image slider.
- Fixed:   Placeholder added to singular comment variation in comments.php.
- Updated: Image sizes prefixed with "consulting-thinkup-".
- Updated: All custom image size names are translation ready.
- Updated: style-shortcodes.css updated to be consistent with all themes.
- Updated: wp_link_pages() added following the_content() in all relevant php files.
- Updated: Comment global variable removed from consulting_thinkup_input_commenttemplate as core globals should not be overwritten.

Version 1.0.2
- Fixed:   Non translatable strings now translation ready.
- Fixed:   "excerpt_more" filter updated in line with default WordPress 2017 theme.
- Updated: All instances of "..." changed to "&hellip;".
- Updated: echo removed from get_search_form() in 404.php.
- Updated: Custom header now supports "flex-height" feature.
- Updated: Anchor for "scrollup" changed to "jquery-scrollup".
- Updated: Escaping removed from header_image() in header.php.
- Updated: Image names output to user end are now translation ready.
- Updated: echo removed from consulting_thinkup_input_stylelayout() in archive.php.
- Updated: wp_link_pages() added following the_content() in content-single.php.
- Updated: Anchors for stylesheets / scripts changed to "consulting-thinkup-" from "thinkup-".
- Updated: wp_link_pages() added following the_content() in content.php and content-page.php.
- Updated: readme file updated to include image url of the background image used in screenshot.png.
- Updated: consulting_thinkup_customizer_select_array_sidebar() now checks for footer sidebars by id instead of name.
- Updated: Prefix changed from "thinkup_" to "consulting_thinkup_" where required. (e.g. functions, classes, globals, image sizes, etc...)
- Removed: "editor-style" tag removed from style.css.
- Removed: "featured-image-header" tag removed from style.css.
- Removed: Function thinkup_check_ishome() no longer required, as related issue is now fixed in core.

Version 1.0.1
- Updated: Redux framework removed and replaced with native WordPress customizer.

Version 1.0.0
- Initial release.