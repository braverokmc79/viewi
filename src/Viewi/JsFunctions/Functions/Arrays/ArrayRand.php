<?php

namespace Viewi\JsFunctions\Functions\Arrays;

use Viewi\JsFunctions\BaseFunctionConverter;
use Viewi\JsTranslator;

class ArrayRand extends BaseFunctionConverter
{
    public static string $name = 'array_rand';
    
    public static function convert(
        JsTranslator $translator,
        string $code,
        string $indentation
    ): string {
        $jsToInclue = __DIR__ . DIRECTORY_SEPARATOR . 'ArrayRand.js';
        $translator->includeJsFile(self::$name, $jsToInclue);
        return $code . '(';
    }
}
