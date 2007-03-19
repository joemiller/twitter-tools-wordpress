=== Twitter Tools ===
Tags: twitter, tweet, integration, post, digest, notify, integrate, archive, widget
Contributors: alexkingorg
Requires at least: 2.1
Tested up to: 2.1.2
Stable tag: 1.0b2

Twitter Tools is a plugin that creates an integration between your WordPress blog and your Twitter account.

== Details ==

Twitter Tools integrates with Twitter by giving you the following functionality:

* Archive your Twitter tweets (downloaded every 30 minutes)
* Create a blog post from each of your tweets
* Create a daily archive of Twitter tweets
* Create a tweet on Twitter whenever you post in your blog, with a link to the blog post
* Post a tweet from your sidebar
* Post a tweet from the WP Admin screens
* Pass your tweets along to another service (via API hook)


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


== Hooks/API ==

Twitter Tools contains a hook that can be used to pass along your tweet data to another service (for example, some folks have wanted to be able to update their Facebook status). To use this hook, create a plugin and add an action to:

`aktt_add_tweet`

Your plugin function will receive an `aktt_tweet` object as the first parameter.

Example psuedo-code:

`function my_status_update($tweet) { // do something here }`
`add_action('aktt_add_tweet', 'my_status_update')`


== Known Issues ==

* Only one Twitter account is supported (not one account per author).
* Tweets are not deleted from the tweet table in your WordPress database when they are deleted from Twitter. To delete from your WordPress database, use a database admin tool like phpMyAdmin.
* The relative date function isn't fully localized.


== Frequently Asked Questions ==

= Anything else? =

That about does it - enjoy!

--Alex King

http://alexking.org/projects/wordpress
