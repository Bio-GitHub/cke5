<?php
/**
 * @author mail[at]doerr-softwaredevelopment[dot]com Joachim Doerr
 * @package redaxo5
 * @license MIT
 */

namespace Cke5\Utils;


use rex;
use rex_i18n;

class Cke5Lang
{
    public static function getUserLang()
    {
        if (!empty(rex::getUser()->getLanguage())) {
            $lang = rex::getUser()->getLanguage();
        } else {
            $lang = rex_i18n::getLocale();
        }
        return strtolower(substr($lang, 0, 2));
    }
}