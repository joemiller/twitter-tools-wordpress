=== Twitter Tools ===
Tags: twitter, tweet, integration, post, digest, notify, integrate, archive, widget
Contributors: alexkingorg
Requires at least: 2.1
Tested up to: 2.1.2
Stable tag: 1.0

Twitter Tools is a plugin that creates an integration between your WordPress blog and your Twitter account.

== Details ==

Twitter Tools integrates with Twitter by giving you the following functionality:

* Archive your Twitter tweets (downloaded every hour)
* Create a blog post from each of your tweets
* Create a tweet whenever you post in your blog, with a link to the blog post
* Post a tweet from your sidebar
* Post a tweet from the WP Admin screens


== Installation ==

1. Download the plugin archive and expand it (you've likely already done this).
2. Put the 'twitter-tools.php' file into your wp-content/plugins/ directory.
3. Go to the Plugins page in your WordPress Administration area and click 'Activate' for Twitter Tools.
4. Go to the Twitter Tools Options page (Options > Twitter Tools) to set your Twitter account information and preferences.


== Configuration ==

* * * * * * Options description here


== Showing Your Tweets ==

= Widget Friendly =

If you are using widgets, you can drag Twitter Tools to your sidebar to display your latest tweets.


= Template Tags =

If you are not using widgest, you can use a template tag to add your latest tweets to your sidebar.

`<?php aktt_sidebar_tweets(); ?>`


== Known Issues ==

Only one Twitter account is supported (not one account per author).

PHP's fopen functionality must be enabled to download tweets from Twitter.


== Frequently Asked Questions ==

= Anything else? =

That about does it - enjoy!

--Alex King

http://alexking.org/projects/wordpress
