<?php

namespace Viewi\JsFunctions\Functions\Info;

use Viewi\JsFunctions\BaseFunctionConverter;
use Viewi\JsTranslator;

class IniGet extends BaseFunctionConverter
{
    public static string $name = 'ini_get';
    
    public static function convert(
        JsTranslator $translator,
        string $code,
        string $indentation
    ): string {
        $jsToInclue = __DIR__ . DIRECTORY_SEPARATOR . 'IniGet.js';
        $translator->includeJsFile(self::$name, $jsToInclue);
        return $code . '(';
    }
}
