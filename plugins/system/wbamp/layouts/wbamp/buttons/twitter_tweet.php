<?php
/**
 * wbAMP - Accelerated Mobile Pages for Joomla!
 *
 * @author      Yannick Gaultier
 * @copyright   (c) Yannick Gaultier - Weeblr llc - 2016
 * @package     wbAmp
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version     1.5.0.585
 * @date        2016-08-25
 */

// no direct access
defined('_JEXEC') or die;

$href = 'https://twitter.com/share?url=' . (empty($displayData['shURL']) ? $displayData['canonical'] : $displayData['shURL']) . '&text=' . urlencode($displayData['metadata']['title']);
if (!empty($displayData['tweet_via']))
{
	$href .= '&via=' . $displayData['tweet_via'];
}
?>


<li class="">
	<a class="wbamp-social-buttons"
	   id="wbamp-button_twitter_tweet_share_1"
	   href="<?php echo htmlspecialchars($href); ?>"
	   title="Tweet">
<span class="wbamp-social-icon wbamp-twitter">
<svg width="32" height="32" viewBox="-2 -2 32 32">
	<path
		d="M21.3 10.5v.5c0 4.7-3.5 10.1-9.9 10.1-2 0-3.8-.6-5.3-1.6.3 0 .6.1.8.1 1.6 0 3.1-.6 4.3-1.5-1.5 0-2.8-1-3.3-2.4.2 0 .4.1.7.1l.9-.1c-1.6-.3-2.8-1.8-2.8-3.5.5.3 1 .4 1.6.4-.9-.6-1.6-1.7-1.6-2.9 0-.6.2-1.3.5-1.8 1.7 2.1 4.3 3.6 7.2 3.7-.1-.3-.1-.5-.1-.8 0-2 1.6-3.5 3.5-3.5 1 0 1.9.4 2.5 1.1.8-.1 1.5-.4 2.2-.8-.3.8-.8 1.5-1.5 1.9.7-.1 1.4-.3 2-.5-.4.4-1 1-1.7 1.5z"/>
</svg>
</span>
	</a>
</li>
