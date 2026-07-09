=== Shiptastic integration for UPS ===
Contributors: vendidero, vdwoocommercesupport
Tags: shipping, UPS, shiptastic, woocommerce
Requires at least: 5.4
Tested up to: 7.0
Stable tag: 1.2.0
Requires PHP: 7.0
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Connect Shiptastic to the UPS® API and create UPS labels to shipments and returns.

== Description ==

This plugin registers UPS® as a shipping service provider for [Shiptastic](http://wordpress.org/plugins/shiptastic-for-woocommerce). Navigate to
WooCommerce > Settings > Shiptastic > Shipping Service Providers > UPS and connect your store to the UPS API. After that, you may conveniently create
UPS labels to your shipments right from within your admin panel and allow your customers to choose UPS Access Point™ delivery from within your checkout.

== Frequently Asked Questions ==

= Where do I report security bugs found in this plugin? =
Please report security bugs found in the source code of the Shiptastic Integration for UPS plugin through the [Patchstack Vulnerability Disclosure Program](https://patchstack.com/database/vdp/bd96dfc3-1bae-4a0a-8596-1ced3ae0ab20). The Patchstack team will assist you with verification, CVE assignment, and notify the developers of this plugin.

== Installation ==

= Minimal Requirements =

* WordPress 4.9 or newer
* WooCommerce 3.9 (newest version recommended)
* Shiptastic for WooCommerce
* PHP Version 7.0 or newer

== Changelog ==
= 1.2.0 =
* Improvement: Remove de_DE locale from default tracking link
* Improvement: Set the NegotiatedRatesIndicator by default
* Improvement: Remove custom incoterms select as it has been moved to core

= 1.1.0 =
* New: Support remote shipment tracking

= 1.0.1 =
* Fix: Custom notification email
* Improvement: Pass 0 in case of missing phone number for international shipments

= 1.0.0 =
* Initial version release