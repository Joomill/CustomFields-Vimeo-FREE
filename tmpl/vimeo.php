<?php
/**
 * Custom Fields - Vimeo plugin for Joomla
 *
 * @author Joomill (info@joomill-extensions.com)
 * @copyright Copyright (c) 2017 Joomill
 * @license GNU Public License
 * @link https://www.joomill-extensions.com/
 */

defined('_JEXEC') or die;

$value = $field->value;
$width = $fieldParams->get('video_width','100%');
$height = $fieldParams->get('video_height','300px');

if ($value == '')
{
	return;
}
echo '<iframe src="//player.vimeo.com/video/' . $value . '" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';