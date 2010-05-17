<?php
/**
 * Loggix_Plugin - Reverse Title
 *
 * @copyright Copyright (C) UP!
 * @author    hijiri
 * @link      http://tkns.homelinux.net/
 * @license   http://www.opensource.org/licenses/bsd-license.php  New BSD License
 * @since     2010.04.28
 * @version   10.5.17
 */

$this->plugin->addFilter('title', 'reverseTitle');

function reverseTitle($text)
{
    $separator = Loggix_Core::LOGGIX_TITLE_SEPARATOR;
    $titles = explode($separator, $text);
    $text   = implode($separator, array_reverse($titles));

    return $text;
}

