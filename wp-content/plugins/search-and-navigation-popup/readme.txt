=== Search and Navigation Popup ===
Tags:  serchbox popup, menubar popup, navigation popup, serchbox popup, full screen popup, popup on click, modal popup on click, full screen popup on click
Contributors: wponlinesupport, anoopranawat 
Requires at least: 4.0
Tested up to: 5.6
Stable tag: trunk
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Display a search box OR navigation  popup by clicking on a button.

== Description ==

Display a search box OR navigation  popup by clicking on a button.

View [DEMO](https://demo.wponlinesupport.com/search-and-navigation-popup-demo/) for more details.

= Plugin contains 2 shortcode =

* <code><?php echo do_shortcode('[menu-popup]'); ?></code>
* <code><?php echo do_shortcode('[serach-popup]'); ?></code>

This plugin also register a menu location in your theme ie "Popup Menu". If you want to display a menu in a popup, select this menu location.

= Parameters are =

* **popup_effect** : popup_effect="fadein" ( values are : slide, fadein, blur, makeway, push)
* **speedin** : speedin="300" 
* **speedout** : speedout="300"
* **delay** : delay="300"
* **enable_loader** : enable_loader="true" OR enable_loader="false"

= Features =
* Set custom animation effects (Fadein, Slide, Fall, Flip, Blur, Rotate etc)
* Full screen popup
* Responsive popup
* On click popup


== Installation ==

1. Upload the 'search-and-navigation-popup' folder to the '/wp-content/plugins/' directory.
2. Activate the "search-and-navigation-popup" list plugin through the 'Plugins' menu in WordPress.

== Screenshots ==

1. Navigation Popup 
2. Search Popup

== Changelog ==

= 1.1 (06-01-2020) =

* [*] Due to Uncaught Error: only one instance of babel-polyfill is allowed reporetd by some users we have added jquery- prefix with custombox.legacy.min.js and custombox.min.js to avoid the conflict with custombox jQuery library already Registred in a theme or in any third-party plugin.
* [*] Renamed : We have Renamed sanpop-popup.min.js file to custombox.min.js.
* [*] Important Note : Please clear your website cache (if you are using) after updating the plugin.

= 1.0.3 (06-01-2020) =
* Fixed custombox.legacy issue.

= 1.0.2 (12-12-2019) =
* Fixed serach input issue in safari browser.

= 1.0.1 (29-7-2019) =
* Fixed the text-domain issue.

= 1.0 =
* Initial release.

== Upgrade Notice ==

= 1.0.2 (12-12-2019) =
* Fixed serach input issue in safari browser.

= 1.0.1 (29-7-2019) =
* Fixed the text-domain issue.

= 1.0 =
* Initial release.