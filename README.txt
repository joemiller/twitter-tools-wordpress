=== Twitter Tools ===
Tags: twitter, tweet, integration, post, digest, notify, integrate, archive, widget
Contributors: alexkingorg
Requires at least: 2.1
Tested up to: 2.1.2
Stable tag: 1.0b1

Twitter Tools is a plugin that creates an integration between your WordPress blog and your Twitter account.

== Details ==

Twitter Tools integrates with Twitter by giving you the following functionality:

* Archive your Twitter tweets (downloaded every hour)
* Create a blog post from each of your tweets
* Create a daily archive of Twitter tweets
* Create a tweet on Twitter whenever you post in your blog, with a link to the blog post
* Post a tweet from your sidebar
* Post a tweet from the WP Admin screens


== Installation ==

1. Download the plugin archive and expand it (you've likely already done this).
2. Put the 'twitter-tools.php' file into your wp-content/plugins/ directory.
3. Go to the Plugins page in your WordPress Administration area and click 'Activate' for Twitter Tools.
4. Go to the Twitter Tools Options page (Options > Twitter Tools) to set your Twitter account information and preferences.


== Configuration ==

There are a number of configuration options for Twitter Tools. You can find these in Options > Twitter Tools.

Twitter Tools tries to automagically figure out your Twitter ID from your Twitter Username. If that doesn't work, you can add it manually. To find your ID, go to your Twitter home page ( http://twitter.com/username ) and copy your RSS Feed url (link in the bottom right of your tweet list). For example, if your RSS URL is:

http://twitter.com/statuses/user_timeline/101143.rss

Your Twitter ID is: 101143


== Showing Your Tweets ==

= Widget Friendly =

If you are using widgets, you can drag Twitter Tools to your sidebar to display your latest tweets.


= Template Tags =

If you are not using widgest, you can use a template tag to add your latest tweets to your sidebar.

`<?php aktt_sidebar_tweets(); ?>`


== Known Issues ==

* Only one Twitter account is supported (not one account per author).
* PHP's fopen functionality must be enabled to download tweets from Twitter.
* The relative date function isn't fully localized.


== Frequently Asked Questions ==

= Anything else? =

That about does it - enjoy!

--Alex King

http://alexking.org/projects/wordpress
