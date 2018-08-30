<?php namespace HashOver;

// Copyright (C) 2010-2018 Jacob Barkdull
// This file is part of HashOver.
//
// HashOver is free software: you can redistribute it and/or modify
// it under the terms of the GNU Affero General Public License as
// published by the Free Software Foundation, either version 3 of the
// License, or (at your option) any later version.
//
// HashOver is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU Affero General Public License for more details.
//
// You should have received a copy of the GNU Affero General Public License
// along with HashOver.  If not, see <http://www.gnu.org/licenses/>.
//
//--------------------
//
// IMPORTANT NOTICE:
//
// Do not edit this file unless you know what you are doing. Instead,
// please use the HashOver administration panel to graphically adjust
// the settings, or create/edit the settings JSON file.


// General settings safe to expose to the frontend
class SafeSettings
{
	// Primary settings
	public $language		= 'auto';			// UI language, for example 'en', 'de', etc. 'auto' to use system locale
	public $theme			= 'default';			// Comment Cascading Style Sheet (CSS)
	public $allowsImages		= true;				// Whether external image URLs wrapped in [img] tags are embedded
	public $allowsLikes		= true;				// Whether a "Like" link is displayed
	public $allowsDislikes		= false;			// Whether a "Dislike" link is displayed; allowing Reddit-style voting
	public $usesAjax		= true;				// Whether AJAX is used for posting, editing, and loading comments
	public $collapsesInterface	= false;			// Whether the comment form, thread, and end links are all initially hidden
	public $defaultSorting		= 'ascending';			// Default way comments are sorted
	public $collapsesComments	= true;				// Whether to hide comments and display a link to show them
	public $collapseLimit		= 3;				// Number of comments that aren't hidden
	public $replyMode		= 'thread';			// Whether to display replies as a 'thread' or as a 'stream'
	public $streamDepth		= 3;				// In stream mode, the number of reply indentions to allow before the thread flattens
	public $popularityThreshold	= 5;				// Minimum likes a comment needs to be popular
	public $popularityLimit		= 2;				// Number of comments allowed to become popular
	public $usesMarkdown		= true;				// Whether comments will be parsed for Markdown

	// Date and Time settings
	public $serverTimezone		= 'America/Los_Angeles';	// Server timezone
	public $usesUserTimezone	= true;				// Whether comment dates should use the user's timezone (JavaScript-mode)
	public $usesShortDates		= true;				// Whether comment dates are shortened, for example "X days ago"
	public $timeFormat		= 'g:ia';			// Time format, use 'H:i' for 24-hour format (see: http://php.net/manual/en/function.date.php)
	public $dateFormat		= 'm/d/Y';			// Date format (see: http://php.net/manual/en/function.date.php)

	// Field options, use true/false to enable/disable a field,
	// use 'required' to require a field be properly filled
	public $fieldOptions = array (
		'name'     => true,
		'password' => true,
		'email'    => true,
		'website'  => true
	);

	// Behavior settings
	public $displaysTitle		= true;				// Whether page title is shown or not
	public $formPosition		= 'top';			// Position for primary form; options: 'top' or 'bottom'
	public $showsReplyCount		= true;				// Whether to show reply count separately from total
	public $countIncludesDeleted	= true;				// Whether comment counts should include deleted comments
	public $iconMode		= 'image';			// How to display avatar icons (either 'image', 'count' or 'none')
	public $iconSize		= 45;				// Size of Gravatar icons in pixels
	public $imageFormat		= 'png';			// Format for icons and other images (use 'svg' for HDPI)
	public $usesLabels		= false;			// Whether to display labels above inputs
	public $usesCancelButtons	= true;				// Whether forms have "Cancel" buttons
	public $appendsCss		= true;				// Whether to automatically add a CSS <link> element to the page <head>
	public $appendsRss		= true;				// Whether a comment RSS feed link is displayed

	// Technical settings
	public $subscribesUser		= true;				// Whether to subscribe the user to e-mail notifications by default
	public $allowsUserReplies	= false;			// Whether given e-mails are sent as reply-to address to users
	public $gravatarDefault		= 'custom';			// Gravatar theme to use ('custom', 'identicon', 'monsterid', 'wavatar', or 'retro')
	public $gravatarForce		= false;			// Whether to force the themed Gravatar images instead of an avatar image
	public $minifiesJavascript	= false;			// Whether JavaScript output should be minified
	public $minifyLevel		= 4;				// How much to minify JavaScript code, options: 1, 2, 3, 4
}
