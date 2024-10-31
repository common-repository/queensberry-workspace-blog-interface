=== Queensberry Workspace Blog Interface ===
Contributors: stephenbaugh
Donate link: http://stephenbaugh.com/donation.php
Tags: queensberry  workspace, slide shows, story boards, photographer, photography, photo hosting
Requires at least: 3.0.2
Tested up to: 3.5.2
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin allows content (Slideshows and Story Boards) hosted on Queensberry Workspace to be integrated into your blog.

== Description ==

This plugin allows content (Slideshows and Story Boards) hosted on Queensberry Workspace to be integrated into your blog. 

[Queensberry Workspace](http://workspace.queensberry.com)

By importing HTML on the fly from Workspace into a blog post the need for, and limitations of, iFrames is removed.

No configuration is required, and use is as simple as including a short code in your post like this [ws_gallery type='slideshow' eventid='x' id='a'] or [ws_gallery type='storyboard' eventid='x' id='a']

When using the Workspace "Blog It" feature these tags will be included automatically in the published post.

Your blog readers will then see a perfectly formatted slide show of all your images hosted in that Collection on Workspace.

Wordpress do not normally like plugins that call data from remote sites, so we need to be clear about how this works. Your images are hosted on Queensberry Workspace and this plugin talks to Workspace to request the HTML, CSS and Javascript needed to display your images in a slideshow or story board. This HTML etc is then embedded in your blog post as it is sent to your readers computer.

No code is executed on your blog other than to request the required information and no images are stored on your blog. There is no need to configure the plugin.

== Installation ==

1. Upload `plugin-name.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Place [ws_gallery type='slideshow' eventid='x' id='a'] or [ws_gallery type='storyboard' eventid='x' id='a'] with the event id and collection or storyboard id updated to the one you want to publish.

== Frequently asked questions ==

= Why can't I find an admin panel for this plugin =

There is nothing to configure other than the short codes included in the post

= Where can I get support =

The Queensberry [Support Page](http://www.queensberry.com/support/)

= Can I use this plugin with other photo hosting sites or slideshow creation software =

No, it is only for including your Workspace collections and storyboards in your blog.

= How does this work? =

Wordpress do not normally like plugins that call data from remote sites, so we need to be clear about how this works. Your images are hosted on Queensberry Workspace and this plugin talks to Workspace to request the HTML, CSS and Javascript needed to display your images in a slideshow or story board. This HTML etc is then embedded in your blog post as it is sent to your readers computer.

No code is executed on your blog other than to request the required information and no images are stored on your blog. There is no need to configure the plugin.

== Screenshots ==

1. This is [Queensberry Workspace](http://workspace.queensberry.com)
2. This is an example of how you setup your blog post
3. This is an example of a slide show displayed
4. This is an example of a story board displayed

== Changelog ==

= 1.0 =
This is version one

= 1.01 =

Changed URL from Development environment to live.

= 1.02 =

Updated readme.txt and screenshots. And removed redundant code. Now uses iframe when curl isn't installed.

== Upgrade notice ==

Nothing to upgrade