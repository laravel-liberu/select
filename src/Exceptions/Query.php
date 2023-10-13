<?php

namespace LaravelLiberu\Select\Exceptions;

use LaravelLiberu\Helpers\Exceptions\EnsoException;

class Query extends EnsoException
{
    public static function unknownSearchMode()
    {
        return new static(__('Unknown search mode provided in request'));
    }
}
