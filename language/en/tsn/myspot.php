<?php
/**
 * Created by thepizzy.net
 * User: @neotsn
 * Date: 1/11/2015
 * Time: 8:12 PM
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB')) {
	exit;
}

if (empty($lang) || !is_array($lang)) {
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Common
$lang = array_merge($lang, array(

	'BY'                    => 'By',

	'CONTINUE_READING'      => 'Continue Reading',

	'MYSPOT'                => 'My Spot',

	'SINCE_YOUR_LAST_VISIT' => 'Since you were last here...',
));