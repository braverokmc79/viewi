<?php

namespace Viewi\JsFunctions\Functions\Vars;

use Viewi\JsFunctions\BaseFunctionConverter;
use Viewi\JsTranslator;

class Floatval extends BaseFunctionConverter
{
    public static string $name = 'floatval';
    
    public static function convert(
        JsTranslator $translator,
        string $code,
        string $indentation
    ): string {
        $jsToInclue = __DIR__ . DIRECTORY_SEPARATOR . 'Floatval.js';
        $translator->includeJsFile(self::$name, $jsToInclue);
        return $code . '(';
    }
}
