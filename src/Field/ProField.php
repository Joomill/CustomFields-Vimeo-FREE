<?php
/*
 *  package: Custom Fields - Vimeo plugin - FREE Version
 *  copyright: Copyright (c) 2025. Jeroen Moolenschot | Joomill
 *  license: GNU General Public License version 3 or later
 *  link: https://www.joomill-extensions.com
 */

namespace Joomill\Plugin\Fields\Vimeo\Field;

// No direct access.
defined('_JEXEC') or die;

use Joomla\CMS\Form\FormField;
use Joomla\CMS\Language\Text;

class ProField extends FormField
{
    protected $type = 'pro';

    protected function getInput()
    {
        $text = Text::_('PLG_FIELDS_VIMEO_PRO_ONLY');

        return
            '<code>' . $text . '</code>';
    }
}