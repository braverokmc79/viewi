<?php

namespace Viewi\JsFunctions\Functions\Arrays;

use Viewi\JsFunctions\BaseFunctionConverter;
use Viewi\JsTranslator;

class Ksort extends BaseFunctionConverter
{
    public static string $name = 'ksort';
    
    public static function convert(
        JsTranslator $translator,
        string $code,
        string $indentation
    ): string {
        $jsToInclue = __DIR__ . DIRECTORY_SEPARATOR . 'Ksort.js';
        $translator->includeJsFile(self::$name, $jsToInclue);
        return $code . '(';
    }
}
