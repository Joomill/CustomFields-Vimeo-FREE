<?php
/*
 *  package: Custom Fields - Vimeo plugin - FREE Version
 *  copyright: Copyright (c) 2025. Jeroen Moolenschot | Joomill
 *  license: GNU General Public License version 3 or later
 *  link: https://www.joomill-extensions.com
 */

// No direct access.
defined('_JEXEC') or die;

use Joomla\CMS\Factory;

//add stylesheet for responsive container
$document = Factory::getApplication()->getDocument();
$document->addStylesheet('plugins/fields/vimeo/tmpl/style.css');

$value = $field->value;
$width = $fieldParams->get('video_width', '100%');
$height = $fieldParams->get('video_height', '300px');

if ($value == '') {
    return;
}
echo '<iframe src="//player.vimeo.com/video/' . $value . '" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';